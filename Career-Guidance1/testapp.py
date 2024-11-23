from flask import Flask, render_template, request
import pickle
import numpy as np

app = Flask(__name__)

# Load the model once (optional)
def load_model():
    return pickle.load(open("C://xampp//htdocs//Career-Guidance//Career-Guidance1//careerlast.pkl", 'rb'))

@app.route('/')
def career():
    return render_template("hometest.html")

@app.route('/predict', methods=['POST'])
def result():
    if request.method == 'POST':
        try:
            result = request.form
            print("Form data:", result)  # Debug: Check raw form data

            # Convert form values to a numeric array
            res = result.to_dict(flat=True)
            
            # Ensure all values are converted to float
            arr = []
            for value in res.values():
                try:
                    arr.append(float(value))  # Convert each value to a float
                except ValueError:
                    raise ValueError(f"Invalid input detected: {value}. Please enter valid numeric values.")
            
            data = np.array(arr).reshape(1, -1)
            print("Processed data for model:", data)  # Debug: Check processed data

            # Load the model
            loaded_model = load_model()

            # Make predictions
            predictions = loaded_model.predict(data)
            print("Predictions:", predictions)

            # Get prediction probabilities
            pred = loaded_model.predict_proba(data)
            print("Prediction probabilities:", pred)

            # Apply threshold to probabilities
            pred = pred > 0.05
            res = {}
            final_res = {}
            index = 0
            j = 0

            # Filter relevant predictions based on probability threshold
            while j < 17:
                if pred[0, j]:
                    res[index] = j
                    index += 1
                j += 1

            # Filter out the primary prediction
            index = 0
            for key, values in res.items():
                if values != predictions[0]:
                    final_res[index] = values
                    print('final_res[index]:', final_res[index])  # Debug: Check final results
                    index += 1

            # Job dictionary for mapping indices to job titles
            jobs_dict = {
                0: 'AI ML Specialist',
                1: 'API Integration Specialist',
                2: 'Application Support Engineer',
                3: 'Business Analyst',
                4: 'Customer Service Executive',
                5: 'Cyber Security Specialist',
                6: 'Data Scientist',
                7: 'Database Administrator',
                8: 'Graphics Designer',
                9: 'Hardware Engineer',
                10: 'Helpdesk Engineer',
                11: 'Information Security Specialist',
                12: 'Networking Engineer',
                13: 'Project Manager',
                14: 'Software Developer',
                15: 'Software Tester',
                16: 'Technical Writer'
            }

            # Reverse job dictionary for handling job names as predictions
            reverse_jobs_dict = {v: k for k, v in jobs_dict.items()}

            # Check if predictions are indices or names
            job_primary = predictions[0]  # This can be either index or job name
            if isinstance(job_primary, str):  # If it's a job name
                job_primary = reverse_jobs_dict.get(job_primary, -1)
            
            if job_primary == -1:
                job_primary = "None"  # Fallback if the job is not found

            job_title = jobs_dict.get(job_primary, "None")  # Get the job title from the dict

            # Check if job_title is valid, if not set a fallback message
            if job_title == "None":
                job_title = "We couldn't find a suitable job based on your skills."

            return render_template(
                "testafter.html",
                final_res=final_res,
                job_dict=jobs_dict,
                job0=job_title  # Pass the job title to the template
            )
        except Exception as e:
            print(f"Error: {e}")  # Log the error
            return render_template("error.html", error_message=str(e))

if __name__ == '__main__':
    app.run(debug=True)

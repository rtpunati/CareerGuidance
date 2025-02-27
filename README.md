### **Project Overview:**

This project aims to assist students in exploring suitable career options based on their skills and interests while optimizing the campus placement process through a centralized management system. The technology stack includes HTML, CSS, JavaScript for the frontend, PHP and Python for the backend, and SQL for the database. A key component of the project is the Machine Learning-powered Career Guidance Module, which uses Python to recommend personalized career paths based on student inputs such as skills, interests, and academic performance. This recommendation engine is integrated seamlessly into the student portal, allowing real-time interactions through a dynamic web interface. Students can input their preferences and immediately receive career recommendations, enabling a smooth flow of data and user interaction.

### **Purpose and Features of the Dataset Generation Script (generate.py):**

The `generate.py` script generates a dataset containing 20,000 user records, each associated with a random job role and skill ratings tailored to that role. The dataset includes 10 predefined job roles and 17 skills, with each job role having specific skill requirements and irrelevant skills marked as "Not Interested." The skill ratings are represented both categorically (e.g., `Not Interested`, `Poor`, `Beginner`) and numerically (0–6), which supports both user-friendly display and numerical analysis. The script customizes the skill ratings based on the job role, ensuring that skills irrelevant to the role are downgraded. The output is a CSV file (`career_data_20000.csv`) containing 20,000 records, each with a job role and numeric skill ratings, making the dataset suitable for machine learning model training and skill gap analysis.

### **Applications of the Generated Dataset:**

The generated dataset can be used in several ways. The Career Guidance System can recommend suitable career paths based on a student's skill profile and identify potential skill gaps for a target job role. Additionally, the dataset can be utilized for training machine learning models to predict ideal job roles for users based on their skill profiles and group users for personalized recommendations. The dataset also provides insights into skill patterns across various roles, helping in the design of tailored learning paths for users.

### **Random Forest Classifier Model (testmodel.py):**

The `testmodel.py` script is designed to train and evaluate a Random Forest Classifier for career guidance predictions. The key steps in the process include loading the dataset, preprocessing the data by handling missing values, encoding categorical columns, and scaling the features. The data is then split into training and testing sets, with SMOTE applied to address class imbalance in the training data. Hyperparameter tuning is performed using `GridSearchCV`, and the model is evaluated using metrics such as accuracy, precision, recall, F1-score, and a confusion matrix. The model is persisted using `pickle` for future use. Recommendations for improvements include adding logging and error handling, validating dataset integrity, expanding the grid search for hyperparameter optimization, and extracting feature importance for model interpretability.

### **Challenges and Recommendations:**

The model achieves high accuracy (91.85%), but the class imbalance presents a challenge, as most predictions are concentrated in the majority class. Some classes, like `Graphics Designing`, have poor performance with undefined precision and recall. SMOTE's effectiveness is limited in cases of extreme imbalance. To improve, it is recommended to combine SMOTE with undersampling techniques and use class weights in the Random Forest Classifier. Experimenting with classifiers like `XGBoost` or `LightGBM`, which handle imbalanced data better, is also suggested. Additional metrics like ROC-AUC should be considered for better evaluation, and the class distribution should be analyzed to ensure all classes have sufficient samples for training.

### **Flask Application for Career Guidance (testapp.py):**

The `testapp.py` script is a Flask application that serves as the frontend for career guidance predictions. The app has two main routes: `/` renders the homepage where users input their data, and `/predict` processes the input, makes predictions using the trained model, and displays the results. The model is loaded dynamically during prediction, but it is recommended to load the model once during app initialization for efficiency. Input validation is performed to ensure that the inputs are numeric, and the prediction logic is handled by mapping the model’s output to job titles. Error handling is in place to manage invalid inputs. Improvements can be made in input validation by incorporating client-side checks, using a configurable probability threshold for recommendations, and providing more specific error messages for users. Additionally, logging should be incorporated for better tracking of errors, and the prediction logic could be refactored into helper functions for better readability.

### **Overall System Structure:**

The Career Guidance and Placement Management System integrates both career guidance and placement management functionalities into a unified platform. This system helps streamline the campus placement process while providing students with personalized career recommendations based on their skills and aspirations. The system also supports role-based access control, allowing admins, students, and department heads to manage placement activities. Key features include real-time updates of student performance, centralized management of placement data, and simplified job application processes. By combining machine learning, dynamic web interfaces, and role-based access, this system enhances career exploration and placement efficiency for students.

### **Main Points:**

1. **Career Guidance System:**
   - Utilizes machine learning (Python-based) to recommend personalized career paths based on student skills, interests, and academic performance.
   - Offers a dynamic web interface for real-time interaction, enabling students to input data and receive career recommendations instantly.

2. **Dataset Generation (generate.py):**
   - Generates a dataset with 20,000 records, including 10 job roles and 17 skills.
   - Each record includes relevant skills for a job role with ratings in categories (e.g., `Not Interested`, `Poor`, `Beginner`) and numerically (0–6).
   - Suitable for machine learning model training and skill gap analysis.

3. **Random Forest Classifier (testmodel.py):**
   - The classifier model achieves **91.85% accuracy** for predicting job roles based on student skill profiles.
   - Challenges with **class imbalance** lead to low performance in certain job categories (e.g., `Graphics Designing`).
   - **SMOTE** (Synthetic Minority Over-sampling Technique) was applied to balance classes.

4. **Flask Application (testapp.py):**
   - Provides a user-friendly interface where students input data to receive career predictions.
   - **Model efficiency** can be improved by loading the model once at app startup, instead of on every prediction.

5. **System Integration:**
   - Integrates career guidance and placement management into one platform, offering **role-based access** for various users (admins, students, HODs).
   - Helps streamline the campus placement process by managing student performance and job applications centrally.

### **Conclusion:**
The system successfully integrates career guidance with campus placement management, offering personalized job recommendations based on student skills. The machine learning model shows promising accuracy but requires further refinement to handle class imbalance and improve performance in minority job categories.


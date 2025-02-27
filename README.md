# Career Guidance and Placement Management System

## Project Overview

This project aims to assist students in exploring suitable career options based on their skills and interests while optimizing the campus placement process through a centralized management system. The technology stack includes HTML, CSS, JavaScript for the frontend, PHP and Python for the backend, and SQL for the database. A key component of the project is the **Machine Learning-powered Career Guidance Module**, which uses Python to recommend personalized career paths based on student inputs such as skills, interests, and academic performance. This recommendation engine is integrated seamlessly into the student portal, allowing real-time interactions through a dynamic web interface. Students can input their preferences and immediately receive career recommendations, enabling a smooth flow of data and user interaction.

## Purpose and Features of the Dataset Generation Script (`generate.py`)

The `generate.py` script generates a dataset containing 20,000 user records, each associated with a random job role and skill ratings tailored to that role. The dataset includes 10 predefined job roles and 17 skills, with each job role having specific skill requirements and irrelevant skills marked as "Not Interested." The skill ratings are represented both categorically (e.g., `Not Interested`, `Poor`, `Beginner`) and numerically (0–6), which supports both user-friendly display and numerical analysis. The script customizes the skill ratings based on the job role, ensuring that skills irrelevant to the role are downgraded. The output is a CSV file (`career_data_20000.csv`) containing 20,000 records, each with a job role and numeric skill ratings, making the dataset suitable for machine learning model training and skill gap analysis.

### Applications of the Generated Dataset:
- **Career Guidance System**: Recommend suitable career paths based on a student's skill profile and identify potential skill gaps for a target job role.
- **Training Machine Learning Models**: Predict ideal job roles for users based on their skill profiles.
- **Skill Gap Analysis**: Identify and address skill gaps for different job roles.
- **Tailored Learning Paths**: Design custom learning paths for users based on skill patterns across job roles.

## Random Forest Classifier Model (`testmodel.py`)

The `testmodel.py` script is designed to train and evaluate a **Random Forest Classifier** for career guidance predictions. The key steps in the process include:
1. Loading the dataset.
2. Preprocessing the data by handling missing values, encoding categorical columns, and scaling the features.
3. Splitting the data into training and testing sets.
4. Applying **SMOTE** (Synthetic Minority Over-sampling Technique) to address class imbalance in the training data.
5. Hyperparameter tuning using `GridSearchCV`.
6. Evaluating the model using metrics such as **accuracy**, **precision**, **recall**, **F1-score**, and a **confusion matrix**.
7. Persisting the trained model using **pickle** for future use.

### Model Performance:
- **Accuracy**: 91.85%.
- **Challenges**: Class imbalance affects the performance, with some classes like **Graphics Designing** showing poor precision and recall.
- **SMOTE** was applied to balance the classes, but its effectiveness is limited in cases of severe imbalance.

### Recommendations for Improvement:
- **Combine SMOTE with undersampling** techniques or use **class weights** in the Random Forest Classifier.
- Experiment with classifiers like **XGBoost** or **LightGBM** for better handling of imbalanced data.
- Consider adding **ROC-AUC** and other relevant metrics for more comprehensive model evaluation.
- Analyze the class distribution to ensure sufficient samples are available for training all classes.

## Flask Application for Career Guidance (`testapp.py`)

The `testapp.py` script is a **Flask application** that serves as the frontend for career guidance predictions. It consists of two main routes:
1. `/` renders the homepage, where users input their data.
2. `/predict` processes the input, makes predictions using the trained model, and displays the results.

### Key Features:
- **Model Efficiency**: The model is currently loaded dynamically during each prediction, but it is recommended to load it once during app initialization for improved efficiency.
- **Input Validation**: Ensures that inputs are numeric and correctly formatted.
- **Error Handling**: Manages invalid inputs effectively.
- **Improvement Recommendations**: 
  - Incorporate **client-side input validation**.
  - Use a **configurable probability threshold** for recommendations.
  - Provide more specific error messages to users and implement **logging** for better tracking.

## Overall System Structure

The **Career Guidance and Placement Management System** integrates both career guidance and placement management functionalities into a unified platform. It helps streamline the campus placement process while providing students with personalized career recommendations based on their skills and aspirations. The system also supports **role-based access control**, allowing admins, students, and department heads to manage placement activities.

### Key Features:
- Real-time updates of student performance.
- Centralized management of placement data.
- Simplified job application processes.
- Role-based access for admins, students, and department heads.
  
## Main Points

### Career Guidance System:
- Utilizes machine learning (Python-based) to recommend personalized career paths based on student skills, interests, and academic performance.
- Offers a dynamic web interface for real-time interaction, enabling students to input data and receive career recommendations instantly.

### Dataset Generation (`generate.py`):
- Generates a dataset with 20,000 records, including 10 job roles and 17 skills.
- Each record includes relevant skills for a job role with ratings in categories (e.g., `Not Interested`, `Poor`, `Beginner`) and numerically (0–6).
- Suitable for machine learning model training and skill gap analysis.

### Random Forest Classifier (`testmodel.py`):
- The classifier model achieves **91.85% accuracy** for predicting job roles based on student skill profiles.
- Challenges with **class imbalance** lead to low performance in certain job categories (e.g., `Graphics Designing`).
- **SMOTE** (Synthetic Minority Over-sampling Technique) was applied to balance classes.

### Model Evaluation and Performance:
- The Random Forest model shows high accuracy but struggles with class imbalance, particularly in minority job categories.
- **Precision** and **recall** for some job roles (e.g., `Graphics Designing`) were undefined due to low sample sizes.

### Flask Application (`testapp.py`):
- Provides a user-friendly interface where students input data to receive career predictions.
- **Model efficiency** can be improved by loading the model once at app startup, instead of on every prediction.

### System Integration:
- Integrates career guidance and placement management into one platform, offering **role-based access** for various users (admins, students, HODs).
- Helps streamline the campus placement process by managing student performance and job applications centrally.

## Key Insights & Results

### High Model Accuracy:
- The Random Forest model achieves a solid **91.85% accuracy** overall, but this is skewed by imbalanced classes. The model performs well with major classes but underperforms in minority classes like **Graphics Designing**.

### Class Imbalance Issue:
- The model's performance in minority classes is hindered due to class imbalance, leading to poor precision and recall in some job roles. SMOTE helped balance the classes but could not fully mitigate the issue.

### SMOTE Effectiveness:
- SMOTE improved the balance of classes in the training data, but in cases of severe imbalance, it did not fully resolve the problem. The combination of **undersampling** or adjusting **class weights** in Random Forest may yield better results.

### Improvement Recommendations:
- Use **XGBoost** or **LightGBM** classifiers for better handling of imbalanced datasets.
- Evaluate the model with **ROC-AUC** and **F1-score** to get a more comprehensive understanding of model performance.
- Consider integrating **client-side input validation** and more **specific error messages** in the Flask app for better user experience and efficiency.

### System Efficiency:
- The Flask application can be optimized by loading the trained model once during the app's startup rather than on each prediction, improving efficiency.

## Conclusion

The system successfully integrates career guidance with campus placement management, offering personalized job recommendations based on student skills. The machine learning model shows promising accuracy but requires further refinement to handle class imbalance and improve performance in minority job categories.

---

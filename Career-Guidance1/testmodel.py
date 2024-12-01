import pandas as pd
import numpy as np
import pickle
from sklearn.model_selection import train_test_split, GridSearchCV, cross_val_score
from sklearn.ensemble import RandomForestClassifier
from sklearn.preprocessing import StandardScaler, LabelEncoder
from sklearn import metrics
from imblearn.over_sampling import SMOTE
from sklearn.metrics import classification_report, confusion_matrix

# Load and prepare the data
career = pd.read_csv('C://xampp//htdocs//Career-Guidance - Copy//Career-Guidance1//career_data_20000.csv', header=None)

# Assign column names to the dataset
career.columns = ["Database Fundamentals", "Computer Architecture", "Distributed Computing Systems", 
                  "Cyber Security", "Networking", "Software Development", "Programming Skills", 
                  "Project Management", "Computer Forensics Fundamentals", "Technical Communication", 
                  "AI ML", "Software Engineering", "Business Analysis", "Communication skills", 
                  "Data Science", "Troubleshooting skills", "Graphics Designing", "Role"]

# Handle missing data (drop rows with all NaN values)
career.dropna(how='all', inplace=True)

# Split features (X) and target (y)
X = career.iloc[:, 0:17]  # Features (exclude 'Role')
y = career.iloc[:, 17]    # Target variable (Job Roles)

# Check initial data types and missing values
print("Initial data types:")
print(X.dtypes)

# Check for missing values in X before processing
print("Missing values before processing:")
print(X.isnull().sum())

# Check if any columns are categorical and encode them
le = LabelEncoder()

# Apply label encoding to each column (if it's a categorical column)
for column in X.columns:
    if X[column].dtype == 'object':  # Check if the column is categorical
        X[column] = le.fit_transform(X[column].astype(str))  # Convert to numeric values

# Check the dataset after encoding
print("Missing values after encoding:")
print(X.isnull().sum())

# Ensure all columns are now numeric
X_converted = X.apply(pd.to_numeric, errors='coerce')

# Check the number of rows before and after dropping NaN values
print(f"Shape of X before dropping NaN: {X.shape}")
X_converted.dropna(inplace=True)
y = y[X_converted.index]  # Ensure y matches the remaining X rows

# Check the dataset after dropping NaN rows
print(f"Shape of X after dropping NaN: {X_converted.shape}")

# Check if we still have data
if X_converted.shape[0] == 0:
    print("No data available after cleaning. Check your data preprocessing steps.")
else:
    # Scale the features using StandardScaler
    scaler = StandardScaler()
    X_scaled = scaler.fit_transform(X_converted)

    # Split the data into training and testing sets
    X_train, X_test, y_train, y_test = train_test_split(X_scaled, y, test_size=0.3, random_state=42)

    # Apply SMOTE to handle any class imbalance
    smote = SMOTE(random_state=42)
    X_train_res, y_train_res = smote.fit_resample(X_train, y_train)

    # Initialize the RandomForestClassifier
    rf = RandomForestClassifier(random_state=42)

    # Hyperparameter tuning using GridSearchCV
    param_grid = {
        'n_estimators': [100, 200, 300],
        'max_depth': [10, 20, None],
        'min_samples_split': [2, 5, 10]
    }

    grid_search = GridSearchCV(rf, param_grid, cv=5, n_jobs=-1, verbose=2)
    grid_search.fit(X_train_res, y_train_res)

    # Best parameters from grid search
    print("Best parameters found: ", grid_search.best_params_)

    # Train the model with the best parameters
    rf_best = grid_search.best_estimator_
    rf_best.fit(X_train_res, y_train_res)

    # Make predictions on the test set
    y_pred_rf = rf_best.predict(X_test)

    # Evaluate the model
    accuracy_rf = metrics.accuracy_score(y_test, y_pred_rf)
    print(f"Random Forest Accuracy: {accuracy_rf * 100:.2f}%")

    # Print the classification report (precision, recall, f1-score)
    print("Classification Report:")
    print(classification_report(y_test, y_pred_rf))

    # Print confusion matrix for better understanding of misclassifications
    conf_matrix = confusion_matrix(y_test, y_pred_rf)
    print("Confusion Matrix:")
    print(conf_matrix)

    # Cross-validation score to assess model generalization
    cv_scores = cross_val_score(rf_best, X_scaled, y, cv=5, scoring='accuracy')
    print(f"Cross-validation accuracy: {cv_scores.mean() * 100:.2f}%")

    # Save the trained model to a file
    pickle.dump(rf_best, open('careerlast.pkl', 'wb'))
    print('Model saved as careerlast.pkl')

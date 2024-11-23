import pandas as pd
import numpy as np
import pickle
from sklearn.model_selection import train_test_split, GridSearchCV, cross_val_score
from sklearn.ensemble import RandomForestClassifier
from sklearn.preprocessing import StandardScaler
from sklearn import metrics
from imblearn.over_sampling import SMOTE
from sklearn.metrics import classification_report

# Load and prepare the data
career = pd.read_csv('C://xampp//htdocs//INTELLIGENT-CAREER-GUIDANCE-SYSTEM-main//career_data_20000.csv', header=None)

# Assign column names to the dataset
career.columns = ["Database Fundamentals", "Computer Architecture", "Distributed Computing Systems", 
                  "Cyber Security", "Networking", "Software Development", "Programming Skills", 
                  "Project Management", "Computer Forensics Fundamentals", "Technical Communication", 
                  "AI ML", "Software Engineering", "Business Analysis", "Communication skills", 
                  "Data Science", "Troubleshooting skills", "Graphics Designing", "Role"]

# Handle missing data
career.dropna(how='all', inplace=True)

# Split features (X) and target (y)
X = career.iloc[:, 0:17]  # Features (exclude 'Role')
y = career.iloc[:, 17]    # Target variable (Job Roles)

# Ensure that both X and y have the same number of rows
X = career.iloc[:, 0:17]  # Features (exclude 'Role')
y = career.iloc[:, 17]    # Target variable (Job Roles)

# Ensure that features are numeric (exclude non-numeric columns)
X = X.apply(pd.to_numeric, errors='coerce')  # Converts non-numeric to NaN
career = career.loc[X.index]  # Align y with X after NaN removal
y = career.iloc[:, 17]       # Update y to match X after alignment

# Drop any rows with NaN values from the features
X.dropna(inplace=True)
y = y[X.index]  # Ensure that y matches the remaining X rows

# Scale the features using StandardScaler
scaler = StandardScaler()
X_scaled = scaler.fit_transform(X)

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X_scaled, y, test_size=0.3, random_state=42)

# Proceed with the rest of the code...

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

# Cross-validation score to assess model generalization
cv_scores = cross_val_score(rf_best, X_scaled, y, cv=5, scoring='accuracy')
print(f"Cross-validation accuracy: {cv_scores.mean() * 100:.2f}%")

# Save the trained model to a file
pickle.dump(rf_best, open('careerlast.pkl', 'wb'))
print('Model saved as careerlast.pkl')

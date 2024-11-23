import pandas as pd
import numpy as np
import random

# Define the skills categories
skills = [
    "Database Fundamentals", "Computer Architecture", "Distributed Computing Systems",
    "Cyber Security", "Networking", "Software Development", "Programming Skills", 
    "Project Management", "Computer Forensics Fundamentals", "Technical Communication",
    "AI ML", "Software Engineering", "Business Analysis", "Communication skills",
    "Data Science", "Troubleshooting skills", "Graphics Designing"
]

# Define possible ratings for each skill (as numeric values)
ratings = ['Not Interested', 'Poor', 'Beginner', 'Average', 'Intermediate', 'Excellent', 'Professional']
rating_map = {'Not Interested': 0, 'Poor': 1, 'Beginner': 2, 'Average': 3, 'Intermediate': 4, 'Excellent': 5, 'Professional': 6}

# Define possible job roles (for simplicity, you can expand this list)
job_roles = [
    "Database Administrator", "Software Developer", "Data Scientist", "Cyber Security Specialist",
    "AI ML Specialist", "Project Manager", "Business Analyst", "Software Tester", "Technical Writer"
]

# Function to generate random user data
def generate_user_data():
    # Random skill ratings for each user (each skill rated with one of the 7 categories)
    skill_ratings = [random.choice(ratings) for _ in skills]
    # Random job role (you could assign based on some logic, but we'll do it randomly for now)
    job_role = random.choice(job_roles)
    return skill_ratings + [job_role]

# Generate synthetic data for 20,000 users
data = []
for _ in range(20000):
    user_data = generate_user_data()
    data.append(user_data)

# Create a DataFrame
columns = skills + ["Role"]
df = pd.DataFrame(data, columns=columns)

# Convert skill ratings to numeric values
for skill in skills:
    df[skill] = df[skill].map(rating_map)

# Save the dataset to a CSV file
df.to_csv('career_data_20000.csv', index=False)

print("Dataset with 20,000 records has been generated and saved as 'career_data_20000.csv'.")

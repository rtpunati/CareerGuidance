import pandas as pd
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

# Define possible job roles
job_roles = [
    "Database Administrator", "Software Developer", "Data Scientist", "Cyber Security Specialist",
    "AI ML Specialist", "Project Manager", "Business Analyst", "Software Tester", "Technical Writer", "Software Engineer"
]

# Function to generate user data based on the job role
def generate_user_data():
    # Random job role
    job_role = random.choice(job_roles)
    
    # Initialize skill ratings for each skill
    skill_ratings = [random.choice(ratings) for _ in skills]
    
    # Adjust ratings based on job role
    if job_role == "AI ML Specialist":
        # High ratings for AI, ML, Data Science, Programming
        skill_ratings[skills.index("AI ML")] = 'Professional'  # Highest rating for AI ML
        skill_ratings[skills.index("Data Science")] = 'Professional'  # High rating for Data Science
        skill_ratings[skills.index("Programming Skills")] = 'Excellent'  # High rating for programming
        skill_ratings[skills.index("Software Engineering")] = 'Intermediate'  # Moderate for software engineering
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "Database Fundamentals", "Cyber Security", "Networking", "Project Management",
            "Technical Communication", "Business Analysis", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Database Administrator":
        # High ratings for database fundamentals, software engineering
        skill_ratings[skills.index("Database Fundamentals")] = 'Professional'  # High rating for DB fundamentals
        skill_ratings[skills.index("Software Development")] = 'Intermediate'  # Moderate for software dev
        skill_ratings[skills.index("Programming Skills")] = 'Intermediate'  # Moderate for programming
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "AI ML", "Data Science", "Cyber Security", "Networking", "Project Management",
            "Technical Communication", "Business Analysis", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Software Developer":
        # High ratings for software development, programming, and software engineering
        skill_ratings[skills.index("Software Development")] = 'Professional'  # High for software dev
        skill_ratings[skills.index("Programming Skills")] = 'Professional'  # High for programming
        skill_ratings[skills.index("Software Engineering")] = 'Excellent'  # High for software engineering
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "Database Fundamentals", "AI ML", "Cyber Security", "Networking", "Project Management",
            "Technical Communication", "Business Analysis", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Cyber Security Specialist":
        # High ratings for cyber security, networking, troubleshooting
        skill_ratings[skills.index("Cyber Security")] = 'Professional'  # High for cyber security
        skill_ratings[skills.index("Networking")] = 'Excellent'  # High for networking
        skill_ratings[skills.index("Troubleshooting skills")] = 'Excellent'  # High for troubleshooting
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "AI ML", "Data Science", "Software Development", "Programming Skills", "Project Management",
            "Technical Communication", "Business Analysis", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Project Manager":
        # High ratings for project management, business analysis, communication skills
        skill_ratings[skills.index("Project Management")] = 'Professional'  # High for project management
        skill_ratings[skills.index("Business Analysis")] = 'Excellent'  # High for business analysis
        skill_ratings[skills.index("Communication skills")] = 'Excellent'  # High for communication
        
        # Lower ratings for technical skills
        non_relevant_fields = [
            "AI ML", "Database Fundamentals", "Software Development", "Programming Skills", 
            "Cyber Security", "Networking", "Technical Communication", "Data Science", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Business Analyst":
        # High ratings for business analysis, communication, and technical communication
        skill_ratings[skills.index("Business Analysis")] = 'Professional'  # High for business analysis
        skill_ratings[skills.index("Communication skills")] = 'Professional'  # High for communication
        skill_ratings[skills.index("Technical Communication")] = 'Excellent'  # High for technical comm
        
        # Lower ratings for technical skills
        non_relevant_fields = [
            "AI ML", "Database Fundamentals", "Software Development", "Programming Skills", 
            "Cyber Security", "Networking", "Project Management", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Software Tester":
        # High ratings for software testing, programming, and troubleshooting
        skill_ratings[skills.index("Software Development")] = 'Excellent'  # High for software dev
        skill_ratings[skills.index("Troubleshooting skills")] = 'Professional'  # High for troubleshooting skills
        skill_ratings[skills.index("Programming Skills")] = 'Intermediate'  # Moderate for programming
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "AI ML", "Database Fundamentals", "Cyber Security", "Networking", "Project Management",
            "Technical Communication", "Business Analysis", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Technical Writer":
        # High ratings for communication skills, technical communication
        skill_ratings[skills.index("Communication skills")] = 'Professional'  # High for communication
        skill_ratings[skills.index("Technical Communication")] = 'Professional'  # High for technical communication
        
        # Lower ratings for technical skills
        non_relevant_fields = [
            "AI ML", "Database Fundamentals", "Software Development", "Programming Skills", 
            "Cyber Security", "Networking", "Project Management", "Business Analysis", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    elif job_role == "Software Engineer":
        # High ratings for software development, software engineering, and programming
        skill_ratings[skills.index("Software Engineering")] = 'Professional'  # High for software engineering
        skill_ratings[skills.index("Software Development")] = 'Excellent'  # High for software dev
        skill_ratings[skills.index("Programming Skills")] = 'Professional'  # High for programming
        
        # Lower ratings for non-relevant skills
        non_relevant_fields = [
            "AI ML", "Database Fundamentals", "Cyber Security", "Networking", "Project Management",
            "Technical Communication", "Business Analysis", "Troubleshooting skills", "Graphics Designing"
        ]
        for skill in non_relevant_fields:
            skill_ratings[skills.index(skill)] = 'Not Interested'
    
    # Convert categorical ratings to numeric values
    numeric_ratings = [rating_map[rating] for rating in skill_ratings]
    
    # Return the data as a DataFrame row
    return [job_role] + numeric_ratings

# Generate data for 20,000 users
user_data = [generate_user_data() for _ in range(20000)]

# Create a DataFrame
df = pd.DataFrame(user_data, columns=["Role"] + skills)

# Save the dataset to a CSV file
df.to_csv('career_data_20000.csv', index=False)

print("Dataset with 20,000 records has been generated and saved as 'career_data_20000.csv'.")

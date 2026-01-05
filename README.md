# Login System – PHP

A simple and complete **Login & Register System** built with **PHP, MySQL, HTML, CSS, and Bootstrap**.  
This project is designed for learning purposes and academic use (BTS / Stage).

---

##  Features

- User Registration
- User Login
- Password Hashing
- Session Protection
- Secure Logout
- Responsive Design (Bootstrap 5)

---

## Technologies Used

- PHP (Procedural)
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- Git & GitHub

---

##  Project Structure

login-system/
│
├── index.php # Login page
├── register.php # Register page
├── dashboard.php # Protected dashboard
├── logout.php # Logout script
│
├── config/
│ └── db.php # Database connection
│
├── assets/
│ └── style.css # Custom styles
│
└── login_system.sql # Database structure


##  Database Setup

1. Create a database named `login_system`
2. Import the file `login_system.sql`
3. Update database credentials in `config/db.php`

```php
$conn = new mysqli("localhost", "root", "", "login_system");
 How to Run the Project
Install XAMPP

Copy the project folder to:

makefile
Copy code
C:\xampp\htdocs\
Start Apache and MySQL

Open your browser and go to:

perl
Copy code
http://localhost/login-system/
 Default Workflow
Create a new account (Register)

Login with your credentials

Access the Dashboard

Logout securely

Educational Purpose
This project is suitable for:

BTS students

PHP beginners

Internship (Stage) projects

GitHub portfolio

 Author
Ayman Bounaouj
Student – Web Development (Full Stack)

 License
This project is open-source and free to use for educational purposes.
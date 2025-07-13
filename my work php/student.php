<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";

// Step 1: Connect to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Create database
$conn->query("CREATE DATABASE IF NOT EXISTS academic_db");

// Step 3: Select the database
$conn->select_db("academic_db");

// Step 4: Create tables
$conn->query("CREATE TABLE IF NOT EXISTS professors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100)
)");

$conn->query("CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    address TEXT
)");

$conn->query("CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100),
    professor_id INT,
    FOREIGN KEY (professor_id) REFERENCES professors(id)
)");

$conn->query("CREATE TABLE IF NOT EXISTS grades (
    student_id INT,
    course_id INT,
    grade VARCHAR(2),
    FOREIGN KEY (student_id) REFERENCES students(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
)");

// Step 5: Insert sample student if not exists
$email = 'john@example.com';
$check = $conn->query("SELECT * FROM students WHERE email = '$email'");
if ($check->num_rows == 0) {
    $conn->query("INSERT INTO students (name, email, address) VALUES 
        ('John Doe', '$email', '123 Main St')");
}

// Step 6: Display all students
$result = $conn->query("SELECT * FROM students");

echo "<!DOCTYPE html><html><head><title>Academic DB</title></head><body>";
echo "<h2>Student List</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['address']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}

echo "</body></html>";

$conn->close();
?>

<?php

$host = "db";   // service name from docker-compose
$user = "student";
$pass = "student123";
$dbname = "student_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name   = $_POST['name'];
$age    = $_POST['age'];
$email  = $_POST['email'];
$course = $_POST['course'];

$stmt = $conn->prepare("INSERT INTO students (name, age, email, course) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $age, $email, $course);

if ($stmt->execute()) {
    echo "Student details added successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

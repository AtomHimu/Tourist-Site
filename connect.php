<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
// database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('connection failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare(" insert into registration (username, password, email, gender, dOb)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $password, $email, $gender, $dob);
    $stmt->execute();
    echo "registration completed";
    $stmt->close();
    $conn->close();
}
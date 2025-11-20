<?php
session_start();
require 'db.php'; // dataabse connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if fields are rempty
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    //Check if email was already registered
    $checkEmail = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email already registered.";
        exit;
    }

    // hash password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // insert new user into database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php?message=registered");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

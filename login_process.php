<?php
session_start();
require 'db.php'; // connection to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // get email and password 
    if (empty($email) || empty($password)) {
        echo "Both email and password are required.";
        exit;
    }

    // query to find user by email
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($query);

    // existing user
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // verify password hash
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id']; // save user info
            $_SESSION['name'] = $user['name'];

            header("Location: index.php"); // redirect to homepage
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with this email.";
    }

    $conn->close();
}
?>

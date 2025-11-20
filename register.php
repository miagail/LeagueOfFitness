<!DOCTYPE html>
<html>
<head>
    <title>Register - League of Fitness</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register_process.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Already registered? Login here</a>
</body>
</html>

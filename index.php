<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // redirect if user is not logged in
    exit;
}
?>
<h1>Welcome to League of Fitness, <?php echo $_SESSION['name']; ?>!</h1>
<a href="logout.php">Logout</a>

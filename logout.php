<?php
session_start();
session_destroy(); // logs out all user's data
header("Location: login.php"); // redirect to login page
exit;
?>

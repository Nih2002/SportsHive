
<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: ../views/login.php"); // Redirect to login page or home page
exit();
?>

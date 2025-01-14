<?php
// Hardcoded user data with email, password, and role
$users = [
    "user@sportshive.com" => ["password" => "user123", "role" => "user"],
    "admin@sportshive.com" => ["password" => "admin123", "role" => "admin"],
    "delivery@sportshive.com" => ["password" => "delivery123", "role" => "delivery"],
    "repairman@sportshive.com" => ["password" => "repairman123", "role" => "repairman"]
];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        $role = $users[$email]['role'];

        // Redirect based on role
        switch ($role) {
            case "user":
                header("Location: cricket.php");
                exit();
            case "admin":
                header("Location: admin.php");
                exit();
            case "delivery":
                header("Location: delivery_dashboard.php");
                exit();
            case "repairman":
                header("Location: repair.php");
                exit();
            default:
                echo "Invalid role.";
                exit();
        }
    } else {
        // Redirect back to the login page with an error
        header("Location: login.php?error=Invalid email or password");
        exit();
    }
} else {
    // If accessed directly, redirect to login
    header("Location: login.php");
    exit();
}

?>

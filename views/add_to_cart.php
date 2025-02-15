<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Fetch category from the relevant table
    $category = "";

    // First, check in the Netball table
    $sql = "SELECT 'netball' AS category FROM netball WHERE name = ? 
            UNION 
            SELECT 'rugby' AS category FROM rugby WHERE name = ? 
            UNION
            SELECT 'cricket' AS category FROM cricket WHERE name = ?
            UNION
            SELECT 'cycling' AS category FROM cycling WHERE name = ?
            UNION
            SELECT 'basketball' AS category FROM basketball WHERE name = ?
            UNION
            SELECT 'football' AS category FROM football WHERE name = ?
            UNION
            SELECT 'volleyball' AS category FROM volleyball WHERE name = ?
            UNION
            SELECT 'swimming' AS category FROM swimming WHERE name = ?
            UNION
            SELECT 'athletic' FROM athletic WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $item_name, $item_name, $item_name, $item_name, $item_name, $item_name, $item_name,  $item_name ,  $item_name);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $category = $row['category'];
    } else {
        $category = "unknown";  // Fallback if not found
    }

    // Check if the item already exists in the cart
    $check_sql = "SELECT id, quantity FROM cart WHERE item_name = ? AND user_id = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("si", $item_name, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Update quantity
        $row = $result->fetch_assoc();
        $new_quantity = $row['quantity'] + $quantity;
        $update_sql = "UPDATE cart SET quantity = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("ii", $new_quantity, $row['id']);
        $stmt->execute();
    } else {
        // Insert new item with category
        $insert_sql = "INSERT INTO cart (user_id, item_name, price, quantity, category) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("isdis", $user_id, $item_name, $price, $quantity, $category);
        $stmt->execute();
    }

    // Get the updated cart count
    $sql = "SELECT SUM(quantity) AS total FROM cart WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $cart_count = $row['total'] ?? 0;
}
// Redirect back to the same page
$redirect_url = $_SERVER['HTTP_REFERER'] ?? $_SERVER['REQUEST_URI'];
header("Location: " . $redirect_url);
exit();

?>


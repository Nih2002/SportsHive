<?php
session_start();
include 'connection.php'; // Include database connection

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

$user_id = $_SESSION['user_id']; // Get user ID from session

// Handle accept action
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['accept_order'])) {
    $order_id = $_POST['order_id'];
    $message = "Order Accepted"; // You can modify this message as needed

    // Insert into database (modify according to your table structure)
    $stmt = $conn->prepare("INSERT INTO accepted_orders (order_id, user_id, message) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $order_id, $user_id, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Order accepted successfully.'); window.location.href='gift_order.php';</script>";
    } else {
        echo "<script>alert('Error accepting order.'); window.location.href='gift_order.php';</script>";
    }
    $stmt->close();
}

// Fetch gift orders
$query = "SELECT * FROM gift_orders";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Orders</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-pink-100 p-6">
    <!-- Admin Header -->
    <header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center>
        
         <!-- Logo -->
        <a href= "#" class="flex items-center space-x-2">
          <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>
        <div class="text-2xl font-bold tracking-wide">
             Manage Gift Oeders
        </div>
        

        <!-- Navigation Links -->
        <nav class="flex space-x-6 text-lg font-semibold">
            <a href="#" class="hover:text-yellow-400 transition">Dashboard</a>
            <a href="#" class="hover:text-yellow-400 transition">Orders</a>
            <a href="#" class="hover:text-yellow-400 transition">Products</a>
            <a href="#" class="hover:text-yellow-400 transition">Users</a>
            <a href="#" class="hover:text-yellow-400 transition">Reports</a>
        </nav>

        <!-- Admin Profile Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full border-2 border-yellow-400">
                <span class="ml-2 font-semibold">Admin</span>
                <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-lg shadow-lg hidden">
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-200">Logout</a>
            </div>
        </div>
    </header>

    <script>
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>

<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Gift Orders</h2>

    <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-3">Order ID</th>
                <th class="p-3">Recipient</th>
                <th class="p-3">Phone</th>
                <th class="p-3">Address</th>
                <th class="p-3">Gift Message</th>
                <th class="p-3">Gift Wrap</th>
                <th class="p-3">Gift Card</th>
                <th class="p-3">Delivery Date</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr class="border-b">
                <td class="p-3 text-center"><?= $row['id'] ?></td>
                <td class="p-3"><?= $row['recipient_name'] ?></td>
                <td class="p-3"><?= $row['recipient_phone'] ?></td>
                <td class="p-3"><?= $row['recipient_address'] ?></td>
                <td class="p-3"><?= $row['gift_message'] ?></td>
                <td class="p-3"><?= $row['gift_wrap_option'] ?></td>
                <td class="p-3"><?= $row['gift_card_option'] ?></td>
                <td class="p-3"><?= $row['delivery_datetime'] ?></td>
                <td class="p-3">
                    <form method="POST">
                        <input type="hidden" name="order_id" value="<?= $row['id'] ?>">
                        <button type="submit" name="accept_order" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">
                            Accept
                        </button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
// Database connection
include 'connection.php'; // Ensure this file contains the correct DB connection

// Fetch items where quantity < 2
$sql = "SELECT * FROM brands_items WHERE item_stock < 2";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 min-h-screen">

    <!-- Header -->
    <header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
            <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>
        <div class="text-2xl font-bold tracking-wide">Stock Management</div>
        
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
    
    <!-- Main Content -->
    <div class="flex items-center justify-center p-6">
        <div class="max-w-4xl w-full bg-white shadow-2xl rounded-xl p-8">
            <h2 class="text-3xl font-bold text-gray-700 text-center mb-6">Low Stock Items</h2>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse shadow-lg rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-500 text-white text-left text-lg">
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Brand Name</th>
                            <th class="px-6 py-3">Product Name</th>
                            <th class="px-6 py-3">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr class="bg-white border-b hover:bg-blue-100 transition duration-200">
                                <td class="px-6 py-4"><?php echo $row['id']; ?></td>
                                <td class="px-6 py-4"><?php echo $row['brand_name']; ?></td>
                                <td class="px-6 py-4"><?php echo $row['item_name']; ?></td>
                                <td class="px-6 py-4 text-red-600 font-semibold"><?php echo $row['item_stock']; ?> (Low!)</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 text-center">
                <a href="yonex.php" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg text-lg shadow-md transition duration-300">
                    Fill the stock
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>
</body>
</html>

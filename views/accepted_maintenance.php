<?php
include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch accepted requests
$sql = "SELECT request_id, request_title, issue_description, preferred_time, user_contact, submitted_at FROM maintenance_requests WHERE status = 'accepted'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Maintenance Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">

    <!-- ✅ Header -->
    <header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
            <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>
        <div class="text-2xl font-bold tracking-wide">
            Manager Dashboard
        </div>

        <!-- Navigation Links -->
        <nav class="flex space-x-6 text-lg font-semibold">
            <a href="#" class="hover:text-yellow-400 transition">Dashboard</a>
            <a href="#" class="hover:text-yellow-400 transition">Orders</a>
            <a href="#" class="hover:text-yellow-400 transition">Products</a>
            <a href="#" class="hover:text-yellow-400 transition">Users</a>
            <a href="#" class="hover:text-yellow-400 transition">Reports</a>
        </nav>

        <!-- Profile Dropdown -->
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

    <!-- ✅ Main Content -->
    <div class="max-w-6xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-4 text-cyan-600">Accepted Maintenance Requests</h2>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Request ID</th>
                        <th class="border border-gray-300 px-4 py-2">Title</th>
                        <th class="border border-gray-300 px-4 py-2">Issue</th>
                        <th class="border border-gray-300 px-4 py-2">Preferred Time</th>
                        <th class="border border-gray-300 px-4 py-2">User Contact</th>
                        <th class="border border-gray-300 px-4 py-2">Submitted At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='hover:bg-gray-100'>";
                            echo "<td class='border border-gray-300 px-4 py-2 text-center'>" . $row['request_id'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['request_title'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['issue_description'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['preferred_time'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['user_contact'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['submitted_at'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center py-4 text-gray-500'>No accepted requests found.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ JavaScript for Dropdown -->
    <script>
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>

</body>
</html>

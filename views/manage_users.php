<?php
session_start();
include 'connection.php';



// Fetch users based on search query
$search = isset($_GET['search']) ? $_GET['search'] : '';
$filter = isset($_GET['role']) ? $_GET['role'] : '';

$query = "SELECT id, name, email, role FROM users WHERE 1";

if (!empty($search)) {
    $query .= " AND (name LIKE '%$search%' OR email LIKE '%$search%')";
}

if (!empty($filter) && $filter !== 'All') {
    $query .= " AND role = '$filter'";
}

$result = $conn->query($query);

// Update Role
if (isset($_POST['update_role'])) {
    $user_id = $_POST['user_id'];
    $new_role = $_POST['role'];

    $stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
    $stmt->bind_param("si", $new_role, $user_id);
    $stmt->execute();

    echo "<script>alert('User role updated successfully!'); window.location.href='manage_users.php';</script>";
}

// Delete User
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    echo "<script>alert('User deleted successfully!'); window.location.href='manage_users.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-100">
<!-- Admin Header -->
    <header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
         <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
          <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>
        <div class="text-2xl font-bold tracking-wide">
             Manage User
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

    

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Manage Users</h2>

        <!-- Search & Filter -->
        <form method="GET" class="mb-4 flex gap-2">
            <input type="text" name="search" placeholder="Search by name or email" value="<?= htmlspecialchars($search) ?>" class="border rounded px-3 py-1 w-1/2">
            <select name="role" class="border rounded px-3 py-1">
                <option value="All">All Roles</option>
                <option value="Admin" <?= $filter == 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $filter == 'user' ? 'selected' : '' ?>>users</option>
                <option value="Repair Man" <?= $filter == 'Repair Man' ? 'selected' : '' ?>>Repair Man</option>
                <option value="Delivery" <?= $filter == 'Delivery ' ? 'selected' : '' ?>>Delivery Staff</option>
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded">Search</button>
        </form>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Role</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td class="py-2 px-4 border"><?= htmlspecialchars($row['name']) ?></td>
                    <td class="py-2 px-4 border"><?= htmlspecialchars($row['email']) ?></td>
                    <td class="py-2 px-4 border"><?= htmlspecialchars($row['role']) ?></td>
                    <td class="py-2 px-4 border flex gap-2">
                        <!-- Update Role -->
                        <form method="POST">
                            <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                            <select name="role" class="border rounded px-2 py-1">
                                <option value="Admin">Admin</option>
                                <option value="user">Users</option>
                                <option value="Repair Man">Repair Man</option>
                                <option value="Delivery ">Delivery Staff</option>
                            </select>
                            <button type="submit" name="update_role" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">Update</button>
                        </form>

                        <!-- Delete User -->
                        <form method="POST" onsubmit="return confirm('Are you sure?')">
                            <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                            <button type="submit" name="delete_user" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php
include 'connection.php';

if (isset($_POST['reset_password'])) {
    $user_id = $_POST['user_id'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $query = "UPDATE users SET password=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $new_password, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('Password reset successfully!');</script>";
    } else {
        echo "<script>alert('Error resetting password!');</script>";
    }
}
?>

<div class="flex justify-center items-center mt-10 bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Reset User Password</h2>
        
        <form method="POST">
            <!-- User Selection -->
            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-700">Select User:</label>
                <select name="user_id" required class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                    <option value="" disabled selected>Select a user</option>
                    <?php
                    $users = $conn->query("SELECT id, username FROM users");
                    while ($user = $users->fetch_assoc()) {
                        echo "<option value='{$user['id']}'>{$user['username']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- New Password Input -->
            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password:</label>
                <input type="password" name="new_password" required class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <!-- Submit Button -->
            <button type="submit" name="reset_password" class="w-full bg-blue-200 hover:bg-blue-300 text-white py-2 rounded-lg text-lg font-semibold transition duration-300">
                Reset Password
            </button>
        </form>
    </div>
</div>



</body>
</html>


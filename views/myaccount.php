<?php
include 'connection.php'; // Include database connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming the user is logged in and their user_id is stored in a session
session_start();
$user_id = $_SESSION['user_id']; // Replace with actual session value

// Query to fetch user details
$sql = "SELECT name, username, email, address FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id); // "i" for integer
$stmt->execute();
$stmt->bind_result($name, $username, $email, $address);

// Fetch the result
if ($stmt->fetch()) {
    // Store the fetched values in an associative array
    $user_data = [
        'name' => $name,
        'username' => $username,
        'email' => $email,
        'address' => $address
    ];
} else {
    // If no result, you can handle the case here (e.g., user not found)
    $user_data = null;
}

// Sign out logic: Destroy session if sign out button is clicked
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signout'])) {
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page or home page
    exit();
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header class="bg-blue-900 text-white">

    <!-- Main Header -->
    <div class="bg-cyan-500 text-black">
      <div class="container mx-auto flex justify-between items-center py-3 px-4">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
          <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>

        <!-- Search Bar -->
        <div class="flex items-center w-full max-w-md mx-4">
          <input 
            type="text" 
            placeholder="What are you looking for?" 
            class="w-full bg-white text-black rounded-l-lg px-4 py-2 focus:outline-none">
          <button class="bg-pink-600 text-white px-4 py-2 rounded-r-lg hover:bg-pink-500">
            <i class="fas fa-search"></i>
          </button>
        </div>

        <!-- Right Section -->
        <div class="flex items-center space-x-6">
          <!-- Contact -->
          <div class="flex flex-col text-right">
            <span class="text-xs">Need Help?</span>
            <span class="font-bold">CALL 0115 964 964</span>
          </div>
          <!-- User Dropdown & Cart -->
          <div class="relative flex items-center space-x-4">
              <!-- Cart Icon -->
              <a href="../views/cart.php" id="view-cart" class="relative">
                  <i class="fas fa-shopping-cart h-8 w-8 text-blue-500 hover:text-blue-600"></i>
                  <!-- Cart Count Badge -->
                  <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                      0
                  </span>
              </a>
              <!-- Wish List Icon -->
              <a href="#" id="view-wishlist" class="relative">
                  <i class="fas fa-heart h-8 w-8 text-yellow-500 hover:text-yellow-600"></i>
                  <!-- Wishlist Count Badge -->
                  <span id="wishlist-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                      0
                  </span>
              </a>
          </div>

          <script>
              document.addEventListener("DOMContentLoaded", () => {
                const cartItems = JSON.parse(sessionStorage.getItem("cart")) || [];
                const cartCount = cartItems.length;

                // Store the cart count in sessionStorage
                sessionStorage.setItem("cartCount", cartCount);
              });
          </script>
          

          <!-- Sign In & Cart -->
            <div class="flex space-x-4">
                  <!-- Sign In Button -->
                  <a href="../views/signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                    <i class="fas fa-user"></i>
                    <span>Sign Up</span>
                  </a>

                  <!-- Log In Button -->
                  <a href="../views/login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Log In</span>
                  </a>
            </div>

            <!-- Account Button -->
            <button id="accountBtn" class="flex items-center px-4 py-2 bg-white rounded-lg shadow">
                <i class="fas fa-user mr-2"></i> Account 
                <i class="fas fa-caret-down ml-2"></i>
            </button>

            <!-- Dropdown Menu (with higher z-index) -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-lg shadow-lg z-50">
                <a href="../views/myaccount.php" class="block px-4 py-2 hover:bg-gray-700">My Account</a>
                <a href="../views/settings.php" class="block px-4 py-2 bg-red-600 hover:bg-red-700">Settings</a>
                <a href="../views/logout.php" class="block px-4 py-2 bg-red-600 hover:bg-red-700">Sign Out</a>
            </div>
        </div>
    </nav>

    <script>
        const accountBtn = document.getElementById('accountBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

        accountBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!accountBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
        </div>
      </div>
    </div>

  <!-- Top Bar -->
<div class="bg-cyan-100 relative">
  <!-- Navigation Bar -->
  <nav class="relative z-10 flex items-center justify-between px-4 py-2">
    <!-- Hamburger Menu -->
    <button id="menu-toggle" class="text-black focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
    <div class="hidden md:flex space-x-6">
        <a href="../index.php" 
           class="text-black font-medium hover:bg-red-200 hover:text-white px-4 py-2 rounded-lg transition duration-300">Home</a>
        <a href="../views/services.php" 
           class="text-black font-medium hover:bg-red-200 hover:text-white px-4 py-2 rounded-lg transition duration-300">Services</a>
        <a href="../views/contactus.php" 
           class="text-black font-medium hover:bg-red-200 hover:text-white px-4 py-2 rounded-lg transition duration-300">Contact Us</a>
        <a href="../views/aboutus.php" 
           class="text-black font-medium hover:bg-red-200 hover:text-white px-4 py-2 rounded-lg transition duration-300">About Us</a>
      </div>
  </nav>

  <!-- Collapsible Menu -->
  <div id="menu-links" class="hidden flex-col bg-gray-700 border border-gray-700 rounded-lg shadow-lg w-full z-40">
    <!-- Sports Section -->
    <div class="relative">
      <h5 class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Sports
      </h5>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="../views/athletic.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Athletic</a>
          <a href="../views/cycling.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Cycling</a>
          <a href="../views/cricket.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Cricket</a>
          <a href="../views/basketball.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Basketball</a>
          <a href="../views/football1.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Football</a>
          <a href="../views/netball.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Netball</a>
          <a href="../views/rugby.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Rugby</a>
          <a href="../views/swimming.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Swimming</a>
          <a href="../views/vollyball.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Volleyball</a>
        </div>
      </div>
    </div>

    <!-- Brands Section -->
    <div class="relative">
      <h5 class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Brands
      </h5>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="grid grid-cols-3 gap-4">
          <div class="flex flex-wrap gap-4">
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">ADIDAS</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">SALOMON</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">KIPRUN</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">PUMA</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">OLAIAN</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">ROKY</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">ROCKRIDER</a>
            <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">KIPSTA</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Repair and Services Section -->
    <div class="relative">
      <h5 class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Repair and Services
      </h5>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="../views/requestmaintenance.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Maintenance Packages</a>
        </div>
      </div>
    </div>

    <!-- Others Section -->
    <div class="relative">
      <h5 class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Others
      </h5>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">Special Offers</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  // Toggle main menu and expand all submenus
  const menuToggle = document.getElementById('menu-toggle');
  const menuLinks = document.getElementById('menu-links');
  const submenus = document.querySelectorAll('.submenu');

  menuToggle.addEventListener('click', () => {
    // Toggle the main menu visibility
    menuLinks.classList.toggle('hidden');

    // Expand or collapse all submenus
    submenus.forEach(submenu => {
      submenu.classList.toggle('hidden');
    });
  });
</script>

  </header>
<body class="bg-gray-100 font-sans">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-xl">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-xl font-bold"><?php echo htmlspecialchars($user_data['name']); ?> Account</h1>
            <!-- Sign out form -->
            <form method="POST" action="">
                <button type="submit" name="signout" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Sign out</button>
            </form>
        </div>
        
        <div class="flex mt-6">
            <!-- Sidebar -->
            <div class="w-1/4 border-r pr-4">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-300 rounded-full"></div>
                    <h2 class="mt-2 font-semibold" id="user-name"><?php echo htmlspecialchars($user_data['username']); ?></h2>
                    <p class="text-gray-500 text-sm" id="user-email"><?php echo htmlspecialchars($user_data['email']); ?></p>
                </div>
                <nav class="mt-6">
                    <ul class="space-y-3">
                        <li class="text-orange-500 font-semibold">Personal information</li>
                        <li class="text-gray-600 cursor-pointer hover:text-orange-500">Billing & Payments</li>
                        <li class="text-gray-600 cursor-pointer hover:text-orange-500">Order History</li>
                        <li class="text-gray-600 cursor-pointer hover:text-orange-500">Gift Cards</li>
                    </ul>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="w-3/4 pl-6">
                <h2 class="text-xl font-semibold">Personal Information</h2>
                <p class="text-gray-500 text-sm mt-1">Manage your personal information, including phone numbers and email addresses where you can be contacted.</p>
                
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div class="p-4 bg-gray-50 rounded-lg shadow-sm border">
                        <p class="text-gray-600 text-sm">Name</p>
                        <p class="font-medium" id="info-name"><?php echo htmlspecialchars($user_data['name']); ?></p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-lg shadow-sm border">
                        <p class="text-gray-600 text-sm">Address</p>
                        <p class="font-medium" id="info-address"><?php echo htmlspecialchars($user_data['address']); ?></p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-lg shadow-sm border">
                        <p class="text-gray-600 text-sm">Country/Region</p>
                        <p class="font-medium">Sri Lanka</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-lg shadow-sm border">
                        <p class="text-gray-600 text-sm">Language</p>
                        <p class="font-medium">English</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-lg shadow-sm border col-span-2">
                        <p class="text-gray-600 text-sm">Contactable at</p>
                        <p class="font-medium" id="info-contact"><?php echo htmlspecialchars($user_data['email']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

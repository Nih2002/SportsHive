<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <a href="../views/cart.php" id="view-cart" class="relative pointer-events-none opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.4 7h11.2M7 13l-4-8H2M7 13h10m-4 0a1 1 0 112 0m-4 0a1 1 0 11-2 0" />
                    </svg>
                    <!-- Cart Count Badge -->
                    <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                        0
                    </span>
                </a>
            </div>


          <script>
          // Example JavaScript to handle cart count
          document.addEventListener("DOMContentLoaded", function () {
              let cartCount = localStorage.getItem("cartCount") || 0; // Retrieve cart count
              document.getElementById("cart-count").textContent = cartCount; // Update count
          });
          </script>

          <!-- Sign In & Cart -->
          <div class="flex space-x-4">
            <!-- Sign In Button -->
            <a 
                href="../views/signin.php" 
                class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                <i class="fas fa-user"></i>
                <span>Sign Up</span>
            </a>

            <!-- Log In Button -->
            <a 
                href="../views/login.php" 
                class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none">
                <i class="fas fa-sign-in-alt"></i>
                <span>Log In</span>
            </a>
        </div>

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
<body class="bg-blue-90">
<!-- Maintenance Request Form -->
<div class="max-w-4xl mx-auto p-8 from-blue-500 via-indigo-500 to-purple-600 shadow-lg rounded-lg">
    <h2 class="text-3xl font-semibold text-center text-blue-500 mb-8">Request Maintenance</h2>
    <form action="submit_maintenance_request.php" method="POST" class="space-y-6">
        <div class="mb-6">
            <label for="request_title" class="block text-sm font-medium text-black">Request Title:</label>
            <input type="text" id="request_title" name="request_title" required 
                class="mt-2 p-4 w-full bg-blue-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 hover:bg-white hover:text-gray-800 transition-all duration-300">
        </div>

        <div class="mb-6">
            <label for="issue_description" class="block text-sm font-medium text-black">Issue Description:</label>
            <textarea id="issue_description" name="issue_description" rows="4" required 
                class="mt-2 p-4 w-full bg-blue-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 hover:bg-white hover:text-gray-800 transition-all duration-300"></textarea>
        </div>

        <div class="mb-6">
            <label for="preferred_time" class="block text-sm font-medium text-black">Preferred Time:</label>
            <input type="datetime-local" id="preferred_time" name="preferred_time" required 
                class="mt-2 p-4 w-full bg-blue-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 hover:bg-white hover:text-gray-800 transition-all duration-300">
        </div>

        <div class="mb-6">
            <label for="user_contact" class="block text-sm font-medium text-black">Contact Information:</label>
            <input type="text" id="user_contact" name="user_contact" required 
                class="mt-2 p-4 w-full bg-blue-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 hover:bg-white hover:text-gray-800 transition-all duration-300">
        </div>

        <div class="mt-8">
            <button type="submit" 
                class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75 transition-all duration-300">
                Submit Request
            </button>
        </div>
    </form>
</div>

<div class="max-w-6xl mx-auto p-8">
        <!-- Page Title -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-blue-500 bg-clip-text bg-white via-purple-500 to-pink-500">
                User Feedback
            </h1>
            <p class="text-blue-800 text-lg mt-4">
                Here's what our customers say about the maintenance services at our sports shop!
            </p>
        </div>

        <!-- Feedback Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Feedback Card 1 -->
            <div class="relative p-6 bg-pink-200 rounded-lg shadow-xl border border-gray-200 hover:shadow-2xl hover:scale-105 transition duration-300">
                <!-- Quote Icon -->
                <div class="absolute top-0 -mt-5 left-1/2 transform -translate-x-1/2">
                    <div class="bg-indigo-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
                        <i class="text-2xl">D</i>
                    </div>
                </div>
                <!-- Card Content -->
                <div class="mt-6">
                    <h3 class="text-lg font-bold text-gray-900 text-center">Damya</h3>
                    <div class="flex justify-center text-yellow-400 text-lg mt-2">
                        ★★★★☆
                    </div>
                    <p class="text-gray-600 mt-4">
                        "The maintenance team was quick and efficient. Highly recommend their services!"
                    </p>
                    <p class="text-sm text-gray-400 mt-4 text-right">January 10, 2025</p>
                </div>
            </div>

            <!-- Feedback Card 2 -->
            <div class="relative p-6 bg-pink-200 rounded-lg shadow-xl border border-gray-200 hover:shadow-2xl hover:scale-105 transition duration-300">
                <div class="absolute top-0 -mt-5 left-1/2 transform -translate-x-1/2">
                    <div class="bg-purple-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
                        <i class="text-2xl">H</i>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-bold text-gray-900 text-center">Harendra</h3>
                    <div class="flex justify-center text-yellow-400 text-lg mt-2">
                        ★★★★★
                    </div>
                    <p class="text-gray-600 mt-4">
                        "Great service! They fixed everything perfectly and on time. Thank you!"
                    </p>
                    <p class="text-sm text-gray-400 mt-4 text-right">January 9, 2025</p>
                </div>
            </div>

            <!-- Feedback Card 3 -->
            <div class="relative p-6 bg-pink-200 rounded-lg shadow-xl border border-gray-200 hover:shadow-2xl hover:scale-105 transition duration-300">
                <div class="absolute top-0 -mt-5 left-1/2 transform -translate-x-1/2">
                    <div class="bg-pink-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
                        <i class="text-2xl">P</i>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-bold text-gray-900 text-center">Pradeepa</h3>
                    <div class="flex justify-center text-yellow-400 text-lg mt-2">
                        ★★★☆☆
                    </div>
                    <p class="text-gray-600 mt-4">
                        "The service was okay, but it took longer than expected."
                    </p>
                    <p class="text-sm text-gray-400 mt-4 text-right">January 8, 2025</p>
                </div>
            </div>
        </div>
    </div>

</body>
<footer class="bg-black text-white">
  <!-- Top Section -->
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 py-8 px-4 text-sm border-b border-gray-700">
    <!-- Feature 1 -->
    <div class="flex items-start space-x-3">
      <div class="bg-gray-800 p-2 rounded-lg">
        <i class="fas fa-truck text-2xl text-white"></i>
      </div>
      <div>
        <h5 class="font-semibold">Free Delivery</h5>
        <p>Dispatched within 24-48 hours</p>
      </div>
    </div>
    <!-- Feature 2 -->
    <div class="flex items-start space-x-3">
      <div class="bg-gray-800 p-2 rounded-lg">
        <i class="fas fa-info-circle text-2xl text-white"></i>
      </div>
      <div>
        <h5 class="font-semibold">24/7 Support Available</h5>
        <p>Secure Shopping</p>
      </div>
    </div>
    <!-- Feature 3 -->
    <div class="flex items-start space-x-3">
      <div class="bg-gray-800 p-2 rounded-lg">
        <i class="fas fa-tags text-2xl text-white"></i>
      </div>
      <div>
        <h5 class="font-semibold">Best Prices & Offers</h5>
        <p>Value for Money</p>
      </div>
    </div>
    <!-- Feature 4 -->
    <div class="flex items-start space-x-3">
      <div class="bg-gray-800 p-2 rounded-lg">
        <i class="fas fa-undo text-2xl text-white"></i>
      </div>
      <div>
        <h5 class="font-semibold">Easy Return</h5>
        <p>30 Days Return Available</p>
      </div>
    </div>
  </div>

  <!-- Navigation Links -->
  <div class="container mx-auto py-6 px-4 text-center text-black-400 text-sm">
    <a href="#" class="hover:underline">Home Office Desks</a> |
    <a href="#" class="hover:underline">Pet Supplies</a> |
    <a href="#" class="hover:underline">Sporting Goods</a> |
    <a href="#" class="hover:underline">Toys & Hobbies</a> |
    <a href="#" class="hover:underline">Home & Garden</a> |
    <a href="#" class="hover:underline">Phones & Accessories</a> |
    <a href="#" class="hover:underline">Home Appliances</a> |
    <a href="#" class="hover:underline">Business</a>
  </div>

  <!-- Bottom Section -->
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 py-8 px-4 text-sm">
    <!-- About Us -->
    <div>
      <h5 class="font-semibold mb-4">About Us</h5>
      <p>SportHive is your go-to destination for all things sports. We offer premium equipment for athletes and sports enthusiasts at competitive prices.</p>
    </div>
    <!-- Information Links -->
    <div>
      <h5 class="font-semibold mb-4">Information</h5>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">Products</a></li>
        <li><a href="#" class="hover:underline">About Us</a></li>
        <li><a href="#" class="hover:underline">Contact Us</a></li>
        <li><a href="#" class="hover:underline">Cart</a></li>
      </ul>
    </div>
    <!-- Policies -->
    <div>
      <h5 class="font-semibold mb-4">Policy</h5>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
        <li><a href="#" class="hover:underline">Terms of Service</a></li>
        <li><a href="#" class="hover:underline">Shipping Policy</a></li>
        <li><a href="#" class="hover:underline">Refund Policy</a></li>
        <li><a href="#" class="hover:underline">Warranty</a></li>
      </ul>
    </div>
    <!-- Contact Us -->
    <div>
      <h5 class="font-semibold mb-4">Contact Us</h5>
      <p>For any inquiries or support, feel free to reach out:</p>
      <p class="mt-2">Phone: +1 800 123 456</p>
      <p>Email: info@sportshive.com</p>
      <p>Address: 123 SportHive Lane, Fitness City</p>
    </div>
  </div>
</footer>
</html>

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
          <img src="../sportshive/images/logo12.png" alt="Logo" class="w-20 h-20">
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
                href="../sportshive/views/signin.php" 
                class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                <i class="fas fa-user"></i>
                <span>Sign Up</span>
            </a>

            <!-- Log In Button -->
            <a 
                href="../sportshive/views/login.php" 
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
    <div class="flex justify-center space-x-6 py-4">
      <a href="../sportshive/index.php" class="text-black">Home</a>
      <a href="../sportshive/views/services.php" class="text-black">Services</a>
      <a href="../sportshive/views/contactus.php" class="text-black">Contact Us</a>
      <a href="../sportshive/views/aboutus.php" class="text-black">About Us</a>
  </div>
  </nav>

  <!-- Collapsible Menu -->
  <div id="menu-links" class="hidden flex-col bg-gray-700 border border-gray-700 rounded-lg shadow-lg w-full z-40">
    <!-- Sports Section -->
    <div class="relative">
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Sports
      </button>
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
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Brands
      </button>
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
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Repair and Services
      </button>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">Maintenance Packages</a>
        </div>
      </div>
    </div>

    <!-- Others Section -->
    <div class="relative">
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Others
      </button>
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
<body class="bg-gray-800">
        <!-- Main Content -->
        <main class="flex-1 container mx-auto py-8">
            <!-- Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card: Total Products -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold">Total Products</h2>
                    <p class="text-4xl font-bold text-blue-600">150</p>
                </div>

                <!-- Card: Total Orders -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold">Total Orders</h2>
                    <p class="text-4xl font-bold text-green-600">85</p>
                </div>

                <!-- Card: Total Users -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold">Total Users</h2>
                    <p class="text-4xl font-bold text-yellow-600">42</p>
                </div>

                <!-- Card: Revenue -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold">Revenue</h2>
                    <p class="text-4xl font-bold text-red-600">$12,345</p>
                </div>
            </div>

            <!-- Charts and Tables Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Sales Chart -->
                <div class="p-6 bg-white shadow-lg rounded-lg col-span-2">
                    <h2 class="text-xl font-semibold mb-4">Monthly Sales</h2>
                    <canvas id="salesChart"></canvas>
                </div>

                <!-- Notifications -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Notifications</h2>
                    <div class="container mx-auto py-8">
                        <h1 class="text-2xl font-bold mb-4">Low Stock Alerts</h1>

                        <!-- Alert Section -->
                        <div id="alert-container"></div>
                    </div>

                        <script>
                            // Sample low stock products data
                            const lowStockProducts = [
                                { name: "Football", stock: 5, low_stock_threshold: 10 },
                                { name: "Tennis Racket", stock: 2, low_stock_threshold: 5 },
                                { name: "Basketball", stock: 8, low_stock_threshold: 10 }
                            ];

                            // Reference to the alert container
                            const alertContainer = document.getElementById('alert-container');

                            // Function to display alerts
                            function displayLowStockAlerts(products) {
                                if (products.length > 0) {
                                    const alertHTML = `
                                        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4">
                                            <p><strong>Attention:</strong> The following products are low in stock:</p>
                                            <ul class="mt-2">
                                                ${products.map(product => `
                                                    <li>
                                                        <strong>${product.name}</strong> 
                                                        (Stock: ${product.stock}, Threshold: ${product.low_stock_threshold})
                                                    </li>
                                                `).join('')}
                                            </ul>
                                        </div>
                                    `;
                                    alertContainer.innerHTML = alertHTML;
                                } else {
                                    alertContainer.innerHTML = `
                                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                                            <p>All products are sufficiently stocked!</p>
                                        </div>
                                    `;
                                }
                            }

                            // Display alerts
                            displayLowStockAlerts(lowStockProducts);
                        </script>
                </div>
            </div>
            </div>
        </main>
        
        <script>
            
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [500, 1000, 1500, 2000, 2500, 3000],
                    borderColor: '#4CAF50',
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                }
            }
        });
        </script>
        <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-xl my-8">
        <h2 class="text-3xl font-bold mb-6 text-center text-indigo-600">Add New Item</h2>
        
        <!-- Add Item Form -->
        <div class="space-y-6">
            <div>
                <label for="item_name" class="block text-lg font-medium text-gray-700">Item Name:</label>
                <input type="text" id="item_name" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter item name">
            </div>

            <div>
                <label for="item_price" class="block text-lg font-medium text-gray-700">Price:</label>
                <input type="number" id="item_price" step="0.01" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter item price">
            </div>

            <div>
                <label for="item_description" class="block text-lg font-medium text-gray-700">Description:</label>
                <input type="text" id="item_description" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter item description">
            </div>

            <div>
                <label for="item_stock" class="block text-lg font-medium text-gray-700">Stock Quantity:</label>
                <input type="number" id="item_stock" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter stock quantity">
            </div>

            <button onclick="addItem()" class="w-full p-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Add Item</button>
        </div>
    </div>

    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-xl">
        <h2 class="text-3xl font-bold mb-6 text-center text-indigo-600">Item List</h2>
        <table class="min-w-full table-auto border-collapse shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="py-4 px-6 text-lg font-semibold text-left">Item Name</th>
                    <th class="py-4 px-6 text-lg font-semibold text-left">Price</th>
                    <th class="py-4 px-6 text-lg font-semibold text-left">Description</th>
                    <th class="py-4 px-6 text-lg font-semibold text-left">Stock Quantity</th>
                </tr>
            </thead>
            <tbody id="items_table">
                <!-- Items will be dynamically added here -->
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
session_start(); // Start the session
include 'connection.php'; // Include database connection

// Fetch items with stock less than or equal to 1 from brands_items table
$query = "SELECT item_name, item_stock FROM brands_items WHERE item_stock <= 1";
$result = $conn->query($query);

$lowStockProducts = [];
while ($row = $result->fetch_assoc()) {
    $lowStockProducts[] = [
        'item_name' => $row['item_name'],
        'item_stock' => $row['item_stock']
    ];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-pink-100">
<header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
        <!-- Logo -->
       <a href="#" class="flex items-center space-x-2">
         <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
       </a>
       <div class="text-2xl font-bold tracking-wide">
            Admin Dashboard
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
    <div class="flex">
        <!-- Sidebar Section (Left) -->
        <div class="w-1/4 bg-gray-900 p-6 space-y-6">
            <!-- Card: Total Products -->
            <a href="../views/addproduct.php"  class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer block">
                <h2 class="text-xl font-semibold">Add Products</h2>
            </a>


            <!-- Card: Total Orders -->
            <a href="../views/generate_report.php"  class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer block">
                <h2 class="text-xl font-semibold">Generate Report</h2>
            </a>

            <!-- Card: Total Users -->
            <a href="../views/manage_users.php"  class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer block">
                <h2 class="text-xl font-semibold">Managage Users</h2>
            </a>

            <!-- Card: Revenue -->
            <a href="../views/manage_orders.php"  class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer block">
                <h2 class="text-xl font-semibold">Managage Gift Orders</h2>
            </a>

        </div>

        <!-- Main Content Section (Right) -->
        <main class="flex-1 container mx-auto py-8">
            <!-- Charts and Tables Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Sales Chart -->
                <div class="p-6 bg-white shadow-lg rounded-lg col-span-2">
                    <h2 class="text-xl font-semibold mb-4">Daily User Registrations</h2>
                    <div style="height: 300px;">
                      <canvas id="registrationChart" width="400" height="200"></canvas>

                  </div>
                </div>

                <!-- Notifications -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                  <h2 class="text-xl font-semibold mb-4">Notifications</h2>
                  <div class="container mx-auto py-8">
                      <h1 class="text-2xl font-bold mb-4">Low Stock Alerts</h1>

                      <!-- Alert Section -->
                      <div id="alert-container">
                          <?php if (!empty($lowStockProducts)): ?>
                              <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4">
                                  <p><strong>Attention:</strong> The following products are out of stock:</p>
                                  <ul class="mt-2">
                                      <?php foreach ($lowStockProducts as $product): ?>
                                          <li>
                                              <strong><?= htmlspecialchars($product['item_name']); ?></strong>
                                              (Stock: <?= $product['item_stock']; ?>)
                                          </li>
                                      <?php endforeach; ?>
                                  </ul>
                              </div>
                          <?php else: ?>
                              <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                                  <p>All products are sufficiently stocked!</p>
                              </div>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
            </div>
        </main>
    </div>
    <!-- users reg Chart -->
    <script>
       document.addEventListener("DOMContentLoaded", function () {
      fetch('fetch_registration.php') // Fetch PHP data
          .then(response => response.json()) // Convert response to JSON
          .then(data => {
              console.log("Fetched Data:", data); // Debugging log

              if (!data.dates || !data.counts || data.dates.length === 0) {
                  console.error("No data available");
                  return;
              }

              // Format dates for better readability (e.g., Feb 14)
              const formattedDates = data.dates.map(date => {
                  let d = new Date(date);
                  return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
              });

              // Get canvas context
              const ctx = document.getElementById('registrationChart').getContext('2d');

              new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: formattedDates, // X-Axis (Dates)
                      datasets: [{
                          label: 'New Users Registered',
                          data: data.counts, // Y-Axis (User Counts)
                          backgroundColor: 'rgba(54, 162, 235, 0.2)',
                          borderColor: 'rgba(54, 162, 235, 1)',
                          borderWidth: 2,
                          tension: 0.3, // Smooth curve
                          pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                          pointRadius: 5,
                          pointHoverRadius: 7,
                          fill: true
                      }]
                  },
                  options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      scales: {
                          y: {
                              beginAtZero: true,
                              title: { display: true, text: 'Number of Users' }
                          },
                          x: {
                              title: { display: true, text: 'Date' }
                          }
                      }
                  }
              });
          })
          .catch(error => console.error('Error fetching data:', error));
  });

    </script>
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

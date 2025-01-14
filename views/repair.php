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
<body class="bg-gray-800">
    <!-- Repair Man Dashboard -->
    <main class="flex-1 container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-white mb-6">Maintenance Technician Dashboard</h1>

        <!-- Maintenance Requests Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Card: Maintenance Requests -->
            <div onclick="showModal('maintenance-requests')" class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer">
                <h2 class="text-xl font-semibold">Maintenance Requests</h2>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg relative">
                <!-- Close Button -->
                <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">
                    ✖
                </button>
                <!-- Modal Content -->
                <h2 id="modal-title" class="text-2xl font-bold mb-4">Title</h2>
                <div id="modal-body"></div>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            // Data for maintenance requests
            const maintenanceData = {
                "maintenance-requests": [
                    { id: 1, customer: "Damya", equipment: "Treadmill", issue: "Motor malfunction", status: "Pending" },
                    { id: 2, customer: "Anjali", equipment: "Exercise Bike", issue: "Broken pedal", status: "Pending" }
                ]
            };

            // Function to show the modal with content
            function showModal(section) {
                const modal = document.getElementById("modal");
                const title = section === 'maintenance-requests' ? "Maintenance Requests" : "Repair History";
                const data = maintenanceData[section] || [];

                // Update modal content
                document.getElementById("modal-title").textContent = title;

                let content = `<ul class="space-y-4">`;
                data.forEach((task) => {
                    content += `
                        <li class="border-b-2 pb-4">
                            <strong>Customer:</strong> ${task.customer} <br>
                            <strong>Equipment:</strong> ${task.equipment} <br>
                            <strong>Issue:</strong> ${task.issue} <br>
                            <strong>Status:</strong> ${task.status} <br>
                            <button class="text-blue-500 mt-2" onclick="acceptRequest(${task.id}, '${section}')">Accept Request</button>
                            <button class="text-green-500 mt-2 ml-2" onclick="updateStatus(${task.id}, '${section}')">Update Status</button>
                        </li>
                    `;
                });
                content += `</ul>`;

                document.getElementById("modal-body").innerHTML = content;

                // Display the modal
                modal.classList.remove("hidden");
            }

            // Function to accept a maintenance request
            function acceptRequest(id, section) {
                const taskIndex = maintenanceData[section].findIndex(task => task.id === id);
                if (taskIndex !== -1) {
                    // Change the status to 'In Progress'
                    maintenanceData[section][taskIndex].status = 'In Progress';

                    // Refresh the modal to show the updated status
                    showModal(section);
                }
            }

            // Function to update the status of a maintenance task (e.g., mark it as completed)
            function updateStatus(id, section) {
                const newStatus = prompt("Enter new status (e.g., In Progress, Completed):");
                if (newStatus) {
                    const taskIndex = maintenanceData[section].findIndex(task => task.id === id);
                    if (taskIndex !== -1) {
                        maintenanceData[section][taskIndex].status = newStatus;

                        // Refresh the modal to show the updated data
                        showModal(section);
                    }
                }
            }

            // Function to close the modal
            function closeModal() {
                const modal = document.getElementById("modal");
                modal.classList.add("hidden");
            }
        </script>
    </main>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Customer Feedback</h1>

        <!-- Feedback List -->
        <div class="space-y-6">
            <!-- Feedback Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border-l-4 border-blue-500">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center text-xl font-semibold">J</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Janithi</h3>
                        <small class="text-sm text-gray-500">Customer</small>
                    </div>
                </div>
                <p class="text-gray-700 mt-2">The service was excellent, and I am very satisfied with the product quality. Highly recommend!</p>
                <small class="text-gray-500 block mt-4">Submitted on: 2025-01-12</small>
            </div>

            <!-- Feedback Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border-l-4 border-green-500">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center text-xl font-semibold">J</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Jayani</h3>
                        <small class="text-sm text-gray-500">Customer</small>
                    </div>
                </div>
                <p class="text-gray-700 mt-2">The website was easy to navigate, and my order arrived on time. I will definitely order again.</p>
                <small class="text-gray-500 block mt-4">Submitted on: 2025-01-11</small>
            </div>

            <!-- Feedback Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border-l-4 border-purple-500">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-purple-500 text-white rounded-full flex items-center justify-center text-xl font-semibold">S</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Sasanka</h3>
                        <small class="text-sm text-gray-500">Customer</small>
                    </div>
                </div>
                <p class="text-gray-700 mt-2">Great customer support! They resolved my issue quickly, and I am happy with the resolution.</p>
                <small class="text-gray-500 block mt-4">Submitted on: 2025-01-10</small>
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


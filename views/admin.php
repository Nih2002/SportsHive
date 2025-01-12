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
    <div class="flex">
        <!-- Sidebar Section (Left) -->
        <div class="w-1/4 bg-gray-900 p-6 space-y-6">
            <!-- Card: Total Products -->
            <div onclick="showModal('total-products')" class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer">
                <h2 class="text-xl font-semibold">Total Products</h2>
            </div>

            <!-- Card: Total Orders -->
            <div onclick="showModal('total-orders')" class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer">
                <h2 class="text-xl font-semibold">Total Orders Per Day</h2>
            </div>

            <!-- Card: Total Users -->
            <div onclick="showModal('total-users')" class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer">
                <h2 class="text-xl font-semibold">Total Users</h2>
            </div>

            <!-- Card: Revenue -->
            <div onclick="showModal('revenue')" class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 cursor-pointer">
                <h2 class="text-xl font-semibold">Revenue</h2>
            </div>
        </div>

        <!-- Main Content Section (Right) -->
        <main class="flex-1 container mx-auto py-8">
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
                                const alertHTML = 
                                    `<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4">
                                        <p><strong>Attention:</strong> The following products are low in stock:</p>
                                        <ul class="mt-2">
                                            ${products.map(product => 
                                                `<li>
                                                    <strong>${product.name}</strong> 
                                                    (Stock: ${product.stock}, Threshold: ${product.low_stock_threshold})
                                                </li>`
                                            ).join('')}
                                        </ul>
                                    </div>`;
                                alertContainer.innerHTML = alertHTML;
                            } else {
                                alertContainer.innerHTML = 
                                    `<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                                        <p>All products are sufficiently stocked!</p>
                                    </div>`;
                            }
                        }

                        // Display alerts
                        displayLowStockAlerts(lowStockProducts);
                    </script>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg relative">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">
                ✖
            </button>
            <!-- Modal Content -->
            <h2 id="modal-title" class="text-2xl font-bold mb-4">Title</h2>
            <p id="modal-body">Content goes here...</p>
        </div>
    </div>

    <!-- Updated Modal Content with Delete and Update for Items -->
    <script>
        // Content for each section with dynamic sports
        const contentData = {
            "total-products": {
                title: "Total Products in each Sport",
                body: "Details about all the products listed in your inventory by sport.",
                sports: [
                    { name: "Athletic", items: [] },
                    { name: "Cricket", items: [] },
                    { name: "Swimming", items: [] },
                    { name: "Basketball", items: [] },
                    { name: "Volleyball", items: [] },
                    { name: "Netball", items: [] }
                ]
            },
            "total-orders": {
                title: "Total Orders",
                body: "Here are the details about the orders placed by customers."
            },
            "total-users": {
                title: "Total Users",
                body: "Here are the details about registered users on your platform."
            },
            "revenue": {
                title: "Revenue",
                body: "Here is the information about the revenue generated from sales."
            }
        };

        // Function to show the modal with content
        function showModal(section) {
            const modal = document.getElementById("modal");
            const title = contentData[section].title;
            const body = contentData[section].body;
            const sports = contentData[section].sports || [];

            // Update modal content
            document.getElementById("modal-title").textContent = title;
            document.getElementById("modal-body").textContent = body;

            // Create dynamic content for sports
            if (sports.length > 0) {
                let sportsContent = `<h3 class="text-lg font-semibold">Sports Products</h3><ul class="space-y-4">`;
                sports.forEach((sport, index) => {
                    sportsContent += `
                        <li>
                            <h4 class="text-md font-medium">${sport.name}</h4>
                            <ul class="list-disc pl-5">
                                ${sport.items.length > 0 ? sport.items.map((item, itemIndex) => `
                                    <li>
                                        ${item}
                                        <button class="text-blue-800 ml-2" onclick="updateItem(${index}, ${itemIndex})">Update</button>
                                        <button class="text-red-800 ml-2" onclick="deleteItem(${index}, ${itemIndex})">Delete</button>
                                    </li>
                                `).join('') : `<li>No items added yet</li>`}
                            </ul>
                            <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded" onclick="addItemToSport(${index})">Add Item</button>
                        </li>
                    `;
                });
                sportsContent += `</ul>`;

                // Inject sports content into the modal
                document.getElementById("modal-body").innerHTML = sportsContent;
            }

            // Display the modal
            modal.classList.remove("hidden");
        }

        // Function to add an item to a specific sport
        function addItemToSport(sportIndex) {
            const itemName = prompt("Enter the item name to add:");
            if (itemName) {
                contentData["total-products"].sports[sportIndex].items.push(itemName);
                showModal("total-products"); // Re-render the modal with updated list
            }
        }

        // Function to delete an item from a specific sport
        function deleteItem(sportIndex, itemIndex) {
            if (confirm("Are you sure you want to delete this item?")) {
                contentData["total-products"].sports[sportIndex].items.splice(itemIndex, 1); // Remove the item from the array
                showModal("total-products"); // Re-render the modal with updated list
            }
        }

        // Function to update an item in a specific sport
        function updateItem(sportIndex, itemIndex) {
            const newItemName = prompt("Enter the new item name:", contentData["total-products"].sports[sportIndex].items[itemIndex]);
            if (newItemName) {
                contentData["total-products"].sports[sportIndex].items[itemIndex] = newItemName; // Update the item
                showModal("total-products"); // Re-render the modal with updated list
            }
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById("modal");
            modal.classList.add("hidden");
        }
    </script>



    <!-- Sales Chart -->
    <script>
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

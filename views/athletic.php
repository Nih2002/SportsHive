<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Athletic</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                  <a href="../views/signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                    <i class="fas fa-user"></i>
                    <span>Sign Up</span>
                  </a>

                  <!-- Log In Button -->
                  <a href="../views/login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
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
  <div class="h-96 bg-cover bg-center" style="background-image: url('../images/sportsback1.jpg');">
    <body class="bg-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-center h-96">
            <!-- Text Section -->
            <div class=" p-8 bg-white shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Athletic<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">Push your limits and redefine greatness. Our athletic gear is designed to fuel your passion, power your performance,
             and keep you moving in style. Unleash your inner champion.</p></div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="../images/athletic1.png" alt="Jumping athlete" class="w-full h-full object-cover">
            </div>
        </div>
  </div>

  <!-- first product section-->
  <div class="grid grid-cols-4 gap-6">
  <div class="col-span-1 bg-cyan-400 border border-gray-300 p-4 shadow-md">
  <div class=" bg-cyan-400 p-4 shadow-md">
    
  <!-- Product Categories Section -->
      <div class="mb-6">
        <h3 class="text-lg font-bold mb-4">Product Categories</h3>
        <ul class="space-y-2">
          <li>
            <a href="../views/cricket.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Cricket <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/swimming.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Swimming <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/vollyball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Volleyball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/rugby.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Rugby <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/netball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Netball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/football1.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Football <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/cycling.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Cycling <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/basketball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Basketball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/athletic.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Athletic <span class="text-gray-500">+</span>
            </a>
          </li>
        </ul>
      </div>

  <!-- Brands Section -->
      <div>
        <h3 class="text-lg font-bold mb-4">Brands</h3>
        <ul class="space-y-2">
          <li class="flex items-center">
            <input type="checkbox" id="yonex" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="yonex" class="ml-2 text-sm text-gray-700">Yonex (75)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="stanfords" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="stanfords" class="ml-2 text-sm text-gray-700">Stanfords - SF (116)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="kaygee" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="kaygee" class="ml-2 text-sm text-gray-700">Kay Gee (23)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="texstretch" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="texstretch" class="ml-2 text-sm text-gray-700">Texstretch (36)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="lining" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="lining" class="ml-2 text-sm text-gray-700">Li-Ning (60)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="ss" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="ss" class="ml-2 text-sm text-gray-700">SS (1)</label>
          </li>
        </ul>
      </div>
</div>
</div>
<div class="col-span-3 max-w-7xl mx-auto py-12 px-4">
        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h2 class="text-xl text-gray-500 font-semibold">Our Products</h2>
            <h1 class="text-4xl font-bold text-gray-800">OUR SPIKES SHOES</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Nike Maxfly 2 Track & Field Sprinting Spikes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="115" data-name="2 Track & Field Sprinting Spikes" data-price="21000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike2.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">NIVIA Stride 3.0 Athletic Spikes Track & Field Shoes for Men </h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 19000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="116" data-name="Athletic Spikes Track & Field Shoes" data-price="19000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike3.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">NIVIA Men Zion-1 Running Spikes Shoes for Track & Field</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 12800.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="117" data-name="NIVIA Men Zion-1 Running Spikes Shoes" data-price="12800">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 4.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Vector X Bolted Running/Track and Field Spike Shoes for Men Women</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 15200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-green-400 hover:ring-2 hover:ring-red-300" data-color="green"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-400 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="118" data-name="Vector X Bolted Running/Track and Field Spike Shoes" data-price="15200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 5.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Aivin Furious Spike Running Shoes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 14500.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-800 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>
            </div>
            
        </div>

        <div class="max-w-7xl mx-auto py-12 px-4 ">
        
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 6.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Striter Optimus Unisex Athletic Spike Shoes Running Spike Shoes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-400 hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="119" data-name="Striter Optimus Unisex Athletic Spike Shoes Running Spike Shoes" data-price="21000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 7.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">ATE Sprint Gold Running Shoe- Elevate Your Run with Precisi</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 17000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 7</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 8</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">OUR ATHLETIC EQUIPMENT</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/hur men.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Hurdles</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="120" data-name="Hurdles" data-price="10000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/hru1.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Steeplechase hurdles</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/hur2.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Agility hurdles</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="121" data-name="Agility hurdles" data-price="21000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/for women.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Hurdles for Women</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8900.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="122" data-name="Hurdles for Women" data-price="8900">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/javlin.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Javelin</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11100.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="123" data-name="Javelin" data-price="11100">ADD TO CART</button>
                </div>
                </a>
            </div>
            </div>
            
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 ">
        
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/dicus.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">1Kg Discus</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1100.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/hammer.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">1Kg Hammer</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 12200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="124" data-name="1Kg Hammer" data-price="12200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/pat.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">1Kg Shot Put</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2900.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="125" data-name="1Kg Shot Put" data-price="2900">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/highjump.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">High Jump Metres</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/rely.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Rely Button</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8300.00</h4>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-800 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-yellow-400 hover:ring-2 hover:ring-red-300" data-color="yellow"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="126" data-name="Rely Button" data-price="8300">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">OUR ATHLETIC CLOTHINGS</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Walking Bottom</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="127" data-name="Walking Bottom" data-price="10000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Women's Cross country Skiing Trousers</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Women's thermal leggings and tights</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5900.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="128" data-name="Women's thermal leggings and tights" data-price="5900">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Men’s warm adjustable ski trousers</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1900.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold"> Shorts with Zip Pockets</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1100.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="129" data-name="Shorts with Zip Pockets" data-price="1100">ADD TO CART</button>
                </div>
                </a>
            </div>
            </div>
            
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 ">
        
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bottom5.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Athletic Bottoms Jogger Track Pant</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="130" data-name="Athletic Bottoms Jogger Track Pant" data-price="1000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt1.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold"> Sports T-Shirt | Men's Sportswear</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="131" data-name=" Sports T-Shirt | Men's Sportswear" data-price="2200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold"> Long Sleeve T-Shirt</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2900.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="132" data-name="Long Sleeve T-Shirt" data-price="2900">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold"> schnell trocknende T-Shirts mit Logo im 2er-Pack</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt4.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Women's dri top fit tee shirts</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2300.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="133" data-name="Women's dri top fit tee shirts" data-price="2300">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 ">
        
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt5.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Women's Sports Drifit T-Shirts Short Sleeve Athletic Dry Fit Shirt For Women Running</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-yellow-400 hover:ring-2 hover:ring-red-300" data-color="yellow"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="134" data-name="Women's Sports Drifit T-Shirts Short Sleeve" data-price="1000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/shirt6.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Print Women's Athletic T-Shirt</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="135" data-name="Print Women's Athletic T-Shirt" data-price="2200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/scock1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mid Socks - Comfortable Running Socks |</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 290.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="136" data-name="Mid Socks - Comfortable Running Socks" data-price="290">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/scock2.jpg" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Athletic Socks Stance</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2100.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">Out of Stock</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/scock3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">5-Toe Vibram Coolmax Athletic Socks</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 270.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                    <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Small</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Medium</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Large</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-800 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="137" data-name="5-Toe Vibram Coolmax Athletic Socks" data-price="270">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>
      </div>
      </div>

      <script>
        // Initialize cart from session storage
        const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
        const cartCount = document.getElementById('cart-count');
        const cartModal = document.getElementById('cart-modal');
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');

        const updateCartCount = () => {
            cartCount.textContent = cart.length;
        };

        const renderCart = () => {
            cartItems.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
                const div = document.createElement('div');
                div.className = 'flex justify-between mb-4';
                div.innerHTML = `
                    <span>${item.name}</span>
                    <span>Rs. ${item.price}</span>
                `;
                cartItems.appendChild(div);
                total += item.price;
            });
            cartTotal.textContent = `Total: Rs. ${total}`;
        };

        // Handle adding items to the cart
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseInt(button.getAttribute('data-price'));
                const item = { id, name, price };

                // Add to cart and update session storage
                if (!cart.find(e => e.id === id)) {
                    cart.push(item);
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();
                    alert(`${name} added to cart!`);
                } else {
                    alert(`${name} is already in the cart.`);
                }
            });
        });

        // Open the cart modal
        document.getElementById('view-cart').addEventListener('click', () => {
            renderCart();
            cartModal.classList.remove('hidden');
        });

        // Close the cart modal
        document.getElementById('close-cart').addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });

        // Initial update of cart count
        updateCartCount();
    </script> 

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
        <div class="container mx-auto py-6 px-4 text-center text-gray-400 text-sm">
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

        <!-- Add FontAwesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </body>
    
</html>

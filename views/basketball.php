<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basketball</title>
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
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Basketball<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">TBasketball is not just a game; it's a passion, a challenge, and an opportunity to push beyond your limits. Equip yourself with the best gear, elevate your game, and be unstoppable on the court.</p></div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="../images/football.jpg" alt="Jumping athlete" class="w-auto h-80 object-cover">
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
            <h1 class="text-4xl font-bold text-gray-800">OUR BASKETBALL BOOTS & BALLS</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Kids' Basketball Shoes Fast 900 Low-1</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 2</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 3</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-purple-500 hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-orange-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="103" data-name="Kids' Basketball Shoes Fast 900 Low-1" data-price="9200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Mid-Rise Beginner Basketball Shoes SE100</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5000.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-blue-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="104" data-name="Mid-Rise Beginner Basketball Shoes SE100" data-price="5000">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Men's/Women's Basketball Shoes SE900</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 4990.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                    <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="105" data-name="Men's/Women's Basketball Shoes SE900" data-price="4990">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Kids' Intermediate Basketball Shoes SS500H</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="106" data-name="Kids' Intermediate Basketball Shoes" data-price="9200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Men's/Women's Basketball Shoes 900</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 7790.00</h4>
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
                <img src="../images/bshose6.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Hoops 3.0 Mid Lifestyle Basketball Classic Vintage Shoes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9100.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex flex-wrap justify-center gap-2 mt-2">
                      <li>
                          <button type="button" class="size-option px-4 py-2 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                      </li>
                      <li>
                          <button type="button" class="size-option px-4 py-2 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
                      </li>
                      <li>
                          <button type="button" class="size-option px-4 py-2 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="6">Size 6</button>
                      </li>
                      <li>
                          <button type="button" class="size-option px-4 py-2 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="7">Size 7</button>
                      </li>
                      <li>
                          <button type="button" class="size-option px-4 py-2 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="8">Size 8</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
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
                animate-bounce shadow-md" data-id="107" data-name="Basketball Classic Vintage Shoes" data-price="9100">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose7.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Sneakers Nike Precision 5, Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8600.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                animate-bounce shadow-md" data-id="108" data-name="Sneakers Nike Precision 5, Black" data-price="8600">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose8.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">2 Pairs Womens Walking Boot High Performance Polyester Running Socks</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 920.00</h4>
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
                <img src="../images/bshose9.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">1 Pack Ladies Activ QTR Repreve Socks</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-green-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
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
                animate-bounce shadow-md" data-id="109" data-name="1 Pack Ladies Activ QTR Repreve Socks" data-price="1200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bshose10.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">3 Pairs Mens Cotton Thick Cushioned Terry Sport Socks</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1400.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
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
                animate-bounce shadow-md" data-id="110" data-name="3 Pairs Mens Cotton Thick Cushioned Terry Sport Socks" data-price="1400">ADD TO CART</button>
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
                <img src="../images/bball1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Size 7 Basketball BT500 - Brown/FIBA</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9100.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 hover:ring-red-300" data-color="yellow"></button>
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
                animate-bounce shadow-md" data-id="111" data-name="Size 7 Basketball BT500 - Brown/FIBA" data-price="9100">ADD TO CART</button>
                </div>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bball2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Size 7 Basketball NBA Team Tribute Lakers - Purple/Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8600.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-purple-500 hover:ring-2 hover:ring-red-300" data-color="purple"></button>
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
                animate-bounce shadow-md" data-id="112" data-name="Size 7 Basketball NBA Team Tribute Lakers" data-price="8600">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bball3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Kids' Rubber Basketball Size 3 K500 - Blue/Red</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 920.00</h4>
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
                <img src="../images/bball4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Kids'/Adult Size 7 Basketball R100 - Orange.</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="113" data-name="Kids'/Adult Size 7 Basketball R100 - Orange." data-price="1200">ADD TO CART</button>
                </div>
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bball5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">3Elite Championship 2.0 Logo Basketball</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1400.00</h4>
                <!-- Sizes Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Sizes:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="4">Size 4</button>
                        </li>
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 5</button>
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
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="114" data-name="3Elite Championship 2.0 Logo Basketball" data-price="1400">ADD TO CART</button>
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


    <script>
      document.addEventListener('DOMContentLoaded', () => {
    let selectedSize = null;
    let selectedColor = null;

    // Handle size selection
    document.querySelectorAll('.size-option').forEach(sizeBtn => {
        sizeBtn.addEventListener('click', (e) => {
            // Remove highlight from previously selected size
            document.querySelectorAll('.size-option').forEach(btn => btn.classList.remove('bg-gray-300'));

            // Highlight the selected size
            e.target.classList.add('bg-gray-300');

            // Store the selected size
            selectedSize = e.target.dataset.size;
            console.log(`Selected Size: ${selectedSize}`);
        });
    });

    // Handle color selection
    document.querySelectorAll('.color-option').forEach(colorBtn => {
        colorBtn.addEventListener('click', (e) => {
            // Remove highlight from previously selected color
            document.querySelectorAll('.color-option').forEach(btn => btn.classList.remove('ring-2', 'ring-offset-2'));

            // Highlight the selected color
            e.target.classList.add('ring-2', 'ring-offset-2');

            // Store the selected color
            selectedColor = e.target.dataset.color;
            console.log(`Selected Color: ${selectedColor}`);
        });
    });

    // Handle Add to Cart button
    document.querySelector('.add-to-cart').addEventListener('click', () => {
        if (!selectedSize || !selectedColor) {
            alert('Please select a size and a color before adding to cart.');
            return;
        }

        const productId = document.querySelector('.add-to-cart').dataset.id;
        const productName = document.querySelector('.add-to-cart').dataset.name;
        const productPrice = document.querySelector('.add-to-cart').dataset.price;

        console.log(`Product Added to Cart:
            ID: ${productId},
            Name: ${productName},
            Price: ${productPrice},
            Size: ${selectedSize},
            Color: ${selectedColor}`);
    });

    document.querySelectorAll('.size-option').forEach(sizeBtn => {
    sizeBtn.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default button behavior
        document.querySelectorAll('.size-option').forEach(btn => btn.classList.remove('bg-gray-300'));
        e.target.classList.add('bg-gray-300');
        selectedSize = e.target.dataset.size;
    });
});

document.querySelectorAll('.color-option').forEach(colorBtn => {
    colorBtn.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default button behavior
        document.querySelectorAll('.color-option').forEach(btn => btn.classList.remove('ring-2', 'ring-offset-2'));
        e.target.classList.add('ring-2', 'ring-offset-2');
        selectedColor = e.target.dataset.color;
    });
});
});

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

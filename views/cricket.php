<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cricket</title>
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
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Cricket<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">Cricket is more than a game; it's a battle of endurance, strategy, and skill. Every ball is an opportunity to shine, every wicket is a chance to rise.</p></div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="../images/cricket2.jpg" alt="Jumping athlete" class="w-full h-80 object-cover">
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
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET SHOES</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshose1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Running Shoes | Lightweight | EVA | Ideal for Trail Running</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5200.00</h4>
                <!-- Star Rating -->
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
                        <li>
                            <button class="size-option px-2 py-1 bg-gray-200 rounded-full text-sm hover:bg-gray-300" data-size="5">Size 6</button>
                        </li>
                    </ul>
                </div>
                <!-- Colors Section -->
                <div class="text-gray-700 text-sm mt-4">
                    <p class="font-medium">Available Colors:</p>
                    <ul class="flex justify-center space-x-2 mt-2">
                    <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-400 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
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
                animate-bounce shadow-md" data-id="76" data-name="Running Shoes" data-price="5200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshose2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">NDSC Belter Cricket Shoes | Eva Sock Liner | Lightweight Outsole | Durable</h3>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-200 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="77" data-name="NDSC Belter Cricket Shoes" data-price="5000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshose3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">GM Kryos Rubber Soled Adult Cricket Shoe</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5100.00</h4>
                <!-- Star Rating -->
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
            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshose4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">DSC Rigor X Junior Rubber Cricket Shoes - White / Red </h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
                <!-- Star Rating -->
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
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshose5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">ASS SMACKER Cricket Shoe</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 13500.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="78" data-name="ASS SMACKER Cricket Shoe" data-price="13500">ADD TO CART</button>
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
                <img src="../images/cshose6.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">DSC Belter Cricket Shoes | Material: Mesh</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 12000.00</h4>
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
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-cyan-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="79" data-name="DSC Belter Cricket Shoes" data-price="12000">ADD TO CART</button>
                </div>
                </a>
            </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET CLOTHINGS</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cbottom1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">T20 Matrix Playing Trouser|Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="80" data-name="T20 Matrix Playing Trouser|Black" data-price="10000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cbottom2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Pro Performance Trousers, Ivory</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/cbottom3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">AMatrix V2 T20 Playing Trouser, Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2300.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="81" data-name="Matrix V2 T20 Playing Trouser, Black" data-price="2300">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cbottom4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Storm Jacket, Green</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11900.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="82" data-name="Storm Jacket, Green" data-price="11900">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshirt1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Pro Performance Short Sleeve Men's T-Shirt, Navy</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21100.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="83" data-name="Pro Performance Short Sleeve Men's T-Shirt, Navy" data-price="21100">ADD TO CART</button>
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
                <img src="../images/cshirt2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Unisex Adult Pro Player Cricket Shirt (White)</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1700.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-green-500 hover:ring-2 hover:ring-red-300" data-color="green"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="84" data-name="Unisex Adult Pro Player Cricket Shirt" data-price="1700">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cshirt3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Storm Hooded Top,Green</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/cshirt4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Matrix T-Shirt|Red</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2900.00</h4>
                <!-- Star Rating -->
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
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET EQUIPMENT</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bat1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">CRICKET PRACTICE MIDDLING BAT</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-blue-400 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="85" data-name="CRICKET PRACTICE MIDDLING BAT" data-price="10000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bat2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">KIDS CRICKET BAT- MY FIRST BAT TURQ</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="86" data-name="KIDS CRICKET BAT- MY FIRST BAT TURQ" data-price="11000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bat3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC Lava Kashmir Willow Cricket Bat Short Handle</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8900.00</h4>
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
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="87" data-name="DSC Lava Kashmir Willow Cricket Bat Short Handle" data-price="8900">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bat4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Stealth 5.1 English Willow 2024 Cricket Bat (Beige)</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9900.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/bat5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Vapour Academy Bat, Natural</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
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
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="88" data-name="Vapour Academy Bat, Natural" data-price="11000">ADD TO CART</button>
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
                <img src="../images/ball1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mens Supaball Indoor Cricket Ball (Red)</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1500.00</h4>
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
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-green-400 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
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
                <img src="../images/ball2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC Grade Leather Cricket Ball (White)| Water Proofed Leather | Top Quality Cork</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5200.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-500 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="89" data-name="DSC Grade Leather Cricket Ball" data-price="5200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/ball3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Windball Cricket Ball (Pink)</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 32000.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="90" data-name="Windball Cricket Ball (Pink)" data-price="32000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/ball4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mens Club Leather Cricket Ball (Red)</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="91" data-name="Mens Club Leather Cricket Ball (Red)" data-price="21000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/ball5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC Swing Bolt Tennis Cricket Ball</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 31300.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-red-500 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-green-500 hover:ring-2 hover:ring-red-300" data-color="green"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="92" data-name="DSC Swing Bolt Tennis Cricket Ball" data-price="31300">ADD TO CART</button>
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
                <img src="../images/bag1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">GM 909 Grey / Black Wheelie Cricket Bag</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/bag2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC Intense Rage Kit Bag | Anti-Scuff Corner Protection | Durable & Classy</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 52200.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="93" data-name="DSC Intense Rage Kit Bag" data-price="52200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bag3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">SS Super Select Cricket Kit Bag</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6290.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/bag4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">SS 0010 Cricket Kit Bag</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 22100.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="94" data-name="SS 0010 Cricket Kit Bag" data-price="22100">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/bag5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">GN350 Team Wheelie Bag, Black / Silver</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 22570.00</h4>
                <!-- Star Rating -->
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
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET PROTECTION</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/helmet1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Pro 600 Cricket Batting Helmet Junior Small</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6000.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-blue-800 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="95" data-name="Pro 600 Cricket Batting Helmet Junior Small" data-price="6000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/helmet2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">GM Purist Geo II Cricket Helmet Junior</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 11000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/helmet3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">SS Prince Cricket Helmet | Navy Blue | Mild Steel Grill | Eva Padding</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6500.00</h4>
                <!-- Star Rating -->
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
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/helmet4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Elite Helmet, Navy</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8000.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-black hover:ring-2 hover:ring-red-300" data-color="black"></button>
                        </li>
                        <li>
                            <button class="color-option w-6 h-6 rounded-full bg-blue-600 hover:ring-2 hover:ring-red-300" data-color="blue"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="96" data-name="Elite Helmet, Navy" data-price="8000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/helmet5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Ultimate 360 Helmet, Maroon</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 12000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/pad1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Kookaburra Rapid 4.1 Cricket Batting Pads Adult</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2500.00</h4>
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
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="97" data-name="Kookaburra Rapid 4.1 Cricket Batting Pads Adult" data-price="21500">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/pad2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">GM Kryos 505 Cricket Batting Pads</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 3200.00</h4>
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
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="98" data-name="GM Kryos 505 Cricket Batting Pads" data-price="3200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/pad3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Pro Performance Abdo Guard, White</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/pad4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">All In One Academy Thigh Pads, White, LH</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 21000.00</h4>
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
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="99" data-name="All In One Academy Thigh Pads, White, LH" data-price="21000">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/gl1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Kookaburra Kahuna 6.1 Cricket batting gloves</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 3000.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-gray-500 hover:ring-2 hover:ring-red-300" data-color="gray"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="100" data-name="Kookaburra Kahuna 6.1 Cricket batting gloves" data-price="3000">ADD TO CART</button>
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
                <img src="../images/gl2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC Intense Attitude Wicket keeping Gloves | Rubber Grip in Palm Facing | Cotton</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
                <!-- Star Rating -->
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
                <img src="../images/gl3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">DSC 1501813 Speed Cricket Wicket Keeping Inner Gloves</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2200.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-yellow-200 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="101" data-name="DSC 1501813 Speed Cricket Wicket Keeping Inner Gloves" data-price="2200">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/gl4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">SG League Cricket Batting Gloves | Lightweight |Professional Grade Padded Gloves</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6290.00</h4>
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
                            <button class="color-option w-6 h-6 rounded-full bg-yellow-200 hover:ring-2 hover:ring-red-300" data-color="red"></button>
                        </li>
                    </ul>
                </div>
                <!-- Star Rating -->
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md" data-id="102" data-name="SG League Cricket Batting Gloves" data-price="6290">ADD TO CART</button>
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

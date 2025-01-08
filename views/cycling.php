<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cycling</title>
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
    <div class="container mx-auto max-w-[1600px] flex justify-between items-center py-2 px-6 text-sm bg-cyan-100 mx-96">
      <!-- Navigation Bar -->
      <nav class="relative bg-black shadow-md">
      <div class="relative z-50">
        <button id="menu-toggle" class="text-black-900 focus:outline-none">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <!-- Collapsible Menu -->
        <div id="menu-links" class="hidden absolute bg-black border border-gray-200 rounded-lg shadow-lg w-48 mt-2 z-50">
          <a href="../sportshive/views/index.php" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-t-lg">Home</a>
          <a href="../sportshive/views/aboutus.php" class="block px-4 py-3 text-white-600 hover:bg-green-100">About Us</a>
          <a href="#" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-b-lg">Contact Us</a>
          <a href="../sportshive/views/services.php" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-b-lg">Services</a>
          <a href="#" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-b-lg">F&Q</a>
        </div>
      </div>
      </nav>
      <!-- Left Links -->
      <div class="relative group">
        <button class="hover:bg-gray-700 px-4 py-2 rounded text-black font-semibold transition-colors">Sports</button>
        <!-- Dropdown Menu -->
        <div class="absolute hidden group-hover:block mt-1 bg-gray p-2 rounded-xl shadow-lg w-70 z-50 max-h-[80vh] overflow-y-auto">
          <!-- Cycling Section -->
          <div class="mb-4 group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors ">Cycling</h3>
          </div>

          <!-- Hiking Section -->
          <div class="mb-4 group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors ">Hiking</h3>
          </div>

          <!-- Running Section -->
          <div class="mb-4 group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors ">Running</h3>
          </div>

          <!-- Swimming Section -->
          <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors ">Swimming</h3>
          </div>

      </div>
    </div>

        <div class="relative group">
          <button class="hover:bg-gray-700 px-2 py-2 rounded text-black font-semibold transition-colors">Brands</button>
          <!-- Dropdown Menu -->
          <div class="absolute hidden group-hover:block mt-1 bg-gray p-4 rounded-xl shadow-lg w-80 z-50 max-h-[80vh] overflow-y-auto">
            <div class="grid grid-cols-3 gap-4">
              <!-- Column 1: 5 Brands -->
              <div class="col-span-1 space-y-2">
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">ADIDAS</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">SALOMON</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">KIPRUN</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">PUMA</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">ASICS</h3>
                </div>
              </div>

              <!-- Column 2: 3 Brands -->
              <div class="col-span-1 space-y-2">
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">OLAIAN</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">ROXY</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">ROCKRIDER</h3>
                </div>
              </div>

              <!-- Column 3: 2 Brands -->
              <div class="col-span-1 space-y-2">
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">KIPSTA</h3>
                </div>
                <div class="group bg-black p-2 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">DOMYOS</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="relative group">
          <button class="hover:bg-gray-700 px-4 py-2 rounded text-black font-semibold transition-colors">Repair and Services</button>
          <!-- Dropdown Menu -->
          <div class="absolute hidden group-hover:block mt-1 bg-gray p-4 rounded-xl shadow-lg w-80 z-50 max-h-[80vh] overflow-y-auto">
            <div class="grid grid-cols-2 gap-4">
              <!-- Column 1 -->
              <div class="col-span-1 space-y-2">
                <div class="group bg-black p-4 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">Repair with Us</h3>
                  <!-- Links -->
                  <ul class="mt-3 space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-red-500 font-medium transition-colors">Maintenance Packages</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="relative group">
          <button class="hover:bg-gray-700 px-4 py-2 rounded text-black font-semibold transition-colors">Others</button>
          <!-- Dropdown Menu -->
          <div class="absolute hidden group-hover:block mt-1 bg-gray p-4 rounded-xl shadow-lg w-80 z-50 max-h-[80vh] overflow-y-auto">
            <div class="grid grid-cols-2 gap-4">
              <!-- Column 1 -->
              <div class="col-span-1 space-y-2">
                <div class="group bg-black p-4 rounded-xl shadow-lg hover:bg-gray-800 transition-transform duration-300 transform hover:-translate-y-1">
                  <h3 class="font-semibold text-lg text-white group-hover:text-black-400 transition-colors">Repair with Us</h3>
                  <!-- Links -->
                  <ul class="mt-3 space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-red-500 font-medium transition-colors">Maintenance Packages</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


     
      <!-- Social Media Icons -->
      <div class="flex space-x-3">
        <a href="#" class="hover:opacity-75"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:opacity-75"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:opacity-75"><i class="fab fa-youtube"></i></a>
        <a href="#" class="hover:opacity-75"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
      

      <script>
        const menuToggle = document.getElementById("menu-toggle");
        const menuLinks = document.getElementById("menu-links");

        menuToggle.addEventListener("click", () => {
          menuLinks.classList.toggle("hidden");
        });
        
      </script>
      

  </header>
  <div style="background: url('../images/sportsback1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <body class="bg-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-center h-screen">
            <!-- Text Section -->
            <div class=" p-8 bg-white shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Cycling<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">Cricket is more than a game; it's a battle of endurance, strategy, and skill. Every ball is an opportunity to shine, every wicket is a chance to rise.</p></div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="https://i.pinimg.com/736x/e6/02/f7/e602f74bcf641dfacee27b2efb04c91d.jpg" alt="Jumping athlete" class="w-full h-full object-cover">
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
            <h1 class="text-4xl font-bold text-gray-800">OUR Cycle</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Mountain Bike Expl 500 - Orange</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 52200.00</h4>
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
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Electric Hardtail MTB Bike E-ST 900 - Grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 65000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Mountain Bike Expl 120 - White</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 5100.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Road Bike NCR CF Tiagra - Blue </h3>
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
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg tracking-wide font-bold">Tilt 120 folding bike - grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 13500.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
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
                <img src="../images/cycle6.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">Single Speed City Bike 500 - Carbon Grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 52000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle7.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">Electric Cargo Bike Rear loading longtail R500</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 72000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cycle8.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">Riverside 120 Hybrid Bike - Grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 78000.00</h4>
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
            <h1 class="text-4xl font-bold text-gray-800">OUR CYCLING HELMETS</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/chelmet1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">TRoadR 500 Road Cycling Helmet - White</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/chelmet2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mountain Bike Helmet EXPL 500 - Black</h3>
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
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/chelmet3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">City Cycling Bowl Helmet - Beige</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2300.00</h4>
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
                <img src="../images/chelmet4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">RoadR 500 Road Cycling Helmet - Neon Yellow</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1900.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/chelmet5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">PAdult Mountain Bike Helmet Expl 500 - Green</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1100.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
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
                <img src="../images/chelmet6.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">500 Children's Helmet - Pink</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1700.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">OUR CYCLING SHOSES</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cyshose1.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mountain Bike Shoes Race 700 - Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 10000.00</h4>
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
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/cyshose2.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Mountain Bike/Gravel Shoes Race 900 - Ochre - Habu Fit System</h3>
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
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2694117/k$935cb62240cc19dd9d230e898d0cb700/picture.jpg?format=auto&f=640x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Road Cycling Shoes NCR Air - Grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2900.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/m16096050/k$0ff3d6a79fa7a4673d51ea6f611d5a1b/picture.jpg?format=auto&f=640x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Womens Road Cycle Shoes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 9900.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/m18134648/k$0a36f8ce9d0e6faa81239fe2bdcfcc6a/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Giordana AV 200 Winter Shoe Cover</h3>
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
            </div>
            
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 ">
            
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2686523/k$7be82ecdf1ae58b53e4a4a75c3d1cdfd/picture.jpg?format=auto&f=640x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Road Cycling Shoes Van Rysel RCR R - White</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1500.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/m10812315/k$ee52155f530b7befe853554cdf82b244/picture.jpg?format=auto&f=640x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Proviz REFLECT360 Waterproof Reflective Cycling Overshoes</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2762742/k$f996bd9ec2dce1f25c313ed523c2db68/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Cycling Waterproof Shoes GRVL 900</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 2000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>
        

        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">OUR CYCLING ACCESSORIES</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2448244/k$d1ebb69478b55f20c1871c76abbe014c/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Adult Category 3 Cycling Sunglasses Perf 500 Light - White</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p1226033/k$46fa977a51825e45019779bd4405dae0/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">500 Cycling Gloves for Spring/Autumn - Black</h3>
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
                <img src="https://contents.mediadecathlon.com/p2579433/k$8793fafe2e0d19d797aac2095fea6597/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Smartphone-compatible thermal cycling gloves, black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 6500.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2465250/k$11a1824141edf1817ac83fbcda9e0a76/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">100 Winter Cycling Fleece Neck Warmer - Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p2448254/k$13b1971025ddae05ce1ab3f75cf7b0a7/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Adult Cycling Glasses Perf 500 Light Category 3 - Black/Blue</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 8000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
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
                <img src="https://contents.mediadecathlon.com/p2008590/k$9e32e2f42bb74ec68cb7857997d46190/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Cold Weather Cycling Arm Warmers - Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1500.00</h4>
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
                <img src="https://contents.mediadecathlon.com/p2316061/k$25ef05184ec79ceb7c2d1393104b4630/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Cycling Under-Helmet Headband 900 - Black/Grey</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://contents.mediadecathlon.com/p1034936/k$6628923686b98e223ff56804fa8d5a11/picture.jpg?format=auto&f=969x0" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                <h3 class="text-lg font-semibold">Cycling Balaclava 500 - Black</h3>
                <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 13000.00</h4>
                <div class="flex justify-center items-center mt-2 space-x-1">
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-yellow-500 text-xl">★</span>
                  <span class="text-gray-300 text-xl">☆</span>
                </div>
                <div class="flex justify-center mt-4">
                <button class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition-colors duration-300 
                animate-bounce shadow-md">ADD TO CART</button>
                </div>
                </a>
            </div>
            
            </div>
        </div>
      </div>
      </div>
        

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

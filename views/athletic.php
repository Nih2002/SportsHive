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
    <div class="bg-black text-white">
      <div class="container mx-auto flex justify-between items-center py-3 px-4">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
          <img src="../images/logo.png" alt="Logo" class="w-20 h-20">
          <span class="text-lg font-bold">SportHive</span>
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
                <a href="../views/signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                  <i class="fas fa-user"></i>
                  <span>Sign Up</span>
                </a>

                <!-- Log In Button -->
                <a href="../views/login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-300 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                  <i class="fas fa-sign-in-alt"></i>
                  <span>Log In</span>
                </a>
            </div>
        </div>
      </div>
    </div>

    <!-- Top Bar -->
    <div class="container mx-auto max-w-[1600px] flex justify-between items-center py-2 px-6 text-sm bg-blue-900 mx-96">
      <!-- Navigation Bar -->
      <nav class="relative bg-blue shadow-md">
      <div class="relative z-50">
        <button id="menu-toggle" class="text-black-900 focus:outline-none">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <!-- Collapsible Menu -->
        <div id="menu-links" class="hidden absolute bg-white border border-gray-200 rounded-lg shadow-lg w-48 mt-2 z-50">
          <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100 rounded-t-lg">Home</a>
          <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100">About Us</a>
          <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100 rounded-b-lg">Contact Us</a>
        </div>
      </div>
      </nav>
      <!-- Left Links -->
      <div class="relative group">
        <button class="hover:bg-gray-700 px-4 py-2 rounded text-white-800 font-semibold transition-colors">Sports</button>
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
          <button class="hover:bg-gray-700 px-2 py-2 rounded text-white-800 font-semibold transition-colors">Brands</button>
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
          <button class="hover:bg-gray-700 px-4 py-2 rounded text-white-800 font-semibold transition-colors">Repair and Services</button>
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
          <button class="hover:bg-gray-700 px-4 py-2 rounded text-white-800 font-semibold transition-colors">Others</button>
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
  <div style="background: url('../images/color.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <body class="bg-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-center h-screen">
            <!-- Text Section -->
            <div class=" p-8 bg-white shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Athletic<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">
            Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="../images/athletic1.png" alt="Jumping athlete" class="w-full h-full object-cover">
            </div>
        </div>
  </div>

  <!--product section-->
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
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">Nike Maxfly 2
                Track & Field Sprinting Spikes</h3>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike2.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">NIVIA Stride 3.0 Athletic Spikes Track & Field Shoes for Men </h3>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike3.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">NIVIA Men Zion-1 Running Spikes Shoes for Track & Field</h3>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 4.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">Vector X
                Bolted Running/Track and Field Spike Shoes for Men Women</h3>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 5.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">Aivin
                Furious Spike Running Shoes</h3>
                </div>
            </div>
            </div>
            
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 ">
        
            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 6.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">Striter
                Optimus Unisex Athletic Spike Shoes Running Spike Shoes</h3>
                </div>
            </div>
            <!-- Item 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/spike 7.jpg" class="w-full h-48 object-contain p-4">
                <div class="p-4 text-center">
                <h3 class="text-lg font-semibold">ATE
                Sprint Gold Running Shoe- Elevate Your Run with Precisi</h3>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create an Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 bg-cover h-[25vh]" style="background-image: url('../images/sign1.jpg');">
  <header class="bg-blue-900 text-white w-full h-10">
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
                <a href="#" class="flex items-center space-x-2 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                  <i class="fas fa-user"></i>
                  <span>Sign In</span>
                </a>

                <!-- Log In Button -->
                <a href="#" class="flex items-center space-x-2 px-4 py-2 bg-red-300 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
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
        <div class="relative z-50 ">
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


        <!-- Left Links --><!-- sports drop down-->
        <div class="relative group inline-block -mr-4">
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

<div class="relative group inline-block ">
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

<div class="relative group inline-block ">
  <button class="hover:bg-gray-700 px-3 py-2 rounded text-white-800 font-semibold transition-colors">Repair and Services</button>
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

<div class="relative group inline-block ml-2">
  <button class="hover:bg-gray-700 px-3 py-2 rounded text-white-800 font-semibold transition-colors">Others</button>
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


      <script>
        const menuToggle = document.getElementById("menu-toggle");
        const menuLinks = document.getElementById("menu-links");

        menuToggle.addEventListener("click", () => {
          menuLinks.classList.toggle("hidden");
        });
      </script>
  </header>

  <!-- Main Section -->
    <div class="h-screen justify-center items-center mt-52 ml-96 p-6">
    <div class="w-96 bg-gray-800 text-gray-100 rounded-lg shadow-xl p-8 space-y-6 mx-32">
        <h2 class="text-3xl font-semibold text-center text-teal-400 mb-4">Login Form</h2>
        <form>
        <div class="space-y-4 mb-6">
            <input type="text" placeholder="Username" class="w-full p-3 rounded-lg bg-gray-700 text-gray-100" />
            <input type="password" placeholder="Password" class="w-full p-3 rounded-lg bg-gray-700 text-gray-100"/>
        </div>
        <button 
            type="submit" class="w-full bg-teal-500 p-3 rounded-lg text-gray-100 font-semibold opacity-50 cursor-not-allowed" disabled>Login</button>
        </form>
        <p class="text-center text-gray-400">Don't have an account? 
        <a href="signin.php" class="text-teal-400">Sign up</a>
        </p>
    </div>
    </div>


  <!-- Footer Section -->
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
</body>
</html>

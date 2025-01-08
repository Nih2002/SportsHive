<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | SportHive</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-blue-900 text-white">

    <!-- Main Header -->
    <div class="bg-cyan-950 text-white">
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
          <a href="../index.php" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-t-lg">Home</a>
          <a href="../views/aboutus.php" class="block px-4 py-3 text-white-600 hover:bg-green-100">About Us</a>
          <a href="#" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-b-lg">Contact Us</a>
          <a href="../views/services.php" class="block px-4 py-3 text-white-600 hover:bg-green-100 rounded-b-lg">Services</a>
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
<body class="bg-gray-100 text-gray-800" >
 

  <!-- About Us Section -->
  <section class="py-12 bg-[url('https://static.vecteezy.com/system/resources/thumbnails/007/448/879/small/soccer-field-with-green-grass-sport-lawn-background-photo.jpg')] bg-cover bg-center">
    <div class="container mx-auto px-4">
      <div class="text-center">
        <h2 class="text-4xl font-bold text-black-800 mb-4">Who We Are</h2>
        <p class="text-lg text-black-600 font-bold  max-w-2xl mx-auto">
          At SportHive, we are dedicated to equipping athletes and sports enthusiasts with premium-quality gear that enhances their performance and passion. With a wide range of products and services, we strive to be your trusted partner in every sporting journey.
        </p>
      </div>

      <!-- Mission and Vision -->
    <div class="mt-12 grid md:grid-cols-2 gap-8 ">
        <!-- Mission -->
        <div class="bg-cyan-200 shadow-xl border-4 border-blue-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-bold text-blue-900 mb-2">Our Mission</h3>
            <p class="text-gray-600">
            To inspire and empower individuals through sports by providing cutting-edge equipment and exceptional customer service that supports active lifestyles and personal achievements.
            </p>
        </div>

        <!-- Vision -->
        <div class="bg-cyan-200 shadow-xl border-4 border-blue-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-bold text-blue-900 mb-2">Our Vision</h3>
            <p class="text-gray-600">
            To be a global leader in sports equipment retail, fostering a community where athletes of all levels find the tools and inspiration to thrive.
            </p>
        </div>
    </div>
    </div>
  </section>

  <section class="py-10 px-6">
    <div class="max-w-7xl mx-auto">
      <p class="text-center text-xl font-semibold mb-10">
        sportshive has four core values, including Quality, Enjoyment & Passion, and Respect.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden bg-[url('https://t4.ftcdn.net/jpg/09/55/77/43/360_F_955774348_0AxsllYkrCpaezoruK0R6jURo4jaQftm.jpg')]">
      <div class="p-6 text-center flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12 text-blue-600">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3.866 0-7 2.91-7 6.5S8.134 21 12 21s7-2.91 7-6.5S15.866 8 12 8z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 15l1.5 1.5L14.5 12" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-blue-600 mb-4">Quality - In Every Product</h3>
        <p class="text-gray-600">
          We ensure every sports equipment piece meets the highest standards.
        </p>
      </div>
    </div>

        <!-- Card 2 -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden bg-[url('https://i.pinimg.com/736x/54/59/b6/5459b6bcb170b2116af9229fe0226d16.jpg')]">
      <div class="p-6 text-center flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12 text-red-600">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318C5.196 5.44 6.293 5 7.5 5s2.304.44 3.182 1.318L12 7l1.318-1.682C14.196 5.44 15.293 5 16.5 5s2.304.44 3.182 1.318c.878.878 1.318 1.975 1.318 3.182s-.44 2.304-1.318 3.182L12 20.364 4.318 12.682A4.5 4.5 0 013 9.5c0-1.207.44-2.304 1.318-3.182z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-blue-600 mb-4">Passion - For Sports & Excellence</h3>
        <p class="text-gray-600">
          We bring enthusiasm and love for sports into everything we do.
        </p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden bg-[url('https://i.pinimg.com/736x/7c/13/d4/7c13d4c9ca2c3f4b086186fce789627a.jpg')]">
      <div class="p-6 text-center flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12 text-green-600">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 13c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3c1.055 0 2.007.457 2.648 1.191m4.71.582C17.29 11.457 16.343 11 15.5 11c-1.657 0-3 1.343-3 3s1.343 3 3 3c.832 0 1.578-.333 2.125-.875m-.125-2.125C20 9.5 19.5 5 19.5 5S15 5 13 7c-1.147 1.147-1.336 2.97-.496 4.355m-1.008.496C8 14.5 4.5 14 4.5 14S5 10 7 8c1.147-1.147 2.97-1.336 4.355-.496" />
          </svg>

        </div>
        <h3 class="text-xl font-bold text-blue-600 mb-4">Growth & Wellness</h3>
        <p class="text-gray-600">
          We bring enthusiasm and love for sports into everything we do.
        </p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden bg-[url('https://i.pinimg.com/736x/ab/15/c1/ab15c170bc606b9a5828c27660012bb4.jpg')]">
      <div class="p-6 text-center flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12 text-green-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8.5V7c0-.828.672-1.5 1.5-1.5h3.672c.529 0 1.03.21 1.404.586L12 7l1.424-1.914a1.978 1.978 0 011.404-.586h3.672A1.5 1.5 0 0120 7v1.5m-4 1h-1.5m2.5 0h2.5a1.5 1.5 0 011.5 1.5v3a1.5 1.5 0 01-1.5 1.5h-.268a3 3 0 00-2.232-.999H12m-4.5 0H5a1.5 1.5 0 01-1.5-1.5v-3c0-.828.672-1.5 1.5-1.5h3m2 0h2.5" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15h.5c.828 0 1.5-.672 1.5-1.5V9.5a1.5 1.5 0 011.5-1.5H17m-5 6l-3.5-3.5" />
         </svg>

        </div>
        <h3 class="text-xl font-bold text-blue-600 mb-4">Respect</h3>
        <p class="text-gray-600">
          We bring enthusiasm and love for sports into everything we do.
        </p>
      </div>
    </div>
    
       
  </section>
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
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>

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

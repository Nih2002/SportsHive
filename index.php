<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SportHive</title>
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
                <a href="signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                  <i class="fas fa-user"></i>
                  <span>Sign Up</span>
                </a>

                <!-- Log In Button -->
                <a href="login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-300 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
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
      <!-- Left Links --><!-- sports drop down-->
      <div class="relative group">
  <!-- Trigger Button -->
  <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg shadow-lg hover:shadow-xl hover:from-blue-700 hover:to-blue-600 transition-all duration-300">
    Sports
  </button>

  <!-- Dropdown Menu -->
  <div class="absolute left-0 mt-1 hidden group-hover:block w-[400px] bg-white shadow-2xl rounded-xl z-50">
    <!-- Content Grid -->
    <div class="p-6 grid grid-cols-2 gap-4">
      <!-- Dropdown items -->
      <div class="group bg-gray-100 p-2 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-blue-500 text-white p-3 rounded-full">
            <span class="text-xl">🚴‍♀️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">Cycling</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-blue-500">Bikes</a></li>
              <li><a href="#" class="hover:text-blue-500">Electric Bikes</a></li>
              <li><a href="#" class="hover:text-blue-500">Clothing</a></li>
              <li><a href="#" class="hover:text-blue-500">Helmets</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Hiking Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-green-500 text-white p-3 rounded-full">
            <span class="text-xl">🥾</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-green-600">Hiking</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-green-500">Shoes</a></li>
              <li><a href="#" class="hover:text-green-500">Clothing</a></li>
              <li><a href="#" class="hover:text-green-500">Backpacks</a></li>
              <li><a href="#" class="hover:text-green-500">Gear</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Running Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-red-500 text-white p-3 rounded-full">
            <span class="text-xl">🏃‍♂️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-red-600">Running</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-red-500">Shoes</a></li>
              <li><a href="#" class="hover:text-red-500">Clothing</a></li>
              <li><a href="#" class="hover:text-red-500">Accessories</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Swimming Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-teal-500 text-white p-3 rounded-full">
            <span class="text-xl">🏊‍♂️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-teal-600">Swimming</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-teal-500">Swimwear</a></li>
              <li><a href="#" class="hover:text-teal-500">Goggles</a></li>
              <li><a href="#" class="hover:text-teal-500">Caps</a></li>
              <li><a href="#" class="hover:text-teal-500">Accessories</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <div class="relative group">
        <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Women</a>
        <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
            <!-- Dropdown content here -->
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Clothing</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Tops</a></li>
                <li><a href="#" class="hover:text-blue-600">Sports Bras</a></li>
                <li><a href="#" class="hover:text-blue-600">Leggings</a></li>
                <li><a href="#" class="hover:text-blue-600">Jackets</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Accessories</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Yoga Mats</a></li>
                <li><a href="#" class="hover:text-blue-600">Headbands</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym Bags</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Bikes</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Hybrid and City Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Mountain Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Electric Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Road Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Cycling Helmets</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Activewear</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Gym Leggings</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym Tops and T-shirts</a></li>
                <li><a href="#" class="hover:text-blue-600">Sports Bras</a></li>
                <li><a href="#" class="hover:text-blue-600">Yoga Pants</a></li>
                <li><a href="#" class="hover:text-blue-600">Tank Tops</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Shoes</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Running Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Training Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Hiking Boots</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="relative group">
        <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Men</a>
        <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
         <!-- Dropdown content here -->
         <div>
            <h3 class="font-semibold text-lg text-blue-900">Clothing</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Coats and Jackets</a></li>
                <li><a href="#" class="hover:text-blue-600">Bottoms</a></li>
                <li><a href="#" class="hover:text-blue-600">Tops</a></li>
                <li><a href="#" class="hover:text-blue-600">Underwear</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Swimwear</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Wetsuits</a></li>
                <li><a href="#" class="hover:text-blue-600">Rash Vests</a></li>
                <li><a href="#" class="hover:text-blue-600">Swim shorts</a></li>
                <li><a href="#" class="hover:text-blue-600">Swim Briefs</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Bikes</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Hybrid and City Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Men's Mountain Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Men's Electric Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Men's Road Bikes</a></li>
                <li><a href="#" class="hover:text-blue-600">Men's Cycling Helmets</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Activewear</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Gym Leggings</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym Tops and T-shirts</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym shorts</a></li>
                <li><a href="#" class="hover:text-blue-600">Yoga Pants</a></li>
                <li><a href="#" class="hover:text-blue-600">Tanks and vest Tops</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Shoes</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Running Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Training Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Hiking Boots</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Bags and Accessories</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Back packs</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym bags</a></li>
                <li><a href="#" class="hover:text-blue-600">Sports Watches</a></li>
            </ul>
            </div>
        </div>
        </div>  
        <div class="relative group">
        <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Kids</a>
        <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
         <!-- Dropdown content here -->
         <div>
            <h3 class="font-semibold text-lg text-blue-900">Baby Clothing</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Coats and Jackets</a></li>
                <li><a href="#" class="hover:text-blue-600">Bottoms</a></li>
                <li><a href="#" class="hover:text-blue-600">Tops</a></li>
                <li><a href="#" class="hover:text-blue-600">Underwear</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Baby Swimwear</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Wetsuits</a></li>
                <li><a href="#" class="hover:text-blue-600">Rash Vests</a></li>
                <li><a href="#" class="hover:text-blue-600">Swim shorts</a></li>
                <li><a href="#" class="hover:text-blue-600">Swim Briefs</a></li>
            </ul>
             </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Shoes</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Running Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Training Shoes</a></li>
                <li><a href="#" class="hover:text-blue-600">Hiking Boots</a></li>
            </ul>
            </div>
            <div>
            <h3 class="font-semibold text-lg text-blue-900">Baby Bags and Accessories</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Back packs</a></li>
                <li><a href="#" class="hover:text-blue-600">Gym bags</a></li>
                <li><a href="#" class="hover:text-blue-600">Sports Watches</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="relative group">
        <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Repair and Services</a>
        <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
         <!-- Dropdown content here -->
         <div>
            <h3 class="font-semibold text-lg text-blue-900">Repair with us</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Workshop Services</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="relative group">
        <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Brands</a>
        <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
         <!-- Dropdown content here -->
         <div>
            <h3 class="font-semibold text-lg text-blue-900">Brands We Love</h3>
            <ul class="text-gray-700">
                <li><a href="#" class="hover:text-blue-600">ADIDAS</a></li>
                <li><a href="#" class="hover:text-blue-600">SALOMON</a></li>
                <li><a href="#" class="hover:text-blue-600">KIPRUN</a></li>
                <li><a href="#" class="hover:text-blue-600">PUMA</a></li>
                <li><a href="#" class="hover:text-blue-600">ASICS</a></li>
                <li><a href="#" class="hover:text-blue-600">OLAIAN</a></li>
                <li><a href="#" class="hover:text-blue-600">ROXY</a></li>
                <li><a href="#" class="hover:text-blue-600">ROCKRIDER</a></li>
                <li><a href="#" class="hover:text-blue-600">KIPSTA</a></li>
                <li><a href="#" class="hover:text-blue-600">DOMYOS</a></li>
            </ul>
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

<!-- Add FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



  <!-- Hero Section -->
      <div class="relative h-screen overflow-hidden">
      <!-- Carousel -->
      <div class="absolute inset-0 carousel-container">
        <!-- Slide 1 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen"
          style="background-image:url('../images/back1.jpg');">
        </div>
        <!-- Slide 2 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen hidden"
          style="background-image:url('../images/back2.jpg');">
        </div>
        <!-- Slide 3 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen hidden"
          style="background-image:url('../images/back3.jpg');">
        </div>
      </div>

      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>

      <!-- Content -->
      <div class="container mx-auto h-full flex flex-col justify-center items-center text-center relative z-10 text-white">
        <h1 class="text-5xl font-bold">Welcome to SportHive</h1>
        <p class="text-xl mt-4">Your one-stop shop for sports equipment and repair services</p>
        <a href="#products" class="mt-6 bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg hover:bg-yellow-500">Shop Now</a>
      </div>
    </div>


    <script>
      // JavaScript for Carousel
      const slides = document.querySelectorAll(".carousel-slide");
      let currentSlide = 1;

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle("hidden", i !== index);
        });
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      }

      // Rotate slides every 5 seconds
      setInterval(nextSlide, 5000);
    </script>

  <!-- About Us -->
  <section id="about" class="py-16 bg-gray-50">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">About Us</h2>
      <p class="text-lg leading-relaxed">
        At SportHive, we specialize in e-commerce solutions, offering an extensive range of sports equipment and exclusive repair services. With a commitment to excellence, we ensure a seamless online shopping experience.
      </p>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-16 bg-white">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="bg-gray-100 p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4">Product Sales</h3>
          <p>Discover a wide range of high-quality sports equipment tailored to your needs.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4">Repair Services</h3>
          <p>Request maintenance services for items purchased from SportHive with ease.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4">Delivery System</h3>
          <p>Enjoy fast and reliable delivery services for all your orders.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Section -->
  <section id="products" class="py-16 bg-gray-50">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Our Products</h2>
      <p class="text-lg mb-6">Explore our catalog of premium sports equipment.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <img src="https://source.unsplash.com/300x200/?basketball" alt="Basketball" class="w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold mt-4">Basketball</h3>
          <p class="mt-2">$30.00</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <img src="https://source.unsplash.com/300x200/?tennis" alt="Tennis Racket" class="w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold mt-4">Tennis Racket</h3>
          <p class="mt-2">$45.00</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <img src="https://source.unsplash.com/300x200/?soccer" alt="Soccer Ball" class="w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold mt-4">Soccer Ball</h3>
          <p class="mt-2">$25.00</p>
        </div>
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
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>


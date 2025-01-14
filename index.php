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

<!-- Add FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



  <!-- Hero Section -->
      <div class="relative h-screen overflow-hidden">
      <!-- Carousel -->
      <div class="absolute inset-0 carousel-container">
        <!-- Slide 1 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen"
          style="background-image:url('https://sportengland-production-files.s3.eu-west-2.amazonaws.com/s3fs-public/styles/max_width_1266px/public/2021-01/PA-55875259%20-%201266.jpg?VersionId=zVJoknym9gT3cgenq.BVR56G5XGZCzYX&itok=IdcoF3Ng');">
        </div>
        <!-- Slide 2 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen hidden"
          style="background-image:url('https://content.presspage.com/uploads/2170/1920_girlvolleyball.jpg?10000');">
        </div>
        <!-- Slide 3 -->
        <div
          class="carousel-slide bg-cover bg-center h-screen hidden"
          style="background-image:url('https://cdn.create.vista.com/api/media/small/232563488/stock-photo-football-match-children-training-football-soccer-school-tournament-group-boys');">
        </div>
      </div>

      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>

      <!-- Content -->
      <div class="container mx-auto h-full flex flex-col justify-center items-center text-center relative z-10 text-white space-y-6">
    <!-- Main Heading -->
    <h1 class="text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-300 drop-shadow-lg">
        Welcome to SportHive
    </h1>

    <!-- Subtitle -->
    <p class="text-xl mt-4 text-blue-200 max-w-2xl leading-relaxed tracking-wide">
        Your one-stop shop for sports equipment and repair services
    </p>

    <!-- Call to Action Button -->
    <a href="../views/cricket.php" 
       class="mt-6 bg-gradient-to-r from-blue-500 to-lightBlue-400 text-white px-8 py-4 rounded-full shadow-lg transform hover:scale-105 hover:from-lightBlue-300 hover:to-blue-600 transition-all duration-300 ease-in-out">
        Shop Now
    </a>
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


 <!-- Services -->
<section id="services" class="py-16 bg-white">
  <div class="container mx-auto text-center py-16">
    <h2 class="text-3xl font-bold mb-6">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      
      <!-- Product Sales Section -->
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img src="../images/product.jpg" alt="Product Sales" 
          class="w-full h-60 object-cover transition-transform duration-300 hover:scale-105 hover:opacity-75">
        <div class="absolute inset-0 flex flex-col justify-between p-4">
          <h3 class="text-2xl font-bold text-white opacity-0 hover:opacity-100 transition-opacity duration-300">Product Sales</h3>
          <!-- Plus Button -->
          <button class="toggleBtn absolute bottom-4 right-4 bg-white text-black rounded-full w-10 h-10 flex items-center justify-center text-2xl font-bold transition-transform duration-300 hover:scale-110">
            +
          </button>
        </div>
        <!-- Hidden Paragraph -->
        <div class="hiddenParagraph absolute inset-0 bg-black bg-opacity-60 text-white flex items-center justify-center text-lg font-medium p-4 hidden opacity-0 transition-opacity duration-300">
          <p>Discover a wide range of high-quality sports equipment tailored to your needs.</p>
        </div>
      </div>

      <!-- Repair Services Section -->
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img src="../images/repair.jpg" class="w-full h-60 object-cover transition-transform duration-300 hover:scale-105 hover:opacity-75">
        <div class="absolute inset-0 flex flex-col justify-between p-4">
          <h3 class="text-2xl font-bold text-white opacity-0 hover:opacity-100 transition-opacity duration-300">Repair Services</h3>
          <!-- Plus Button -->
          <button class="toggleBtn absolute bottom-4 right-4 bg-white text-black rounded-full w-10 h-10 flex items-center justify-center text-2xl font-bold transition-transform duration-300 hover:scale-110">
            +
          </button>
        </div>
        <!-- Hidden Paragraph -->
        <div class="hiddenParagraph absolute inset-0 bg-black bg-opacity-60 text-white flex items-center justify-center text-lg font-medium p-4 hidden opacity-0 transition-opacity duration-300">
          <p>Request maintenance services for items purchased from SportHive with ease.</p>
        </div>
      </div>

      <!-- Delivery System Section -->
      <div class="relative overflow-hidden rounded-lg shadow-lg">
        <img src="../images/delivery.jpeg" alt="Delivery System" 
          class="w-full h-60 object-cover transition-transform duration-300 hover:scale-105 hover:opacity-75">
        <div class="absolute inset-0 flex flex-col justify-between p-4">
          <h3 class="text-2xl font-bold text-white opacity-0 hover:opacity-100 transition-opacity duration-300"> Delivery System</h3>
          <!-- Plus Button -->
          <button class="toggleBtn absolute bottom-4 right-4 bg-white text-black rounded-full w-10 h-10 flex items-center justify-center text-2xl font-bold transition-transform duration-300 hover:scale-110">
            +
          </button>
        </div>
        <!-- Hidden Paragraph -->
        <div class="hiddenParagraph absolute inset-0 bg-black bg-opacity-60 text-white flex items-center justify-center text-lg font-medium p-4 hidden opacity-0 transition-opacity duration-300">
          <p>Enjoy fast and reliable delivery services for all your orders.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  // Get all the toggle buttons
  const toggleBtns = document.querySelectorAll('.toggleBtn');

  toggleBtns.forEach(function (btn) {
    btn.addEventListener('click', function (event) {
      event.stopPropagation(); // Prevents bubbling up to the body
      const paragraph = this.closest('.relative').querySelector('.hiddenParagraph');
      // Toggle the 'hidden' and 'opacity' classes
      paragraph.classList.toggle('hidden');
      paragraph.classList.toggle('opacity-0');
      paragraph.classList.toggle('opacity-100');
    });
  });

  // Optional: Reset the paragraph if clicking outside
  document.body.addEventListener('click', function () {
    const paragraphs = document.querySelectorAll('.hiddenParagraph');
    paragraphs.forEach(function (paragraph) {
      if (!paragraph.classList.contains('hidden')) {
        paragraph.classList.add('hidden');
        paragraph.classList.remove('opacity-100');
        paragraph.classList.add('opacity-0');
      }
    });
  });
</script>

<!-- Product Section -->
<section id="products" class="py-16 bg-blue-200">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-6">Our Products</h2>
    <p class="text-lg mb-6">Explore our catalog of premium sports equipment.</p>
    
    <!-- Scrollable wrapper -->
    <div class="relative overflow-hidden">
      <div class="flex space-x-10 animate-scroll">
        <!-- Product 1 - Basketball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/backetball.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Basketball</p>
          </div>
        </div>

        <!--cycling-->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/cycling.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Cycling</p>
          </div>
        </div>

         <!--cycling-->
         <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/boxing.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Boxing</p>
          </div>
        </div>

        <!-- Product 2 - Netball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/netball.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Netball</p>
          </div>
        </div>

        <!-- Product 3 - Hiking -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/hiking.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Hiking</p>
          </div>
        </div>

        <!-- Product 4 - Athletic -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/athletic.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Athletic</p>
          </div>
        </div>

        <!-- Product 5 - Swimming -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/swimming.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Swimming</p>
          </div>
        </div>

        <!-- Product 6 - Tennis Racket -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/tennis.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Tennis Racket</p>
          </div>
        </div>

        <!-- Product 7 - Soccer Ball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/soccer.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>Soccer Ball</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>
<!-- Product Section -->
<section id="products" class="py-16 bg-white-200">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-6">Our popular Brands</h2>
    <p class="text-lg mb-6">Explore our catalog of premium sports equipment.</p>
    
    <!-- Scrollable wrapper -->
    <div class="relative overflow-hidden">
      <div class="flex space-x-10 animate-scroll">
        <!-- Product 1 - Basketball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/adidas.png" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>ADIDAS</p>
          </div>
        </div>

        <!-- Product 2 - Netball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/nike.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>NIKE</p>
          </div>
        </div>

        <!-- Product 3 - Hiking -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/tex.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>TEXSTRETCH</p>
          </div>
        </div>

        <!-- Product 3 - Hiking -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/puma.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>PUMA</p>
          </div>
        </div>

        <!-- Product 3 - Hiking -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/amor.png" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>ARMOUS</p>
          </div>
        </div>

        <!-- Product 3 - Hiking -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/reebok.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>REEBOK</p>
          </div>
        </div>

        <!-- Product 4 - Athletic -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/stanford-sf.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>STANDFORD-SF</p>
          </div>
        </div>

        <!-- Product 5 - Swimming -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <a href="https://example.com/basketball">
              <img src="../images/cleto reyes.png" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
            </a>
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>CLETO REYES</p>
          </div>
        </div>

        <!-- Product 6 - Tennis Racket -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/salonom.png" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>SALOMON</p>
          </div>
        </div>

        <!-- Product 6 - Tennis Racket -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/domyos.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>DOMYOS</p>
          </div>
        </div>

        <!-- Product 6 - Tennis Racket -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/finis.jpeg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>FINIS</p>
          </div>
        </div>

        <!-- Product 6 - Tennis Racket -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/bauer.png" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>BAUER</p>
          </div>
        </div>

        <!-- Product 7 - Soccer Ball -->
        <div class="relative group">
          <div class="w-48 h-48 rounded-full overflow-hidden mx-auto shadow-md">
            <img src="../images/linine.jpg" class="w-full h-full object-cover group-hover:opacity-50 transition-opacity duration-300">
          </div>
          <!-- Name Text -->
          <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p>LI-NING</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  /* Keyframes for horizontal scrolling */
  @keyframes scrollLeftToRight {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  /* Apply the animation */
  .animate-scroll {
    animation: scrollLeftToRight 30s linear infinite;
  }
</style>



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

<!-- Add FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>


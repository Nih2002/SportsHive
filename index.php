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
  <section id="about" class="py-16 bg-blue-200">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">About Us</h2>
      <p class="text-lg leading-relaxed">
        At SportHive, we specialize in e-commerce solutions, offering an extensive range of sports equipment and exclusive repair services. With a commitment to excellence, we ensure a seamless online shopping experience.
      </p>
    </div>
  </section>

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


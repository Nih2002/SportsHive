<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - SportHive</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(2rem);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
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
                  <a href="../sportshive/views/signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                    <i class="fas fa-user"></i>
                    <span>Sign Up</span>
                  </a>

                  <!-- Log In Button -->
                  <a href="../sportshive/views/login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
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
      <div class="flex justify-center space-x-6 py-4">
      <a href="../sportshive/index.php" class="text-black">Home</a>
      <a href="../sportshive/views/services.php" class="text-black">Services</a>
      <a href="../sportshive/views/contactus.php" class="text-black">Contact Us</a>
      <a href="../sportshive/views/aboutus.php" class="text-black">About Us</a>
  </div>
  </nav>

  <!-- Collapsible Menu -->
  <div id="menu-links" class="hidden flex-col bg-gray-700 border border-gray-700 rounded-lg shadow-lg w-full z-40">
    <!-- Sports Section -->
    <div class="relative">
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Sports
      </button>
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
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Brands
      </button>
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
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Repair and Services
      </button>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-900 transition">Maintenance Packages</a>
        </div>
      </div>
    </div>

    <!-- Others Section -->
    <div class="relative">
      <button class="block w-full px-4 py-2 text-white font-semibold hover:bg-gray-700 transition">
        Others
      </button>
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

<body class="bg-gray-50">

  <!-- Service Sections -->
  <section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="space-y-16">
        <!-- Service 1: Sports Equipment Sales -->
        <div class="flex flex-col md:flex-row items-center gap-8 mt-12 animate-on-scroll opacity-0 translate-y-8 transition duration-1000 ease-in-out">
      <!-- Image with Frame -->
      <div class="relative">
        <!-- Outer Frame -->
        <div class="absolute -top-4 -left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:-top-6 sm:-left-6 sm:border-6 lg:-top-8 lg:-left-8 lg:border-8"></div>

        <!-- Inner Frame -->
        <div class="absolute top-4 left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:top-6 sm:left-6 sm:border-6 lg:top-8 lg:left-8 lg:border-8"></div>
        <!-- Image -->
        <img
          src="https://online.maryville.edu/wp-content/uploads/sites/97/2023/09/sports-sales-rep.jpg"
          alt="Flooring Business"
          class="relative rounded-lg"
        />
      </div>

      <!-- Text Content -->
      <div class="text-center md:text-left max-w-lg animate-on-scroll opacity-0 translate-y-8 transition duration-1000 ease-in-out">
        <h2 class="text-3xl font-bold text-brown-900 mb-4">Sports Equipment Sales</h2>
        <p class="text-gray-700">
          Explore a wide range of top-tier sports equipment tailored to meet the needs of athletes at every level.
          Whether you’re training for a marathon, improving your gym routine, or gearing up for team sports, we’ve got you covered.
        </p>
      </div>
    </div><br><br>

        <!-- Service 2: Maintenance Services -->
        <div class="flex flex-col md:flex-row items-center gap-8 mt-12 animate-on-scroll opacity-0 translate-y-8 transition duration-1000 ease-in-out">
        <!-- Image with Frame -->
        <div class="relative">
            <!-- Outer Frame -->
            <div class="absolute -top-4 -left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:-top-6 sm:-left-6 sm:border-6 lg:-top-8 lg:-left-8 lg:border-8"></div>
  
            <!-- Inner Frame -->
            <div class="absolute top-4 left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:top-6 sm:left-6 sm:border-6 lg:top-8 lg:left-8 lg:border-8"></div>
            <!-- Image -->
            <img
            src="https://www.4menearme.com/wp-content/uploads/2024/02/Fitness-Equipment-Repair-Insurance.webp"
            alt="Flooring Business"
            class="relative rounded-lg"
            />
        </div>

        <!-- Text Content -->
        <div class="text-center md:text-left max-w-lg">
            <h2 class="text-3xl font-bold text-brown-900 mb-4">Maintenance Services</h2>
            <p class="text-gray-700">
            We offer specialized maintenance services to ensure your sports equipment remains in perfect working condition. From regular servicing to 
            urgent repairs, our experts are here to assist you in keeping your gear at its best.</p>
        </div>
        </div><br><br>


        <!-- Service 3: Delivery Services -->
        <div class="flex flex-col md:flex-row items-center gap-8 mt-12 animate-on-scroll opacity-0 translate-y-8 transition duration-1000 ease-in-out">
        <!-- Image with Frame -->
        <div class="relative">
            <!-- Outer Frame -->
            <div class="absolute -top-4 -left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:-top-6 sm:-left-6 sm:border-6 lg:-top-8 lg:-left-8 lg:border-8"></div>
  
            <!-- Inner Frame -->
            <div class="absolute top-4 left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:top-6 sm:left-6 sm:border-6 lg:top-8 lg:left-8 lg:border-8"></div>
            <!-- Image -->
            <img
            src="https://thumbs.dreamstime.com/b/woman-going-to-gym-packing-sports-equipment-cargo-bike-woman-packing-sports-equipment-cargo-bike-339650596.jpg"
            alt="Flooring Business"
            class="relative rounded-lg"
            />
        </div>

        <!-- Text Content -->
        <div class="text-center md:text-left max-w-lg">
            <h2 class="text-3xl font-bold text-brown-900 mb-4">Delivery Services</h2>
            <p class="text-gray-700">
            Enjoy quick and reliable delivery of your sports equipment right to your doorstep. With our dedicated delivery service, 
            you can expect your purchases to arrive on time, every time.</p>
        </div>
        </div><br><br>


        <!-- Service 4: Gift Settings -->
        <div class="flex flex-col md:flex-row items-center gap-8 mt-12 animate-on-scroll opacity-0 translate-y-8 transition duration-1000 ease-in-out">
        <!-- Image with Frame -->
        <div class="relative">
            <!-- Outer Frame -->
            <div class="absolute -top-4 -left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:-top-6 sm:-left-6 sm:border-6 lg:-top-8 lg:-left-8 lg:border-8"></div>
  
            <!-- Inner Frame -->
            <div class="absolute top-4 left-4 border-2 border-blue-500 rounded-lg w-full h-full sm:top-6 sm:left-6 sm:border-6 lg:top-8 lg:left-8 lg:border-8"></div>
            <!-- Image -->
            <img
            src="https://media.istockphoto.com/id/516815742/photo/sport-shoe-gift-boxes-on-wood.jpg?s=612x612&w=0&k=20&c=ZOdrXw8-dJ7PFaaI4x2a83pC3qBog4JMXgJy7JdrnmU=" alt="Flooring Business" class="relative rounded-lg">
        </div>

        <!-- Text Content -->
        <div class="text-center md:text-left max-w-lg">
            <h2 class="text-3xl font-bold text-brown-900 mb-4">Gift Settings</h2>
            <p class="text-gray-700">
            Looking for the perfect gift for a sports enthusiast? Explore our specially curated gift sets designed to surprise and delight. Whether it’s for a birthday, 
            anniversary, or special occasion, we’ve got the perfect gifts.</p>
        </div>
        </div>


      </div>
    </div>
  </section>
  <script>
        // JavaScript to trigger the animation when the element is in view
        const animatedElements = document.querySelectorAll(".animate-on-scroll");

        const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("opacity-0", "translate-y-8");
                entry.target.classList.add("opacity-100", "translate-y-0");
            }
            });
        },
        { threshold: 0.1 }
        );

        animatedElements.forEach((el) => observer.observe(el));
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
  

</body>
</html>

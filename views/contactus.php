<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @keyframes fadeInUp {
      from {
        transform: translateY(30px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .animate-fade-in-up {
      animation: fadeInUp 1s ease-out;
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
          <?php
            session_start();
            require 'connection.php';

            $user_id = $_SESSION['user_id'] ?? null;
            $cart_count = 0;

            if ($user_id) {
                $sql = "SELECT SUM(quantity) AS total FROM cart WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                $cart_count = $row['total'] ?? 0;
            }
            ?>

            <!-- Cart Icon -->
            <a href="../views/cart.php" id="view-cart" class="relative">
                <i class="fas fa-shopping-cart h-8 w-8 text-blue-500 hover:text-blue-600"></i>
                <!-- Cart Count Badge -->
                <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                    <?php echo $cart_count; ?>
                </span>
            </a>


            <script>
            $(document).ready(function() {
                $("#add-to-cart-form").submit(function(event) {
                    event.preventDefault(); // Prevent page reload

                    $.ajax({
                        url: "../views/add_to_cart.php",
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $("#cart-count").text(response.cart_count); // Update cart count
                                alert("Item added to cart!");
                            } else {
                                alert("Error adding item to cart.");
                            }
                        }
                    });
                });
            });
            </script>


              <!-- Wish List Icon -->
              <a href="#" id="view-wishlist" class="relative">
                  <i class="fas fa-heart h-8 w-8 text-yellow-500 hover:text-yellow-600"></i>
                  <!-- Wishlist Count Badge -->
                  <span id="wishlist-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                      0
                  </span>
              </a>
          </div>


          

          <!-- Sign In & Cart -->
            <div class="flex space-x-4">
                  <!-- Sign In Button -->
                  <a href="../views/signin.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                    <i class="fas fa-user"></i>
                    <span>Sign Up</span>
                  </a>

                  <!-- Log In Button -->
                  <a href="../views/login.php" class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Log In</span>
                  </a>
            </div>

            <!-- Account Button -->
            <button id="accountBtn" class="flex items-center px-4 py-2 bg-white rounded-lg shadow">
                <i class="fas fa-user mr-2"></i> Account 
                <i class="fas fa-caret-down ml-2"></i>
            </button>

            <!-- Dropdown Menu (with higher z-index) -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-lg shadow-lg z-50">
                <a href="../views/myaccount.php" class="block px-4 py-2 hover:bg-gray-700">My Account</a>
                <a href="../views/settings.php" class="block px-4 py-2 bg-red-600 hover:bg-red-700">Settings</a>
                <a href="../views/logout.php" class="block px-4 py-2 bg-red-600 hover:bg-red-700">Sign Out</a>
            </div>
        </div>
    </nav>

    <script>
        const accountBtn = document.getElementById('accountBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

        accountBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!accountBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
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
        Special Brands
      </h5>
      <div class="hidden submenu bg-gray-800 p-4 rounded-lg shadow-lg">
        <div class="space-y-2">
          <a href="../views/new.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Brands</a>
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
          <a href="../views/gift_order.php" class="px-4 py-2 text-white hover:bg-gray-900 transition">Request Gifts</a>
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
<body class="bg-gray-100">

  <!-- Contact Us Section -->
  <div class="max-w-5xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-blue-900 mb-12 animate-fadeInUp">
      Contact Support
    </h1>

    <!-- Contact Options -->
    <div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3">
      <!-- Chat -->
      <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-blue-500 hover:shadow-2xl transition-transform duration-300 transform hover:scale-105 animate-fadeInUp">
        <div class="flex items-center gap-4">
          <div class="text-blue-500 text-4xl">
            <img src="../images/email.png" class="w-full h-full object-contain p-4">
          </div>
          <div>
            <h3 class="text-xl font-semibold">Chat</h3>
          </div>
        </div>
        <p class="mt-4 text-gray-700">
          Chat with a specialist from SportsHive's support team for quick answers.
        </p>
        <button
        class="mt-4 px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-400 text-black rounded-lg hover:from-blue-600 hover:to-blue-800 active:scale-95 transition-all duration-300 w-full hover:animate-bounce">
        Start Chat
        </button>

      </div>

      <!-- Phone -->
      <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-blue-500 hover:shadow-2xl transition-transform duration-300 transform hover:scale-105 animate-fadeInUp">
        <div class="flex items-center gap-4">
          <div class="text-blue-500 text-4xl">
          <img src="../images/phone.png" class="w-full h-full object-contain p-4">
          </div>
          <div>
            <h3 class="text-xl font-semibold">Phone</h3>
          </div>
        </div>
        <p class="mt-4 text-gray-700">
          In the Sri Lanka? Call 011 224 12
        </p>
        <button class="mt-4 px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-400 text-black rounded-lg hover:from-blue-600 hover:to-blue-800 active:scale-95 transition-all duration-300 w-full hover:animate-bounce">
          Call Now
        </button>
      </div>

      <!-- Text Message -->
      <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-blue-500 hover:shadow-2xl transition-transform duration-300 transform hover:scale-105 animate-fadeInUp">
        <div class="flex items-center gap-4">
          <div class="text-blue-500 text-4xl">
          <img src="../images/msg.png" class="w-full h-full object-contain p-4">
          </div>
          <div>
            <h3 class="text-xl font-semibold">Text Message</h3>
          </div>
        </div>
        <p class="mt-4 text-gray-700">
          Send a text from your mobile device.<br><strong>Note:</strong> Text-messaging rates apply.
        </p>
        <button class="mt-4 px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-400 text-black rounded-lg hover:from-blue-600 hover:to-blue-800 active:scale-95 transition-all duration-300 w-full hover:animate-bounce">
          Send Text
        </button>
      </div>
    </div>
  </div>
  <!-- Embedded Map Section -->
  <section class="mt-10 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6 animate-fade-in-up">Find Us Here</h2>
    <div class="relative overflow-hidden rounded-lg shadow-md animate-fade-in-up">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12812.276726140686!2d79.961047!3d6.927078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591b65c5b22f%3A0x5c55de24ab71220b!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1674635123456!5m2!1sen!2slk"
         width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

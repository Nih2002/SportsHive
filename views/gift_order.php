<?php
require 'connection.php'; // Database connection

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $recipient_name = $_POST['recipient_name'] ?? '';
    $recipient_phone = $_POST['recipient_phone'] ?? '';
    $recipient_address = $_POST['recipient_address'] ?? '';
    $gift_message = $_POST['gift_message'] ?? '';
    $gift_wrap_option = $_POST['gift_wrap_option'] ?? '';  // Updated to correct field
    $gift_card_option = $_POST['gift_card_option'] ?? '';  
    $delivery_datetime = $_POST['delivery_datetime'] ?? '';

    // Validate required fields
    if (empty($recipient_name) || empty($recipient_phone) || empty($recipient_address) || empty($delivery_datetime)) {
        $error = "All required fields must be filled!";
    } else {
        // Prepare SQL query
        $stmt = $conn->prepare("INSERT INTO gift_orders (recipient_name, recipient_phone, recipient_address, gift_message, gift_wrap_option, gift_card_option, delivery_datetime) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("sssssss", $recipient_name, $recipient_phone, $recipient_address, $gift_message, $gift_wrap_option, $gift_card_option, $delivery_datetime);

            if ($stmt->execute()) {
                $success = "Gift request submitted successfully!";
            } else {
                $error = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error = "Query preparation failed: " . $conn->error;
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Options</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                  <i class="fas fa-shopping-cart h-8 w-8 text-blue-500 hover:text-blue-600"></i>
                  <!-- Cart Count Badge -->
                  <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                      0
                  </span>
              </a>
              <!-- Wish List Icon -->
              <a href="../views/wishlist.php" id="view-wishlist" class="relative">
                  <i class="fas fa-heart h-8 w-8 text-yellow-500 hover:text-yellow-600"></i>
                  <!-- Wishlist Count Badge -->
                  <span id="wishlist-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                      0
                  </span>
              </a>
          </div>

          <script>
              document.addEventListener("DOMContentLoaded", () => {
                const cartItems = JSON.parse(sessionStorage.getItem("cart")) || [];
                const cartCount = cartItems.length;

                // Store the cart count in sessionStorage
                sessionStorage.setItem("cartCount", cartCount);
              });
          </script>

          <!-- Sign In & Cart -->
          <div class="flex space-x-4">
                  <!-- Sign In Button -->
                  <button class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition cursor-not-allowed opacity-50" disabled>
                      <i class="fas fa-user"></i>
                      <span>Sign Up</span>
                  </button>


                  <!-- Log In Button -->
                  <button class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition cursor-not-allowed opacity-50" disabled>
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Log In</span>
            </button>
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


  </header>
<body>

<div class="p-6 bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 rounded-xl shadow-xl max-w-lg mx-auto">
    <!-- Display Messages -->
    <?php if (isset($error)): ?>
        <div class="text-red-600 font-semibold bg-red-100 p-2 rounded-md"><?= $error; ?></div>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <div class="text-green-600 font-semibold bg-green-100 p-2 rounded-md"><?= $success; ?></div>
    <?php endif; ?>

    <!-- Gift Checkbox -->
    <label class="flex items-center space-x-3 cursor-pointer">
        <input type="checkbox" id="gift_checkbox" name="is_gift" value="1" class="w-5 h-5 text-pink-600 border-gray-300 rounded focus:ring-pink-500 transition" checked>
        <span class="text-lg font-semibold text-pink-700">Send as a Gift 🎁</span>
    </label>

    <!-- Gift Details -->
    <div id="gift_details" class="mt-4 p-5 border-2 border-pink-300 rounded-lg bg-white shadow-lg">
        <h3 class="text-xl font-bold text-purple-700 mb-3">Recipient Details</h3>

        <form action="" method="POST">
            <label class="block text-sm font-semibold text-gray-700">Recipient Name</label>
            <input type="text" name="recipient_name" placeholder="Enter recipient's name" required class="w-full p-2 mt-1 border border-purple-300 rounded-lg focus:ring focus:ring-purple-200 shadow-md bg-purple-50">

            <label class="block mt-3 text-sm font-semibold text-gray-700">Recipient Phone</label>
            <input type="text" name="recipient_phone" placeholder="Enter recipient's phone" required class="w-full p-2 mt-1 border border-purple-300 rounded-lg focus:ring focus:ring-purple-200 shadow-md bg-purple-50">

            <label class="block mt-3 text-sm font-semibold text-gray-700">Recipient Address</label>
            <textarea name="recipient_address" placeholder="Enter recipient's address" required class="w-full p-2 mt-1 border border-purple-300 rounded-lg focus:ring focus:ring-purple-200 shadow-md bg-purple-50"></textarea>

            <label class="block mt-3 text-sm font-semibold text-gray-700">Receiving Date & Time:</label>
            <input type="datetime-local" name="delivery_datetime" required class="w-full p-2 mt-1 border border-purple-300 rounded-lg focus:ring focus:ring-purple-200 shadow-md bg-purple-50">

            <!-- Gift Message -->
            <label class="block mt-3 text-sm font-semibold text-gray-700">Gift Message</label>
            <textarea id="gift_message" name="gift_message" placeholder="Write a personal message..." class="w-full p-2 mt-1 border border-purple-300 rounded-lg focus:ring focus:ring-purple-200 shadow-md bg-purple-50"></textarea>

            <!-- Gift Wrapping Selection -->
            <h3 class="mt-5 text-lg font-bold text-pink-700">Choose Gift Wrapping</h3>
            <div class="mt-3 flex space-x-3">
                <button type="button" class="gift-wrap bg-pink-100 p-3 rounded-lg shadow-md hover:bg-pink-300 transition" data-value="Classic Wrap" data-image="https://i.pinimg.com/736x/37/74/1b/37741b4df06202e0e414d0e7e6988588.jpg">🎀 Classic Wrap</button>
                <button type="button" class="gift-wrap bg-purple-100 p-3 rounded-lg shadow-md hover:bg-purple-300 transition" data-value="Elegant Box" data-image="https://images.squarespace-cdn.com/content/v1/599ffa88cd0f68882d4efcbd/1506561982116-8ZCBDFMQHNXJ2RNERNRI/present.jpg?format=500w">📦 Elegant Box</button>
                <button type="button" class="gift-wrap bg-blue-100 p-3 rounded-lg shadow-md hover:bg-blue-300 transition" data-value="Luxury Wrap" data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFkOTQmhTAH6NivvwRJVJFrCgP9bTIiMXYKA&s">✨ Luxury Wrap</button>
            </div>

            <!-- Preview for Gift Wrapping -->
            <div class="mt-3">
                <h4 class="text-sm font-semibold text-gray-700">Selected Gift Wrap:</h4>
                <img id="gift_wrap_preview" src="" alt="Gift Wrap Preview" class="mt-2 w-40 h-40 object-cover border-2 border-gray-300 rounded-lg shadow-md hidden">
            </div>

            <!-- Gift Card Selection -->
            <h3 class="mt-5 text-lg font-bold text-blue-700">Choose a Gift Card</h3>
            <div class="mt-3 flex space-x-3">
                <button type="button" class="gift-card bg-red-100 p-3 rounded-lg shadow-md hover:bg-red-300 transition" data-value="Floral" data-image="https://img.freepik.com/free-vector/beautiful-wedding-invitation-with-vintage-flowers_1361-1390.jpg">💌 Floral</button>
                <button type="button" class="gift-card bg-yellow-100 p-3 rounded-lg shadow-md hover:bg-yellow-300 transition" data-value="Love" data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4sTWhjD_RTZvEg1VKV4qnWKmcJEF4YVJC9Q&s">💖 Love</button>
                <button type="button" class="gift-card bg-green-100 p-3 rounded-lg shadow-md hover:bg-green-300 transition" data-value="Celebration" data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-cPLfN7foI9w8OYO0mCV8eDEyXLF9eb-T6A&s">🎉 Celebration</button>
            </div>

            <!-- Preview for Gift Card -->
            <div class="mt-3">
                <h4 class="text-sm font-semibold text-gray-700">Selected Gift Card:</h4>
                <img id="gift_card_preview" src="" alt="Gift Card Preview" class="mt-2 w-40 h-40 object-cover border-2 border-gray-300 rounded-lg shadow-md hidden">
            </div>

            <!-- Hidden input fields to store selected values -->
            <input type="hidden" id="gift_wrap_option" name="gift_wrap_option">
            <input type="hidden" id="gift_card_option" name="gift_card_option">

            <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:opacity-90 transition duration-300 mt-5">
                Place Order
            </button>
        </form>
    </div>
</div>

            <!-- JavaScript -->
            <script>
            // Handle Gift Wrapping Selection
            document.querySelectorAll(".gift-wrap").forEach(button => {
                button.addEventListener("click", function() {
                    const giftWrapPreview = document.getElementById("gift_wrap_preview");
                    
                    document.getElementById("gift_wrap_option").value = this.dataset.value;
                    giftWrapPreview.src = this.dataset.image;
                    giftWrapPreview.classList.remove("hidden");
                });
            });

            // Handle Gift Card Selection
            document.querySelectorAll(".gift-card").forEach(button => {
                button.addEventListener("click", function() {
                    const giftCardPreview = document.getElementById("gift_card_preview");
                    
                    document.getElementById("gift_card_option").value = this.dataset.value;
                    giftCardPreview.src = this.dataset.image;
                    giftCardPreview.classList.remove("hidden");
                });
            });

            </script>
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                    function updateCartCount() {
                            .then(response => response.json())
                            .then(data => {
                                if (data.cart_count !== undefined) {
                                    document.getElementById("cart-count").innerText = data.cart_count;
                                }
                            })
                            .catch(error => console.error("Error updating cart count:", error));
                    }

                    // Auto-update cart count when the page loads
                    updateCartCount();

                    // Periodically check for cart updates (every 5 seconds)
                    setInterval(updateCartCount, 5000);

                    // Update cart count immediately after adding an item
                    document.querySelectorAll(".add-to-cart-form").forEach(form => {
                        form.addEventListener("submit", function (event) {
                            event.preventDefault();

                            const formData = new FormData(this);
                            fetch("add_to_cart.php", {
                                method: "POST",
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.cart_count !== undefined) {
                                    document.getElementById("cart-count").innerText = data.cart_count;
                                }
                            })
                            .catch(error => console.error("Error:", error));
                        });
                    });
                    });
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

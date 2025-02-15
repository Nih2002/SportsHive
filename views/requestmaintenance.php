<?php
include 'connection.php';

$success_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $request_title = $_POST["request_title"];
    $issue_description = $_POST["issue_description"];
    $preferred_time = $_POST["preferred_time"];
    $user_contact = $_POST["user_contact"];

    // Prepare SQL statement
    $sql = "INSERT INTO maintenance_requests (request_title, issue_description, preferred_time, user_contact) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $request_title, $issue_description, $preferred_time, $user_contact);

    // Execute query
    if ($stmt->execute()) {
        $success_message = "Maintenance request submitted successfully!";
    } else {
        $success_message = "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>

<?php
include 'connection.php'; // Ensure this file correctly connects to your database

// Fetch maintenance feedback with user names
$query = "
    SELECT u.name, mf.issue_description, mf.urgency, mf.created_at 
    FROM maintenance_feedback mf
    JOIN users u ON mf.user_id = u.id
    ORDER BY mf.created_at DESC
";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <?php
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
              <a href="../views/wishlist.php" id="view-wishlist" class="relative">
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
<body class="bg-blue-90">
<!-- Maintenance Request Form -->
<div class="max-w-3xl mx-auto bg-red-50 shadow-2xl rounded-xl p-8 my-12">
    <h2 class="text-4xl font-extrabold text-center text-black mb-6 drop-shadow-lg">Request Maintenance</h2>

    <?php if (!empty($success_message)) : ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-md">
            <p class="font-medium text-center"><?php echo $success_message; ?></p>
        </div>
    <?php endif; ?>

    <form method="POST" action="requestmaintenance.php" class="bg-white p-6 rounded-lg shadow-lg space-y-6">
        <!-- Request Title -->
        <div>
            <label for="request_title" class="block text-lg font-bold text-gray-700 mb-2">📝 Request Title</label>
            <input type="text" id="request_title" name="request_title" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300">
        </div>

        <!-- Issue Description -->
        <div>
            <label for="issue_description" class="block text-lg font-bold text-gray-700 mb-2">❗ Issue Description</label>
            <textarea id="issue_description" name="issue_description" rows="4" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300"></textarea>
        </div>

        <!-- Preferred Time -->
        <div>
            <label for="preferred_time" class="block text-lg font-bold text-gray-700 mb-2">⏰ Preferred Time</label>
            <input type="datetime-local" id="preferred_time" name="preferred_time" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300">
        </div>

        <!-- Contact Information -->
        <div>
            <label for="user_contact" class="block text-lg font-bold text-gray-700 mb-2">📞 Contact Information</label>
            <input type="text" id="user_contact" name="user_contact" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300">
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit"
                class="w-full py-3 bg-blue-300 text-white font-bold rounded-lg shadow-lg hover:from-purple-700 hover:to-pink-600 focus:ring-2 focus:ring-purple-400 transition duration-300 transform hover:scale-105">
                🚀 Submit Request
            </button>
        </div>
    </form>
</div>


<div class="max-w-6xl mx-auto p-8">
        <!-- Page Title -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-blue-500 bg-clip-text bg-white via-purple-500 to-pink-500">
                User Feedback
            </h1>
            <p class="text-blue-800 text-lg mt-4">
                Here's what our customers say about the maintenance services at our sports shop!
            </p>
        </div>

        <!-- Feedback Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ($row = $result->fetch_assoc()): ?>
                <?php
                // Get user initials (First letter of name)
                $user_initial = strtoupper(substr($row['name'], 0, 1));

                // Assign a random color for user avatar
                $colors = ['indigo', 'purple', 'pink', 'blue', 'green', 'yellow', 'red'];
                $color = $colors[array_rand($colors)];
                ?>

                <!-- Feedback Card -->
                <div class="relative p-6 bg-pink-200 rounded-lg shadow-xl border border-gray-200 hover:shadow-2xl hover:scale-105 transition duration-300">
                    <!-- User Initial Icon -->
                    <div class="absolute top-0 -mt-5 left-1/2 transform -translate-x-1/2">
                        <div class="bg-<?php echo $color; ?>-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
                            <i class="text-2xl"><?php echo $user_initial; ?></i>
                        </div>
                    </div>
                    <!-- Card Content -->
                    <div class="mt-6">
                        <h3 class="text-lg font-bold text-gray-900 text-center"><?php echo $row['name']; ?></h3>
                        <div class="text-center mt-2">
                            <span class="px-3 py-1 rounded-full text-white text-sm bg-<?php echo ($row['urgency'] == 'High') ? 'red' : ($row['urgency'] == 'Medium' ? 'yellow' : 'blue'); ?>-500">
                                <?php echo $row['urgency']; ?>
                            </span>
                        </div>
                        <p class="text-gray-600 mt-4">
                            <?php echo $row['issue_description']; ?>
                        </p>
                        <p class="text-sm text-black-400 mt-4 text-right"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

          </div>
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

  </div>
</body>

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
</html>

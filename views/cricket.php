<?php
// Start the session at the top of the file
session_start();

// Initialize or retrieve the cart items array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // Default to an empty array if no cart exists
}

// Simulate adding an item to the cart (for example, when the user clicks "Add to Cart")
if (isset($_POST['addToCart'])) {
    $itemId = $_POST['itemId']; // You can pass the item ID dynamically
    if (!isset($_SESSION['cart'][$itemId])) {
        $_SESSION['cart'][$itemId] = 0; // Initialize count if not already set
    }
    $_SESSION['cart'][$itemId] += 1; // Increment the cart count for this item
}

// Get the total cart count (sum of all item counts)
$cartCount = array_sum($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cricket</title>
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
  <div class="h-96 bg-cover bg-center" style="background-image: url('../images/sportsback1.jpg');">
    <body class="bg-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-center h-96">
            <!-- Text Section -->
            <div class=" p-8 bg-white shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 leading-tight">Cricket<br></h1>
            <div class="w-16 h-1 bg-lime-400 my-4"></div>
            <p class="text-gray-600 mb-6">Cricket is more than a game; it's a battle of endurance, strategy, and skill. Every ball is an opportunity to shine, every wicket is a chance to rise.</p></div>
            <!-- Image Section -->
            <div class="md:w-1/2 relative">
            <img src="../images/cricket2.jpg" alt="Jumping athlete" class="w-full h-80 object-cover">
            </div>
        </div>
  </div>

  <!-- first product section-->
  <div class="grid grid-cols-4 gap-6">
  <div class="col-span-1 bg-cyan-400 border border-gray-300 p-4 shadow-md">
  <div class=" bg-cyan-400 p-4 shadow-md">
    
  <!-- Product Categories Section -->
      <div class="mb-6">
        <h3 class="text-lg font-bold mb-4">Product Categories</h3>
        <ul class="space-y-2">
        <li>
            <a href="../views/cricket.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Cricket <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/swimming.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Swimming <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/vollyball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Volleyball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/rugby.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Rugby <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/netball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Netball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/football1.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Football <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/cycling.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Cycling <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/basketball.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Basketball <span class="text-gray-500">+</span>
            </a>
          </li>
          <li>
            <a href="../views/athletic.php" class="flex justify-between items-center text-gray-700 hover:text-green-600">
              Athletic <span class="text-gray-500">+</span>
            </a>
          </li>
        </ul>
      </div>

  <!-- Brands Section -->
      <div>
        <h3 class="text-lg font-bold mb-4">Brands</h3>
        <ul class="space-y-2">
          <li class="flex items-center">
            <input type="checkbox" id="yonex" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="yonex" class="ml-2 text-sm text-gray-700">Yonex (75)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="stanfords" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="stanfords" class="ml-2 text-sm text-gray-700">Stanfords - SF (116)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="kaygee" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="kaygee" class="ml-2 text-sm text-gray-700">Kay Gee (23)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="texstretch" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="texstretch" class="ml-2 text-sm text-gray-700">Texstretch (36)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="lining" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="lining" class="ml-2 text-sm text-gray-700">Li-Ning (60)</label>
          </li>
          <li class="flex items-center">
            <input type="checkbox" id="ss" class="w-4 h-4 text-green-600 border-gray-300 focus:ring-green-500">
            <label for="ss" class="ml-2 text-sm text-gray-700">SS (1)</label>
          </li>
        </ul>
      </div>
</div>
</div>
<div class="col-span-3 max-w-7xl mx-auto py-12 px-4">
        <div class="max-w-7xl mx-auto py-12 px-4 ">
            <!-- Header Section -->
            <div class="text-center mb-12">
            <h2 class="text-xl text-gray-500 font-semibold">Our Products</h2>
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET SHOES</h1>
            </div>

            <!-- Catalog Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Wishlist Modal -->
            <div id="wishlist-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-bold mb-4">Your Wishlist</h2>
                    <div id="wishlist-items"></div>
                    <button id="close-wishlist" class="mt-4 bg-gray-500 text-white p-2 rounded-full">Close</button>
                </div>
            </div>
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                let wishlist = getWishlistFromCookie();
                updateWishlistUI();

                // Add to Wishlist
                document.querySelectorAll(".add-to-wishlist").forEach(button => {
                    button.addEventListener("click", function () {
                        const item = {
                            id: this.dataset.id,
                            name: this.dataset.name,
                            price: this.dataset.price,
                            image: this.dataset.image
                        };

                        if (!wishlist.some(i => i.id === item.id)) {
                            wishlist.push(item);
                            setWishlistToCookie(wishlist);
                            updateWishlistUI();
                            showAlert(`${item.name} added to wishlist!`, "success");
                        } else {
                            showAlert(`${item.name} is already in the wishlist!`, "info");
                        }
                    });
                });

                // Show Alert
                function showAlert(message, type) {
                    const alertBox = document.createElement("div");
                    alertBox.className = `fixed top-5 right-5 p-4 rounded-lg shadow-lg text-white transition-all duration-500 ${type === 'success' ? 'bg-green-500' : type === 'info' ? 'bg-blue-500' : 'bg-red-500'}`;
                    alertBox.textContent = message;
                    document.body.appendChild(alertBox);
                    setTimeout(() => alertBox.remove(), 3000);
                }

                // Update Wishlist UI
                function updateWishlistUI() {
                    const wishlistItemsContainer = document.getElementById("wishlist-items");
                    wishlistItemsContainer.innerHTML = wishlist.map(item => `
                        <div class="flex items-center justify-between border-b py-2">
                            <div class="flex items-center">
                                <img src="${item.image}" alt="${item.name}" class="w-12 h-12 rounded mr-3">
                                <div>
                                    <p class="font-semibold">${item.name}</p>
                                    <p class="text-gray-500">$${item.price}</p>
                                </div>
                            </div>
                            <button class="remove-item text-red-500 hover:text-red-700" data-id="${item.id}">
                                <i class="fas fa-trash-alt text-lg"></i>
                            </button>
                        </div>`).join('');

                    document.querySelectorAll(".remove-item").forEach(button => {
                        button.addEventListener("click", function () {
                            const itemId = this.dataset.id;
                            wishlist = wishlist.filter(item => item.id !== itemId);
                            setWishlistToCookie(wishlist);
                            updateWishlistUI();
                        });
                    });

                    document.getElementById("wishlist-count").textContent = wishlist.length;
                }

                // Show Wishlist Modal
                document.getElementById("view-wishlist").addEventListener("click", function (event) {
                    event.preventDefault();
                    document.getElementById("wishlist-modal").classList.remove("hidden");
                });

                // Close Wishlist Modal
                document.getElementById("close-wishlist").addEventListener("click", function () {
                    document.getElementById("wishlist-modal").classList.add("hidden");
                });

                // Cookie functions
                function setWishlistToCookie(wishlist) {
                    document.cookie = `wishlist=${JSON.stringify(wishlist)};path=/;max-age=${60 * 60 * 24 * 30}`;
                }

                function getWishlistFromCookie() {
                    const cookies = document.cookie.split(';');
                    for (let cookie of cookies) {
                        cookie = cookie.trim();
                        if (cookie.startsWith('wishlist=')) {
                            return JSON.parse(cookie.substring('wishlist='.length));
                        }
                    }
                    return [];
                }
            });

            </script>
              </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
          require 'connection.php'; // Include the database connection

          // Fetch products from cricket table
          $sql = "SELECT id, name, image_url, item_type, sizes, colors, stock_status, description, price FROM cricket WHERE item_type = 'cricket_shoes'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $main_image = !empty($row['image_url']) ? $row['image_url'] : 'images/no-image-available.png';
                  $sizes = explode(", ", $row['sizes']);
                  $colors = explode(", ", $row['colors']);
                  $stock_status = $row['stock_status'];
                  $description = !empty($row['description']) ? $row['description'] : 'No description available';  // Default if description is empty
                  $price = isset($row['price']) ? $row['price'] : 0;  // Ensure price is set (set to 0 if not available)

                  // Fetch images for this product
                  $sql_images = "SELECT image_url FROM product_images WHERE product_id = $id";
                  $result_images = $conn->query($sql_images);
                  $images = [];
                  while ($image_row = $result_images->fetch_assoc()) {
                      $images[] = $image_row['image_url'];
                  }

                  // Display product details
                  echo '<div class="bg-white rounded-lg shadow-md overflow-hidden p-4">';
                  echo '<img src="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain">';
                  echo '<div class="p-4 text-center">';
                  echo '<h3 class="text-lg tracking-wide font-bold">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</h3>';
                  echo '<p class="text-gray-800 text-xl font-semibold">$' . htmlspecialchars($price, ENT_QUOTES, 'UTF-8') . '</p>';
                  echo '<p class="text-gray-600">Stock: ';
                  if (strtolower($stock_status) === 'out of stock') {
                      echo '<span class="text-red-500 font-bold">' . htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8') . '</span>';
                  } else {
                      echo htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8');
                  }
                  echo '</p>';

                  // **Star Rating Display**
                  echo '<div class="flex justify-center items-center mt-2 space-x-1">';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-gray-300 text-xl">☆</span>';
                  echo '</div>';


                  // Display available sizes
                  echo '<p class="font-medium mt-4">Available Sizes:</p>';
                  echo '<ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($sizes as $size) {
                      echo '<li><button class="px-2 py-1 bg-gray-200 rounded-full text-sm">' . htmlspecialchars($size, ENT_QUOTES, 'UTF-8') . '</button></li>';
                  }
                  echo '</ul>';

                  // Colors Section
                  echo '<div class="text-gray-700 text-sm mt-4">
                  <p class="font-medium">Available Colors:</p>
                  <ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($colors as $color) {
                      // Special case for black color
                      if (strtolower($color) === 'black') {
                          $colorClass = "bg-black";  // Tailwind class for black
                      } else {
                          // Apply Tailwind class for other colors (e.g., bg-red-500, bg-blue-500)
                          $colorClass = "bg-" . strtolower($color) . "-500"; 
                      }
                      echo '<li><button class="w-6 h-6 rounded-full ' . $colorClass . ' hover:ring-2 hover:ring-red-300" data-color="' . htmlspecialchars($color, ENT_QUOTES, 'UTF-8') . '"></button></li>';
                  }
                  echo '</ul></div>';

                  // Add to Cart & Wishlist buttons
                  echo '<div class="flex justify-center mt-4 space-x-2">
                  <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="item_name" value="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition duration-300 shadow-md">
                          ADD TO CART
                      </button>
                  </form>

                  <!-- Wishlist Button with Heart Icon and Name -->
                  <button class="add-to-wishlist flex items-center space-x-2 text-sm font-medium text-red-500 transition duration-300"
                      data-id="' . $id . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '">
                      <!-- Heart Icon in Red -->
                      <i class="fas fa-heart text-red-500 text-xl"></i>
                      <!-- Name Text -->
                      <span>Add to Wishlist</span>
                  </button>
                  </div>

                  <!-- Right Arrow Icon to open the Modal -->
                  <button class="open-modal text-blue-500 mt-2" data-id="' . $id . '" data-description="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">
                  <i class="fas fa-arrow-right"></i>
                  </button>
                  </div>
                  </div>';

                  // Modal Structure for Description and Images
                  echo '<div id="modal-' . $id . '" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                  <div class="bg-white p-6 rounded-lg w-96">
                      <h2 class="text-xl font-bold mb-4">Product Description</h2>
                      <p id="modal-description-' . $id . '" class="text-gray-700">' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '</p>
                      <div id="modal-images-' . $id . '" class="mt-4">';

                  // Display multiple images in the modal
                  if (!empty($images)) {
                      foreach ($images as $image) {
                          echo '<img src="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain mb-2">';
                      }
                  } else {
                      echo '<p class="text-gray-500 text-center">No additional images available.</p>';
                  }

                  echo '</div>
                      <button class="close-modal bg-red-500 text-white py-2 px-4 rounded-full mt-4" data-id="' . $id . '">Close</button>
                  </div>
              </div>';
              }
          } else {
              echo "<p class='text-center text-gray-500'>No products available.</p>";
          }

          $conn->close();
        ?>
    </div>


    <!-- Header Section -->
    <div class="text-center mb-12 mt-8">
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET CLOTHINGS</h1>
     </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
     <?php
          require 'connection.php'; // Include the database connection

          // Fetch products from cricket table
          $sql = "SELECT id, name, image_url, item_type, sizes, colors, stock_status, description, price FROM cricket WHERE item_type = 'Clothings'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $main_image = !empty($row['image_url']) ? $row['image_url'] : 'images/no-image-available.png';
                  $sizes = explode(", ", $row['sizes']);
                  $colors = explode(", ", $row['colors']);
                  $stock_status = $row['stock_status'];
                  $description = !empty($row['description']) ? $row['description'] : 'No description available';  // Default if description is empty
                  $price = isset($row['price']) ? $row['price'] : 0;  // Ensure price is set (set to 0 if not available)

                  // Fetch images for this product
                  $sql_images = "SELECT image_url FROM product_images WHERE product_id = $id";
                  $result_images = $conn->query($sql_images);
                  $images = [];
                  while ($image_row = $result_images->fetch_assoc()) {
                      $images[] = $image_row['image_url'];
                  }

                  // Display product details
                  echo '<div class="bg-white rounded-lg shadow-md overflow-hidden p-4">';
                  echo '<img src="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain">';
                  echo '<div class="p-4 text-center">';
                  echo '<h3 class="text-lg tracking-wide font-bold">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</h3>';
                  echo '<p class="text-gray-800 text-xl font-semibold">$' . htmlspecialchars($price, ENT_QUOTES, 'UTF-8') . '</p>';
                  echo '<p class="text-gray-600">Stock: ';
                  if (strtolower($stock_status) === 'out of stock') {
                      echo '<span class="text-red-500 font-bold">' . htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8') . '</span>';
                  } else {
                      echo htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8');
                  }
                  echo '</p>';

                  // **Star Rating Display**
                  echo '<div class="flex justify-center items-center mt-2 space-x-1">';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-gray-300 text-xl">☆</span>';
                  echo '</div>';


                  // Display available sizes
                  echo '<p class="font-medium mt-4">Available Sizes:</p>';
                  echo '<ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($sizes as $size) {
                      echo '<li><button class="px-2 py-1 bg-gray-200 rounded-full text-sm">' . htmlspecialchars($size, ENT_QUOTES, 'UTF-8') . '</button></li>';
                  }
                  echo '</ul>';

                  // Colors Section
                  echo '<div class="text-gray-700 text-sm mt-4">
                  <p class="font-medium">Available Colors:</p>
                  <ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($colors as $color) {
                      // Special case for black color
                      if (strtolower($color) === 'black') {
                          $colorClass = "bg-black";  // Tailwind class for black
                      } else {
                          // Apply Tailwind class for other colors (e.g., bg-red-500, bg-blue-500)
                          $colorClass = "bg-" . strtolower($color) . "-500"; 
                      }
                      echo '<li><button class="w-6 h-6 rounded-full ' . $colorClass . ' hover:ring-2 hover:ring-red-300" data-color="' . htmlspecialchars($color, ENT_QUOTES, 'UTF-8') . '"></button></li>';
                  }
                  echo '</ul></div>';

                  // Add to Cart & Wishlist buttons
                  echo '<div class="flex justify-center mt-4 space-x-2">
                  <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="item_name" value="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition duration-300 shadow-md">
                          ADD TO CART
                      </button>
                  </form>

                  <!-- Wishlist Button with Heart Icon and Name -->
                  <button class="add-to-wishlist flex items-center space-x-2 text-sm font-medium text-red-500 transition duration-300"
                      data-id="' . $id . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '">
                      <!-- Heart Icon in Red -->
                      <i class="fas fa-heart text-red-500 text-xl"></i>
                      <!-- Name Text -->
                      <span>Add to Wishlist</span>
                  </button>
                  </div>

                  <!-- Right Arrow Icon to open the Modal -->
                  <button class="open-modal text-blue-500 mt-2" data-id="' . $id . '" data-description="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">
                  <i class="fas fa-arrow-right"></i>
                  </button>
                  </div>
                  </div>';



                  // Modal Structure for Description and Images
                  echo '<div id="modal-' . $id . '" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                  <div class="bg-white p-6 rounded-lg w-96">
                      <h2 class="text-xl font-bold mb-4">Product Description</h2>
                      <p id="modal-description-' . $id . '" class="text-gray-700">' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '</p>
                      <div id="modal-images-' . $id . '" class="mt-4">';

                  // Display multiple images in the modal
                  if (!empty($images)) {
                      foreach ($images as $image) {
                          echo '<img src="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain mb-2">';
                      }
                  } else {
                      echo '<p class="text-gray-500 text-center">No additional images available.</p>';
                  }

                  echo '</div>
                      <button class="close-modal bg-red-500 text-white py-2 px-4 rounded-full mt-4" data-id="' . $id . '">Close</button>
                  </div>
              </div>';
              }
          } else {
              echo "<p class='text-center text-gray-500'>No products available.</p>";
          }

          $conn->close();
        ?>
    </div>

          
    <!-- Header Section -->
    <div class="text-center mb-12 mt-8">
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET EQUIPMENT</h1>
     </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
     <?php
          require 'connection.php'; // Include the database connection

          // Fetch products from cricket table
          $sql = "SELECT id, name, image_url, item_type, sizes, colors, stock_status, description, price FROM cricket WHERE item_type = 'equipment'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $main_image = !empty($row['image_url']) ? $row['image_url'] : 'images/no-image-available.png';
                  $sizes = explode(", ", $row['sizes']);
                  $colors = explode(", ", $row['colors']);
                  $stock_status = $row['stock_status'];
                  $description = !empty($row['description']) ? $row['description'] : 'No description available';  // Default if description is empty
                  $price = isset($row['price']) ? $row['price'] : 0;  // Ensure price is set (set to 0 if not available)

                  // Fetch images for this product
                  $sql_images = "SELECT image_url FROM product_images WHERE product_id = $id";
                  $result_images = $conn->query($sql_images);
                  $images = [];
                  while ($image_row = $result_images->fetch_assoc()) {
                      $images[] = $image_row['image_url'];
                  }

                  // Display product details
                  echo '<div class="bg-white rounded-lg shadow-md overflow-hidden p-4">';
                  echo '<img src="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain">';
                  echo '<div class="p-4 text-center">';
                  echo '<h3 class="text-lg tracking-wide font-bold">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</h3>';
                  echo '<p class="text-gray-800 text-xl font-semibold">$' . htmlspecialchars($price, ENT_QUOTES, 'UTF-8') . '</p>';
                  echo '<p class="text-gray-600">Stock: ';
                  if (strtolower($stock_status) === 'out of stock') {
                      echo '<span class="text-red-500 font-bold">' . htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8') . '</span>';
                  } else {
                      echo htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8');
                  }
                  echo '</p>';

                  // **Star Rating Display**
                  echo '<div class="flex justify-center items-center mt-2 space-x-1">';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-gray-300 text-xl">☆</span>';
                  echo '</div>';



                  // Display available sizes
                  echo '<p class="font-medium mt-4">Available Sizes:</p>';
                  echo '<ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($sizes as $size) {
                      echo '<li><button class="px-2 py-1 bg-gray-200 rounded-full text-sm">' . htmlspecialchars($size, ENT_QUOTES, 'UTF-8') . '</button></li>';
                  }
                  echo '</ul>';

                  // Colors Section
                  echo '<div class="text-gray-700 text-sm mt-4">
                  <p class="font-medium">Available Colors:</p>
                  <ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($colors as $color) {
                      // Special case for black color
                      if (strtolower($color) === 'black') {
                          $colorClass = "bg-black";  // Tailwind class for black
                      } else {
                          // Apply Tailwind class for other colors (e.g., bg-red-500, bg-blue-500)
                          $colorClass = "bg-" . strtolower($color) . "-500"; 
                      }
                      echo '<li><button class="w-6 h-6 rounded-full ' . $colorClass . ' hover:ring-2 hover:ring-red-300" data-color="' . htmlspecialchars($color, ENT_QUOTES, 'UTF-8') . '"></button></li>';
                  }
                  echo '</ul></div>';

                  // Add to Cart & Wishlist buttons
                  echo '<div class="flex justify-center mt-4 space-x-2">
                  <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="item_name" value="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition duration-300 shadow-md">
                          ADD TO CART
                      </button>
                  </form>

                  <!-- Wishlist Button with Heart Icon and Name -->
                  <button class="add-to-wishlist flex items-center space-x-2 text-sm font-medium text-red-500 transition duration-300"
                      data-id="' . $id . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '">
                      <!-- Heart Icon in Red -->
                      <i class="fas fa-heart text-red-500 text-xl"></i>
                      <!-- Name Text -->
                      <span>Add to Wishlist</span>
                  </button>
                  </div>

                  <!-- Right Arrow Icon to open the Modal -->
                  <button class="open-modal text-blue-500 mt-2" data-id="' . $id . '" data-description="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">
                  <i class="fas fa-arrow-right"></i>
                  </button>
                  </div>
                  </div>';



                  // Modal Structure for Description and Images
                  echo '<div id="modal-' . $id . '" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                  <div class="bg-white p-6 rounded-lg w-96">
                      <h2 class="text-xl font-bold mb-4">Product Description</h2>
                      <p id="modal-description-' . $id . '" class="text-gray-700">' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '</p>
                      <div id="modal-images-' . $id . '" class="mt-4">';

                  // Display multiple images in the modal
                  if (!empty($images)) {
                      foreach ($images as $image) {
                          echo '<img src="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain mb-2">';
                      }
                  } else {
                      echo '<p class="text-gray-500 text-center">No additional images available.</p>';
                  }

                  echo '</div>
                      <button class="close-modal bg-red-500 text-white py-2 px-4 rounded-full mt-4" data-id="' . $id . '">Close</button>
                  </div>
              </div>';
              }
          } else {
              echo "<p class='text-center text-gray-500'>No products available.</p>";
          }

          $conn->close();
        ?>
    </div>



    <!-- Header Section -->
    <div class="text-center mb-12 mt-8">
            <h1 class="text-4xl font-bold text-gray-800">OUR CRICKET PROTECTION</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
     <?php
          require 'connection.php'; // Include the database connection

          // Fetch products from cricket table
          $sql = "SELECT id, name, image_url, item_type, sizes, colors, stock_status, description, price FROM cricket WHERE item_type = 'protection'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $main_image = !empty($row['image_url']) ? $row['image_url'] : 'images/no-image-available.png';
                  $sizes = explode(", ", $row['sizes']);
                  $colors = explode(", ", $row['colors']);
                  $stock_status = $row['stock_status'];
                  $description = !empty($row['description']) ? $row['description'] : 'No description available';  // Default if description is empty
                  $price = isset($row['price']) ? $row['price'] : 0;  // Ensure price is set (set to 0 if not available)

                  // Fetch images for this product
                  $sql_images = "SELECT image_url FROM product_images WHERE product_id = $id";
                  $result_images = $conn->query($sql_images);
                  $images = [];
                  while ($image_row = $result_images->fetch_assoc()) {
                      $images[] = $image_row['image_url'];
                  }

                  // Display product details
                  echo '<div class="bg-white rounded-lg shadow-md overflow-hidden p-4">';
                  echo '<img src="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain">';
                  echo '<div class="p-4 text-center">';
                  echo '<h3 class="text-lg tracking-wide font-bold">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</h3>';
                  echo '<p class="text-gray-800 text-xl font-semibold">$' . htmlspecialchars($price, ENT_QUOTES, 'UTF-8') . '</p>';
                  echo '<p class="text-gray-600">Stock: ';
                  if (strtolower($stock_status) === 'out of stock') {
                      echo '<span class="text-red-500 font-bold">' . htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8') . '</span>';
                  } else {
                      echo htmlspecialchars($stock_status, ENT_QUOTES, 'UTF-8');
                  }
                  echo '</p>';

                  // **Star Rating Display**
                  echo '<div class="flex justify-center items-center mt-2 space-x-1">';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-yellow-500 text-xl">★</span>';
                  echo '<span class="text-gray-300 text-xl">☆</span>';
                  echo '</div>';


                  // Display available sizes
                  echo '<p class="font-medium mt-4">Available Sizes:</p>';
                  echo '<ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($sizes as $size) {
                      echo '<li><button class="px-2 py-1 bg-gray-200 rounded-full text-sm">' . htmlspecialchars($size, ENT_QUOTES, 'UTF-8') . '</button></li>';
                  }
                  echo '</ul>';

                  // Colors Section
                  echo '<div class="text-gray-700 text-sm mt-4">
                  <p class="font-medium">Available Colors:</p>
                  <ul class="flex justify-center space-x-2 mt-2">';
                  foreach ($colors as $color) {
                      // Special case for black color
                      if (strtolower($color) === 'black') {
                          $colorClass = "bg-black";  // Tailwind class for black
                      } else {
                          // Apply Tailwind class for other colors (e.g., bg-red-500, bg-blue-500)
                          $colorClass = "bg-" . strtolower($color) . "-500"; 
                      }
                      echo '<li><button class="w-6 h-6 rounded-full ' . $colorClass . ' hover:ring-2 hover:ring-red-300" data-color="' . htmlspecialchars($color, ENT_QUOTES, 'UTF-8') . '"></button></li>';
                  }
                  echo '</ul></div>';

                  // Add to Cart & Wishlist buttons
                  echo '<div class="flex justify-center mt-4 space-x-2">
                  <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="item_name" value="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600 transition duration-300 shadow-md">
                          ADD TO CART
                      </button>
                  </form>

                  <!-- Wishlist Button with Heart Icon and Name -->
                  <button class="add-to-wishlist flex items-center space-x-2 text-sm font-medium text-red-500 transition duration-300"
                      data-id="' . $id . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8') . '">
                      <!-- Heart Icon in Red -->
                      <i class="fas fa-heart text-red-500 text-xl"></i>
                      <!-- Name Text -->
                      <span>Add to Wishlist</span>
                  </button>
                  </div>

                  <!-- Right Arrow Icon to open the Modal -->
                  <button class="open-modal text-blue-500 mt-2" data-id="' . $id . '" data-description="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">
                  <i class="fas fa-arrow-right"></i>
                  </button>
                  </div>
                  </div>';



                  // Modal Structure for Description and Images
                  echo '<div id="modal-' . $id . '" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                  <div class="bg-white p-6 rounded-lg w-96">
                      <h2 class="text-xl font-bold mb-4">Product Description</h2>
                      <p id="modal-description-' . $id . '" class="text-gray-700">' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '</p>
                      <div id="modal-images-' . $id . '" class="mt-4">';

                  // Display multiple images in the modal
                  if (!empty($images)) {
                      foreach ($images as $image) {
                          echo '<img src="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" class="w-full h-48 object-contain mb-2">';
                      }
                  } else {
                      echo '<p class="text-gray-500 text-center">No additional images available.</p>';
                  }

                  echo '</div>
                      <button class="close-modal bg-red-500 text-white py-2 px-4 rounded-full mt-4" data-id="' . $id . '">Close</button>
                  </div>
              </div>';
              }
          } else {
              echo "<p class='text-center text-gray-500'>No products available.</p>";
          }

          $conn->close();
        ?>
    </div>

          <script>
            //multiple images model
          document.addEventListener('DOMContentLoaded', function() {
              // Open modal
              const openButtons = document.querySelectorAll('.open-modal');
              openButtons.forEach(button => {
                  button.addEventListener('click', function() {
                      const productId = button.getAttribute('data-id');
                      const modal = document.getElementById('modal-' + productId);
                      modal.classList.remove('hidden');
                  });
              });

              // Close modal
              const closeButtons = document.querySelectorAll('.close-modal');
              closeButtons.forEach(button => {
                  button.addEventListener('click', function() {
                      const productId = button.getAttribute('data-id');
                      const modal = document.getElementById('modal-' + productId);
                      modal.classList.add('hidden');
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

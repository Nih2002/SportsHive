<?php
// Include database connection
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $category = trim($_POST['category']);  // Category (like 'Cricket', 'Football', etc.)
    $subcategory = trim($_POST['item_type']); // Subcategory (like 'Shoes', 'Clothing', etc.)
    $item_name = trim($_POST['item_name']);
    $price = trim($_POST['price']);
    $image_url = trim($_POST['image_url']);
    $description = trim($_POST['description']);

    // Ensure sizes and colors are properly formatted
    $sizes = isset($_POST['size']) ? array_filter($_POST['size'], 'strlen') : [];
    $colors = isset($_POST['color']) ? array_filter($_POST['color'], 'strlen') : [];

    // Convert array values into a comma-separated string
    $sizes_string = !empty($sizes) ? implode(', ', $sizes) : NULL;
    $colors_string = !empty($colors) ? implode(', ', $colors) : NULL;

    // Determine the table based on the selected category
    switch ($category) {
        case 'Cricket': $table = 'cricket'; break;
        case 'Netball': $table = 'netball'; break;
        case 'Swimming': $table = 'swimming'; break;
        case 'Athletic': $table = 'athletic'; break;
        case 'Football': $table = 'football'; break;
        case 'Volleyball': $table = 'volleyball'; break;
        case 'Rugby': $table = 'rugby'; break;
        case 'Cycling': $table = 'cycling'; break;
        case 'Basketball': $table = 'basketball'; break;
        default:
            echo "<script>alert('Invalid category!');</script>";
            exit();
    }

    // Insert into the selected category table
    $sql = "INSERT INTO $table (name, price, image_url, item_type, sizes, colors, description) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss",  $item_name, $price, $image_url, $subcategory, $sizes_string, $colors_string, $description);

    // Execute query and show success message
    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin add product</title>
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

          <!-- Sign In & Cart -->
          <div class="flex space-x-4">
            <!-- Sign In Button -->
            <a href="../sportshive/views/signin.php" 
            class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none disabled">
                <i class="fas fa-user"></i>
                <span>Sign Up</span>
            </a>

            <!-- Log In Button -->
            <a href="../sportshive/views/login.php" 
            class="flex items-center space-x-2 px-4 py-2 bg-red-400 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition opacity-50 pointer-events-none">
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

<!-- Product Form -->
<div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Add Products</h2>
    <p class="mb-6">Manage product inventory.</p>

    <form id="product-form" class="modal-content overflow-y-auto" action="addproduct.php" method="POST" enctype="multipart/form-data">
        <!-- Category Selection -->
        <div class="mt-4">
            <label class="block font-medium">Category</label>
            <select id="category" name="category" class="w-full p-2 border rounded" onchange="updateSubcategories()">
                <option value="Cricket">Cricket</option>
                <option value="Netball">Netball</option>
                <option value="Swimming">Swimming</option>
                <option value="Athletic">Athletic</option>
                <option value="Football">Football</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Rugby">Rugby</option>
                <option value="Cycling">Cycling</option>
                <option value="Basketball">Basketball</option>
            </select>
        </div>

        <!-- Subcategory Selection (Updated) -->
        <div class="mt-4">
            <label class="block font-medium">Subcategory</label>
            <select id="item_type" name="item_type" class="w-full p-2 border rounded">
                <!-- Subcategories will be loaded dynamically here -->
            </select>
        </div>

        <!-- Item Name -->
        <div class="mt-4">
            <label class="block font-medium">Item Name</label>
            <input type="text" id="item_name" name="item_name" class="w-full p-2 border rounded" placeholder="Enter item name" required>
        </div>

        <!-- Price -->
        <div class="mt-4">
            <label for="price" class="block font-medium">Price</label>
            <input type="number" id="price" name="price" class="w-full p-2 border rounded" placeholder="Enter price" min="0" required>
        </div>

        <!-- Image URL -->
        <div class="mt-4">
            <label class="block font-medium">Image URL</label>
            <input type="text" name="image_url" class="w-full p-2 border rounded mb-3" placeholder="Enter image URL">
        </div>

        <!-- Sizes -->
        <label class="block font-medium">Sizes:</label>
        <div>
            <input type="checkbox" name="size[]" value="S"> Small
            <input type="checkbox" name="size[]" value="M"> Medium
            <input type="checkbox" name="size[]" value="L"> Large
            <input type="checkbox" name="size[]" value="XL"> Extra Large
            <input type="checkbox" name="size[]" value="six"> Six
            <input type="checkbox" name="size[]" value="seven"> Seven
        </div>

        <!-- Colors -->
        <label class="block font-medium mt-4">Colors:</label>
        <div>
            <input type="checkbox" name="color[]" value="Red"> Red
            <input type="checkbox" name="color[]" value="Blue"> Blue
            <input type="checkbox" name="color[]" value="Green"> Green
            <input type="checkbox" name="color[]" value="Black"> Black
            <input type="checkbox" name="color[]" value="Yellow"> Yellow
        </div>

        <!-- Description -->
        <div class="mt-4">
            <label class="block font-medium">Description</label>
            <textarea id="description" name="description" class="w-full p-2 border rounded" placeholder="Enter product description" required></textarea>
        </div>

        <!-- Add Product Button -->
        <button type="submit" id="add-product-btn" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Add Product</button>
    </form>
</div>

<!-- JavaScript for Dynamic Subcategories -->
<script>
function updateSubcategories() {
    const category = document.getElementById("category").value;
    const subcategorySelect = document.getElementById("item_type");
    
    // Define subcategories for each category
    const subcategories = {
        "Cricket": ["Equipment", "Protection", "Shoes", "Clothing"],
        "Netball": ["Equipment"],
        "Swimming": ["Equipment"],
        "Athletic": ["Shoes", "Equipment", "Colothings"],
        "Football": ["Shoes", "Balls"],
        "Volleyball": ["Equipment"],
        "Rugby": ["Shoes", "Balls", "Protection"],
        "Cycling": ["Shoes", "Cycling", "Protection", "Accessories"],
        "Basketball": ["Shoes", "Balls"]
    };

    // Clear existing subcategories
    subcategorySelect.innerHTML = "";

    // Add new subcategories based on selected category
    if (subcategories[category]) {
        subcategories[category].forEach(sub => {
            let option = document.createElement("option");
            option.value = sub;
            option.textContent = sub;
            subcategorySelect.appendChild(option);
        });
    }
}

// Run function on page load to set default subcategories
updateSubcategories();
</script>


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

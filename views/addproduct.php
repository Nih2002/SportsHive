<?php
// Include database connection
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields exist before accessing them
    $category    = isset($_POST['category']) ? trim($_POST['category']) : '';
    $subcategory   = isset($_POST['item_type']) ? trim($_POST['item_type']) : '';
    $item_name   = isset($_POST['item_name']) ? trim($_POST['item_name']) : '';
    $price       = isset($_POST['price']) ? trim($_POST['price']) : '';
    $image_url   = isset($_POST['image_url']) ? trim($_POST['image_url']) : '';
    $description = isset($_POST['description']) ? trim($_POST['description']) : '';

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
<!-- Admin Header -->
<header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
        <!-- Logo -->
       <a href="#" class="flex items-center space-x-2">
         <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
       </a>
       <div class="text-2xl font-bold tracking-wide">
            Manage Products
       </div>
       

       <!-- Navigation Links -->
       <nav class="flex space-x-6 text-lg font-semibold">
           <a href="#" class="hover:text-yellow-400 transition">Dashboard</a>
           <a href="#" class="hover:text-yellow-400 transition">Orders</a>
           <a href="#" class="hover:text-yellow-400 transition">Products</a>
           <a href="#" class="hover:text-yellow-400 transition">Users</a>
           <a href="#" class="hover:text-yellow-400 transition">Reports</a>
       </nav>

       <!-- Admin Profile Dropdown -->
       <div class="relative">
           <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
               <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full border-2 border-yellow-400">
               <span class="ml-2 font-semibold">Admin</span>
               <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
               </svg>
           </button>

           <!-- Dropdown Menu -->
           <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-lg shadow-lg hidden">
               <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
               <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
               <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-200">Logout</a>
           </div>
       </div>
   </header>

   <script>
       function toggleDropdown() {
           document.getElementById("dropdownMenu").classList.toggle("hidden");
       }
   </script>

<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">Add Product</h2>
        <form id="product-form" action="addproduct.php" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label class="block text-gray-600 font-medium">Category</label>
                <select id="category" name="category" class="w-full p-3 border rounded-md focus:ring focus:ring-blue-300" onchange="updateSubcategories()">
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
            <div>
                <label class="block text-gray-600 font-medium">Subcategory</label>
                <select id="item_type" name="item_type" class="w-full p-3 border rounded-md focus:ring focus:ring-blue-300"></select>
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Item Name</label>
                <input type="text" id="item_name" name="item_name" class="w-full p-3 border rounded-md" placeholder="Enter item name" required>
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Price</label>
                <input type="number" id="price" name="price" class="w-full p-3 border rounded-md" placeholder="Enter price" min="0" required>
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Image URL</label>
                <input type="text" name="image_url" class="w-full p-3 border rounded-md" placeholder="Enter image URL">
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Sizes</label>
                <div class="flex flex-wrap gap-3">
                    <label><input type="checkbox" name="size[]" value="S"> S</label>
                    <label><input type="checkbox" name="size[]" value="M"> M</label>
                    <label><input type="checkbox" name="size[]" value="L"> L</label>
                    <label><input type="checkbox" name="size[]" value="XL"> XL</label>
                    <label><input type="checkbox" name="size[]" value="six"> 6</label>
                    <label><input type="checkbox" name="size[]" value="seven"> 7</label>
                </div>
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Colors</label>
                <div class="flex flex-wrap gap-3">
                    <label><input type="checkbox" name="color[]" value="Red"> Red</label>
                    <label><input type="checkbox" name="color[]" value="Blue"> Blue</label>
                    <label><input type="checkbox" name="color[]" value="Green"> Green</label>
                    <label><input type="checkbox" name="color[]" value="Black"> Black</label>
                    <label><input type="checkbox" name="color[]" value="Yellow"> Yellow</label>
                </div>
            </div>
            <div>
                <label class="block text-gray-600 font-medium">Description</label>
                <textarea id="description" name="description" class="w-full p-3 border rounded-md" placeholder="Enter product description" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600">Add Product</button>
        </form>
    </div>

    <script>
        function updateSubcategories() {
            const category = document.getElementById("category").value;
            const subcategorySelect = document.getElementById("item_type");
            const subcategories = {
                "Cricket": ["Equipment", "Protection", "Shoes", "Clothing"],
                "Netball": ["Equipment"],
                "Swimming": ["Equipment"],
                "Athletic": ["Shoes", "Equipment", "Clothing"],
                "Football": ["Shoes", "Balls"],
                "Volleyball": ["Equipment"],
                "Rugby": ["Shoes", "Balls", "Protection"],
                "Cycling": ["Shoes", "Cycling", "Protection", "Accessories"],
                "Basketball": ["Shoes", "Balls"]
            };
            subcategorySelect.innerHTML = "";
            if (subcategories[category]) {
                subcategories[category].forEach(sub => {
                    let option = document.createElement("option");
                    option.value = sub;
                    option.textContent = sub;
                    subcategorySelect.appendChild(option);
                });
            }
        }
        updateSubcategories();
    </script>
</body>


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

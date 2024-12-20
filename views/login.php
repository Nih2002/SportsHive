<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create an Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 bg-cover h-[25vh]" style="background-image: url('../images/sign1.jpg');">
  <header class="bg-blue-900 text-white w-full h-10">
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
                <a href="#" class="flex items-center space-x-2 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
                  <i class="fas fa-user"></i>
                  <span>Sign In</span>
                </a>

                <!-- Log In Button -->
                <a href="#" class="flex items-center space-x-2 px-4 py-2 bg-red-300 text-white rounded-lg shadow-md hover:bg-yellow-50 hover:shadow-lg transition">
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
        <div class="relative z-50 ">
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
      <div class="flex space-x-4 mx-auto">
          <div class="relative group">
          <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Sports</a>
          <div class="box-border absolute left-0 hidden mt-2 space-y-4 bg-white shadow-lg rounded-lg group-hover:block p-6 w-64 z-50 overflow-y-auto max-h-96">
            <!-- Dropdown content here -->
              <div>
                <h3 class="font-semibold text-lg text-blue-900">Cycling</h3>
                <ul class="text-gray-700">
                  <li><a href="#" class="hover:text-blue-600">Bikes</a></li>
                  <li><a href="#" class="hover:text-blue-600">Electric Bikes</a></li>
                  <li><a href="#" class="hover:text-blue-600">Cycling Clothing</a></li>
                  <li><a href="#" class="hover:text-blue-600">Bike Helmets</a></li>
                </ul>
              </div>
              <div>
                <h3 class="font-semibold text-lg text-blue-900">Hiking</h3>
                <ul class="text-gray-700">
                  <li><a href="#" class="hover:text-blue-600">Outdoor Shoes</a></li>
                  <li><a href="#" class="hover:text-blue-600">Hiking Clothes</a></li>
                  <li><a href="#" class="hover:text-blue-600">Hiking Backpacks</a></li>
                  <li><a href="#" class="hover:text-blue-600">Hiking Gear</a></li>
                </ul>
              </div>
              <div>
                <h3 class="font-semibold text-lg text-blue-900">Fitness & Gym</h3>
                <ul class="text-gray-700">
                  <li><a href="#" class="hover:text-blue-600">Gym Equipment</a></li>
                  <li><a href="#" class="hover:text-blue-600">Training Supports</a></li>
                  <li><a href="#" class="hover:text-blue-600">Proteins & Supplements</a></li>
                </ul>
              </div>
              <div>
                <h3 class="font-semibold text-lg text-blue-900">Winter Sports</h3>
                <ul class="text-gray-700">
                  <li><a href="#" class="hover:text-blue-600">Ski Equipment</a></li>
                  <li><a href="#" class="hover:text-blue-600">Snowboard Equipment</a></li>
                  <li><a href="#" class="hover:text-blue-600">Winter Sports Clothing</a></li>
                </ul>
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
      </div>

      <script>
        const menuToggle = document.getElementById("menu-toggle");
        const menuLinks = document.getElementById("menu-links");

        menuToggle.addEventListener("click", () => {
          menuLinks.classList.toggle("hidden");
        });
      </script>
  </header>

  <!-- Main Section -->
    <div class="h-screen justify-center items-center mt-52 ml-96 p-6">
    <div class="w-96 bg-gray-800 text-gray-100 rounded-lg shadow-xl p-8 space-y-6 mx-32">
        <h2 class="text-3xl font-semibold text-center text-teal-400 mb-4">Login Form</h2>
        <form>
        <div class="space-y-4 mb-6">
            <input type="text" placeholder="Username" class="w-full p-3 rounded-lg bg-gray-700 text-gray-100" />
            <input type="password" placeholder="Password" class="w-full p-3 rounded-lg bg-gray-700 text-gray-100"/>
        </div>
        <button 
            type="submit" class="w-full bg-teal-500 p-3 rounded-lg text-gray-100 font-semibold opacity-50 cursor-not-allowed" disabled>Login</button>
        </form>
        <p class="text-center text-gray-400">Don't have an account? 
        <a href="signin.php" class="text-teal-400">Sign up</a>
        </p>
    </div>
    </div>


  <!-- Footer Section -->
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
</body>
</html>

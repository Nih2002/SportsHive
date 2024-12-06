<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collapsible Dropdown Menu</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navigation Bar -->
  <nav class="relative bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Menu Icon -->
        <div class="relative">
          <button id="menu-toggle" class="text-green-600 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <!-- Collapsible Menu -->
          <div id="menu-links" class="hidden absolute bg-white border border-gray-200 rounded-lg shadow-lg w-48 mt-2">
            <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100 rounded-t-lg">Home</a>
            <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100">About Us</a>
            <a href="#" class="block px-4 py-3 text-gray-600 hover:bg-green-100 rounded-b-lg">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </nav>



  <div class="relative group">
  <!-- Trigger Button -->
  <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg shadow-lg hover:shadow-xl hover:from-blue-700 hover:to-blue-600 transition-all duration-300">
    Sports
  </button>

  <!-- Dropdown Menu -->
  <div class="absolute left-0 mt-1 hidden group-hover:block w-[400px] bg-white shadow-2xl rounded-xl z-50">
    <!-- Content Grid -->
    <div class="p-6 grid grid-cols-2 gap-4">
      <!-- Dropdown items -->
      <div class="group bg-gray-100 p-2 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-blue-500 text-white p-3 rounded-full">
            <span class="text-xl">🚴‍♀️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">Cycling</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-blue-500">Bikes</a></li>
              <li><a href="#" class="hover:text-blue-500">Electric Bikes</a></li>
              <li><a href="#" class="hover:text-blue-500">Clothing</a></li>
              <li><a href="#" class="hover:text-blue-500">Helmets</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Hiking Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-green-500 text-white p-3 rounded-full">
            <span class="text-xl">🥾</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-green-600">Hiking</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-green-500">Shoes</a></li>
              <li><a href="#" class="hover:text-green-500">Clothing</a></li>
              <li><a href="#" class="hover:text-green-500">Backpacks</a></li>
              <li><a href="#" class="hover:text-green-500">Gear</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Running Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-red-500 text-white p-3 rounded-full">
            <span class="text-xl">🏃‍♂️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-red-600">Running</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-red-500">Shoes</a></li>
              <li><a href="#" class="hover:text-red-500">Clothing</a></li>
              <li><a href="#" class="hover:text-red-500">Accessories</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Swimming Section -->
      <div class="group bg-gray-100 p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
        <div class="flex items-center space-x-3">
          <div class="bg-teal-500 text-white p-3 rounded-full">
            <span class="text-xl">🏊‍♂️</span>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800 group-hover:text-teal-600">Swimming</h3>
            <ul class="mt-2 text-sm text-gray-600 space-y-1">
              <li><a href="#" class="hover:text-teal-500">Swimwear</a></li>
              <li><a href="#" class="hover:text-teal-500">Goggles</a></li>
              <li><a href="#" class="hover:text-teal-500">Caps</a></li>
              <li><a href="#" class="hover:text-teal-500">Accessories</a></li>
            </ul>
          </div>
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
</body>
</html>

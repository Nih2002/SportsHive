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

  <script>
    const menuToggle = document.getElementById("menu-toggle");
    const menuLinks = document.getElementById("menu-links");

    menuToggle.addEventListener("click", () => {
      menuLinks.classList.toggle("hidden");
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand & Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
            <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
        </a>
        <div class="text-2xl font-bold tracking-wide">Add Brands</div>
        
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
                <img src="" class="w-10 h-10 rounded-full border-2 border-yellow-400">
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

    <!-- Main Content -->
    <div class="flex items-center justify-center flex-grow p-4">
        <add-brand-item></add-brand-item>
    </div>
    
    <script>
        class AddBrandItem extends HTMLElement {
            constructor() {
                super();
                this.attachShadow({ mode: "open" });
                this.shadowRoot.innerHTML = `
                    <style>
                        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
                    </style>
                    <div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-xl border border-gray-200">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Add Brand & Item</h2>
                    <form action="yonex.php" method="POST" class="space-y-5">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Brand Name</label>
                            <input type="text" name="brand_name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Item Name</label>
                            <input type="text" name="item_name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Item Description</label>
                            <textarea name="item_description" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Item Price</label>
                                <input type="number" name="item_price" required step="0.01" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Stock Quantity</label>
                                <input type="number" name="item_stock" required min="0" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Item Color</label>
                                <input type="color" name="item_color" required class="w-full h-12 border border-gray-300 rounded-lg">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Available Sizes</label>
                                <input type="text" name="item_sizes" placeholder="e.g. S, M, L, XL" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                         </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Image URL</label>
                                <input type="text" name="item_image" placeholder="Enter Image URL" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white p-3 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-800 transition shadow-md">Add Brand & Item</button>
                    </form>
                </div>
                `;
            }
        }
        customElements.define("add-brand-item", AddBrandItem);

        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>
</body>
</html>
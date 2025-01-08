<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <input type="text" placeholder="What are you looking for?" class="w-full bg-white text-black rounded-l-lg px-4 py-2 focus:outline-none">
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
                  <!-- Dynamic Cart Icon -->
                  <button id="view-cart" class="relative">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.4 7h11.2M7 13l-4-8H2M7 13h10m-4 0a1 1 0 112 0m-4 0a1 1 0 11-2 0" />
                      </svg>
                      <!-- Cart Count Badge -->
                      <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                          0
                      </span>
                  </button>

                  <!-- Cart Modal -->
                  <div id="cart-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                      <div class="bg-white rounded-lg w-3/4 max-w-lg">
                          <div class="p-5 border-b">
                              <h2 class="text-xl font-bold">Your Cart</h2>
                          </div>
                          <div id="cart-items" class="p-5">
                              <!-- Cart items will be dynamically injected here -->
                          </div>
                          <div class="p-5 border-t flex justify-between items-center">
                              <button id="close-cart" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">
                                  Close
                              </button>
                              <span id="cart-total" class="text-lg font-bold">Total: Rs. 0.00</span>
                          </div>
                      </div>
                  </div>
              </div>


                <!-- Sign In and Sign Up Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="../views/login.php" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Sign In</a>
                    <a href="../views/signup.php" class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-500">Sign Up</a>
                </div>
                
            </div>
        </div>
    </div>
</header>

<script>
    // Cart count dynamic update (example: use session/cart data in a real application)
    document.getElementById("cart-count").textContent = 3; // Replace with dynamic value

    // Toggle dropdown menu for user profile
    const profileButton = document.querySelector(".relative button");
    const dropdownMenu = document.querySelector(".relative .hidden");
    profileButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
    });
</script>

<script>
    // Cart count dynamic update (example: use session/cart data in a real application)
    document.getElementById("cart-count").textContent = 3; // Replace with dynamic value

    // Toggle dropdown menu for user profile
    const profileButton = document.querySelector(".relative button");
    const dropdownMenu = document.querySelector(".relative .hidden");
    profileButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
    });
</script>

<body class="bg-gray-100">

    <!-- Equipment List -->
    <div class="container mx-auto mt-10">
        <div id="equipment-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Equipment items will be injected dynamically -->
        </div>
    </div>

    <script>
        // Equipment data
        const equipment = [
            { id: 1, name: 'Shooter Netball', price: 3200 },
            { id: 2, name: 'Flare Match Ball', price: 3000 },
            { id: 3, name: 'Hurricane Netball', price: 4990 },
        ];

        // Render equipment list
        const equipmentList = document.getElementById('equipment-list');
        equipment.forEach(item => {
            const div = document.createElement('div');
            div.className = 'bg-white p-6 rounded-lg shadow-lg text-center';
            div.innerHTML = `
                <h2 class="text-xl font-semibold mb-4">${item.name}</h2>
                <p class="text-gray-700 mb-4">Price: Rs. ${item.price.toLocaleString()}</p>
                <button class="add-to-cart bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" data-id="${item.id}">
                    Add to Cart
                </button>
            `;
            equipmentList.appendChild(div);
        });

        // Add to cart functionality
        const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
        const cartCount = document.getElementById('cart-count');
        const updateCartCount = () => cartCount.textContent = cart.length;
        updateCartCount();

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const id = parseInt(button.dataset.id);
                const item = equipment.find(e => e.id === id);
                if (!cart.find(e => e.id === id)) {
                    cart.push(item);
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();
                    alert(`${item.name} added to cart!`);
                } else {
                    alert(`${item.name} is already in the cart.`);
                }
            });
        });

        // View cart modal
        const cartModal = document.getElementById('cart-modal');
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');
        const renderCart = () => {
            cartItems.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
                const div = document.createElement('div');
                div.className = 'flex justify-between mb-4';
                div.innerHTML = `
                    <span>${item.name}</span>
                    <span>Rs. ${item.price.toLocaleString()}</span>
                `;
                cartItems.appendChild(div);
                total += item.price;
            });
            cartTotal.textContent = `Total: Rs. ${total.toLocaleString()}`;
        };

        document.getElementById('view-cart').addEventListener('click', () => {
            renderCart();
            cartModal.classList.remove('hidden');
        });

        document.getElementById('close-cart').addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });
    </script>
</body>
</html>

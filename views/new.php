<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-blue-900 text-white">
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
                    <!-- Cart Icon -->
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

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div id="equipment-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/goggle3.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                    <h3 class="text-lg tracking-wide font-bold">Swimming goggles One Size Fits All</h3>
                    <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 990.00</h4>
                    <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600" data-id="1" data-name="Swimming goggles One Size Fits All" data-price="990">
                        ADD TO CART
                    </button>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/goggle4.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                    <h3 class="text-lg tracking-wide font-bold">Tinted lenses Swimming Goggles</h3>
                    <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 1200.00</h4>
                    <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600" data-id="2" data-name="Tinted lenses Swimming Goggles" data-price="1200">
                        ADD TO CART
                    </button>
                </a>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../images/goggle5.png" class="w-full h-48 object-contain p-4">
                <a href="#" class="p-4 text-center">
                    <h3 class="text-lg tracking-wide font-bold">Corrective Swimming Goggles</h3>
                    <h4 class="text-lg font-bold text-yellow-500 font-serif">Rs. 790.00</h4>
                    <button class="add-to-cart bg-red-500 text-white text-sm font-medium py-2 px-4 rounded-full hover:bg-red-600" data-id="3" data-name="Corrective Swimming Goggles" data-price="790">
                        ADD TO CART
                    </button>
                </a>
            </div>

        </div>
    </div>

    <script>
        // Initialize cart from session storage
        const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
        const cartCount = document.getElementById('cart-count');
        const cartModal = document.getElementById('cart-modal');
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');

        const updateCartCount = () => {
            cartCount.textContent = cart.length;
        };

        const renderCart = () => {
            cartItems.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
                const div = document.createElement('div');
                div.className = 'flex justify-between mb-4';
                div.innerHTML = `
                    <span>${item.name}</span>
                    <span>Rs. ${item.price}</span>
                `;
                cartItems.appendChild(div);
                total += item.price;
            });
            cartTotal.textContent = `Total: Rs. ${total}`;
        };

        // Handle adding items to the cart
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseInt(button.getAttribute('data-price'));
                const item = { id, name, price };

                // Add to cart and update session storage
                if (!cart.find(e => e.id === id)) {
                    cart.push(item);
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();
                    alert(`${name} added to cart!`);
                } else {
                    alert(`${name} is already in the cart.`);
                }
            });
        });

        // Open the cart modal
        document.getElementById('view-cart').addEventListener('click', () => {
            renderCart();
            cartModal.classList.remove('hidden');
        });

        // Close the cart modal
        document.getElementById('close-cart').addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });

        // Initial update of cart count
        updateCartCount();
    </script>
</body>
</html>

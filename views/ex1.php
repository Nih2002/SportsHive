<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportHive - Products</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CDN -->
</head>
<body class="bg-gray-100">

    <!-- Container for the products -->
    <div class="container mx-auto py-10" id="product-container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Products will be dynamically added here -->
        </div>
    </div>

    <script>
        // Function to fetch products from the API
        async function fetchProducts() {
            try {
                // Sample API URL for demonstration purposes
                const response = await fetch('products.json'); // Update with actual API URL

                // Check if the fetch was successful
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                // Parse the JSON data
                const data = await response.json();
                console.log(data); // Debugging: Check the data structure in the console

                // Check if 'products' exists in the data
                if (!data.products) {
                    throw new Error('No products found in the data');
                }

                const products = data.products;
                const productContainer = document.getElementById('product-container');

                // Loop through the products and create the HTML for each one
                products.forEach(product => {
                    const productElement = document.createElement('div');
                    productElement.classList.add('bg-white', 'p-4', 'rounded-lg', 'shadow-lg', 'hover:shadow-xl', 'transition', 'duration-200', 'transform', 'hover:scale-105');

                    productElement.innerHTML = `
                        <img src="${product.image}" alt="${product.name}" class="w-full h-64 object-cover rounded-t-lg mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">${product.name}</h2>
                        <p class="text-gray-600 text-sm my-2">${product.description}</p>
                        <p class="text-lg font-bold text-blue-500">₹${product.price}</p>
                        <p class="text-sm text-gray-500 mt-2">Rating: ${product.rating}/5</p>
                        <div class="mt-2 text-gray-700">
                            <strong>Sizes:</strong> ${product.sizes.join(', ')}
                        </div>
                        <div class="mt-2 text-gray-700">
                            <strong>Colors:</strong> ${product.colors.join(', ')}
                        </div>
                    `;

                    productContainer.querySelector('.grid').appendChild(productElement);
                });
            } catch (error) {
                console.error('Error fetching products:', error);
            }
        }

        // Fetch the products when the page loads
        window.onload = fetchProducts;
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assigned Deliveries</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">Assigned Deliveries</h1>

        <!-- Deliveries Table -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-2">Order ID</th>
                        <th class="px-4 py-2">Customer Name</th>
                        <th class="px-4 py-2">Delivery Address</th>
                        <th class="px-4 py-2">Contact</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody id="deliveryTable">
                    <?php
                    // Connect to the database
                    $conn = new mysqli('localhost', 'root', '', 'sports_ecommerce');

                    // Check connection
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Fetch deliveries assigned to the logged-in delivery person (example user ID = 1)
                    $delivery_person_id = 1; // Replace with dynamic session-based ID
                    $sql = "SELECT * FROM deliveries WHERE delivery_person_id = $delivery_person_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='text-center border-t'>
                                <td class='px-4 py-2'>{$row['order_id']}</td>
                                <td class='px-4 py-2'>{$row['customer_name']}</td>
                                <td class='px-4 py-2'>{$row['delivery_address']}</td>
                                <td class='px-4 py-2'>{$row['contact']}</td>
                                <td id='status-{$row['order_id']}' class='px-4 py-2'>{$row['status']}</td>
                                <td class='px-4 py-2'>
                                    <button class='px-2 py-1 bg-blue-500 text-white rounded' onclick=\"viewDetails({$row['order_id']})\">View Details</button>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center py-4'>No deliveries assigned.</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Modal for Delivery Details -->
        <div id="detailsModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-4/5 md:w-1/2">
                <div class="flex justify-between items-center border-b px-4 py-2">
                    <h2 class="text-xl font-bold text-gray-800">Delivery Details</h2>
                    <button class="text-gray-600 hover:text-gray-900" onclick="closeModal()">&times;</button>
                </div>
                <div id="modalContent" class="p-4">
                    <!-- Dynamic content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to view delivery details
        function viewDetails(orderId) {
            fetch(`delivery_details.php?order_id=${orderId}`)
                .then(response => response.json())
                .then(data => {
                    const modalContent = document.getElementById('modalContent');
                    modalContent.innerHTML = `
                        <p><strong>Order ID:</strong> ${data.order_id}</p>
                        <p><strong>Customer Name:</strong> ${data.customer_name}</p>
                        <p><strong>Delivery Address:</strong> ${data.delivery_address}</p>
                        <p><strong>Contact:</strong> ${data.contact}</p>
                        <p><strong>Status:</strong> ${data.status}</p>
                        <p><strong>Items:</strong></p>
                        <ul class='list-disc pl-5'>
                            ${data.items.map(item => `<li>${item}</li>`).join('')}
                        </ul>
                        <p><strong>Special Instructions:</strong> ${data.instructions || 'None'}</p>
                    `;
                    document.getElementById('detailsModal').classList.remove('hidden');
                })
                .catch(error => alert('Failed to load details. Please try again.'));
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }
    </script>
</body>
</html>

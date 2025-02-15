<?php

// Database connection
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";
$dbname = "sportshive"; // Change to your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch maintenance requests
$sql = "SELECT request_id, request_title, issue_description, preferred_time, user_contact, submitted_at FROM maintenance_requests";
$result = $conn->query($sql);

// Check if query executed successfully
if (!$result) {
    die("Error retrieving data: " . $conn->error);
}
?>


<?php
include 'connection.php'; // Adjust the path accordingly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["request_id"])) {
        $request_id = intval($_POST["request_id"]);

        if (isset($_POST["accept"])) {
            $status = "Accepted";
        } elseif (isset($_POST["deny"])) {
            $status = "Denied";
        } else {
            $status = "Pending";
        }

        // Update query
        $stmt = $conn->prepare("UPDATE maintenance_requests SET status = ? WHERE request_id = ?");
        $stmt->bind_param("si", $status, $request_id);

        if ($stmt->execute()) {
            echo "<script>alert('Request status updated successfully.'); window.location.href='repair.php';</script>";
        } else {
            echo "<script>alert('Failed to update request status.');</script>";
        }

        $stmt->close();
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
        <!-- Logo -->
       <a href="#" class="flex items-center space-x-2">
         <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
       </a>
       <div class="text-2xl font-bold tracking-wide">
            Request Handling
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
<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Maintenance Requests</h2>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Request ID</th>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Preferred Time</th>
                    <th class="border border-gray-300 px-4 py-2">Submitted At</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr class="text-gray-700">
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($row["request_id"]); ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row["request_title"]); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($row["preferred_time"]); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($row["submitted_at"]); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <button onclick="openModal(<?php echo $row['request_id']; ?>)" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition">
                                    View Details
                                </button>
                            </td>
                        </tr>

                        <!-- Modal (Initially Hidden) -->
                        <div id="modal-<?php echo $row['request_id']; ?>" class="fixed inset-0 hidden bg-black bg-opacity-50 flex items-center justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                                <h3 class="text-xl font-semibold">Maintenance Request Details</h3>
                                <p class="text-gray-700 mt-2"><strong>Request ID:</strong> <?php echo htmlspecialchars($row["request_id"]); ?></p>
                                <p class="text-gray-700"><strong>Title:</strong> <?php echo htmlspecialchars($row["request_title"]); ?></p>
                                <p class="text-gray-700"><strong>Issue:</strong> <?php echo htmlspecialchars($row["issue_description"]); ?></p>
                                <p class="text-gray-700"><strong>Preferred Time:</strong> <?php echo htmlspecialchars($row["preferred_time"]); ?></p>
                                <p class="text-gray-700"><strong>Contact:</strong> <?php echo htmlspecialchars($row["user_contact"]); ?></p>
                                <p class="text-gray-700"><strong>Submitted At:</strong> <?php echo htmlspecialchars($row["submitted_at"]); ?></p>

                                <!-- Accept & Deny Buttons -->
                                <div class="flex justify-between mt-4">
                                    <button onclick="updateRequestStatus(<?php echo $row['request_id']; ?>, 'accepted')"
                                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" name="accept">
                                        Accept
                                    </button>
                                    <button onclick="updateRequestStatus(<?php echo $row['request_id']; ?>, 'denied')"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" name="deny">
                                        Deny
                                    </button>
                                </div>

                                <!-- Close Modal Button -->
                                <button onclick="closeModal(<?php echo $row['request_id']; ?>)" 
                                    class="mt-4 text-gray-600 underline">
                                    Close
                                </button>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center text-gray-600 py-4">No maintenance requests found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
if ($conn) {
    $conn->close();
}
?>
<?php
include 'connection.php'; // Ensure this file correctly connects to your database

// Fetch maintenance feedback with user names
$query = "
    SELECT u.name, mf.issue_description, mf.urgency, mf.created_at 
    FROM maintenance_feedback mf
    JOIN users u ON mf.user_id = u.id
    ORDER BY mf.created_at DESC
";

$result = $conn->query($query);
?>
<!-- Page Title -->
        <div class="text-center mb-12 mt-20">
            <h1 class="text-5xl font-extrabold text-blue-500 bg-clip-text bg-white via-purple-500 to-pink-500">
                User Feedback
            </h1>
            <p class="text-blue-800 text-lg mt-4">
                Here's what our customers say about the maintenance services at our sports shop!
            </p>
        </div>

        <!-- Feedback Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ($row = $result->fetch_assoc()): ?>
                <?php
                // Get user initials (First letter of name)
                $user_initial = strtoupper(substr($row['name'], 0, 1));

                // Assign a random color for user avatar
                $colors = ['indigo', 'purple', 'pink', 'blue', 'green', 'yellow', 'red'];
                $color = $colors[array_rand($colors)];
                ?>

                <!-- Feedback Card -->
                <div class="relative p-6 bg-pink-200 rounded-lg shadow-xl border border-gray-200 hover:shadow-2xl hover:scale-105 transition duration-300">
                    <!-- User Initial Icon -->
                    <div class="absolute top-0 -mt-5 left-1/2 transform -translate-x-1/2">
                        <div class="bg-<?php echo $color; ?>-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
                            <i class="text-2xl"><?php echo $user_initial; ?></i>
                        </div>
                    </div>
                    <!-- Card Content -->
                    <div class="mt-6">
                        <h3 class="text-lg font-bold text-gray-900 text-center"><?php echo $row['name']; ?></h3>
                        <div class="text-center mt-2">
                            <span class="px-3 py-1 rounded-full text-white text-sm bg-<?php echo ($row['urgency'] == 'High') ? 'red' : ($row['urgency'] == 'Medium' ? 'yellow' : 'blue'); ?>-500">
                                <?php echo $row['urgency']; ?>
                            </span>
                        </div>
                        <p class="text-gray-600 mt-4">
                            <?php echo $row['issue_description']; ?>
                        </p>
                        <p class="text-sm text-black-400 mt-4 text-right"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
          </div>

<!-- JavaScript for Modal & AJAX -->
<script>
    function openModal(id) {
        document.getElementById("modal-" + id).classList.remove("hidden");
    }

    function closeModal(id) {
        document.getElementById("modal-" + id).classList.add("hidden");
    }

    function updateRequestStatus(requestId, status) {
    alert(`Request ${status} successfully.`);
    closeModal(requestId);
}

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


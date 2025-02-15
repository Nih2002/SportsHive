<?php
include 'connection.php';

if (isset($_POST['report'])) {
    $report = $_POST['report'];
    
    switch ($report) {
        case 'gift_orders':
            $query = "SELECT id AS Order_ID, recipient_name, recipient_phone, recipient_address, gift_message, gift_wrap_option, gift_card_option, delivery_datetime FROM gift_orders ORDER BY delivery_datetime DESC";
            break;

        case 'low_stock':
            $query = "SELECT id AS Item_ID, brand_name, item_name, item_stock FROM brands_items WHERE item_stock < 5 ORDER BY item_stock ASC";
            break;

        case 'out_of_stock':
            $query = "
                SELECT 'Cricket' AS Category, id, name, price, stock_status FROM cricket WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Football', id, name, price, stock_status FROM football WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Swimming', id, name, price, stock_status FROM swimming WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Rugby', id, name, price, stock_status FROM rugby WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Cycling', id, name, price, stock_status FROM cycling WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Basketball', id, name, price, stock_status FROM basketball WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Athletic', id, name, price, stock_status FROM athletic WHERE stock_status = 'Out of Stock'
                UNION ALL
                SELECT 'Volleyball', id, name, price, stock_status FROM volleyball WHERE stock_status = 'Out of Stock'
                ORDER BY Category";
            break;

        case 'accepted_orders':
            $query = "
                SELECT ao.id AS Acceptance_ID, ao.order_id, go.recipient_name, go.recipient_phone, ao.user_id AS Accepted_By, ao.message, ao.accepted_at
                FROM accepted_orders ao
                JOIN gift_orders go ON ao.order_id = go.id
                ORDER BY ao.accepted_at DESC";
            break;

        case 'users':
            $query = "SELECT id AS User_ID, name, address, username, email, role, created_at FROM users ORDER BY created_at DESC";
            break;

        case 'maintenance_requests':
            $query = "SELECT request_id, request_title, issue_description, preferred_time, user_contact, submitted_at FROM maintenance_requests ORDER BY submitted_at DESC";
            break;

        default:
            echo "<p class='text-danger'>Invalid Report Type!</p>";
            exit;
    }

    // Execute Query
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='overflow-x-auto'>";
        echo "<table class='min-w-full border border-gray-400 bg-white shadow-md rounded-lg'>";
        echo "<thead class='bg-gray-700 text-white'>";
        echo "<tr>";
    
        while ($field = mysqli_fetch_field($result)) {
            echo "<th class='border border-gray-400 px-4 py-2 text-left'>" . ucfirst(str_replace('_', ' ', $field->name)) . "</th>";
        }
        
        echo "</tr></thead><tbody>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='hover:bg-gray-100'>";
            foreach ($row as $value) {
                echo "<td class='border border-gray-400 px-4 py-2'>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
    
        echo "</tbody></table></div>";
    } else {
        echo "<p class='text-red-500 text-center'>No data available for the selected report.</p>";
    }
    
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<header class="bg-cyan-500 text-black shadow-lg py-4 px-6 flex justify-between items-center">
        
        <!-- Logo -->
       <a href="#" class="flex items-center space-x-2">
         <img src="../images/logo12.png" alt="Logo" class="w-20 h-20">
       </a>
       <div class="text-2xl font-bold tracking-wide">
            Admin Dashboard
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
<body class="bg-pink-100">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-6xl bg-white p-6 rounded-lg shadow-lg">


            <!-- Page Title -->
            <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Reports Dashboard</h2>
            
            <!-- Report Selection -->
            <div class="mb-4">
                <label for="reportSelect" class="block text-lg font-medium text-gray-700 mb-2">Select a Report:</label>
                <select id="reportSelect" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                    <option value="">-- Select Report --</option>
                    <option value="gift_orders">Orders Summary Report</option>
                    <option value="low_stock">Low Stock Report</option>
                    <option value="out_of_stock">Out-of-Stock Items Report</option>
                    <option value="accepted_orders">Gift Orders Report (for delivery)</option>
                    <option value="users">User Registration Report</option>
                    <option value="maintenance_requests">Maintenance Requests Summary</option>
                </select>
            </div>

            <!-- Report Display Area -->
            <div id="reportContent" class="mt-4 bg-black-100 p-4 rounded-lg shadow-sm min-h-[100px]">
                <p class="text-gray-600 text-center">Select a report to display data here.</p>
            </div>

            <!-- Download Button -->
            <div class="flex justify-center mt-6">
                <button id="downloadPdf" class="hidden bg-red-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-red-700 transition duration-300">
                    Download PDF
                </button>
            </div>

        </div>
    </div>

<script>
$(document).ready(function(){
    $('#reportSelect').change(function(){
        var reportType = $(this).val();
        if(reportType !== "") {
            $.ajax({
                url: '', // Empty URL means it will call the same page (index.php)
                type: 'POST',
                data: {report: reportType},
                success: function(response){
                    $('#reportContent').html(response);
                    $('#downloadPdf').show().attr('data-report', reportType); // Show button and set data-report attribute
                }
            });
        } else {
            $('#reportContent').html('');
            $('#downloadPdf').hide(); // Hide button if no report selected
        }
    });

    // Handle PDF Download
    $('#downloadPdf').click(function(){
        var reportType = $(this).attr('data-report');
        window.location.href = 'download_pdf.php?report=' + reportType;
    });
});

</script>

</body>
</html>

<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "sportshive";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Generate last 7 days dynamically
$dates = [];
$registrationCounts = [];
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $dates[$date] = 0; // Default 0 registrations for each day
}

// Query to get actual user registration counts
$query = "
    SELECT DATE(created_at) AS registration_date, COUNT(*) AS user_count 
    FROM users 
    WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) 
    GROUP BY DATE(created_at)
    ORDER BY registration_date ASC
";

$result = $conn->query($query);

// Populate actual registration data
while ($row = $result->fetch_assoc()) {
    $dates[$row['registration_date']] = (int)$row['user_count'];
}

// Convert to JSON format
$response = [
    'dates' => array_keys($dates),
    'counts' => array_values($dates)
];

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>

<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id']) && isset($_POST['table_name'])) {
    $delete_id = $_POST['delete_id'];
    $table_name = $_POST['table_name'];

    // Validate table name
    $valid_tables = [];
    $result = $conn->query("SHOW TABLES FROM sportshive");
    while ($row = $result->fetch_array()) {
        $valid_tables[] = $row[0];
    }

    if (in_array($table_name, $valid_tables)) {
        $delete_query = "DELETE FROM `$table_name` WHERE id = '$delete_id'";
        $conn->query($delete_query);
    }

    // Redirect back to the page to reload after deletion
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit();
}

// Display table
if (isset($_GET['table'])) {
    $table = $_GET['table'];

    // Validate table name
    $valid_tables = [];
    $result = $conn->query("SHOW TABLES FROM sportshive");
    while ($row = $result->fetch_array()) {
        $valid_tables[] = $row[0];
    }

    if (!in_array($table, $valid_tables)) {
        die("<p class='text-red-500'>Invalid table selected.</p>");
    }

    // Fetch data
    $query = "SELECT * FROM `$table`";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table class='border-collapse border border-gray-300 w-full mt-4'>";
        echo "<tr class='bg-gray-200'>";

        // Fetch column names
        while ($field = $result->fetch_field()) {
            echo "<th class='border border-gray-300 p-2'>" . ucfirst($field->name) . "</th>";
        }
        echo "<th class='border border-gray-300 p-2'>Actions</th>"; // Actions column
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr class='bg-white hover:bg-gray-100'>";
            
            foreach ($row as $key => $value) {
                $safe_value = htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
                echo "<td class='border border-gray-300 p-2'>$safe_value</td>";
            }

            // Delete Button (Inside Form)
            echo "<td class='border border-gray-300 p-2'>
                    <form method='POST' action='fetch_table.php?table=$table' onsubmit=\"return confirm('Are you sure you want to delete this row?');\">
                        <input type='hidden' name='delete_id' value='{$row['id']}'>
                        <input type='hidden' name='table_name' value='$table'>
                        <button type='submit' class='bg-red-500 text-white px-2 py-1 rounded'>Delete</button>
                    </form>
                  </td>";

            echo "</tr>";
        }

    } else {
        echo "<p class='text-gray-500'>No data available.</p>";
    }
}
?>

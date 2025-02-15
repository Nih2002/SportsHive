<?php
require_once __DIR__ . '/../tcpdf/tcpdf.php';
require_once __DIR__ . '/connection.php';  // Ensure database connection is included

// Check if database connection exists
if (!isset($conn)) {
    die("Database connection is missing.");
}

// Get report type from URL parameter
if (!isset($_GET['report'])) {
    die("Error: Report type not received.");
}

$report = $_GET['report'];

// Define SQL Queries based on report type
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
        die("Invalid report type.");
}

// Execute Query
$result = mysqli_query($conn, $query);
if (!$result || mysqli_num_rows($result) == 0) {
    die("No data available for the selected report.");
}

// Extend TCPDF Class to Include Header with Logo
class CustomPDF extends TCPDF {
    public function Header() {
        // Define logo path
        $logoPath = __DIR__ . '/assets/images/logo12.png';

        // Check if file exists before attempting to display it
        if (file_exists($logoPath)) {
            $this->Image($logoPath, 10, 5, 40, 20, 'PNG'); // (file, x, y, width, height, type)
        } else {
            error_log("Logo file not found: " . $logoPath);
        }

        // Title
        $this->SetFont('helvetica', 'B', 14);
        $this->Cell(0, 15, 'SportHive Report', 0, 1, 'C');
        $this->Ln(5); // Line break after title
    }

    public function Footer() {
        $this->SetY(-15); // Position at 15mm from bottom
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

// Create PDF Object
$pdf = new CustomPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SportHive');
$pdf->SetTitle(ucfirst(str_replace('_', ' ', $report)) . ' Report');
$pdf->SetMargins(10, 30, 10); // Left, Top, Right margins
$pdf->SetAutoPageBreak(TRUE, 15);
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Build Table
$html = '<h2 style="text-align:center;">' . ucfirst(str_replace('_', ' ', $report)) . ' Report</h2>';
$html .= '<table border="1" cellspacing="0" cellpadding="5" style="width:100%;">';
$html .= '<tr style="background-color:#f2f2f2; font-weight:bold;">';

while ($field = mysqli_fetch_field($result)) {
    $html .= '<th>' . ucfirst(str_replace('_', ' ', $field->name)) . '</th>';
}
$html .= '</tr>';

// Fetch Data Rows
while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>';
    foreach ($row as $value) {
        $html .= '<td>' . htmlspecialchars($value) . '</td>';
    }
    $html .= '</tr>';
}

$html .= '</table>';

// Write the HTML content to the PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output PDF
$pdf->Output($report . '_report.pdf', 'D');
exit;
?>

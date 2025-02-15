<?php
session_start();
include 'connection.php'; // Ensure this file correctly connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'] ?? null;

    if (!$user_id) {
        echo "<script>alert('Error: User not logged in!'); window.history.back();</script>";
        exit;
    }

    $feedback_type = $_POST['feedback_type'];

    if ($feedback_type === "website") {
        $feedback_text = $_POST['feedback_text'] ?? null;
        $rating = $_POST['rating'] ?? null;

        $stmt = $conn->prepare("INSERT INTO website_feedback (user_id, feedback_text, rating) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $user_id, $feedback_text, $rating);
    } elseif ($feedback_type === "maintenance") {
        $issue_category = $_POST['issue_category'] ?? null;
        $issue_description = $_POST['issue_description'] ?? null;
        $urgency = $_POST['urgency'] ?? null;

        $stmt = $conn->prepare("INSERT INTO maintenance_feedback (user_id, issue_category, issue_description, urgency) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $issue_category, $issue_description, $urgency);
    } else {
        echo "<script>alert('Invalid feedback type!'); window.history.back();</script>";
        exit;
    }

    if ($stmt->execute()) {
        echo "<script>alert('Feedback submitted successfully!'); window.location.href='feedback.php';</script>";
    } else {
        echo "<script>alert('Error submitting feedback! Please try again.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-6 space-y-6 transition-transform transform hover:scale-105">
        <h2 class="text-3xl font-bold text-center text-gray-700">We Value Your Feedback</h2>
        <p class="text-center text-gray-500">Please share your thoughts to help us improve.</p>

        <div class="flex justify-center">
            <button type="button" id="websiteBtn" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition">
                Website Feedback
            </button>
            <button type="button" id="maintenanceBtn" class="px-4 py-2 ml-4 text-white bg-red-500 rounded-lg hover:bg-red-600 transition">
                Maintenance Feedback
            </button>
        </div>

        <form method="POST" action="feedback.php">

            <input type="hidden" id="feedback_type" name="feedback_type" value="website">

            <!-- Website Feedback Section -->
            <div id="website_feedback">
                <label class="block text-gray-600 font-medium">Your Feedback:</label>
                <textarea id="feedback_text" name="feedback_text" rows="4" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required></textarea>

                <label class="block text-gray-600 font-medium">Rate Us:</label>
                <select id="rating" name="rating" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                    <option value="4">⭐⭐⭐⭐ - Very Good</option>
                    <option value="3">⭐⭐⭐ - Good</option>
                    <option value="2">⭐⭐ - Fair</option>
                    <option value="1">⭐ - Poor</option>
                </select>
            </div>

            <!-- Maintenance Feedback Section (Hidden Initially) -->
            <div id="maintenance_feedback" class="hidden">
                <label class="block text-gray-600 font-medium">Issue Category:</label>
                <input type="text" id="issue_category" name="issue_category" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-red-500">

                <label class="block text-gray-600 font-medium">Describe the Issue:</label>
                <textarea id="issue_description" name="issue_description" rows="4" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-red-500"></textarea>

                <label class="block text-gray-600 font-medium">Urgency Level:</label>
                <select id="urgency" name="urgency" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-red-500">
                    <option value="Low">🔵 Low</option>
                    <option value="Medium">🟡 Medium</option>
                    <option value="High">🔴 High</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:shadow-md transition duration-300">
                Submit Feedback
            </button>
        </form>
    </div>

    <script>
    function switchFeedback(type) {
        document.getElementById("feedback_type").value = type;
        document.getElementById("website_feedback").classList.toggle("hidden", type !== "website");
        document.getElementById("maintenance_feedback").classList.toggle("hidden", type !== "maintenance");

        document.getElementById("feedback_text").required = (type === "website");
        document.getElementById("issue_category").required = (type === "maintenance");
        document.getElementById("issue_description").required = (type === "maintenance");
        document.getElementById("urgency").required = (type === "maintenance");
    }

    document.getElementById("websiteBtn").addEventListener("click", () => switchFeedback("website"));
    document.getElementById("maintenanceBtn").addEventListener("click", () => switchFeedback("maintenance"));
</script>


</body>
</html>

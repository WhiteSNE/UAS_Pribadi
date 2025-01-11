<?php
// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database configuration file
include 'config.php';

// Function to store the message in the database
function storeMessage($name, $email, $message) {
    $conn = getDatabaseConnection();
    if (!$conn) {
        echo "Database connection failed. Please try again later.";
        return;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        echo "An error occurred. Please try again later.";
        return;
    }
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "Your message has been sent successfully.";
    } else {
        error_log("Execute failed: " . $stmt->error);
        echo "Failed to save your message. Please try again.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

// Handle the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validate input lengths
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (strlen($name) > 30) {
        echo "Name must be less than or equal to 30 characters.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Store the message
    storeMessage($name, $email, $message);
} else {
    echo "No POST data received.";
}
?>

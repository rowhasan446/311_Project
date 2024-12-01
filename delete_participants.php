<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "kghs_cultural_carnival";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if data is sent via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $p_id = intval($_POST['p_id']);

    // Prepare and execute SQL query
    $sql = "DELETE FROM participants WHERE P_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $p_id);

    if ($stmt->execute() && $stmt->affected_rows > 0) {
        echo json_encode(["status" => "success", "message" => "Participant deleted successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "No participant found with the provided P_ID."]);
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}

$conn->close();
?>

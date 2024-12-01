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
    $p_name = htmlspecialchars($_POST['p_name']);
    $institution = htmlspecialchars($_POST['institution']);
    $phone = htmlspecialchars($_POST['phone']);

    // Prepare and execute SQL query
    $sql = "INSERT INTO participants (P_ID, P_Name, Institution, Phone) 
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $p_id, $p_name, $institution, $phone);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Participant added successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error adding participant: " . $stmt->error]);
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}

$conn->close();
?>

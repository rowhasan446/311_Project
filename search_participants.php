<?php
// Database connection
$host = "localhost";  // Replace with your database host
$username = "root";   // Replace with your database username
$password = "";       // Replace with your database password
$database = "kghs_cultural_carnival"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode([
        "status" => "error",
        "message" => "Database connection failed: " . $conn->connect_error
    ]));
}

// Get the search query from the request
$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : "";

// If query is empty, return an error
if (empty($query)) {
    echo json_encode([
        "status" => "error",
        "message" => "Search query is empty"
    ]);
    exit();
}

// Search query
$sql = "SELECT * FROM participants 
        WHERE P_Name LIKE '%$query%' 
        OR Institution LIKE '%$query%' 
        OR Phone LIKE '%$query%'";

$result = $conn->query($sql);

// If no results found
if ($result->num_rows == 0) {
    echo json_encode([
        "status" => "error",
        "message" => "No participants found"
    ]);
    exit();
}

// Fetch results
$participants = [];
while ($row = $result->fetch_assoc()) {
    $participants[] = $row;
}

// Return data in JSON format
echo json_encode([
    "status" => "success",
    "data" => $participants
]);

// Close connection
$conn->close();
?>

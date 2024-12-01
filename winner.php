<?php
// Start session for login
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f9;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #5dd4d2;
            color: white;
        }
        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            opacity: 0.9;
        }
        .logout {
            text-align: right;
            margin-bottom: 20px;
        }
        .logout button {
            background-color: #f44336;
            color: white;
        }
        .logout button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logout">
            <form action="logout.php" method="POST">
                <button type="submit">Logout</button>
            </form>
        </div>
        <h1>winner List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Winner_ID</th>
                    <th>P_ID</th>
                    <th>Segment</th>
                   
                </tr>
            </thead>
            <tbody id="winner">
                <!-- Data will be populated dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        // Fetch data from the server
        fetch('fetch_winner.php')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('winner');
                tableBody.innerHTML = ''; // Clear existing rows

                data.forEach(winner => {
                    const row = `
                        <tr>
                            <td>${winner.Name}</td>
                            <td>${winner.Winner_ID}</td>
                            <td>${winner.P_ID}</td>
                            <td>${winner.Segment}</td>
                            
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>
</html>

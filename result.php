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
        <h1>Result List</h1>
        <table>
            <thead>
                <tr>
                    <th>P_ID</th>
                    <th>Name</th>
                    <th>Result_ID</th>
                    <th>Position ID</th>
                </tr>
            </thead>
            <tbody id="result">
                <!-- Data will be populated dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        // Fetch data from the server
        fetch('fetch_result.php')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('result');
                tableBody.innerHTML = ''; // Clear existing rows

                data.forEach(result => {
                    const row = `
                        <tr>
                            <td>${result.P_ID}</td>
                            <td>${result.P_Name}</td>
                            <td>${result.Result_ID}</td>
                            <td>${result.Position_ID}</td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>
</html>
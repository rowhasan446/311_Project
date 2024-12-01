<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }



        /* Make the navbar horizontal on larger screens */


        /* Page container styles */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        .form-container, .search-container {
            margin-bottom: 20px;
        }
        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        button.delete-btn {
            background-color: #f44336;
            color: white;
        }
        button.delete-btn:hover {
            background-color: #d32f2f;
        }
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include './navbar.php'; ?>

    <div class="container">
        <h1>Participant List</h1>
        <!-- Add Participant Form -->
        <div class="form-container">
            <form id="addUserForm" action="add_participants.php" method="POST">
                <p>Participant's ID:</p> 
                <input type="number" name="p_id" placeholder="Participant ID" required><br>
                <p>Participant's Name:</p> 
                <input type="text" name="p_name" placeholder="Participant Name" required><br>
                <p>Institution:</p> 
                <input type="text" name="institution" placeholder="Institution" required><br>
                <p>Phone:</p> 
                <input type="number" name="phone" placeholder="Phone" required><br><br>
                <button type="submit">Add participant</button>
            </form>
        </div>

        <!-- Search Participant Form -->
        <div class="search-container">
            <form id="searchUserForm" action="search_participants.php" method="GET"><br>
                <input type="text" name="query" placeholder="Search by P_Name or P_ID">
                <button type="submit">Search</button>
            </form>
        </div>
        
        <!-- Participants Table -->
        <table>
            <thead>
                <tr>
                    <th>P_ID</th>
                    <th>Name</th>
                    <th>Institution</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="participantTable">
                <?php
                // Include database connection
                include 'connectdb.php';
                $sql = "SELECT * FROM participants";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['P_ID']}</td>
                            <td>{$row['P_Name']}</td>
                            <td>{$row['Institution']}</td>
                            <td>{$row['Phone']}</td>
                            <td>
                                <button class='delete-btn' onclick='deleteParticipant({$row['P_ID']})'>Delete</button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No participants found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script>
        // Toggle menu visibility
        function toggleMenu() {
            const menu = document.querySelector('.navbar .menu');
            menu.classList.toggle('active');
        }

        // Function to delete participant
        function deleteParticipant(p_id) {
            if (confirm('Are you sure you want to delete this participant?')) {
                fetch('delete_participants.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `p_id=${p_id}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error deleting participant:', error));
            }
        }
    </script>
</body>
</html>

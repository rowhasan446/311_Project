<?php
include 'connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Carnival</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #4CAF50;
            padding: 10px 0;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #45a049;
            border-radius: 5px;
        }
        .navbar a.active {
            background-color: #3e8e41;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        // Define the navigation links
        $navItems = [
            "Coordinator" => "coordinator.php",
            "Event" => "event.php",
            "Guests" => "guests.php",
            "Judge" => "judge.php",
            "Judge Assignment" => "judge_assignment.php",
            "Participants" => "participants.php",
            "Position" => "position.php",
            "Prizes" => "prizes.php",
            "Registration" => "registration.php",
            "Result" => "result.php",
            "Schedule" => "schedule.php",
            "School" => "school.php",
            "Segment" => "segment.php",
            "Venue" => "venue.php",
            "Winner" => "winner.php"
        ];

        // Get the current page
        $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <div class="navbar">
        <?php foreach ($navItems as $name => $link): ?>
            <a href="<?= $link ?>" class="<?= $link === $currentPage ? 'active' : '' ?>">
                <?= $name ?>
            </a>
        <?php endforeach; ?>
    </div>
</body>
</html>

    <div class="container">
        <h1>User Counter</h1>

        <!-- Total Users -->
        <p>Total Users: 
            <?php
            $result = $conn->query("SELECT COUNT(*) AS total FROM user_list");
            $row = $result->fetch_assoc();
            echo $row['total'];
            ?>
        </p>

        <!-- Add User Form -->
        <form action="add_participants.php" method="POST">
            <p>Name : </p><input type="text" name="Participant Name" placeholder="Participants name" required><br>
            <p>Institution : </p><input type="text" name="instituition" placeholder="Instituition" required><br>
            <p>Phone : </p><input type="number" name="Phone" placeholder="Phone" required><br>
            <button type="submit">Add User</button>
        </form>

        <!-- Search Form -->
        <form action="search_user.php" method="GET">
            <input type="text" name="query" placeholder="Search by username or email">
            <button type="submit">Search</button>
        </form>

        <!-- User List -->
        <table>
            <thead>
                <tr>
                    <th>P_ID</th>
                    <th>P_Name</th>
                    <th>Institution</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_participants.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
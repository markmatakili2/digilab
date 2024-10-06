<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab Patient UI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo">
        <a href="home.php" style="background-color: #e0f7fa; border-radius: 5px;">Dashboard</a>
        <a href="booktest.php">Book Test</a>
        <a href="ongoing.php">Ongoing Test</a>
        <a href="results.php">My Results</a>
        <a href="pataccnt.php">My Account</a>
        <a href="index.php">Log out</a>
    </div>

    <div class="main-content" id="main-content">
        <div class="top-bar">
            <i class="fas fa-bars"></i>
            <h1>Digilab</h1>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button>Search</button>
            </div>
        </div>

        <h2>Top Tests</h2>
        <div class="test-cards">
            <?php
            // Database connection
            require 'db.php';

            // Check connection
            
            // Fetch lab tests
            $sql = "SELECT lt.test_name, lt.description, lt.price, tc.category_name 
                    FROM lab_tests lt 
                    JOIN test_categories tc ON lt.category_id = tc.id";
            $result = $conn->query($sql);

            // Display tests in cards
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="test-card">
                        <h3>' . $row["test_name"] . '</h3>
                        <p>Category: ' . $row["category_name"] . '</p>
                        <p>' . $row["description"] . '</p>
                        <p>Price: Ksh ' . $row["price"] . '</p>
                    </div>';
                }
            } else {
                echo '<p>No tests available at the moment.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            if (sidebar.style.width === '250px') {
                sidebar.style.width = '0';
                mainContent.style.marginLeft = '0';
            } else {
                sidebar.style.width = '250px';
                mainContent.style.marginLeft = '250px';
            }
        }
    </script>
</body>

</html>
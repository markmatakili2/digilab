<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="digilab.php" class="active">Digilab</a>
            <a href="ongoing-tests.php">Ongoing Tests</a>
            <a href="update-results.php">Update Results</a>
            <a href="completed-tests.php">Completed</a>
            <a href="my-account.php">My Account</a>
            <a href="../index.php">Log out</a>
        </nav>
    </div>
    <div class="content">
        <h1>Select to view available tests and book to get scheduled.</h1>
        <div class="lab-cards">
            <!-- Sample Lab Card -->
            <div class="lab-card">
                <h2>TUM lab centre</h2>
                <p>Location: <a href="https://maps.google.com">map link</a></p>
                <p>Distance: 1km away</p>
                <p>Tests: <a href="#">link to available test details</a></p>
            </div>
            <!-- Add more lab cards as needed -->
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
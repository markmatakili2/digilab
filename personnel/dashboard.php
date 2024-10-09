<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <nav>
            <a href="#">Dashboard</a>
            <a href="digilab.php">Digilab</a>
            <a href="ongoing-tests.php">Ongoing Tests</a>
            <a href="update-results.php">Update Results</a>
            <a href="completed-tests.php">Completed</a>
            <a href="my-account.php">My Account</a>
            <a href="../index.php">Log out</a>
        </nav>
    </div>
    <div class="content">
        <h1>Nearest requests. Select to get full details and get connected.</h1>
        <div class="request-cards">
            <!-- Sample Request Card -->
            <div class="request-card">
                <div class="request-photo">Photo</div>
                <div class="request-details">
                    <p>Name: John</p>
                    <p>Gender: Male</p>
                    <p>Test: Blood</p>
                    <p>Contact: 07123..</p>
                </div>
            </div>
            <!-- Add more request cards as needed -->
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
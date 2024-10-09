<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <a href="my-account.html" class="account-link">
            <img src="user1.png" alt="Profile Icon">
            <span>My Account</span>
        </a>
    </div>
    <div class="main-container">
        <div class="sidebar">
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="verify-personnel.php">Verify personnel</a>
            <a href="register-lab-center.php">Register lab center</a>
            <a href="add-lab-test.php">Add lab test</a>
            <a href="manage-payments.php">Manage payments</a>
            <a href="delete-personnel.php">Delete personnel</a>
            <a href="delete-lab-center.php">Delete lab center</a>
            <a href="add-admin.php">Add admin</a>
            <a href="../index.php">Log out</a>
        </div>
        <div class="content">
            <div class="card-container">
                <div class="card">Total users<br>0</div>
                <div class="card">Verified personnels<br>0</div>
                <div class="card">Income balance<br>Ksh. 0</div>
                <div class="card">
                    <img src="chart.png" alt="Chart">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
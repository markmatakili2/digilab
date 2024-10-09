<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Personnel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <a href="my-account.php" class="account-link">
            <img src="user1.png" alt="Profile Icon">
            <span>My Account</span>
        </a>
    </div>
    <div class="main-container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="verify-personnel.php" class="active">Verify personnel</a>
            <a href="register-lab-center.php">Register lab center</a>
            <a href="add-lab-test.php">Add lab test</a>
            <a href="manage-payments.php">Manage payments</a>
            <a href="delete-personnel.php">Delete personnel</a>
            <a href="delete-lab-center.php">Delete lab center</a>
            <a href="add-admin.php">Add admin</a>
            <a href="../index.php">Log out</a>
        </div>
        <div class="content">
            <div class="statistics">
                <div class="stat-card" id="verified-card">
                    Verified personnels<br><span id="verified-count">3,276</span>
                </div>
                <div class="stat-card" id="unverified-card">
                    Unverified personnels<br><span id="unverified-count">1,024</span>
                </div>
            </div>
            <div id="personnel-list" class="personnel-list"></div>
            <div class="verification-form">
                <h2>Verify/Unverify Personnel</h2>
                <form id="verification-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <div class="radio-buttons">
                        <label><input type="radio" name="status" value="verify" required> Verify</label>
                        <label><input type="radio" name="status" value="unverify"> Unverify</label>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
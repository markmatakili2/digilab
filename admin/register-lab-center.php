<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Lab Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <a href="my-account.php" class="account-link">
            <img src="profile-icon.png" alt="Profile Icon">
            <span>My Account</span>
        </a>
    </div>
    <div class="main-container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="verify-personnel.php">Verify personnel</a>
            <a href="register-lab-centre.php" class="active">Register lab centre</a>
            <a href="add-lab-test.php">Add lab test</a>
            <a href="manage-payments.php">Manage payments</a>
            <a href="delete-personnel.php">Delete personnel</a>
            <a href="delete-lab-centre.php">Delete lab centre</a>
            <a href="add-admin.php">Add admin</a>
            <a href="../index.php">Log out</a>
        </div>
        <div class="content">
            <h1>Register Lab Centre</h1>
            <div class="statistics">
                Available lab centres: <span id="lab-centre-count">0</span>
            </div>
            <div class="registration-form">
                <h2>Register a New Lab Centre</h2>
                <form id="register-form">
                    <label for="name">Lab Centre Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="location">Location Town:</label>
                    <input type="text" id="location" name="location" required>
                    <label for="gprs">GPRS Coordinates:</label>
                    <input type="text" id="gprs" name="gprs" required>
                    <div id="lab-tests">
                        <label>Lab Tests Offered:</label>
                        <div id="lab-tests-checkboxes"></div>
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
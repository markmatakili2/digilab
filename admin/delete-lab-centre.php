<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Lab Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo">
            <span>LOGO</span>
        </div>
        <a href="my-account.html" class="account-link">
            <img src="profile-icon.png" alt="Profile Icon">
            <span>My Account</span>
        </a>
    </div>
    <div class="main-container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="verify-personnel.php">Verify personnel</a>
            <a href="register-lab-centre.php">Register lab centre</a>
            <a href="add-lab-test.php">Add lab test</a>
            <a href="manage-payments.php">Manage payments</a>
            <a href="delete-personnel.php">Delete personnel</a>
            <a href="delete-lab-centre.php" class="active">Delete lab centre</a>
            <a href="add-admin.php">Add admin</a>
            <a href="../index.php">Log out</a>
        </div>
        <div class="content">
            <h1>Delete Lab Centre</h1>
            <div class="form-container">
                <form id="delete-lab-centre-form">
                    <label for="lab-centre-name">Enter Lab Centre Name:</label>
                    <input type="text" id="lab-centre-name" name="lab-centre-name" required>
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
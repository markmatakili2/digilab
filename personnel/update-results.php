<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab - Update Results</title>
    <link rel="stylesheet" href="style2.css">
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
        <h2>Update Test Results</h2>
        <form class="results-form">
            <div class="form-group">
                <label for="patient-name">Patient Name:</label>
                <input type="text" id="patient-name" name="patient-name" required>
            </div>
            <div class="form-group">
                <label for="patient-id">Patient ID:</label>
                <input type="text" id="patient-id" name="patient-id" required>
            </div>
            <div class="form-group">
                <label for="test-id">Test ID:</label>
                <input type="text" id="test-id" name="test-id" required>
            </div>
            <div class="form-group">
                <label for="file-upload">Upload File:</label>
                <input type="file" id="file-upload" name="file-upload" required>
            </div>
            <div class="form-group">
                <label for="text-field">Additional Information:</label>
                <textarea id="text-field" name="text-field" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>
<?php
// Include the database connection
require_once '../connect/db.php';

// Handle category form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category'])) {
    $category_name = $_POST['category'];

    // Insert new category into the test_categories table
    $sql = "INSERT INTO test_categories (category_name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $category_name);

    if ($stmt->execute()) {
        echo "Category added successfully!";
    } else {
        echo "Error adding category: " . $conn->error;
    }

    $stmt->close();
}

// Handle test form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test-name'])) {
    $test_name = $_POST['test-name'];
    $category_id = $_POST['test-category'];
    $price = $_POST['price']; // New field for price
    $description = $_POST['description']; // Optional field for description

    // Insert new test into the lab_tests table
    $sql = "INSERT INTO lab_tests (test_name, category_id, price, description) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sids', $test_name, $category_id, $price, $description);

    if ($stmt->execute()) {
        echo "Lab test added successfully!";
    } else {
        echo "Error adding test: " . $conn->error;
    }

    $stmt->close();
}

// Fetch categories for the dropdown
$category_sql = "SELECT id, category_name FROM test_categories";
$category_result = $conn->query($category_sql);

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lab Test</title>
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
            <a href="register-lab-center.php">Register lab center</a>
            <a href="add-lab-test.php" class="active">Add lab test</a>
            <a href="manage-payments.php">Manage payments</a>
            <a href="delete-personnel.php">Delete personnel</a>
            <a href="delete-lab-center.php">Delete lab center</a>
            <a href="add-admin.php">Add admin</a>
            <a href="../index.php">Log out</a>
        </div>
        <div class="content">
            <h1>Add Lab Test</h1>

            <!-- Add Category Form -->
            <div class="form-container">
                <h2>Add Test Category</h2>
                <form method="POST">
                    <label for="category">Enter Category:</label>
                    <input type="text" id="category" name="category" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- Add Test Form -->
            <div class="form-container">
                <h2>Add Test</h2>
                <form method="POST">
                    <label for="test-name">Enter Test Name:</label>
                    <input type="text" id="test-name" name="test-name" required>

                    <label for="test-category">Select Category:</label>
                    <select id="test-category" name="test-category" required>
                        <option value="">Select Category</option>
                        <?php while ($row = $category_result->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                        <?php endwhile; ?>
                    </select>

                    <label for="price">Enter Price:</label>
                    <input type="number" step="0.01" id="price" name="price" required>

                    <label for="description">Enter Description:</label>
                    <textarea id="description" name="description"></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
</body>

</html>
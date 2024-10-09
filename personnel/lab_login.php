<?php
session_start();
require_once '../connect/db.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL to fetch personnel details
    $stmt = $conn->prepare("SELECT id, password FROM lab_personnel WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['personnel_id'] = $id; // Store personnel ID in session
            header("Location: dashboard.php"); // Redirect to dashboard
        } else {
            echo "<p>Invalid email or password.</p>";
        }
    } else {
        echo "<p>No account found with that email.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Personnel Login</title>
    <link rel="stylesheet" href="style3.css"> <!-- Link to your existing CSS -->
</head>

<body>
    <div class="card">
        <h2>Lab Personnel Login</h2>
        <form method="POST" action="lab_login.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="lab_register.php">Register here</a></p>
    </div>
</body>

</html>
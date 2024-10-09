<?php
require_once '../connect/db.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $licence = $_POST['licence'];
    $national_id = $_POST['national_id'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $gender = $_POST['gender'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO lab_personnel (fname, lname, licence, national_id, email, password, gender) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fname, $lname, $licence, $national_id, $email, $password, $gender);

    if ($stmt->execute()) {
        header("Location: lab_login.php"); // Redirect to login on success
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
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
    <title>Lab Personnel Registration</title>
    <link rel="stylesheet" href="style3.css"> <!-- Link to your existing CSS -->
</head>

<body>
    <div class="card">
        <h2>Lab Personnel Registration</h2>
        <form method="POST" action="lab_register.php">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="text" name="licence" placeholder="Licence Number" required>
            <input type="text" name="national_id" placeholder="National ID" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <button type="submit">Register</button>
        </form>
        <p>Already registered? <a href="lab_login.php">Login here</a></p>
    </div>
</body>

</html>
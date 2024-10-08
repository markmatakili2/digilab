<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Test - Digilab</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e9e9e9;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .navbar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #000;
            margin: 0 5px;
        }

        .navbar a:hover {
            background-color: #575757;
            color: white;
            border-radius: 5px;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .content h2 {
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            width: 300px;
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            margin-bottom: 5px;
        }

        .form-container input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .footer {
            background-color: #e9e9e9;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .navbar a {
                font-size: 14px;
                padding: 5px 10px;
            }

            .form-container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo">
        <a href="home.php">Dashboard</a>
        <a href="#" style="background-color: #e0f7fa; border-radius: 5px;">Book Test</a>
        <a href="ongoing.php">Ongoing Test</a>
        <a href="results.php">My Results</a>
        <a href="pataccnt.php">My Account</a>
        <a href="index.php">Log out</a>
    </div>

    <div class="content">
        <h2>Fill in the details below to book a test</h2>
        <div class="form-container">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <label for="test-type">Test type:</label>
            <input type="text" id="test-type" name="test-type">

            <label for="datetime">Date and time:</label>
            <input type="datetime-local" id="datetime" name="datetime">

            <button type="submit">SUBMIT</button>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </div>
</body>

</html>
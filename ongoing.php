<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Test - Digilab</title>
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

        .info-container {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 600px;
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .info-container label {
            margin-bottom: 5px;
        }

        .info-container input[type="text"],
        .info-container input[type="checkbox"] {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .info-container button {
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .info-container button:hover {
            background-color: #45a049;
        }

        .progress-bar-container {
            width: 90%;
            max-width: 600px;
            text-align: center;
            margin: 20px 0;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            width: 100%;
            background-color: #ccc;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress {
            height: 30px;
            background-color: #4CAF50;
            width: 40%;
            /* Adjust the width to represent progress */
            position: absolute;
            top: 0;
            left: 0;
        }

        .progress-bar-step {
            flex: 1;
            padding: 10px;
            position: relative;
        }

        .progress-bar-step:not(:last-child):after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 2px;
            background-color: #fff;
        }

        .progress-timeline {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }

        .progress-timeline p {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .progress-timeline p:not(:last-child):after {
            content: "";
            position: absolute;
            bottom: -20px;
            right: 0;
            height: 2px;
            width: 100%;
            background-color: transparent;
        }

        .footer {
            background-color: #e9e9e9;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .navbar a {
                font-size: 14px;
                padding: 5px 10px;
            }

            .info-container {
                width: 100%;
            }

            .progress-bar-container {
                width: 100%;
            }

            .progress-timeline p {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo">
        <a href="home.php">Dashboard</a>
        <a href="booktest.php">Book Test</a>
        <a href="#" style="background-color: #e0f7fa; border-radius: 5px;">Ongoing Test</a>
        <a href="results.php">My Results</a>
        <a href="pataccnt.php">My Account</a>
        <a href="index.php">Log out</a>
    </div>

    <div class="content">
        <h2>Track your test process</h2>
        <div class="info-container">
            <p>Test type: Blood Test</p>
            <p>Lab personnel name: John Doe</p>
            <p>Personnel’s contacts: +254712345678</p>
            <p>Payment status: Click <a href="#">here</a> to pay</p>
            <p>Sample collection: click the checkbox below to confirm sample collection</p>
            <label for="confirm">Confirm</label>
            <input type="checkbox" id="confirm" name="confirm">
            <button type="submit">Submit</button>
            <p>Digilab station: Makadara lab</p>
            <p>Sample arrival status: (Yes/No)</p>
            <p>Test results: (Ready/Pending)</p>
        </div>

        <div class="progress-bar-container">
            <div class="progress-bar">
                <div class="progress"></div>
                <div class="progress-bar-step">Booking</div>
                <div class="progress-bar-step">Payment</div>
                <div class="progress-bar-step">Sample Collection</div>
                <div class="progress-bar-step">Digilab Centre</div>
                <div class="progress-bar-step">Results</div>
            </div>
            <div class="progress-timeline">
                <p>0923HRS</p>
                <p>1000HRS</p>
                <p>1200HRS</p>
                <p>1400HRS</p>
                <p>(Time)</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </div>
</body>

</html>
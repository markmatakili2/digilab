<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab</title>
    <link rel="stylesheet" href="style/index.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo">
            <span><b>DIGILAB</b></span>
        </div>
        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#personnel">Personnel</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
    <div id="home" class="section">
        <div class="hero">
            <h1>Welcome to Digilab</h1>
            <p>Your one-stop solution for all lab test needs at the comfort of your home.</p>
            <button><a href="login.php">Log in</a></button>
            <button><a href="signup.php">Register</a></button>
        </div>
    </div>
    <div id="about" class="section">
        <h2>About Us</h2>
        <p>Digilab is a comprehensive platform designed to streamline the process of lab tests, from requesting tests to
            receiving results and tracking the test process. Our mission is to provide efficient and reliable lab
            services to all users.</p>
    </div>
    <div id="services" class="section">
        <h2>Our Services</h2>
        <ul>
            <li>Request Lab Test</li>
            <li>Receive Test Results and Store Them</li>
            <li>Track Test Process</li>
        </ul>
    </div>
    <div id="personnel" class="section">
        <h2>Personnel</h2>
        <p>Are you a lab personnel and would like to join us? please <button><a href="./personnel/lab_login.php">log
                    in</a></button> to
            access your
            profile and manage your
            tasks. For more instructions on how to use your profile, please refer to the guidelines provided after
            logging in.</p>
    </div>
    <div id="contact" class="section">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
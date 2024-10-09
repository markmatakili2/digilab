<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilab Patient UI</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo">
        <a href="home.php" style="background-color: #e0f7fa; border-radius: 5px;">Dashboard</a>
        <a href="booktest.php">Book Test</a>
        <a href="ongoing.php">Ongoing Test</a>
        <a href="results.php">My Results</a>
        <a href="pataccnt.php">My Account</a>
        <a href="index.php">Log out</a>
    </div>

    <div class="main-content" id="main-content">
        <div class="top-bar">
            <i class="fas fa-bars"></i>
            <h1>Digilab</h1>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button>Search</button>
            </div>
        </div>

        <h2>Top Tests</h2>
        <div class="test-cards">
            <?php
            // Database connection
            require './connect/db.php';

            // Fetch lab tests
            $sql = "SELECT lt.id, lt.test_name, lt.description, lt.price, tc.category_name 
            FROM lab_tests lt 
            JOIN test_categories tc ON lt.category_id = tc.id";
            $result = $conn->query($sql);

            // Display tests in cards
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
            <div class="test-card">
                <h3>' . $row["test_name"] . '</h3>
                <p>Category: ' . $row["category_name"] . '</p>
                <p>Description: ' . $row["description"] . '</p>
                <p>Price: Ksh ' . $row["price"] . '</p>
                <button class="request-btn" data-id="' . $row["id"] . '">Request</button>
            </div>';
                }
            } else {
                echo '<p>No tests available at the moment.</p>';
            }

            $conn->close();
            ?>
        </div>
        <div id="requestModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Request Lab Test</h2>
                <form id="request-form" method="post" action="home.php">
                    <label for="contact-number">Contact Number:</label>
                    <input type="text" id="contact-number" name="contact-number" required>

                    <label for="request-date">Select Date:</label>
                    <input type="date" id="request-date" name="request-date" required>

                    <input type="hidden" id="lab-test-id" name="lab-test-id">
                    <button type="submit">Submit Request</button>
                </form>
            </div>
        </div>


    </div>

    <div class="footer">
        <p>&copy; 2024 Digilab. All rights reserved.</p>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            if (sidebar.style.width === '250px') {
                sidebar.style.width = '0';
                mainContent.style.marginLeft = '0';
            } else {
                sidebar.style.width = '250px';
                mainContent.style.marginLeft = '250px';
            }
        }

        // Modal handling
        var modal = document.getElementById("requestModal");
        var closeModal = document.getElementsByClassName("close")[0];
        var labTestIdField = document.getElementById("lab-test-id");

        // Open modal when "Request" button is clicked
        document.querySelectorAll('.request-btn').forEach(button => {
            button.addEventListener('click', function () {
                labTestIdField.value = this.getAttribute('data-id');
                modal.style.display = "block";
            });
        });

        // Close modal when 'x' is clicked
        closeModal.onclick = function () {
            modal.style.display = "none";
        };

        // Close modal when clicking outside the modal content
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        // Handle form submission
        document.getElementById("request-form").addEventListener("submit", function (event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch("process_request.php", {
                method: "POST",
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    alert("Request submitted successfully!");
                    modal.style.display = "none";
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });


    </script>
</body>

</html>

<?php
session_start();
require './connect/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact_number = $_POST['contact-number'];
    $request_date = $_POST['request-date'];
    $lab_test_id = $_POST['lab-test-id'];
    $user_id = $_SESSION['user_id'];

    // Insert request data into the requests table
    $sql = "INSERT INTO requests (user_id, lab_test_id, contact_number, request_date) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $user_id, $lab_test_id, $contact_number, $request_date);

    if ($stmt->execute()) {
        echo "Request submitted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "login"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email address from the form
    $email = $_POST['email'];

    // Check if email already exists in the database
    $check_query = "SELECT * FROM subscribers WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Email already exists, redirect to login page or any other page you prefer
        header("Location: index.php"); // Change login.php to your actual login page
        exit();
    } else {
        // Email doesn't exist, insert into database
        if(isset($_POST['daily_bits'])) {
            $daily_bits = 1;
        } else {
            $daily_bits = 0;
        }
        $week_in_review = isset($_POST['week_in_review']) ? 1 : 0;

        $sql = "INSERT INTO subscribers (email, daily_bits, week_in_review) VALUES ('$email', $daily_bits, $week_in_review)";

        if ($conn->query($sql) === TRUE) {
            // Subscription successful, you can redirect to a success page or do anything else
            header("Location: homepage1.php"); // Change success.php to your actual success page
            exit();
        } else {
            header("Location: login.php"); // Change success.php to your actual success page
            exit();
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>


<?php
include('connection.php');

// Retrieve the email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape the inputs to prevent SQL injection
$email = mysqli_real_escape_string($conn, $email);

// Create the SQL query to retrieve the user with the provided email
$sql = "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

// Check if a user with the provided email exists
if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $hashedPassword = $user['password'];

    // Verify the provided password against the hashed password
    if (password_verify($password, $hashedPassword)) {
        // Password is correct, proceed to the dashboard
        header("Location: dash.php");
        exit();
    } else {
        // Password is incorrect
        echo "<h1>Login failed. Invalid email or password.</h1>";
    }
} else {
    // Email not found or multiple entries (shouldn't happen if unique)
    echo "<h1>Login failed. Invalid email or password.</h1>";
}

// Close the database connection
mysqli_close($conn);
?>
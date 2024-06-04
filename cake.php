<?php
// Check if the form is submitted
if (isset($_POST['contact'])) {
    // Database connection details
    $db_host = 'localhost'; // Replace with your host name (usually 'localhost')
    $db_user = 'root'; // Replace with your database username (usually 'root')
    $db_pass = ''; // Replace with your database password (leave empty if no password set)
    $db_name = 'cake'; // Replace with your database name

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check if the connection was successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Insert data into the 'books' table
    $sql = "INSERT INTO contact (name, email, number, message) 
    VALUES ('$name', '$email', '$number', '$message')";

    if (mysqli_query($conn, $sql)) {
        header('Location:home.php?success=1');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
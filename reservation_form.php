<?php
// Include the database configuration file
@include 'config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $phoneNumber = $_POST['phone_number'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Insert data into the database
    $sql = "INSERT INTO reservations (phone_number, date, time) VALUES ('$phoneNumber', '$date', '$time')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Data inserted successfully
        $message = "Reservation Submitted, please wait for confirmation call.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:index.php');
    } else {
        // Error in database insertion
        $message = "Unexpected Error Occured, Please Try Again Later. \\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:index.php');
    }
}

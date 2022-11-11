<?php
include 'database.php';

// Check if form submitted
if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Set timezone
    date_default_timezone_set('Europe/London');
    $time = date('H:i:s');

    // Validate input
    if(!empty($user) && !empty($message)) {
        $query = "INSERT INTO chatbox (user, content, post_time)
                  VALUES ('${user}', '${message}', '${time}')";

        if(!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        } else {
            echo "Message added to database successfully.";
            header("Location: index.php");
            exit();
        }
    } else {
        $error = "Please fill in both fields.";
        header("Location: index.php?error=" . urlencode($error));
    }
} else {
    die("No data received.");
}
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "ne");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $gender = mysqli_real_escape_string($link, $_POST['gender']);

    // attempt insert query execution
    $sql = "INSERT INTO dat (name, email,gender) VALUES ('$name', '$email', '$gender')";

    if ($sql) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('failed!')</script>";
}

    // close connection
    mysqli_close($link);
?>

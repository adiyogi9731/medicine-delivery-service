<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "started");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $mob = mysqli_real_escape_string($link, $_POST['mobileno']);
    $email_address = mysqli_real_escape_string($link, $_POST['email']);

    // attempt insert query execution
    $sql = "INSERT INTO get (first_name, mob, email_address) VALUES ('$first_name', '$mob', '$email_address')";

 if(mysqli_query($link, $sql)){
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

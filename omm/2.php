<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "mo");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($link, $_POST['lastname']);
    $ag = mysqli_real_escape_string($link, $_POST['age']);
     $mob = mysqli_real_escape_string($link, $_POST['mobileno']);
      $email_address = mysqli_real_escape_string($link, $_POST['email']);
     $add1 = mysqli_real_escape_string($link, $_POST['address1']);
    $add2 = mysqli_real_escape_string($link, $_POST['address2']);

    // attemptd insert query execution
    $sql = "INSERT INTO perso (first_name, last_name, ag, mob, email_address, add1, add2) VALUES ('$first_name', '$last_name', '$ag', '$mob', '$email_address', '$add1', '$add2')";

    if(mysqli_query($link, $sql)){
         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

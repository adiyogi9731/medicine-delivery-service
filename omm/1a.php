<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "om");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $age = mysqli_real_escape_string($link, $_POST['age']);
    $dob = mysqli_real_escape_string($link, $_POST['dob']);
    $bg = mysqli_real_escape_string($link, $_POST['']);
    $mob = mysqli_real_escape_string($link, $_POST['']);
    $add1 = mysqli_real_escape_string($link, $_POST['']);
    $add2 = mysqli_real_escape_string($link, $_POST['']);
    $email = mysqli_real_escape_string($link, $_POST['']);

    // attempt insert query executio
    $sql = "INSERT INTO shivaya (name,age, dob,bg,mob,add1,add2,email) VALUES ('$name', '$age', '$dob','$bg','$mob','$add1','$add2','$email')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

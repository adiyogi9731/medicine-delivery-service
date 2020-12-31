<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "locate");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $latti = mysqli_real_escape_string($link, $_POST['lattitude']);
    $long = mysqli_real_escape_string($link, $_POST['longitude']);
    

    // attempt insert query execution
    $sql = "INSERT INTO loc (latti, long) VALUES ('$latti', '$long')";

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

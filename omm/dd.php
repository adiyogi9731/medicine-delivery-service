<?php
include ('config.php');

if (isset($_POST['name'])) {

$name = "name";

$query = "INSERT INTO pop ('id','name') VALUES ('','$name')";
    $result = mysqli_query($query);
    if ($result) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('failed!')</script>";
}
}       
?>

<html>
<head>
</head>
<body>

    <form action="" method="post">
    Name:<input type="text" id="name" name="name"/>
    <input type="submit" value="submit" name="submit" onclick="alert();"/>
    </form>
</body>

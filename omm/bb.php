<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8">    
<title>Add Record Form</title>
</head>

<body>
<form action="bbb.php" method="post">

    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName">    
    </p>

    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName">    
    </p>

    <p>    
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">    
    </p>

    <input type="submit" value="Submit" onclick="alert();">
</form>
</body>
</html>
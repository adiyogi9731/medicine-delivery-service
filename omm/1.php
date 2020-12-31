<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8">    
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Record Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
 
<div id="frm">
 
<form action="2.php" method="post">
    <h3><b>CREATE ACCOUNT</b></h3>
    <p>
        <label for="firstName">First Name:</label><br>
        <input type="text" name="firstname" id="firstName">    
    </p>

    <p>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastname" id="lastName">    
    </p>

    <p>    
        <label for="age">AGE:</label><br>
        <input type="text" name="age" id="age">    
    </p>
    <p>    
        <label for="mobileno">MOBILE NO:</label><br>
        <input type="text" name="mobileno" id="mobileno">    
    </p>
    <p>    
        <label for="emailAddress">Email Address:</label><br>
        <input type="text" name="email" id="emailAddress">    
    </p>
    <p>    
        <label for="address1">ADDRESS1:</label><br>
        <input type="text" name="address1" id="address1">    
    </p>
    <p>    
        <label for="address2">ADDRESS2:</label><br>
        <input type="text" name="address2" id="address2">    
    </p>

    <input type="submit" id="btn" value="Submit">
</form>
</div>
</body>
</html>

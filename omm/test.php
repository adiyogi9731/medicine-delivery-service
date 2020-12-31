
<!DOCTYPE HTML>  
<html>
<head>

<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
}
?>
<div id="frm">
<form method="post" action="test1.php">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
 
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  
  <br><br>

  <input type="submit" id="btn" name="submit" value="Submit" >  
</form>
</div>


</body>
</html>


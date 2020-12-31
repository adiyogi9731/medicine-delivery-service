<html>
<body>
		
<form method="GET" action="im.php " >
 <input type="file" name="myimage">
 <input type="submit" name="submit_img" value="Display">
</form>

</body>
</html>


<?php

$getname = $_GET['imagename '];

print "< img src =im.php?name=".$getname." width=200 height=200 >";

?>


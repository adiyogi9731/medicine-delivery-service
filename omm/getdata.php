 <?php
$localhost = 'localhost';
$user = 'root';
$pass = ' ';

$dd=mysqli_connect($localhost, $user,'');

mysqli_select_db($dd,'d');

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysqli_query($dd,$insert_image);
if(mysqli_query($dd, $insert_image)){
         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dd);
    }
?>

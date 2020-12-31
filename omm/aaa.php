<?php
    print "<html><body>";
    $username = "root";
	$password = "";
	$hostname = "localhost";

	$dbh = mysqli_connect($hostname, $username, $password)or die("Unable to connect to MySQL");
	$selected = mysqli_select_db($dbh,"mynewdb") or die("Could not select mysql");
    if(isset($_POST['name']))
      {
        $nme = $_POST['name'];
        $ad1 = $_POST['add1'];
        $ad2 = $_POST['add2'];
	$eml = $_POST['email'];
        if($nme != "" && $ad1 != "")
        {
        $query = "INSERT INTO contact VALUES ('$nme', '$ad1', '$ad2', '$eml')";
        $result = mysqli_query($dbh,$query) or die(mysqli_error());
        }
        else
         echo "one of the field is empty";
      }
	$result= mysqli_query($dbh,"Select * from contact;");
// print table headers
		$NumOfFields=mysqli_num_fields ( $result );
		print " <table border=\"1\"> <tr> ";

for ($i=0; $i < $NumOfFields; $i++)
{ print '<th>'.mysqli_field_name($result, $i).'</th>'; }
print "</tr>";
// print values
while ($row = mysqli_fetch_array($result))
     		{
			$i=0;
			print "<tr>";
			while($i != $NumOfFields )
			{
				print "<td>".$row[$i]."</td>";
				$i=$i+1;
			}	
			print "</tr>";
		}
	
     mysqli_close($dbh);
print "<a href='aaa.php'> Back </a>";
 print "</body></html>";
?>

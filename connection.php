<html>

<?php
$host = "localhost";
$Username = "root";
$Password = "";
$db = "login";


$conn = mysqli_connect ($host,$Username,$Password,$db);
if($conn)
{
	echo "Database is connected.";
}
else 
{
	echo "Failed to connect" .mysqli_error($conn);
}


?>







</html>
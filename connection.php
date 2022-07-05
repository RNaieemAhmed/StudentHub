<?php
$servername="dc9qghcgups9m5";
$username="root";
$password="";
$dbname="studenthub";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "".mysqli_connect_error;
}

?>
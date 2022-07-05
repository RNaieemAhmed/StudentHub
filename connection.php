<?php
$servername="dc9qghcgups9m5";
$username="stidbcsstqszkj";
$password="06d5c2cdc22f65f3488b1c70b1f81bc317799c144e13024e1969575329346dae";
$dbname="dc9qghcgups9m5";

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
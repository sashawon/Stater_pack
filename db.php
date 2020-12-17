<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "starer";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con)
{
echo "";
}
else
{
die ("Connection failed because ".mysqli_connect_error());
}
?>
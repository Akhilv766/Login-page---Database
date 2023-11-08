<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="trogon";


$conn=mysqli_connect($hostname,$username,$password,$dbname);


if($conn)
{
echo"successfully connected to db<br>";
}
else
{
echo"failed to connect to db<br>";
}





?>
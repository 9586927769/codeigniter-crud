<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$databasename="registerform";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if ($conn)
{
   echo"";

}

else
{
  echo"connection failed because".mysqli_connect_error();

}

?>
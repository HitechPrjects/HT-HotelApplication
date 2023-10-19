<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotel';

// $con = new mysqli($host,$username,$password,$dbname);
// if($con ->connect_error)
// {
//     die('connection error:'.$con->connect_error);
// }


$con = mysqli_connect($host,$username,$password,$dbname);
if(!$con)
{
    die('connection error:'.mysqli_connect_error());
}

// echo 'connection Successfull !';

?>
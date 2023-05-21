

<?php

$server='localhost';
$username='root';
$database='index';
$password='';

//try to connect with db
$con= mysqli_connect($server, $username, $password,$database);

//checking for connection
if($con == false){
    die('Error: Cannot connect');
}
?>


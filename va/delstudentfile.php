<?php
include("config.php");

$ID= $_GET['id'];
$sql=" DELETE FROM vivek WHERE ID= '$ID'";
$query=mysqli_query($con,$sql);

if($query){
    echo "<script>alert('Successfully Deleted');
    window.location.href = 'viewstudent.php';
    </script>";
}
else
echo"Something went Wrong...";
?>
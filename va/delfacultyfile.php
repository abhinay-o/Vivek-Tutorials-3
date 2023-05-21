<?php
include("config.php");

$ID= $_GET['id'];
$sql=" DELETE FROM teacher WHERE ID= '$ID'";
$query=mysqli_query($con,$sql);

if($query){
    echo "<script>alert('Successfully Deleted');
    window.location.href = 'viewfaculty.php';
    </script>";
}
else
echo"Something went Wrong...";
?>
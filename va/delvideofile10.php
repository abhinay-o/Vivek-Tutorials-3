<?php
include("config.php");


$ID = $_GET['ID'];

// Perform the deletion query
$sql = "DELETE FROM video10 WHERE ID = '$ID'";
$query = mysqli_query($con, $sql);

if ($query) {
    echo "<script>alert('Successfully Deleted');
    window.location.href = 'delvideo10.php';
    </script>";
    exit();
} else {
    echo "Something went wrong...";
}
?>

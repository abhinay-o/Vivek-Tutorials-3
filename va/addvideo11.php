<?php
include("adminnav.php");
echo"<br><br>";
include("addvideofile.php");
// include("video11.php");
?>

<style>
  form{
    background: linear-gradient(45deg, greenyellow, dodgerblue);
    justify-content: center;
    text-align: center;
  }
  .upload{
	width:5%; ;
	
  }
  .upload:hover {
 background-color:brown;
 color:white;
  }
  input{
    width: 120px;
    border-radius:2px;
    
  }
  input:hover{
    cursor:pointer;
  }
  .file{
 width: 222px;
 margin-left:137px;
  }
  .title:hover{
	width: 20%;
	cursor: text;
  }
  .seeupload:hover{
	background-color:brown;
 color:white;
  }
</style>
<?php 

include("willupload/db.php");


if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];

	$title=$_POST['title'];
	$subject=$_POST['subject'];
	
	$file_destination = "willupload\upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO video11 (name ,title,subject) VALUES ('$file_name', '$title' , '$subject')";

	if(mysqli_query($con,$q)) {

		$success = "Video uploaded successfully.";
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Class 11th Lectures </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <script src="assets/js/jquery.min.js"></script> -->
</head>
<body>

<br>		<br>	
				
				<form action="#" method="post" enctype="multipart/form-data">
					<br>
				<h2>Upload Class 11th Lectures </h2>
				<br>
						 <input type="file" name="file" class="file">
             <br><br>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">
							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
					<input type="text" name="title" class="title" placeholder=" Title of Video">
					<br><br>
					<input type="text" name="subject" class="title" placeholder=" Subject">
					<br><br>
					<input type="submit" name=" upload" value="Upload" class="upload">
<br><br>

<a href="batch11.php"><input type="submit " value=" Uploaded Videos " class="seeupload"  > </input></a>
<br><br>
<a href="https://www.freeiconspng.com/img/1172" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/arrow-up-icons-free-icons-in-2d--icon-search-engine--21.png" width="50;" height="40px;" alt="Vector Download Png Free Arrow" /></a>

<p> Click above link to View Videos</p>
<br>
	</form>
				

</body>
</html>


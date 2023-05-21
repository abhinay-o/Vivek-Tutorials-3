<style>
  form{
    background: linear-gradient(45deg, greenyellow, dodgerblue);
    justify-content: center;
    text-align: center;
  }
  .upload{
	width:5%;
	
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
include("all/nav.html");
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
	
	$q = "INSERT INTO video9 (name ,title,subject) VALUES ('$file_name', '$title' , '$subject')";

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
	<title>Upload Class 9th Lectures </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <script src="assets/js/jquery.min.js"></script> -->
</head>
<body>

<br>		<br>	
				
				<form action="#" method="post" enctype="multipart/form-data">
					<br>
				<h2>Upload Class 9th Lectures </h2>
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

<a href="batch9.php"><input type="submit " value=" Uploaded Videos " class="seeupload"  > </input></a>
<br><br>
<a href="https://www.freeiconspng.com/img/1172" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/arrow-up-icons-free-icons-in-2d--icon-search-engine--21.png" width="50;" height="40px;" alt="Vector Download Png Free Arrow" /></a>

<p> Click above link to View Videos</p>
<br>
	</form>
				

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<style>

.footer {
    margin-top: 40px;
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: 390px;
    list-style: none;
    width:fit-content;
    background: linear-gradient(45deg, greenyellow, dodgerblue);
    border: 2px solid black;
    border-radius:7px;
    margin-left: 50px;
    margin-bottom: 20px;
}
.csc{
    font-size:x-large;
}
.footer li{
    padding: 3px;
    margin-left: 100px;
   
   
}


.footer li a:not(.csc){
    text-decoration: none;
    color:black;
    font-size:medium;
    
}
.footer li a:not(.csc):hover{
    background-color: black;
    color:wheat;
    border-radius: 5px;
}
.csc{
    color:rgb(207, 132, 132);
    text-decoration:underline;
    text-align: center;
    justify-content: center;
    font-family: monospace;
}
.forthcol{
    margin-left: 10px;
}



</style>
<body>
    
    <div class="footer">
        <div class="firstcol " >
        <li><a  class="csc">Company</a></li>
        <li><a href=index.php>Home</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="about.php">About Us</a></li>      
        </div>

    

        <div class="thirdcol">
        <li><a class="csc">Videos</a></li>
            <li><a href="video9.php"> Batch IX </a></li>
            <li><a href="video10.php"> Batch X</a></li>
            <li><a href="video11.php">Batch XI</a></li>
            <li><a href="video12.php">Batch XII</a></li>

        </div>

        <div class="forthcol">
            <li><a class="csc">Follow Us</a></li>
            <li><a href="https://www.youtube.com/@abhinaysaxena4128/featured" class="fa fa-youtube"> YouTube</a></li>
            <li><a href="https://www.facebook.com/abhinay.saxena.319" class="fa fa-facebook"> Facebook</a></li>
            <li><a href="https://instagram.com/aabhinayrider?igshid=ZGUzMzM3NWJiOQ==" class="fa fa-instagram">Instagram</a></li>
            <li><a href="https://twitter.com/abhinayrider" class="fa fa-twitter"> Twitter</a></li>
        </div>

    </div>
   

</body>
</html>
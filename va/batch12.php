<?php
include("all/nav.html");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Display All Videos from database using php</title>
</head>

<style>
	.col{
		display: flex ;
		margin:20px;
		padding:15px;
		border: 2px solid black;
		border-radius:20px;
		background-color: rgb(214 229 217);
	}
	.h3{
		text-decoration:line;
		margin-left: 30px;
	}
</style>

<body>

	<div class="name ">
		<h1><b> Class 12th Lecture Videos</b></h1>
	</div>


	<?php
	include("willupload/db.php");

	$q = "SELECT * FROM video12 ORDER BY date desc";

	$query = mysqli_query($con, $q);

	if(mysqli_num_rows($query) > 0){  
	while ($row = mysqli_fetch_array($query)) {
		$name = $row['name'];
		$title = $row['title'];
        $date = $row['date'];
        $subject = $row['subject'];
		?>

		<div class="col">
			
			<video width="15%" height="10%" controls>
				<source src="<?php echo 'willupload/upload/' . $name; ?>">
			</video>

			<h3 class="h3">
				<?php echo "Title : $title"; ?>
			</h3>

            <h4 class="h3">
				<?php echo "Subject : $subject"; ?>
			</h4>
            <h5 class="h3">
				<?php echo "Uploaded at : $date"; ?>
			</h5>

           
		</div>

	<?php }}
	?>

</body>

</html>

<?php
include("all/footer.html");
?>

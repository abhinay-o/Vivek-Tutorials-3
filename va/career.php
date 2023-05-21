
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIVEK TUTORIALS</title>
   <style>

.logo img {
    height: 82px;
    width: 88px;
    display: inline-flex;
    border-radius: 40%;
    filter:contrast(1);
    filter: brightness(-10);
}

.logo {

    display: inline-block;

}

.nav {
    display: inline-flex;
    width: 100%;
    margin-top: 10px;
    border: 2px solid black;
    border-radius: 5px;
    background: linear-gradient(45deg, greenyellow, dodgerblue);


}

.content {
    display: inline-flex;
    margin-inline: auto;
}

.content li {
    text-align: left;
    padding: 8px;
    margin-top: 12px;
    margin-inline: auto;
    list-style-type: none;
}

.content li a {
    text-decoration: none;
    padding: 6px;
}

.content li a:hover {
    color: rgb(235, 186, 186);
    background-color: black;
    border-radius: 5px;
}



   </style>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>

<body>
   

    <div class="nav">

        <div class="logo">
            <img src=".\images/vivek3.png" alt="loading image">
        </div>
        <div class="content">

            <li><a href="index.php">HOME</li></a>
            <li><a href="#" onclick="alert('Please Login to continue...')">FACULTY</li></a>
            <li><a href="#" onclick="alert('Please Login to continue...')">JOIN CLASS</li></a>
            <li><a href="#">CAREER</li></a>
            <li><a href="contactus.php">CONTACT US</li></a>
            <li><a href="about.php">ABOUT US</li></a>


        </div>


                    

    </div>

    
   
</body>

</html>


<?php

include("config.php");

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];

    // Retrieve the resume file
    $resumeName = $_FILES['resume']['name'];
    $resumeTmpName = $_FILES['resume']['tmp_name'];

    // Read the resume file content
    $resumeData = file_get_contents($resumeTmpName);
    $resumeData = mysqli_real_escape_string($con, $resumeData);

    // Insert form data and resume file into the database
    $sql = "INSERT INTO career (name, email, number, city, resume) VALUES ('$name', '$email', '$number', '$city', '$resumeData')";
    if (mysqli_query($con, $sql)) {
        echo "Data and resume file uploaded successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>career form</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .main {
        display: flex;
        margin-top: 20px;
    }

    .form table {
        margin-top: 20px;
        width: 500px;
        background-color: rgb(214 229 217);
        border-radius: 30px;
    }
 td {
  padding-top: 5px;
  padding-bottom: 10px;
  padding-left: 15px;
  padding-right: 20px;
}
</style>

<body>
    <div class="main">

        <form class="form" action="#" method="post" enctype="multipart/form-data">
           
                <table>

      
                    <tr>
                        <td><label>Full Name:</label></td>
                        <td><input type="text" name="name" placeholder="Enter Your Name "> </td>
                    </tr>
                   

                    <tr>
                        <td><label>Email:</label> </td>
                        <td><input type="varchar" name="email" placeholder="Enter Your Email "><td>
                    </tr>
                   

                    <tr>
                        <td> <label>Phone Number:</label></td>
                    <td><input type="int" name="number" placeholder="Enter Your Number"> </td>
                    </tr>
                    

                    <tr>
                        <td><label>City:</label></td>
                    <td><input type="text" name="city" placeholder="Enter Your City "> </td>
                    </tr> 
                  
                    <tr>
                        <td><label>Link Your Resume (in pdf):</label></td>
                    <td> <input type="file" name="resume"></td>
                    </tr>

                    <tr>
                    <td><input style="margin-left:20px;" type="reset" name="reset" value="Reset"></td>
                    <td><input style="margin-left:30px;" type="submit" name="submit" value="Submit"></td>
                </tr>
                </table>
                <br>
                <?php
                if (isset($success)) {
                    echo "$success";
                }
                ?>
                <?php
                if (isset($failed)) {
                    echo "failed";
                }
                ?>
           
        </form>
        <div class="para" style="background-color:rgb(214 229 217); margin-left:10px ; border-radius: 60px;">
            <h2 style="text-decoration:underline;">
                <br><br>&nbsp Welcome to our E-Learning platform for hiring a teacher!</h2>
            <p>  &nbsp We connecting with qualified and experienced teachers who are passionate about education and helping Students to  &nbsp reach their full potential.
                Support team is always here to assist you throughout the hiring process.
                <br><br> <h3>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Thank you for choosing us to help you on your learning journey!</h3>

            </p>

        </div>
    </div>
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
        <li><a href="#"onclick="alert('Please Login to continue...')">Faculty</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="about.php">About Us</a></li>      
        </div>

    

        <div class="thirdcol">
        <li><a  class="csc">Videos</a></li>
        <li><a href="#" onclick="alert('Please Login to continue...')"> Batch IX </a></li>  
        <li><a href="#"onclick="alert('Please Login to continue...')"> Batch X</a></li>
        <li><a href="#"onclick="alert('Please Login to continue...')">Batch XI</a></li>
        <li><a href="#"onclick="alert('Please Login to continue...')">Batch XII</a></li>
        
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

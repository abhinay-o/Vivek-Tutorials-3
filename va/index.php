<?php

require_once "config.php";

//creating empty variables
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST["username"]))) {
        echo $username_err = "Username not to be empty";
    } else {
        $sql = "SELECT ID FROM vivek WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST['username']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    echo $username_err= "<script>alert('Username already taken! Kindly choose another Username');</script>";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "something went wrong...";
            }
        }
    }

    mysqli_stmt_close($stmt);


    //checking password
    if (empty(trim($_POST['password']))) {
        $password_err = "password is Empty";
    } elseif (strlen(trim($_POST['password'])) <= 2) {
        echo $password_err = "password can not be less than 2 characters";

    } else {
        $password = trim($_POST['password']);
    }

    //checking confirm password with password
    if ((trim($_POST['password'])) != (trim($_POST['confirm_password']))) {
        echo $password_err = "<script>alert('Password not match');</script>";
        exit;
    }
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO vivek (username, password , name, email) 
    VALUES (?, ? ,'$name','$email')";

        $stmt = mysqli_prepare($con, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            //setting parameters
            $param_username = $username;
            $param_password = $password;


            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('You Are Registered Now! Remember Your Username and password');
    window.location.href = 'login.php';
    </script>";
               
            } else {
                echo "something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}


?>


        


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIVEK TUTORIALS</title>
    <link rel="stylesheet" href="inn.css">
    <!-- <script src="index.jsx"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
   
     td {
  padding-top: 5px;
  padding-bottom: 7px;
  padding-left: 11px;
  padding-right: 16px;
}</style>

<body>


    <div class="nav">

        <div class="logo">
            <img src="images/vivek3.png" alt="loading image">
        </div>
        <div class="content">

            <li><a href="index.php">HOME</li></a>
            <li><a href="#" onclick="alert('Please Login to continue...')">FACULTY</li></a>
            <li><a href="#" onclick="alert('Please Login to continue...')">JOIN CLASS</li></a>
            <li><a href="career.php">CAREER</li></a>
            <li><a href="contactus.php">CONTACT US</li></a>
            <li><a href="about.php">ABOUT US</li></a>


        </div>

       <a href="login.php"><input type="login" value="   Login" class="reg" ></input></a>

    </div>
<br><br>
    <div class="mid">

        <div class="midleft">
            <div id="picslider"></div>
            <div id="polish">
                <h1> &nbsp Special Classes IX to XII...</h1>
            </div>
        </div>
        <div class="midright">
            <h1 center><br>REGISTER NOW<br> </h1>
            <br>
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Enter Your Details</h2>
            <form action="index.php" class="form" method="post">
                <fieldset style="border-radius: 20px;">
                    <br>
                    <center>
                        <table>
                            <tr>
                                <td><label>NAME</label></td>
                                <td><input type="text" name="name" placeholder="ENTER YOUR FULL NAME" required></td>
                            </tr>
                            <tr>
                                <td><label>EMAIL</label></td>
                                <td><input type="varchar" name="email" placeholder="ENTER YOUR EMAIL" required>
                                </td>
                            </tr>

                            <tr>
                                <td><label>USERNAME</label></td>
                                <td><input type="text" name="username" placeholder="ENTER USERNAME" required></td>
                            </tr>
                            <tr>
                                <td><label>PASSWARD</label></td>
                                <td><input type="password" name="password" placeholder="ENTER YOUR PASSWARD" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label>CONFIRM PASSWORD</label></td>
                                <td><input type="password" name="confirm_password" placeholder="RENTER YOUR PASSWORD"
                                        required></td>
                            </tr>

                            <tr>
                                <td>
                                    <button type="reset">RESET</button>
                                    <button type="submit">SUBMIT</button>

                                </td>

                        </table>
                </fieldset>
            </form>

        </div>
    </div>

    <div class="footer">
        <div class="firstcol ">
            <li><a class="csc">Company</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#" onclick="alert('Please Login to continue...')">Faculty</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="about.php">About Us</a></li>
        </div>

        <div class="thirdcol">
            <li><a class="csc">Videos </a></li>
            <li><a href="#" onclick="alert('Please Login to continue...')">Batch IX </a></li>
            <li><a href="#" onclick="alert('Please Login to continue...')"> Batch X</a></li>
            <li><a href="#" onclick="alert('Please Login to continue...')">Batch XI</a></li>
            <li><a href="#" onclick="alert('Please Login to continue...')">Batch XII</a></li>

        </div>

        <div class="forthcol">
            <li><a class="csc">Follow Us</a></li>
            <li><a href="https://www.youtube.com/@abhinaysaxena4128/featured" class="fa fa-youtube"> YouTube</a></li>
            <li><a href="https://www.facebook.com/abhinay.saxena.319" class="fa fa-facebook"> Facebook</a></li>
            <li><a href="https://instagram.com/aabhinayrider?igshid=ZGUzMzM3NWJiOQ==" class="fa fa-instagram">Instagram</a></li>
            <li><a href="https://twitter.com/abhinayrider" class="fa fa-twitter"> Twitter</a></li>
        </div>

    </div>
    <br> <br>
</body>

</html>
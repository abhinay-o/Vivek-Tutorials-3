

<?php
include("all/nav.html");
session_start();

// Check if user is already logged in
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: teachstu.php");
//     exit;
// }

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Check input errors before validating user
    if(empty($username_err) && empty($password_err)){

        // Prepare a select statement
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";

        if($stmt = mysqli_prepare($con, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $db_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $db_password){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            

                            // Redirect user to welcome page
                            header("location: teachstu.php");
                        } else{
                            // Display an error message if password is not valid
                            echo"<script> alert('The password you entered was not valid');</script>";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    echo"<script> alert('No account found with that username.');</script>";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
<style>
     body{
    background: linear-gradient(45deg, greenyellow, dodgerblue);

   }
    .form {
        font-size: 1.5vw;
        text-align: center;
        background-color: rgb(214 229 217);
        margin-left: auto;
        margin-right: auto;
        height: 200px;
        width: 400px;
        border:1px solid black;
        border-radius: 22px;
        
    }
.btn:hover{
    cursor:pointer;
}
.inp{
    background: linear-gradient(45deg, greenyellow, dodgerblue);
}
    
    </style>
</head>
<h1 style="text-align: center; background:white;display:inline-block;margin-left: 500px; ">Admin Login Page </h1> 
<body>
    
    
    <form class="form" method="post">
    <br><br>
        <label>Username:</label>
        <input class="inp" type="text" name="username" placeholder="Enter your Username"><br><br>
        <label>Password:</label>
        <input class="inp" type="password" name="password" placeholder="Enter your password"><br><br>
        <button class="btn" type="reset">Reset</button> &nbsp &nbsp
        <input  class="btn" type="submit" value="Login">
      
    </form>
</body>
</html>


<?Php
include("all/footer.html");
?> 

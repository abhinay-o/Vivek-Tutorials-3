<?php
session_start();

require_once "config.php";

// ?if not 
$username =$password ="";
$err="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['username']) || empty ($_POST['password'])){
        // $err="Please Enter Username Or Password";
        echo"Please Enter Username Or Password";
    } 
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
    }

    if(empty($err)){
        $sql = "SELECT username,password FROM vivek WHERE username = ?";
        $stmt=mysqli_prepare($con,$sql);
        mysqli_stmt_bind_param($stmt,'s',$param_username);
        $param_username=$username;
// execute this stmt
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            //ager pahle se hua tb
            if(mysqli_stmt_num_rows($stmt)==1){
                mysqli_stmt_bind_result($stmt,$username,$hashed_password);
                if (mysqli_stmt_fetch($stmt)) { 
                    
                     if (password_verify($password,$hashed_password)){

                        session_start();
                       
                        $_SESSION["username"]=$username;
                        $_SESSION["id"]=$id;
                        $_SESSION["loggedin"]=true;
                        header("location:student.php");
                        exit();
                     }
                     else echo"not working";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="studen" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
                if (isset($success)) {
                    header("location:student.php");
                }
                ?>
</body>
</html>


<?Php
include("all/footer.html");
?> 




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

.search {

    height: fit-content;
    width: fit-content;
    text-align: center;
    margin-inline: auto;
    margin-top: 16px;


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
            <li><a href="#">FACULTY</li></a>
            <li><a href="#">JOIN CLASS</li></a>
            <li><a href="#">CAREER</li></a>
            <li><a href="#">CONTACT US</li></a>
            <li><a href="#">ABOUT US</li></a>


        </div>


                    

    </div>

    
   
</body>

</html>

<!-- #region -->
<?php session_start(); ?>
<html>

<head>
    <title>Online Examination System</title>
</head><?php
        if (isset($_POST['login'])) {
            if (isset($_POST['usertype']) && isset($_POST['username']) && isset($_POST['pass'])) {     
                   require_once 'config.php';
                   $conn =mysqli_connect($server, $username, $password, $database);if (!$conn) {
                    echo "<script>alert(\"Database error retry after some time !\")</script>";
                }
                $type = mysqli_real_escape_string($conn, $_POST['usertype']);
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['pass']);


                // $password = crypt($password, 'PASSWORD_DEFAULT');

             
                $sql = "select * from " . $type . " where username='{$username}'";
                $res =   mysqli_query($conn, $sql);
                if ($res == true) {
                    global $dbname, $dbpw;
                    while ($row = mysqli_fetch_array($res)) {
                        $dbpw=password_hash($password, PASSWORD_DEFAULT);
                        $dbpw = $row['password'];
                        $dbname = $row['username'];
                        $_SESSION["type"] = $type;
                        $_SESSION["username"] = $dbname;
                    }
                    if ($dbpw === $password) {
                        if ($type === 'vivek') {
                            $_SESSION['role'] = 'student';
                            echo "<script>alert('Successfully Login');
                            window.location.href = 'student.php';
                            </script>";
                            
                        } elseif ($type === 'teacher') {
                            $_SESSION['role'] = 'teacher';
                            echo "<script>alert('Successfully Login');
                            window.location.href = 'takeclass.php';
                            </script>";
                        }
                    } elseif ($dbpw !== $password && $dbname === $username) {
                        echo "<script>alert('password is wrong');</script>";
                    } elseif ($dbpw !== $password && $dbname !== $username) {
                        echo "<script>alert('Username not found! Please Sign Up');</script>";
                    }
                }
            }
        }
        ?>
      
<style>
   body{
    background: linear-gradient(45deg, greenyellow, dodgerblue);
   }

    .inp {
        box-sizing: content-box;
        width: 25vw;
        height: 2vw;
        border-radius: 10px;
        border: 2px solid black;
        padding-left: 2vw;
        font-weight: bolder;
        outline: none;
        background: linear-gradient(45deg, greenyellow, dodgerblue);
    }

    ::placeholder {
        font-weight: bold;
        font-family: 'Courier New', Courier, monospace;
    }

    label {
        font-weight: bolder;
        font-size: 1.5vw;
    }

    form {
        font-size: 1.5vw;
        margin: 0;
    }

    button:hover {
        background-color: #fff !important;
    }

    .bg {
        background-size: 100%;
    }

    a {
        color: #042A38;
    }
</style>

<body style="margin:0;height: 100%;ouline:none;color: #042A38f !important;padding-botton:5vw;">
    <div class="bg" style="font-weight: bolder;background-image: url(./images/bg.png);background-repeat: no-repeat;padding: 0;margin: 0;background-size: cover;font-family: 'Courier New', Courier, monospace;opacity: 0.9;height: 100%;">
        <center>
            <h1 class="w3-container" style=" color:#042A38;text-transform: uppercase;width: auto;background:#fff;padding: 1vw;">Who Are You..?</h1>
        </center>
        <center>
            <div class="w3-card" class="login" style="color: #042A38;width: 40vw;background-color: #ffffffab;border: 2px solid black;padding: 2vw;font-weight: bolder;margin-top: 10vh;border-radius: 10px;">
                <form method="POST">
                    <div class="seluser">
                        <input type="radio" name="usertype" value="vivek" required>STUDENT
                        <input type="radio" name="usertype" value="teacher" required>STAFF
                    </div><br><br>
                    <div class="signin">

                        <label for="username" style="text-transform: uppercase;">Username</label><br><br>
                        <input type="text" name="username" placeholder=" Username" class="inp" required>
                        <br><br>
                        <label for="password" style="text-transform: uppercase;">Password</label><br><br>
                        <input type="password" name="pass" placeholder="******" class="inp" required>
                        <br><br>
                        <input name="login" class="sub" type="submit" value="Login" style="height: 3vw;width: 10vw;font-family: 'Courier New', Courier, monospace;font-weight: bolder;border-radius: 10px;border: 2px solid black;background-color:lightblue"><br>

                </form><br>
                <a href="index.php">SIGN UP</a>
            </div>
    </div>
    </center>
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
        <li><a href="#">Faculty</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">About Us</a></li>      
        </div>

        

        <div class="thirdcol">
        <li><a  class="csc">Videos</a></li>
        <li><a href="#"> Batch IX </a></li>  
        <li><a href="#"> Batch X</a></li>
        <li><a href="#">Batch XI</a></li>
        <li><a href="#">Batch XII</a></li>
        
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
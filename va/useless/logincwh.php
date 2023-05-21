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
                    echo "this username is already exist<br> <br>";
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
        echo $password_err = "password should not match";
        exit;
    }
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO vivek (username, password) 
    VALUES (?, ?)";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            //setting parameters
            $param_username = $username;
            $param_password = $password;

            if (mysqli_stmt_execute($stmt)) {
                header("location:login.php");
            } else {
                echo "something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}


?>

<?php


if(isset($_POST['name'])){
    
    require_once "config.php";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO vivek (`name`, `email`) VALUES ('$name','$email');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        // $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

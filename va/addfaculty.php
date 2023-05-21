
<?php
error_reporting();
include("adminnav.php");
require_once "config.php";
?>
<br>
<h2 style="text-align:center; text-decoration: underline ;">Add a new faculty Member</h2>

<?php

//creating empty variables
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST["username"]))) {
        echo $username_err = "Username not to be empty";
    } else {
        $sql = "SELECT ID FROM teacher WHERE username = ?";
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
    } elseif (strlen(trim($_POST['password'])) <= 5) {
        echo $password_err = "password can not be less than 5 characters";

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

        $sql = "INSERT INTO teacher (username, password , name, email) 
    VALUES (?, ? ,'$name','$email')";

        $stmt = mysqli_prepare($con, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            //setting parameters
            $param_username = $username;
            $param_password = $password;


            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Entry Inserted'); window.location.href = 'viewfaculty.php';</script>";
               
            } else {
                echo "something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}


?>

 <form  class="form" method="post">
            
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
            </form>

        </div>
    </div>
    <?php
include("all/footer.html");
?>
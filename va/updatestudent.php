<?php
error_reporting();
include("config.php");
include("adminnav.php");
?>
<br>
<h2 style="text-align:center;text-decoration: underline;">You May Update Entry for this Particular Id</h2>

<?php
$ID = $name = $email = $username = "";

// Retrieve data from the database for the selected ID
if(isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $query = "SELECT name, email, username FROM vivek WHERE ID = '$ID'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $username = $row['username'];
    } else {
        echo "Record not found";
        exit();
    }
}

// Update record when form is submitted
if(isset($_POST['submit'])) {
    // $ID = $_POST['ID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    // Prepare and execute SQL query with parameterized statement
    $query = "UPDATE vivek SET name=?, email=?, username=? WHERE ID=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $username, $ID);
    $result = mysqli_stmt_execute($stmt);
    // Check if update was successful and output result message
    if($result) {
        echo "<script>
        alert('Your Entry has been Updated Now');
        window.location.href='viewstudent.php';</script>
        ";
    } else {
        echo "Record not updated";
    }
}

// Close database connection
mysqli_close($con);
?>
<br>
<center>
    <table>
        <form method="post">
            <tr>
                <td><label>NAME</label></td>
                <td><input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>" placeholder="ENTER YOUR FULL NAME" required></td>
            </tr>
            <tr>
                <td><label>EMAIL</label></td>
                <td><input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>" placeholder="ENTER YOUR EMAIL" required></td>
            </tr>
            <tr>
                <td><label>USERNAME</label></td>
                <td><input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>" placeholder="ENTER USERNAME" required></td>
            </tr>
            <tr>
                <td><br>
                <button type="reset"> Reset</button>
                    <button type="submit" name="submit" value="submit">Update</button>
                </td>
            </tr>
        </form>
    </table>
</center>
<?php
include("all/footer.html");
?>
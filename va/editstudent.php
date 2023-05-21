<?php
include("adminnav.php");
include("config.php");
?>
<br><br>
<h2 style="text-align:center;text-decoration: underline;">You May Edit Entry for this Particular Id</h2>

<?php
$query = "SELECT * FROM vivek";

// Execute the query
$result = mysqli_query($con, $query);

// Fetch the data
echo '<center>';
echo '<table>';

echo '<table border="2px" cellspacing="5px" cellpadding="6px">';
echo '<tr>
<th>&nbsp ID &nbsp</th>
<th>&nbsp Name &nbsp</th>
<th>&nbsp Email &nbsp</th>
 <th> &nbsp Username &nbsp </th>
<th> &nbsp Password &nbsp</th>
<th> &nbsp Operation &nbsp</th>
</tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' .'&nbsp'. $row['ID'] . '&nbsp'.'</td>';
    echo '<td>' .'&nbsp'. $row['name'] . '&nbsp'. '</td>';
    echo '<td>' . '&nbsp'. $row['email'] . '&nbsp'. '</td>';
    echo '<td>' . '&nbsp'. $row['username'] . '&nbsp'. '</td>';
    echo '<td>' . '&nbsp'. $row['password'] . '&nbsp'. '</td>';
    echo "<td> <a href= 'updatestudent.php? ID= $row[ID] & name= $row[name] & email=$row[email] & username=$row[username]' > EDIT/UPDATE </td>";
    echo '</tr>';
}

echo '</table>';
// Close the connection
mysqli_close($con);
include("all/footer.html");
?>
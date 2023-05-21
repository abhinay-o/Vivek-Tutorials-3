<?php
include("config.php");
include("adminnav.php");
$query = "SELECT * FROM teacher";
?>
<br>
<h2 style="text-align:center;text-decoration: underline">You can Delete any Entry</h2>

<?php
// Execute the query
$result = mysqli_query($con, $query);

// Fetch the data
echo '<center>';
echo '<table>' ;

echo '<table border="1" >';
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
    echo "<td> <a href= 'delfacultyfile.php?id= $row[ID]'> &nbsp Delete </td>";
    echo '</tr>';
}
echo '</table>';

// Close the connection
mysqli_close($con);

include("all/footer.html");
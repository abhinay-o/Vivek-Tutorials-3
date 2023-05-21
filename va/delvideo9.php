<?php
  include("adminnav.php");
echo"<br><br>";
?>
<style>
.container {
  display: flex;
  justify-content: center;
}
button{
  margin-left:22px;
}
</style>
<div class="container">
<select id="myDropdown" >
  <option value="">SELECT CLASS</option>
  <option value="delvideo9.php">Class IX</option>
  <option value="delvideo10.php">Class X</option>
  <option value="delvideo11.php">Class XI</option>
  <option value="delvideo12.php">Class XII</option>
 
</select>
<button onclick="goToPage()">Go</button>
</div>
<script>
function goToPage() {
  var dropdown = document.getElementById("myDropdown");
  var selectedValue = dropdown.options[dropdown.selectedIndex].value;
  if (selectedValue != "") {
    window.location.href = selectedValue;
  }
}

</script>

<?php
include("config.php");

$query = "SELECT * FROM video9";

// Execute the query
$result = mysqli_query($con, $query);

// Fetch the data
echo ' <center>';
echo '<table border="2px" cellspacing="5px" cellpadding="6px">';
echo '<h2>Class 9th Videos Details</h2>';
echo '<tr>
<th>&nbsp ID &nbsp</th>
<th>&nbsp Name &nbsp</th>
<th>&nbsp Title &nbsp</th>
<th> &nbsp Subject &nbsp </th>
<th> &nbsp Operation &nbsp</th>
</tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' .'&nbsp'. $row['ID'] . '&nbsp'.'</td>';
    echo '<td>' .'&nbsp'. $row['name'] . '&nbsp'. '</td>';
    echo '<td>' . '&nbsp'. $row['title'] . '&nbsp'. '</td>';
    echo '<td>' . '&nbsp'. $row['subject'] . '&nbsp'. '</td>';
    echo "<td> <a href='delvideofile9.php?ID=$row[ID]'> Delete </a></td>";
    echo '</tr>';
}
echo '</table>';

// Close the connection
mysqli_close($con);
include("all/footer.html");
?>

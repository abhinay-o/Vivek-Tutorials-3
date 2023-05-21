
<?php
include("adminnav.php");
?>
<br>
<h2 style="text-align:center;text-decoration: underline">Teacher who sent Their Details</h2>

<?php
include("config.php");

// Retrieve data from the database
$sql = "SELECT * FROM career";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    
        $resumeData = $row['resume'];

        // Create a unique filename for the resume
        $resumeFileName = 'temp_resume_' . uniqid() . '.pdf';
        
        // Set the file path for the PDF
        $pdfFilePath = "pdfs/" . $resumeFileName;

        // Save the resume file
        file_put_contents($pdfFilePath, $resumeData);

        echo '<center>';
        echo '<table border="1px" cellspacing="2px" cellpadding="5px">';
        echo '<tr>

        <th>&nbsp ID &nbsp</th>
       <th>&nbsp Name &nbsp</th>
       <th>&nbsp Email &nbsp</th>
        <th> &nbsp Number &nbsp </th>
       <th> &nbsp City &nbsp</th>
       <th> &nbsp Date &nbsp</th>
       <th> &nbsp Resume &nbsp</th>
       </tr>';
          
         echo '<tr><td>'. $row['Id'] .'</td>';
         echo '<td>'. $row['name'] .'</td>';
         echo '<td>'. $row['email'] .'</td>';
         echo '<td>'.$row['number'] .'</td>';
         echo '<td>'.$row['city'] .'</td>';
         echo '<td>'.$row['date'] .'</td>';
         echo '<td><a href="pdf_handler.php?file=' . $pdfFilePath . '" target="_blank">View Resume (PDF)</a><td></tr>';
       }
       echo '</table>';
        
    
} else {
    echo "No data found.";
}

// Close the database connection
mysqli_close($con); 
include("all/footer.html");
?>
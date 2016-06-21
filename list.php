<html>
<link rel="stylesheet" type="text/css" href="include/alumnistyle.css" />
<body bgcolor="#DBDBDB"> 
<div class="blue_bk">
<div class="logo">
    <div class="clg_name">PSG College of Technology <br />Department of Computer Applications<br />
Alumni Website</div>
  
  </div><a href="discussins.php"><b>BACK</b></a>
  </div>

<div class="dwnload_bodr">



<?php
// Connect to the database
$dbLink = new mysqli('localhost','root','','alumni_portal');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created` FROM `file`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>NAME</b></td>
                    <td><b>SIZE (bytes)</b></td>
                    <td><b>CREATED</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
				
				echo '
                <tr>
                    <td><b>--------------------</b></td>
                    <td><b>----------------------</b></td>
                    <td><b>-------------------</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['size']}</td>
                    <td>{$row['created']}</td>
                    <td><a href='download.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>
</div>
</body>
</html>
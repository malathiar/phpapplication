
<?php
if(isset($_SESSION['username'])){
if(isset($_POST['submit']))
{
$conn=mysqli_connect('localhost','root','','alumni_portal');
if(isset($_SESSION['username']) && isset($_POST['msg'])){
 $msg=$_POST['msg'];
$username=$_SESSION['username'];
 if($msg!=""){
$sql=" INSERT INTO `alumni_discussions`(`post_content`, `post_date`, `post_topic`, `post_by`) VALUES ('$msg',Now(),'','$username')";
	$result=mysqli_query($conn,$sql);
}
}
}
?>
<link href="include/alumnistyle.css" rel="stylesheet" type="text/css" />

 
 
  <?php include("msgs.php");?>
  
 </div><br />
 <form id="msg_form"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 <textarea name="msg" cols="35" rows="8">
    </textarea>
 <br />

  <input type="submit" name="submit" value="POST" align="left"/>
 
 </form>
<?php
}

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
<br />
<table>
<tr><td><input type="file" name="uploaded_file" size="20" />
</td>
<td><input type="submit" value="Upload" />
</td>
</tr>

</table><br />
<?php
echo 'Uploaded Files';
?>
<br />
<?php
echo '<p>Click <a href="list.php">here</a> to Download</p>';
?>
</form>
</body>
</html>





<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('localhost','root','','alumni_portal');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
        $query = "
            INSERT INTO `file` (
                `name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
   echo 'No file was Uploaded Now!';
}
 

?>
 
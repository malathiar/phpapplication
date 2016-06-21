
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

 
 
  <?php include("msgbox.php");?>
  
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

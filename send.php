<?php
session_start();
$conn=mysqli_connect('localhost','root','','alumni_portal');
if(isset($_SESSION['username']) && isset($_POST['msg'])){
 $msg=$_POST['msg'];
$username=$_SESSION['username'];
 if($msg!=""){
$sql=" INSERT INTO `alumni_discussions`(`post_content`, `post_date`, `post_topic`, `post_by`) VALUES ('$msg',Now(),'','$username')";
	$result=mysqli_query($conn,$sql);
	}
}
?>
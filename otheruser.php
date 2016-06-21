<script language="javascript" type="text/javascript">
	window.alert("Successfully Signed In");
	</script> 
<?php

$conn=mysqli_connect('localhost','root','','alumni_portal');
	$rname=$_POST['rname'];
	$rrno=$_POST['rrno'];
	$designation=$_POST['designation'];
	$gender=$_POST['gender'];
	$emid=$_POST['emid'];
	$address=$_POST['address'];
	$sql="INSERT INTO common_user (rname,rrno,designation,gender,emid,address)VALUES('$rname','$rrno','$designation','$gender','$emid','$address')";
$sql1="INSERT INTO user_login (username,password) VALUES('$emid','$rrno')";
	$result=mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);
	if($result & $result1)
	{
		header('Location:loginpage.html');
	}
	else
	{
		echo "error";
	}

?>


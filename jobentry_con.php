<?php

$conn=mysqli_connect('localhost','root','','alumni_portal');
	$rollno=$_POST['rollno'];
	$cname=$_POST['cname'];
	$place=$_POST['place'];
	$exp=$_POST['exp'];
	$req=$_POST['req'];
	$sal=$_POST['sal'];
	$wakin=$_POST['wakin'];
	$con=$_POST['con'];
	$sql="INSERT INTO job_update (rollno,cname,place,exp,req,sal,wkin,con) VALUES ('$rollno','$cname','$place','$exp','$req','$sal','$wakin','$con')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		
		header('Location:jobentry.php');
	}
	else
	{
		echo "error";
	}
?>

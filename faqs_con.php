<?php

$conn=mysqli_connect('localhost','root','','alumni_portal');
	$qustion=$_POST['qustion'];
	$answer=$_POST['answer'];
	$sql="INSERT INTO faq (qustion,answer) VALUES('$qustion','$answer')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		
		header('Location:faq.php');
	}
	else
	{
		echo "error";
	}

?>
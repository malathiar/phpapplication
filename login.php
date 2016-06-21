<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Discussion Forum</title>
</head>

<body>
</body>
</html>
<?php
session_start();
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$conn=mysqli_connect('localhost','root','','alumni_portal');
$query="select * from user_login where username='$username' ";
// and password=$password";
$query=mysqli_query($conn,$query);
if(mysqli_num_rows($query)>0)
{
while($row=mysqli_FETCH_array($query))
{
	if( ($row['username'] == $username) && ($row['password'] == $password) )
	{
		$_SESSION['username']=$username;
		header('Location:discussins.php');
	}
	else
	{
		die("Please Enter Correct Password");
		}
}
}
else
	{
		die("Invalid username  password, Please try again");
		}
?>
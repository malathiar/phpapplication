
<?php

$conn=mysqli_connect('localhost:3306','root','root','alumni_portal');
	$alumniname=$_POST['alumniname'];
	$rollno=$_POST['rollno'];
	$batch=$_POST['batch'];
	$gender=$_POST['gender'];
	$eid=$_POST['eid'];
	$areaint=$_POST['areaint'];
	$cname=$_POST['cname'];
	$cloc=$_POST['cloc'];
	$design=$_POST['design'];
	$mstatus=$_POST['mstatus'];
	$mno=$_POST['mno'];
	$addr=$_POST['addr'];
	if(preg_match('`^[a-zA-Z]{1,}$`',$alumniname))
{

	$regex = "`^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$`"; 
	if ( preg_match( $regex, $eid ) ) 
	{
    	if(preg_match('`^[0-9]{1,"$`',$mno))
		{ 
	
	
	$sql="INSERT INTO new_alumni (alumniname,rollno,batch,gender,eid,areaint,cname,cloc,design,mstatus,mno,addr)VALUES('$alumniname','$rollno','$batch','$gender','$eid','$areaint','$cname','$cloc','$design','$mstatus','$mno','$addr')";
$sql1="INSERT INTO user_login (username,password) VALUES('$eid','$rollno')";
		$result=mysqli_query($conn,$sql);
		$result1=mysqli_query($conn,$sql1);
		if($result & $result1)
		{
			header('Location:new_alumni.php');
		}
		else
		{
			echo "error";
		}
		
		} 
	else 
	{ 
		echo "Error : Check your Mobile number contains Characters"; 
	} 
		
}
else
{
	echo "Error : " $eid . " is an invalid email. Please try again.";
}
	
}
else
{
	echo "Error : Check your name contains Numbers";
}
?>

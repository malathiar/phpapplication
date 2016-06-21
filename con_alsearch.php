<html>
<body>
<center>
<?php
//if($_GET('rollno'))
//{
$rollno=$_REQUEST["rollno"];
$conn=mysql_connect("localhost","root","");
mysql_select_db("alumni_portal",$conn);

$sql = "SELECT alumniname FROM new_alumni where rollno='$rollno' " ;

$sql = mysql_query($sql);


while($row = mysql_FETCH_array($sql))
{
if($row['rollno'] == $rollno )
{
	SESSION_start();
	$_SESSION['rollno']=$rollno;
	//require("new_alumni.php");
	while($row = mysql_FETCH_array($sql,MYSQL_ASSOC))
	{
	
    echo "ALUMNI NAME : {$row['alumniname']}  <br> ".
      //   "BATCH : {$row['batch']} <br> ".
	//	 "COMPANY NAME : {$row['cname']} <br> ".
		// "COMPANY LOCATION :{$row['cloc']} <br>".
         "--------------------------------<br>";
	//}
	die("gsdfhashjf");
	}
	
}

else 
{
//}
 die("Could not get data ");

}
}

/*?>mysql_free_result($sql);
echo "Fetched data successfully\n";
mysql_close($conn);
<?php */


?>
</center>
</body>
</html>
<link href="include/alumnistyle.css" rel="stylesheet" type="text/css" />
<?php
$conn=mysqli_connect('localhost','root','','alumni_portal');
$sql=("SELECT * FROM alumni_discussions");
	$sql=mysqli_query($conn,$sql);
	if(mysqli_connect_errno())
	{
	echo "faild to Connect".mysqli_connect_error(); 
	}
	
	while($r=mysqli_fetch_array($sql))
	 {
	
    echo "<div style='width:900px;height:auto; margin:auto; color:#000000; border:#000099 2px solid; border:inset; background-color:#FFFFFF; margin:20px 0 0 0; text-align:justify; padding: 5px 5px 5px 10px;' ><span style='color:#0000FF; '>{$r['post_by']}</span> : <span class='msgc'>{$r['post_content']}</span></div>"; 
  }
if(!isset($_SESSION['username']) ){
 echo "<script>window.location.reload()</script>";
}

?>


<?php /*?>width:650px;
	height:850px;
	float:left;
	border-style:solid;
	border-color:#C00;
	margin:40px 150px 5px 360px;
	background-color:#CCCCFF;<?php */?>

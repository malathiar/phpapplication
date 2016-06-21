<?php
 
  $conn=mysqli_connect('localhost','root','','alumni_portal');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumni Details</title>
<link rel="stylesheet" type="text/css" href="include/alumnistyle.css" />
<link href="include/sty.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#DBDBDB">
<div style="margin:auto">
<div class="blue_bk">
<div class="logo">
    <div class="clg_name">PSG College of Technology <br />Department of Computer Applications<br />
Alumni Website</div>
  </div>
</div>

 <div class="menu">
 <div class="navigation">
 <ul >
    <li><a href="indexpage.html">Home</a></li>
    <li><a href=""></a></li>
    <li><a href="new_alumni.php">Registration</a></li>
    <li><a href=""></a></li>
    <li><a href="loginpage.html">Discussions</a></li>
    <li><a href=""></a></li>
    <li><a href="alumni_search.php">Alumni Search</a></li>
    <li><a href=""></a></li>
    <li><a href="#">News & Events</a>
    <ul><li><a href="job.html">Job Offers</a></li>
    </ul>
    <li><a href=""></a></li>
    <li><a href="photo_gal.html">Gallary</a></li>
    <li><a href=""></a></li>
    <li><a href="contact.html">Contact us</a></li>
		 
    </ul>
 </div></div>
 <div class="search_border">
<form action="" method="post">
<center>
<br /><br /><br />
<font size="+1" color="#CC0000">

      <br />
     
     
      <table>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr></tr>
      <tr>
        <td>Enter Company Name :</td>
      <td><input type="text" name="cname" align="left" /></td>
     </tr>
     <tr></tr>
     <tr>
      <td>Enter Company Location :</td>
      <td><input type="text" name="cloc"  align="left" /></td>
      <tr><td></td></tr>
      <tr>
      <td></td><td>
	  <input type="submit" value="Search" name="srch" />
      </td>
	  </tr>
      
  </table>
    </font>
  </center>
  </form>
  
<center>
<?php
  if(isset($_POST['srch']))
  {
  
  ?>
<br /><font color="#000033"><b>
ALUMNI SEARCH RESULT</b><br /><br /></font>
<font size="4px" color="#0000CC">
<table align="center" cellpadding="5" cellspacing="1" border="3" bordercolor="#000066" >
 <?php
 $conn=mysqli_connect('localhost','root','','alumni_portal');

 $company=$_POST['cname'];
 $companyloc =$_POST['cloc'];
 $qry="select * from new_alumni";
 $condition="";

 if($company!="")
 
 {
 if($condition!="")
  $condition .="and cname ='$company'";
 else
 $condition=" cname ='$company'";
 
 }
 if($companyloc!="")
 {
 if($condition!="")
 $condition .= "and cloc='$companyloc' ";
 else
 $condition=" cloc='$companyloc' ";
 }
 if($condition!="")
 $condition=" where " .$condition;
 
 $qry=$qry.$condition ;
 

$sql=mysqli_query($conn,$qry);
	if(mysqli_connect_errno())
	{
	echo "faild to Connect".mysqli_connect_error(); 
	}

  echo '<tr><td align="center"><b> Name</b></td><td align="center"><b>Roll no</b></strong></td><td align="center"><b>Batch</b></td><td align="center"><b>Company Name</b></td><td align="center"><b>Area of interest</b></td><td align="center"><b>Designation</b></td><td align="center"><b>Mail Id</b></td><td align="center"><b>Contact No.</b></td></tr>';
	while($fet=mysqli_fetch_array($sql))
	 {
	 ?>
       <tr><td align="center"> <?php echo $fet['alumniname']; ?></td><td align="center"><?php echo $fet['rollno']; ?></td><td align="center"> <?php echo $fet['batch']; ?></td><td align="center"><?php echo $fet['cname']; ?> </td><td align="center"><?php echo $fet['areaint']; ?> </td><td align="center"><?php echo $fet['design']; ?></td><td align="center"><?php echo $fet['eid']; ?></td><td align="center"><?php echo $fet['mno']; ?></td></tr>
  <?php 
  }  
  }
  
  
   
  ?>
  
  
  
  
  
  </table>
  <br />
  <br />
 </font>


  

</center>
</div>
</div>
</body>
</html>
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br />
<div class="blue_bk_abt"><br />
<font color="#FFFFFF" size="+1"><center>
A.Malathi - 13MX25<br /> II MCA  Mini Project      [ Alumni Portal BY : 13MXIANS ]</center> 
</font>
</div>
<br />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Alumni Form</title>
<link rel="stylesheet" type="text/css" href="include/alumnistyle.css" />
<link href="include/sty.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="include/script.js"></script>
</head>

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
 <div class="bk_newalumni">
<center><body>
<form action="newalumni.php" method="post" onsubmit="return validate();">
<div class="border_alum">
<br />
<div class="font_alum">
    <center><h3><font color="#CC0000" style="font-family:'Times New Roman', Times, serif" size="+2" >ALUMNI REGISTRATION</font></h3></center><br />

<table  width="400" border="0" cellspacing="1" cellpadding="5">
 
   <tr>
    <td>Name    	  :</td>
    <td><input type="text" name="alumniname" size="20" id="TAlumniname" required="required" /></td>
  </tr>
  <tr>
    <td>Roll Number  :</td>
    <td><input type="text" name="rollno" size="20" required="required"/></td>
   </tr>
   
   <tr>
   <td>Select Batch :</td>
   <td><select name="batch" required="required" >
      <option value="">-Select Year-</option>
     <?php for($l=1983;$l<=2014;$l++){ ?>
     <option value="<?php echo $l; ?>"><?php echo $l; ?></option>
     <?php } ?>
         </select>
   </tr>
    <tr>
  <td>Gender         :</td>
  <td><input type="radio" name="gender" value="male" required="required"/>Male
  <input type="radio" name="gender" size="20" value="female"  />Female</td>
  </tr>
   <tr>
   <td>E-mail Id :<br />(It will be the uesr Id)</td>
   <td><input type="text" name="eid" size="20" required="required" /></td>
  </tr>
   </tr>
   <tr>
   <td>Area of Interest :</td>
   <td><input type="text" name="areaint" size="20" required="required" /></td>
  <tr> 
   
  </tr>
  <tr>
  <td>Company Name :</td>
  <td><input type="text" name="cname" size="20" required="required" />
  </td>
  </tr>
  <tr>
  <td>Company Location :</td>
  <td><input type="text" name="cloc" required="required" /></td>
  </tr>
  <tr>
  <td>Designation :</td>
  <td><input type="text" name="design" required="required"  /></td>
  </tr>
  <!--<tr>
  <td>Place of UG studied :</td>
  <td><input type="text" name"ug" size="20" /></td>
  </tr>-->
  </table>
    <br /><h3 align="center"><font color="#CC0000" style="font-family:'Courier New', Courier, monospace" size="+1" >PERSONAL DETAILS</font></h3>
     
     <table width="400" border="0" cellspacing="1" cellpadding="5" >
     <tr><td>Marital Status:</td>
    <td><input type="checkbox" name="mstatus" value="Married"  />Married<input type="checkbox" name="mstatus" value="Unmarried"  />Single</td>
  </tr>
  <tr>
  <td>Mobile Number:</td>
   <td><input type="text" name="mno" size="20" required="required" /></td>
  </td>
  <tr>
  <td>Address :</td>
  <td><textarea name="addr" cols="18" rows="3" required="required">
    </textarea></td>
  </tr>
 <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Finish" onclick="return validate();"  />
    </td>
  </tr>
 
</table><br />
<a href="loginpage.html" >Do you want to join in Discussion Forum?</a>
</div>
</div>
</div>
</center>
</form>
</body>
</html>



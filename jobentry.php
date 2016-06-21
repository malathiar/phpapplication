<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum Login</title>
<link rel="stylesheet" type="text/css" href="include/alumnistyle.css" />
</head>
<body bgcolor="#DBDBDB" >
<div class="fimg">
<div class="blue_bk">
<div class="logo">
    <div class="clg_name">PSG College of Technology <br />Department of Computer Applications<br />
Alumni Website</div>
  </div>
</div>

 <div class="menu">
 <ul >
    <li><a href="discussins.php">Home</a></li>
    <li><a href=""></a></li>
    <li><a href="faq.php">FAQ</a></li>
    <li><a href=""></a></li>
    <li><a href="jobentry.php">Update Job Offer</a></li>
    <li><a href=""></a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
 </div>
  
  
  
  
  <div class="bk_newalumni">
<center>


<form action="jobentry_con.php" method="post" onsubmit="return validate();">
<div class="border_alumni">
<br />
<div class="font_alum">
    <center><h3><font color="#CC0000" style="font-family:'Times New Roman', Times, serif" size="+2" >JOB UPDATION</font></h3></center><br />

<table  width="400" border="0" cellspacing="1" cellpadding="5">
 <tr>
    <td>Roll Number    	  :</td>
    <td><input type="text" name="rollno" size="20" id="rollno" required="required" /></td>
  </tr>
   <tr>
    <td>Company Name    	  :</td>
    <td><input type="text" name="cname" size="20" id="cname" required="required" /></td>
  </tr>
  <tr>
    <td>Place  :</td>
    <td><input type="text" name="place" size="20" required="required"/></td>
   </tr>
   <tr>
    <td>Experience  :</td>
    <td><input type="text" name="exp" size="20" required="required"/></td>
   </tr>
   <tr>
    <td>Requirement  :</td>
    <td><input type="text" name="req" size="20" required="required"/></td>
   </tr>
   <tr>
    <td>Salary  :</td>
    <td><input type="text" name="sal" size="20" required="required"/></td>
   </tr>
   <tr>
    <td>Walk/in  :</td>
    <td><input type="text" name="wakin" size="20" required="required"/></td>
   </tr>
   <tr>
    <td>Contact  :</td>
    <td><input type="text" name="con" size="20" required="required"/></td>
   </tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit" value="UPDATE" onclick="return validate();"  />
    </td>
  </tr>   
   </table>





</center>
</div>
  </div>
  </body>
  </html>
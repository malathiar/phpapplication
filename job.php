<html>
<head>
<title>Job Offers</title>
<link href="include/alumnistyle.css" rel="stylesheet" type="text/css"/>
<link href="include/sty.css" rel="stylesheet" type="text/css" />

</head>
<body>

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
 <br />
 <center>
 
 <a href="loginpage.html"><b>You Want to Offer any Jobs ????</b></a>
 </center>
 <center>
 <div class="joboff">
<br />
<center><Strong>Skave</Strong></center><br />
Place : Coimbatore<br /><br />
Job Desciption : Software Testing <br /><br />
Experience : Freshers<br /><br />
Requirement : 7 vacancies<br /><br />
Salary : negotiable<br /><br />
Walk/in : November - December 2014<br /><br />
Contact : ADITHYA 9952632244<br />
</div>
<div class="joboff">
<br />
<center><Strong>OAT Systems</Strong></center><br />
Place : Bangalore<br /><br />
Job Desciption : Programming <br /><br />
Experience : Freshers<br /><br />
Requirement : 12 vacancies<br /><br />
Salary : negotiable<br /><br />
Walk/in : December - January 2014<br /><br />
Contact : KALAVATHI 8489876499<br />
</div>
<div class="joboff">
<br />
<center><Strong>Bridge i2i</Strong></center><br />
Place : Chennai<br /><br />
Job Desciption : Hardware Development <br /><br />
Experience : Freshers<br /><br />
Requirement : 2 vacancies<br /><br />
Salary : negotiable<br /><br />
Walk/in : December 12th 2014<br /><br />
Contact : MUTHU 9944642550<br />
</div>
</center>

</body>
</html>


 <?php
  $conn=mysql_connect('localhost','root','');
  
  mysql_select_db("alumni_portal",$conn);

$sql = "SELECT cname,place,exp,req,sal,wakin,con FROM job_update";
$sql=mysql_query($sql);
while($row = mysql_fetch_array($sql,MYSQL_ASSOC))
{
?>

<div class="faq">
<?php
    echo " {$row['cname']} <br><br> ".  		 
	 "Place      : {$row['place']}  <br><br>".
	 "Experience : {$row['exp']}  <br><br>".
	 "Requirement : {$row['req']}  <br><br>".
	 "Salary      : {$row['sal']}  <br><br>".
	 "Walk/in   : {$row['wakin']}  <br><br>".
	 "Contact   : {$row['con']}  <br>";
             		 
      ?>   
</div>
<?php
} 

mysql_close($conn);
?>

    
 </div>



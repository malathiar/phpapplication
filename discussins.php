<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  
   <center>
   <div id="content" style="margin-top:10px;height:100%;" >
   
  <div class="chat">
    <div class="users">
    </div>
    
    <div class="chatbox">
     <?php
	   	   session_start();	   
     if(isset($_SESSION['username'])){
	 ?>
	 <div class='msgs'>
 	
<div class="font">
Disscussion Forum
</div>

<?php
      include("chatbox.php");
	        }else{ 
    include("loginpage.html");
     }
     ?>
     
     </div>
    </div>
    </div>
   
  </div>
 </div>
 <div class="fimg1">
 </div>
  </body>

</html>

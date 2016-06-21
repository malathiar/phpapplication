<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum Login</title>
<link rel="stylesheet" type="text/css" href="include/alumnistyle.css" />
</head>
<body bgcolor="#E3E3E3" >
<form action="faqs_con.php" method="post" onsubmit="return validate();">
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
    <li><a href="logout.php">Logout</a></li>
    </ul>
 </div>
 
 
<center>
<div class="font">
FREQUENTLY ASKED QUESTIONS
</div>
  <?php
  $conn=mysql_connect('localhost','root','');
  
  mysql_select_db("alumni_portal",$conn);

$sql = "SELECT qid, qustion,answer FROM faq";
$sql=mysql_query($sql);


while($row = mysql_fetch_array($sql,MYSQL_ASSOC))
{
?>

<div class="faq">
<b>Question :</b>
<?php
    echo " {$row['qustion']} <br><br> ".  		 
	 "Ans      : {$row['answer']}  <br><br>";
             		 
      ?>   
</div>
<?php
} 

mysql_close($conn);
?>

    
 </div>
 <div class="fimg1">
 </div>
 
 
 
 <div class="fqans">
 <table>
 <tr>
 <td>Question:</td>
<td> <textarea name="qustion" cols="45" rows="5"  >
 </textarea></td>
 </tr>
 <tr><td>Answer:</td>
 <td> <textarea name="answer" cols="65" rows="8"  >
 </textarea></td>
 </tr>
 <tr><td> </td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="faqs" value="Submit" />
  </td>
  </tr>
 </table>

 </div>
 
 </center>
 </form>
 
  </body>

</html>












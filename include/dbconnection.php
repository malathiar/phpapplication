<?php
    session_start();
  
     $server="localhost";
	 $username="root";
	 $password="";
	 $db="alumni_portal";
	 
	 mysql_connect($server,$username,$password);
	 mysql_select_db($db) or die("Please check your DB selection");



   
	 
  	 


?>
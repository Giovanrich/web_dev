<?php
$donor_error=" ";
$nameError ="";
if(isset($_POST['username']))
{

    
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    
    $username = trim($username);
    $password = trim($password);
    

    
    $username = strip_tags($username);
    $password = strip_tags($password);
   
    $username = stripslashes($username);
    $password = stripslashes($password);
	
    $username=mysql_real_escape_string($username);
    
        include_once("conn/connect.php");
        $sql = mysql_query("INSERT INTO users(username,password) VALUES('$username','$password')");
        $donor_error = "successfully subscribed";
     echo'<script language = "javascript">';
	echo'alert("Thank you, your address was added to our Mailing List")';
	echo'history.go(-1)';
	echo'</script>';
  //  echo'<script language="javascript">';
	//echo'window.location.href="proceed.php"';
	///echo'</script>';
	
      
		
}
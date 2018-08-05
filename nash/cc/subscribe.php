<?php
$donor_error=" ";
$nameError ="";
if(isset($_POST['subscribeBtn']))
{

    
    $subscribeBtn=$_POST['subscribeBtn'];
    
   
    
    $subscribeBtn = trim($subscribeBtn);
    
    

    
    $subscribeBtn = strip_tags($subscribeBtn);
   
   
    $subscribeBtn = stripslashes($subscribeBtn);
    
    $subscribeBtn=mysql_real_escape_string($subscribeBtn);
    
        include_once("conn/connect.php");
        $sql = mysql_query("INSERT INTO subscribers(subscribeBtn, donor_date) VALUES('$subscribeBtn', now())");
        $donor_error = "successfully subscribed";
     echo'<script language = "javascript">';
	echo'alert("Thank you, your address was added to our Mailing List")';
	echo'history.go(-1)';
	echo'</script>';
  //  echo'<script language="javascript">';
	//echo'window.location.href="proceed.php"';
	///echo'</script>';
	
      
		
}

?>

<?php
$donor_error=" ";
$nameError ="";
if(isset($_POST['donor_name']))
{

    $donor_name=$_POST['donor_name'];
	$donor_surname=$_POST['donor_surname'];
	$donor_cell=$_POST['donor_cell'];
    $donor_email=$_POST['donor_email'];
    
   
    $donor_name = trim($donor_name);
	$donor_surname = trim($donor_surname);
	 $donor_cell = trim($donor_cell);
    $donor_email = trim($donor_email);
    
    

    $donor_name = strip_tags($donor_name);
	$donor_surname = strip_tags($donor_surname);
	$donor_cell = strip_tags($donor_cell);
    $donor_email = strip_tags($donor_email);
   
    $donor_name = stripslashes($donor_name);
	$donor_surname = stripslashes($donor_surname);
	$donor_cell = stripslashes($donor_cell);
    $donor_email = stripslashes($donor_email);
    
    $donor_email=mysql_real_escape_string($donor_email);
    
        include_once("conn/connect.php");
        $sql = mysql_query("INSERT INTO donor_transactions(donor_name, donor_surname, donor_cell, donor_email, donor_date) VALUES('$donor_name','$donor_surname','$donor_cell','$donor_email', now())");
        $donor_error = "Message Successfully sent! Thankyou For having interest in our site.<br> You 'll soon receive a response from us";
       
    echo'<script language="javascript">';
	echo'window.location.href="proceed.php"';
	echo'</script>';
	
      
		
}

?>

<?php
$donor_error=" ";
$nameError ="";
if(isset($_POST['subscribeBtn']))
{
include 'connect1.php';
    
    $subscribeBtn=$_POST['subscribeBtn'];
    $subname=$_POST['subname'];
   
    
    $subscribeBtn = trim($subscribeBtn);
    $subname=trim($subname);
    

    
    $subscribeBtn = strip_tags($subscribeBtn);
   $subname=strip_tags($subname);
   
    $subscribeBtn = stripslashes($subscribeBtn);
    $subname = stripcslashes($subname);
    $subscribeBtn=mysql_real_escape_string($subscribeBtn);
    
        $sql = "INSERT INTO subscribers(subscribeBtn,subname,subscribeDate) VALUES('$subscribeBtn','$subname',now())";
		if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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

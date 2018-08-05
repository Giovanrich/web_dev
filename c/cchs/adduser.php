<?php
$donor_error=" ";
$nameError ="";
if(isset($_POST['name']))
{

    $name=$_POST['name'];
	$surname=$_POST['surname'];
	$username=$_POST['username'];
    $password=$_POST['password'];
    
   
    $name = trim($name);
	$surname= trim($surname);
	 $username = trim($username);
    $password = trim($password);
    
    

    $name = strip_tags($name);
	$surname= strip_tags($surname);
	$username = strip_tags($username);
    $password = strip_tags($password);
   
    $name = stripslashes($name);
	$surname= stripslashes($surname);
	$username = stripslashes($username);
    $password = stripslashes($password);
    
    
    
        include_once("conn/connect.php");
        $sql = mysql_query("INSERT INTO adminstrator(name, surname, username, password) VALUES('$name','$surname','$username','$password')");
       
       
   // echo'<script language="javascript">';
	//echo'window.location.href="proceed.php"';
	//echo'</script>';
	
      
		
}

?>

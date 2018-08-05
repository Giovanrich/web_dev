<?php
include 'connection.php';
session_start();
$user_check=$_SESSION['username'];
//$ses_sql="SELECT * FROM users WHERE username='".$user_check."'";
//$res=mysqli_query($conn,$ses_sql);
//$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$login_user=$_SESSION['username'];

if (!isset($user_check)) { 
	header("Location: login.html.");
}

  ?>
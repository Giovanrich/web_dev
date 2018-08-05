<?php
session_start();
include 'connection.php';

$error="";

if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo "Both fileds are required.";
	}else{

		//capture the value in variables.
		$username=$_POST['username'];
		$password=$_POST['password'];
		//shield SQL Injection
		//$username=stripcslashes($username);
		//$password=stripcslashes($password);
		//$username=mysqli_real_escape_string($conn,$username);
		//$password=mysqli_real_escape_string($conn,$password);
		//Hash the password
		//$password=md5($password);

		//check username and password from the db
		$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC); //to pick username for sesseions

		if (mysqli_num_rows($res)==1) {
			$_SESSION['username']=$row['username']; //Initializing session.
			header("Location: home.php") ;          //Redirecting to another page.
		}else{
			echo"Incorrect username or password";
		}
	}
}



  ?>
<?php
if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
	echo "<strong>Name</strong>: ".$name."</br>"; 
	echo "<strong>Email</strong>: ".$email."</br>"; 
	echo "<strong>Message</strong>: ".$message."</br>"; 
	echo "<span class='label label-info'>Your feedback has been submitted with above details!</span>";
}
?>

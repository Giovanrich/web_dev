<?php 
include 'conn/config.php';



if (isset($_POST['name'])) {
	$username = strip_tags($_POST['username']);
	$name = strip_tags($_POST['name']);
	$surname = strip_tags($_POST['surname']);
	$email = strip_tags($_POST['email']);

	$sql="insert into users values('".$username."','".$name."','".$surname."','".$email."')";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		echo "Insert successful!";
	}
	


}
?>

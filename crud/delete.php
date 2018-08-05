<?php 
include 'conn/config.php';
$id=$_POST['id'];
$sql="delete from users where id='".$id."' ";
$res=mysqli_query($conn,$sql);
if(!$res){
	echo "Error";
  }else{
  	echo "Succes";
  }
 ?>

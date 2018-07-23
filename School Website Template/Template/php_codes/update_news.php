<?php 
 include 'conn/config.php';

 $command=isset($_GET['command'])?$_GET['command']:'';
 if ($command=='update') {
 	$id=$_POST['id'];
 	$title=$_POST['title'];
 	$content=$_POST['content'];
 	$expDate=$_POST['expDate'];

 	$sql="UPDATE news SET title=?, content=?,expDate=? WHERE id=?";
 	$stmnt=$db->prepare($sql);
 	$stmnt->bindParam(1,$title);
 	$stmnt->bindParam(2,$content);
 	$stmnt->bindParam(3,$expDate);
 	$stmnt->bindParam(4,$id);
 	$stmnt->execute();
 	$count=$stmnt->rowCount();

 	if ($count==1){
 		$output=array('op'=>'tt');
 		echo json_encode($output);
 	}else{
 		$output=array('op'=>'ff');
 		echo json_encode($output);
 	}
  }else {
  	# code...
  }


 
 ?>
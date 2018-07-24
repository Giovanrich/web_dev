

<?php 

	include 'conn/config.php';


	$command=isset($_GET['command'])?$_GET['command']:'';

	if ($command=='reset') {

		try {
		$username="nation";
		$newpassword=$_POST['password'];
		//Hashing and cheching considered done
		$sql="UPDATE _users SET password=? WHERE username=?";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$newpassword);
		$stmnt->bindParam(2,$username);

		$stmnt->execute();
		$rowCount=$stmnt->rowCount();

		if ($rowCount==1) {
			$output=array('status' => 'true' );
			echo json_encode($output);
		}else{
			
			$output=array('status' => 'false' );
			echo json_encode($output);
			
		}


		} catch (PDOException $e) {
			echo $e->getMessage();
		}


	}

 ?>
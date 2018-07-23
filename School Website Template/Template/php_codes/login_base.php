<?php 
 session_start();
 include 'conn/config.php';

	if (isset($_POST['username'])) {
		//trim
 		$username= $_POST['username'];
 		$password= $_POST['password'];

 		//$password=md5($password);

 		$sql="SELECT username,password FROM _users WHERE username=? AND password=?";
 		$stmnt=$db->prepare($sql);
 		$stmnt->bindParam(1,$username);
 		$stmnt->bindParam(2,$password);
 		$stmnt->execute();
 		$count=$stmnt->rowCount();

 		if ($count==1) {
 			$result = $stmnt->fetch(PDO::FETCH_ASSOC);
 			//set session
 			$_SESSION['user_name']=$result['username'];
			$output=array("st"=>"tt","msg"=>"Success login!");
 			echo json_encode($output);
	 			
	 		}else{
	 			$output=array("st"=>"ff","msg"=>"Invalid login details!");
 			    echo json_encode($output);
	 		}
 		
	}

 		


 ?>
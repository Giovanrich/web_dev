

<?php 

	include 'conn/config.php';


	$command=isset($_GET['command'])?$_GET['command']:'';

	if ($command=='load') {

		$sql="SELECT * FROM news";
		$stmnt=$db->prepare($sql);
		$stmnt->execute();
		while ($row=$stmnt->fetch()) {
			
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['content'] ?></td>
						<td><?php echo $row['expDate'];?></td>
						<td>
				<a  type="btn btn-warning" href="edit_news.php?id=<?php echo $row['id'];?>">
				<i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp
				<a onclick="deleteData(<?php echo $row['id']?>)">
				<i class="fa fa-trash" aria-hidden="true"></i></a>

						</td>
					</tr>
	
    
					<?php
				
		}//End While

	}else if ($command=="add") {

		$owner=$_POST['owner'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$dateOfPosting=date('Y-d-m');
		$expDate=$_POST['expDate'];
		

		$sql="INSERT INTO news(owner,title,content,dateOfPosting,expDate) VALUES(?,?,?,?,?)";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$owner);
		$stmnt->bindParam(2,$title);
		$stmnt->bindParam(3,$content);
		$stmnt->bindParam(4,$dateOfPosting);
		$stmnt->bindParam(5,$expDate);

		if ($stmnt->execute()) {
			echo "Insert";
		}else{
			echo "failed!";
		}

	} else if ($command=="delete") {
		$id=$_GET['id'];//Because it is coming from the url.
		$sql="DELETE FROM news WHERE id=?";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$id);

		if ($stmnt->execute()) {
			echo "Delete success!";
		}else{

			 echo "failed!";
		}
	}else if ($command=="update") {

		$id=$_POST['id'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$expDate=$_POST['expDate'];
		


		$sql="UPDATE news SET title=?,content=?,expDate=? WHERE id=?";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$title);
		$stmnt->bindParam(2,$content);
		$stmnt->bindParam(3,$expDate);
		$stmnt->bindParam(4,$id);
		$stmnt->execute();
		$count=$stmnt->rowCount();

		if ($count==1) {
			$output=array("status"=>"true");
			echo json_encode($output);

		}else{
			$output=array("status"=>"false");
			echo json_encode($output);
		}
		
	}



 ?>
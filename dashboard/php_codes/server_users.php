<?php 

	include 'conn/config.php';

	$command=isset($_GET['command'])?$_GET['command']:'';

	if ($command=='load') {

		$sql="SELECT * FROM _users";
		$stmnt=$db->prepare($sql);
		$stmnt->execute();
		while ($row=$stmnt->fetch()) {
			
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['surname'];?></td>
						<td>
					<button class="btn btn-warning"  data-toggle="modal" data-target="#edit-<?php echo $row['id']?>">Edit</button>
				
				<div class="modal fade" id="edit-<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="editLabel-<?php echo $row['id']?>">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="editLabel-<?php echo $row['id']?>">Edit User</h4>
				      </div>
				      <form>
        				<div class="modal-body">
        				  <div class="form-group">
        				     <input type="hidden"   id="<?php echo $row['id']?>" value="<?php echo $row['id']?>" >
                            <label for="username">Name</label>
                            <input type="text" class="form-control" id="username-<?php echo $row['id']?>" value="<?php echo $row['username']?>" >
                          </div>
                          <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="name-<?php echo $row['id']?>" value="<?php echo $row['name']?>" >
                          </div>
                          <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname-<?php echo $row['id']?>" value="<?php echo $row['surname']?>" >
                          </div>
                        </div> 
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" onclick="updateData(<?php echo $row['id']?>)" class="btn btn-primary">Save</button>
					      </div>
				      </form>
				    </div>
				  </div>
				</div>
				<button onclick="deleteData(<?php echo $row['id']?>)" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<?php
				
		}//End While

	}else if ($command=="add") {

		$username=$_POST['username'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];
		//compare sent password for equality! and md5 them.

		$sql="INSERT INTO _users(username,name,surname,password) VALUES(?,?,?,?)";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$username);
		$stmnt->bindParam(2,$name);
		$stmnt->bindParam(3,$surname);
		$stmnt->bindParam(4,$password);

		if ($stmnt->execute()) {
			$output=array('status'=>'true');
			echo json_encode($output);
		}else{
			$output=array('status'=>'false');
			echo json_encode($output);
		}

	} else if ($command=="delete") {
		$id=$_GET['id'];//Because it is coming from the url.
		$sql="DELETE FROM _users WHERE id=?";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$id);

		if ($stmnt->execute()) {
			echo "Delete success!";
		}else{

			 echo "failed!";
		}
	}else if ($command=="update") {

		$id=$_POST['id'];
		$username=$_POST['username'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];

		$sql="UPDATE _users SET username=?,name=?,surname=? WHERE id=?";
		$stmnt=$db->prepare($sql);
		$stmnt->bindParam(1,$username);
		$stmnt->bindParam(2,$name);
		$stmnt->bindParam(3,$surname);
		$stmnt->bindParam(4,$id);

		if ($stmnt->execute()) {
			echo "Update Successful";
		}else{
			echo "Update Falied";
		}
		
	}



 ?>
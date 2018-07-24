<?php 
	$db=new PDO('mysql:host=localhost;dbname=ajax','root','');
    
	$page=isset($_GET['p'])?$_GET['p']:'';
	if($page=='add'){
     $name=$_POST['nm'];
     $email=$_POST['em'];
     $phone=$_POST['hp'];
     $address=$_POST['al'];
     $stmt=$db->prepare("insert into users values('',?,?,?,?)");
     $stmt->bindParam(1,$name);
     $stmt->bindParam(2,$email);
     $stmt->bindParam(3,$phone);
     $stmt->bindParam(4,$address);
     
     if ($stmt->execute()) {
     	echo "Success";
     }else{
     	echo "Fail".mysqli_error();
     }
	}else if($page=='edit'){
     $id=$_POST['id'];
	 $name=$_POST['nm'];
     $email=$_POST['em'];
     $phone=$_POST['hp'];
     $address=$_POST['al'];
     $stmt=$db->prepare("update users set name=?,email=?,phone=?,address=? where id=?");
     
     $stmt->bindParam(1,$name);
     $stmt->bindParam(2,$email);
     $stmt->bindParam(3,$phone);
     $stmt->bindParam(4,$address);
     $stmt->bindParam(5,$id);
     if ($stmt->execute()) {
     	echo "Success update";
     }else{
     	echo "Fail update".mysqli_error();
     }

	}if($page=='del'){
       $id=$_GET['id'];
       $stmt=$db->prepare("delete from users where id=?");
       $stmt->bindParam(1,$id);
       if ($stmt->execute()) {
     	echo "Success delete";
     }else{
     	echo "Fail delete".mysqli_error();
     }
	}else{
     $stmt=$db->prepare("select * from users");
     $stmt->execute();
     while ($row=$stmt->fetch()) {
     	?>
         <tr>
         	<td><?php echo $row['id']?></td>
         	<td><?php echo $row['name']?></td>
         	<td><?php echo $row['email']?></td>
         	<td><?php echo $row['phone']?></td>
         	<td><?php echo $row['address']?></td>
         	<td>
				<button class="btn btn-warning"  data-toggle="modal" data-target="#edit-<?php echo $row['id']?>">Edit</button>
				<!-- Modal -->
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
                            <label for="nm">Name</label>
                            <input type="text" class="form-control" id="nm-<?php echo $row['id']?>" value="<?php echo $row['name']?>" >
                          </div>
                          <div class="form-group">
                            <label for="em">Email</label>
                            <input type="email" class="form-control" id="em-<?php echo $row['id']?>" value="<?php echo $row['email']?>" >
                          </div>
                          <div class="form-group">
                            <label for="hp">Hone Number</label>
                            <input type="number" class="form-control" id="hp-<?php echo $row['id']?>" value="<?php echo $row['phone']?>" >
                          </div>
                          <div class="form-group">
                            <label for="al">Address</label>
                            <textarea class="form-control" id="al-<?php echo $row['id']?>" placeholder="Your address"><?php echo $row['address']?></textarea>
                          </div>

				      </div> 
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" onclick="updateData(<?php echo $row['id']?>)" class="btn btn-primary">Save</button>
					      </div>
				      </form>
				    </div>
				  </div>
				</div>
				<button onclick="deleteData(<?php echo $row['id']?>)" class="btn btn-danger">Delete</button>
         	</td>
         </tr>

     	<?php
     }
	}

 ?>
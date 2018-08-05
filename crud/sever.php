
<?php 
		require 'conn/config.php';
		$sql="SELECT * FROM users ORDER BY id DESC";
		$result=mysqli_query($conn,$sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<style type="text/css">
		#size .modal-dialog  {width:300px;}
	</style>
</head>
<body>
	


<!--Modals-->
		<div class="modal fade size" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
		      </div>
		      <div class="modal-body">
		        
          	     <form role="form" action="update.php" method="post">


        			<table border="0">
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="usersname">Username:&nbsp</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" name="username" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="name">Name:</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" name="name" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="surname">Surname:</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" name="surname" class="form-control"/>
        					</td>
        					<tr>
        					<td>
        						<div class="form-group">
        							<label for="email">Email:</label>
        						</div>
        					</td>
        					<td>
        						<input type="email" name="email" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							
        						</div>
        					</td>
        					<td>
        						<button type="submit" class="btn btn-info btn-block">Save</button>
        					</td>
        				</tr>
        				</tr>
        			</table><!--End Table-->              
                </form>
		      </div>
		    </div>
		  </div>
		</div><!--End Edit Modal-->
		
		<!--Add User Modal-->
		<div class="modal fade size" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">New user</h4>
		      </div>
		      <div class="modal-body">
		        
          	     <form role="form" name="form">


        			<table border="0">
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="usersname">Username:&nbsp</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" id="username" name="username" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="name">Name:</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" id="name" name="name" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							<label for="surname">Surname:</label>
        						</div>
        					</td>
        					<td>
        						<input type="text" id="surname" name="surname" class="form-control"/>
        					</td>
        					<tr>
        					<td>
        						<div class="form-group">
        							<label for="email">Email:</label>
        						</div>
        					</td>
        					<td>
        						<input type="email" id="email" name="email" class="form-control"/>
        					</td>
        				</tr>
        				<tr>
        					<td>
        						<div class="form-group">
        							
        						</div>
        					</td>
        					<td>
        						<button class="btn btn-success" name="insert" id="insert">Send</button>
        					</td>
        				</tr>
        				</tr>
        			</table><!--End Table-->              
                </form>
		      </div>
		    </div>
		  </div>
		</div><!--End Adduser Modal-->

		<!--Modals-->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Confirm</h4>
		      </div>
		      <div class="modal-body">
		        
          	     <form role="form">


        			<table border="0">
        				<tr>
        					<td>
        						<div class="form-group">
        							<p>Do you want to delete user?&nbsp &nbsp &nbsp</p>
        							
        						</div>
        					</td>
        					<td>
        					<button class="btn btn-info btn-md" data-dismiss="modal"
        							aria-hidden="true">NO</button>	
        							<button type="submit" class="btn btn-info btn-md">YES</button>
        					</td>
        				</tr>
        			</table><!--End Table-->              
                </form>
		      </div>
		    </div>
		  </div>
		</div><!--End Edit Modal-->



 <div class="jumbotron"><button class="btn btn-primary btn-xs" 
                                                data-title="Edit" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-pencil">
                                                </span></button></div>
 				<div class="container">
 					<div class="row">
 						<div class="col-md-12">
 							<div class="table-responsive">
			 					<table class="table table-hover table-bordered">
			 						<thead>
			 							<tr>
			 								<th>#</th>
			 								<th>Username</th>
			 								<th>Name</th>
			 								<th>Surname</th>
			 								<th>Email</th>
			 								<th>Edit</th>
			 								<th>Delete</th>
			 							</tr>
			 						</thead><!--End Table Header-->
			 						<tbody>
			 							
			 							<?php 
			 								 while ($row=mysqli_fetch_array($result)) {
			 								 	echo "<tr>";
			 								 	echo "<td>".$row['id']."</td>";
			 								 	echo "<td>".$row['username']."</td>";
			 								 	echo "<td>".$row['name']."</td>";
			 								 	echo "<td>".$row['surname']."</td>";
			 								 	echo "<td>".$row['email']."</td>";
			 								 	echo '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" 
    											data-title="Edit" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-pencil">
    											</span></button></p></td>';
			 								 	echo '<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs"
    										 	data-title="Delete" 
    										 	data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
    										 </td>';
			 								 	echo "</tr>";
			 								 }
			 							?>
			 								
			 							
			 						</tbody>
			 					</table>
 							</div>
 						</div>
 					</div>
 				</div>

 <script src="js/jquery-3.1.1.min.js"type="text/javascript"></script>
 <script src="js/bootstrap.min.js"type="text/javascript"></script>
 <script type="text/javascript">
        $(document).ready(function(){
            $('#insert').click(function(event){
                event.preventDefault();
                $.ajax({
                    url:"insert.php",
                    method:"post",
                    data:$('form').serialize(),
                    dataType:"text",
                    success: function(strMessage){
                        $('#message').text(strMessage)
                    }
                })
            })
        })
 </script>
</body>
</html>

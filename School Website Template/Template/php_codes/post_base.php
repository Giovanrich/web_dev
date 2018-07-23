

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
						
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['content'] ?></td>
						<td><?php echo $row['owner'];?></td>
						<td><?php echo $row['dateOfPosting'];?></td>
						<td><?php echo $row['expDate'];?></td>
					</tr>
	
    
					<?php
				
		}//End While

	}

 ?>
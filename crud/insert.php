<?php 
   
  include 'conn/config.php';


		
		
			$username=$_POST['username'];
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			$email=$_POST['email']; 

            $sql="INSERT INTO users(username,name,surname,email) VALUES('$username','$name','$surname','$email')";
            if (mysqli_query($conn,$sql)) {
            	echo "Insert successful";
            }else{
            	echo "Error".mysqli_error();
            }

 ?>
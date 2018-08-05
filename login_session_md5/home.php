<?php
include 'check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
<a href="logout.php" style="font-size:18px">Logout?</a>

</body>
</html>
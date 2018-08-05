<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP LOGIN FORM WITH SESSION</title>
<style>

.wrapper
{
	width:800px;
	margin:0 auto;
}
h1
{
	font-size:24px;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight:bold;
	color:#000;
}
h1 a
{
	color:#000;
}

label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>


	<div class="wrapper">
		<h1><a href="http://www.eggslab.net/php-login-script">PHP LOGIN FORM WITH SESSION</a></h1>
			<table border="0">
				<tr>
					<td>
						<form method="post" action="">
			<table width="400" border="0" cellpadding="10" cellspacing="10">
				<tr>
					<td colspan="2" align="center" class="error"><?php echo $error;?></td>
				</tr>
				<tr>
					<td style="font-weight: bold"><div align="right"><label for="username">Username</label></div></td>
					<td><input name="username" type="text" class="input" size="25" required /></td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
					<td><input name="password" type="password" class="input" size="25" required /></td>
				</tr>
				<tr>
					<td height="23"></td>
					<td><div align="right">
  						<input type="submit" name="submit" value="Login!" />
						</div>
					</td>
				</tr>
			</table>
					</form>
				</td>
			</tr>
			<tr>
<td>Username: test &amp; Password: 12345</td>
</tr>
</table>

</div>    
    
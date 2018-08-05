<?php
define('SERVER', 'localhost');
define('DB_USER', 'root');
define('USER_PASS', '');
define('DB_NAME', 'login_sessions_md5');

$conn=mysqli_connect(SERVER,DB_USER,USER_PASS,DB_NAME) or die(mysqli_error());

  ?>
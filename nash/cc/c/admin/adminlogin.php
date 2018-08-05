<?php
session_start();
//testing login....
$username = "";
$password = "";
$msg_error = "";
$s_id="";
$msg = "";
$count=0;

if(isset($_POST['username'])){
    $email = $_POST['username'];
    $password = $_POST['password'];

    if((!$username) || (!$password)){
        $msg_error = "<p style='color: #ffffff; font-weight: bold;'>Wrong username or password!</p>";
    }
    else
    {
        //$email = mysql_real_escape_string($email);
        $password = md5($password);
        include("conn/connect.php");
        $sql="SELECT * FROM `users`where username='$username' and password='$password'";


        if($query_run=mysql_query($sql))
        {
            while($row=mysql_fetch_assoc($query_run))
            {
                
                
                $s_username=$row['username'];
                $s_password=$row['password'];

               
                $_SESSION['username']=$s_username;
                $_SESSION['password']=$s_password;
               


            }
        }

        else{
            $msg_error = "<p style='color: #ffffff; font-weight: bold;'>Wrong username or password sql!</p>";
        }
    }
}

?>
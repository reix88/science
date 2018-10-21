<?php
require '../chat/scripts/app_config.php';
require '../chat/scripts/functions.php';

if (isset($_POST['username']) && isset($_POST['passwd'])) 
{	
	session_start();

	$user = $_POST['username'];
	$passwd = $_POST['passwd'];

	$user = fix_String($user);
	$passwd = fix_String($passwd);
	
	if (empty($user) || empty($passwd)) 
	{
        echo "<span class='error'>Имя или Пароль пусты</span><br><br>";
	}else
	{
    $result_salt=queryMysql("SELECT salt FROM admin WHERE username='$user'");
	}
	if($result_salt->num_rows!=0) 
	{
        $rows = $result_salt->fetch_array(MYSQLI_ASSOC);
        $salt = $rows['salt'];
    }
        $hashpasswd = hash('ripemd128',$passwd);
        $result = queryMySQL("SELECT username,passwd FROM admin WHERE username='$user' AND passwd='$hashpasswd$salt'");
	  
	if ($result->num_rows == 0)
    {	
        echo "<br><span class='error'><i>Имя или Пароль не совпадают</i></span><br>";
    }
    else
    { 
     	$_SESSION['admin']  = $user;
     	header("Location:../chat/index.php");
    }
}	
?>
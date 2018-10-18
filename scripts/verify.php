<?php
if (isset($_POST['username']) && isset($_POST['passwd'])) 
{
	session_start();
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];

	$username = htmlentities($username);
	$passwd = htmlentities($passwd);
	
	$jenya_login = 'jenya.cats@gmail.com';
	$time_login = 'timur.cats@gmail.com';
	$passwd_cats = 'cats 123';

	if ($username == $jenya_login || $username == $time_login && $passwd == $passwd_cats) 
	{
		$_SESSION['admin'] = $username;
		
		if (!empty($_SESSION['admin'])) 
		{
			header('Location:cats.html');
		}
	}
}	
?>
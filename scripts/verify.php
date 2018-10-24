<?php
define("DB_HOST", "localhost");
define("USER_N", "lool");
define("U_PASSWD", "1234");
define("DB_NAME", "science");

$conn = new mysqli(DB_HOST,USER_N,U_PASSWD,DB_NAME);

if (mysqli_connect_errno()) {
	printf("возникла проблема с конфигурацией нашей базы данных.".mysqli_connect_error());
}

session_start();

function fix_String($all) {
	global $conn;
	$all = htmlentities($all);
	$all = stripslashes($all);
	$all = strip_tags($all);
	return $conn->real_escape_string($all);
}

function queryMysql($query) {
    global $conn;
    $result = $conn->query($query);
    if (!$result) die($conn->error);
    return $result;
	}

if (isset($_POST['username']) && isset($_POST['passwd'])) {
	session_start();

	$user = $_POST['username'];
	$passwd = $_POST['passwd'];
	$user = fix_String($user);
	$passwd = fix_String($passwd);


	if (empty($user) && empty($passwd)) {
		echo "<span class='error'>Имя и Пароль пусты</span>";
	} else {
		$result_salt=queryMysql("SELECT salt FROM admin WHERE username='$user'");
	}

	if ($result_salt->num_rows!=0) {
		$rows = $result_salt->fetch_array(MYSQLI_ASSOC);
        $salt = $rows['salt'];
    }

    $hashpasswd = hash('ripemd128',$passwd);
    $result = queryMySQL("SELECT username,passwd FROM admin WHERE username='$user' AND passwd='$hashpasswd$salt'");

	if ($result->num_rows == 0) {
        echo "<br><span class='error'><i>Имя или Пароль не совпадают</i></span><br>";
    } else {
		$_SESSION['admin']  = $user;
     	header("Location:../chat/index.php");
    }
}
?>
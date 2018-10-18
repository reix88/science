<?
define("DB_HOST", "localhost");
define("USER_N", "lool");
define("U_PASSWD", "1234");
define("DB_NAME", "science");

$conn = new mysqli(DB_HOST,USER_N,U_PASSWD,DB_NAME);

if ($conn->connect_error) 
{
	echo "возникла проблема с конфигурацией нашей базы данных.".mysql_error();
}
?>
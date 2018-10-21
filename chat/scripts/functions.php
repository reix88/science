<?
require_once 'app_config.php';

function fix_String($all)
	{
		global $conn;
		$all = htmlentities($all);
		$all = stripslashes($all);
		$all = strip_tags($all);
		return $conn->real_escape_string($all);
	}
function queryMysql($query)
  	{
	    global $conn;
	    $result = $conn->query($query);
	    if (!$result) die($conn->error);
	    return $result;
  	}
 ?>
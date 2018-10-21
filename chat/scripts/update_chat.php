<?php

	require_once 'app_config.php';
	session_start();
	
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

	if (isset($_POST['delete']) && isset($_POST['id']) && isset($_SESSION['admin'])) 
	{
		$id=fix_String($_POST['id']);
		queryMysql("DELETE FROM chat WHERE id='$id'");
		header("Location:../index.php");
	}	

	if (isset($_POST['text']) && isset($_POST['author']) || isset($_SESSION['admin'])) 
	{
		$author = fix_String($_POST['author']);
		$text = fix_String($_POST['text']);

		if (empty($author) && !isset($_SESSION['admin'])) 
		{
			echo '<div class="alert alert-danger shadow-sm p-2 mb-2" style="width: 350px;><h5 class="alert-heading">Введите Email !</h5></div>';	
		}elseif (empty($text) && isset($_POST['enter'])) 
		{
			echo '<div class="alert alert-danger shadow-sm p-2 mb-2" style="width: 350px;><h5 class="alert-heading">Введите Собщения !</h5></div>';
		} elseif (!isset($_SESSION['admin']) || empty($text) && empty($author)) {
			echo '<div class="alert alert-danger shadow-sm p-2 mb-2" style="width: 350px;><h5 class="alert-heading">Введите Собщения и Email !</h5></div>';
		}
		else
		{
			if (isset($_SESSION['admin']) && !empty($text)) 
			{
			$admin = $_SESSION['admin'];
			$time = date('Y-m-d H:i:s');
			$result = queryMysql("INSERT INTO chat(author,text,date)"."VALUES ('$admin','$text','$time')");

			}else 
			{
			$time = date('Y-m-d H:i:s');
			$result = queryMysql("INSERT INTO chat(author,text,date)"."VALUES ('$author','$text','$time')");
			}
		}
	}
	if ($result->num_rows == 0 ) 
	{
		$zero_div = '<div class="alert alert-danger shadow-sm p-1 mb-2" role="alert">'.'<h4 class="alert-heading">Упс.. Записей нет!</h4>'.'</div>';
	}	
	$result=queryMysql("SELECT * FROM chat ORDER BY id DESC");

?>
<?php if (!isset($_POST['delete']) && !isset($_POST['id'])): ?>
	<?php foreach ($result as $value): ?>
	<div class="card">
		<div class="card-header" style="float: left;">
			<img src="img/bender.jpg" class="ava">
				<?php if ($value['author'] == 'Admin1' || $value['author'] == 'Admin2'):?>
					<b style="color:red;"><?php echo $value['author']; ?></b>
				<?php endif;?>
				<?php if ($value['author'] != 'Admin1' && $value['author'] != 'Admin2'):?>
					<?php echo $value['author']; ?>
				<?php endif;?>
		</div>
		<div class="card-body">
			<?php echo $value['text']; ?>
		</div>	
		<div class="card-footer text-secondary">
			<?php if (isset($_SESSION['admin'])) :?>
			<form action="scripts/update_chat.php" method="post">
				<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
  				<button type="submit" name="delete" class="btn btn-outline-secondary delete-btn">
  					Удалить
  				</button>
			</form>
			<?php endif; ?>
  			<span style="float: right;"><?php echo $value['date']; ?></span>
		</div>
	</div><br>
	<?php endforeach; ?>
<?php endif; ?>
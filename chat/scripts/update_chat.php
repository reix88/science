<?php

	define("DB_HOST", "localhost");
	define("USER_N", "lool");
	define("U_PASSWD", "1234");
	define("DB_NAME", "science");

	$conn = new mysqli(DB_HOST,USER_N,U_PASSWD,DB_NAME);

	if (mysqli_connect_errno()) 
	{
		printf("возникла проблема с конфигурацией нашей базы данных.".mysqli_connect_error());
	}
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
		} elseif (!isset($_SESSION['admin']) && empty($text) && empty($author)) {
			echo '<div class="alert alert-danger shadow-sm p-2 mb-2" style="width: 350px;><h5 class="alert-heading">Введите Собщения и Email !</h5></div>';
		}
		else
		{
			if (isset($_SESSION['admin']) && !empty($text)) 
			{
			$admin = $_SESSION['admin'];
			$time = date('Y.m.d H:i');
			$result = queryMysql("INSERT INTO chat(author,text,date)"."VALUES ('$admin','$text','$time')");

			}elseif (!isset($_SESSION['admin']) && !empty($text)) 
			{
			$time = date('Y.m.d H:i');
			$result = queryMysql("INSERT INTO chat(author,text,date)"."VALUES ('$author','$text','$time')");
			}
		}
	}
	if ($result->num_rows == 0 ) 
	{
		$zero_div = '<div class="alert alert-danger shadow-sm p-1 mb-2" role="alert">'.'<h4 class="alert-heading">Упс.. Записей нет!</h4>'.'</div>';
	}	
	$result=queryMysql("SELECT * FROM chat ORDER BY id DESC");
	/*
			<?php if (isset($_SESSION['admin'])) :?>
			<form action="scripts/update_chat.php" method="post">
				<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
  				<button type="submit" name="delete" class="btn btn-outline-secondary delete-btn">
  					Удалить
  				</button>
			</form>
			<?php endif; ?>
  			<span><?php echo $value['date']; ?></span>
*/
?>
<?php if (!isset($_POST['delete']) && !isset($_POST['id'])): ?>
	<?php foreach ($result as $value): ?>
 <div class="media text-muted pt-3">
    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="img/bender.jpg" data-holder-rendered="true">
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <?php if ($value['author'] == 'Tyga' || $value['author'] == 'ZerxDay'):?>
			<b class="d-block" style="color:#f93b3b;"><?php echo $value['author']; ?></b>
		<?php endif;?>
		<?php if ($value['author'] != 'Tyga' && $value['author'] != 'ZerxDay'):?>
			<?php echo $value['author']; ?><br>
		<?php endif;?>
 			<?php echo $value['text']; ?>
 		<br><span style="font-size: 11px; float: right;">
			Дата: <?php echo $value['date']; ?>
 			</span>
 	</p>
 	
</div>
	<?php endforeach; ?>
<?php endif; ?>

<?	
	require_once 'scripts/functions.php';
	require_once 'for-internet/app_config.php';
	session_start();

	if (isset($_POST['delete']) && isset($_POST['id']) && isset($_SESSION['admin'])) 
	{
		$id=fix_String($_POST['id']);
		queryMysql("DELETE FROM chat WHERE id='$id'");
	}	
	if (isset($_POST['post']) && isset($_POST['username'])) 
	{
		$author = fix_String($_POST['username']);
		$text = fix_String($_POST['post']);

		if (empty($text) || empty($author)) 
		{
			$error = '<div class="alert alert-danger shadow-sm p-2 mb-2" style="width: 350px;><h5 class="alert-heading">Введите Email/Собщения</h5></div>';	
		}
		else
		{
			$time = date('Y-m-d H:i:s');
			$result = queryMysql("INSERT INTO chat(author,text,date)"."VALUES ('$author','$text','$time')");
		}
	}
	
	$result=queryMysql("SELECT * FROM chat ORDER BY id DESC");
	
	if ($result->num_rows == 0 ) 
	{
		$zero_div = '<div class="alert alert-danger shadow-sm p-1 mb-2" role="alert">'.'<h4 class="alert-heading">Упс.. Записей нет!</h4>'.'</div>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Science | Решай базовые задачи по основным техническим наукам онлайн</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">

	<style type="text/css">
		html,
		body {
			width: 100%;
			height: auto;
			max-width: 320px;
		}
		::-webkit-scrollbar {
		    display: none
		}
		.form-class {
			margin-top: 60px;
			margin-left: 1%;
			margin-right: 1%;
		}
		.delete-btn {
			float: left;
			max-width: 100px;
			min-width: 80px;
		}
		.ava {
			width: 60px;
			height: auto;
			margin: 0px;
			border-radius: 200px;
		}
		.chat-text {
			font-size: 34px;
			font-weight: 400;
		}
		.text-span {
			font-size: 20px;
			font-weight: 400;	
		}
	</style>
</head>
<body class="bg-light">
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<form action="index.php" method="post" class="form-class">
	<center><p class="text-span">Введите сообщение</p><hr></center>
	<div class="form-label-group" style="margin-bottom: 10px;">
      	<div class="input-group">
        	<div class="input-group-prepend">
          		<span class="input-group-text">@</span>
        	</div>
        	<input type="text" class="form-control" id="username" name="username" placeholder="example@email.com" required="">
    	</div>
    </div>

	<textarea class="form-control textarea" rows="3" name="post" placeholder="Начните вводить текст..."></textarea>
	<button type="submit" class="btn btn-outline-info" style="margin-top: 10px; height: 40px; margin-left: 64%;">Отправить</button>

	<hr class="my-4">
</form>

<center>
	<span class="chat-text">CHAT</span>
</center>

<fieldset>
	<?php echo $zero_div; ?>
	<?php foreach ($result as $value): ?>

	<div class="card">
		<div class="card-header" style="float: left;">
			<img src="img/bender.jpg" class="ava">
				<b>
					<?php echo $value['author']; ?>
				</b>
		</div>

		<div class="card-body text-secondary">
			<p class="card-text">
					<?php echo $value['text']; ?>
			</p>
		</div>

		<div class="card-footer text-secondary">
			<?php if (isset($_SESSION['admin'])) :?>
			<form action="index.php" method="post">
				<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
  				<button type="submit" name="delete" class="btn btn-outline-secondary delete-btn">
  					Удалить
  				</button>
			</form>

  			<?php endif; ?>
  			<span style="float: right;"><?php echo $value['date']; ?></span>
		</div>
	</div>
	<?php endforeach; ?>
</fieldset>

<?php echo $error; ?>

<!-- Scripts! -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
<!-- END -->

</body>
</html>
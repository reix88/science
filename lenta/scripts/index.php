<?php
session_start();

	define("DB_HOST", "localhost");
	define("USER_N", "lool");
	define("U_PASSWD", "1234");
	define("DB_NAME", "science");

	$conn = new mysqli(DB_HOST,USER_N,U_PASSWD,DB_NAME);

	if (mysqli_connect_errno())
	{
		printf("возникла проблема с конфигурацией нашей базы данных.".mysqli_connect_error());
	}

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

	if (isset($_POST['text']) && isset($_POST['header']) && isset($_POST['category']))
	{
		$header = $_POST['header'];
		$text = fix_String($_POST['text']);
		$linkHeader = $_POST['linkHeader'];
		$linkText = $_POST['linkText'];
		$link = $_POST['link'];
		$category = fix_String($_POST['category']);

		if (!empty($linkHeader)) {
			$headerLink = '<a href="'.$linkHeader.'" class="text-dark">'.$header.'</a>';
		}else {
			$headerLink = $header;
		}if (!empty($link) && !empty($linkText)) {
			$linkText = '<a href="'.$link.'">'.$linkText.'</a>';
		}else {
			$linkText = '';
		}
		if (empty($text) && empty($header) && empty($category)){
			$error="<span class='text-danger'>Введите Заголовок/Пост/Категорию</span>";
		}
		else
		{
			$time = date('M d');
			$result=queryMysql("INSERT INTO lenta(header,text,date,link,category,headername)"."VALUES ('$headerLink','$text','$time','$linkText','$category','$header')");

		  if (isset($_FILES['image']['name']))
		  {
		    mkdir('../uploads/'.$header.'/');
		    $upload_dir="../uploads/$header/";
		    $saveto = "$header.jpg";

		    file_exists($upload_file=$upload_dir.$saveto);
		    move_uploaded_file($_FILES['image']['tmp_name'], $upload_file);
		    $typeok = TRUE;

		    switch($_FILES['image']['type'])
		    {
		      case "image/gif":   $src = imagecreatefromgif($upload_file); break;
		      case "image/jpeg":  // Both regular and progressive jpegs
		      case "image/pjpeg": $src = imagecreatefromjpeg($upload_file); break;
		      case "image/png":   $src = imagecreatefrompng($upload_file); break;
		      default:            $typeok = FALSE; break;
		    }

		    if ($typeok)
		    {
		      list($w, $h) = getimagesize($upload_file);

		      $max = 450;
		      $tw  = $w;
		      $th  = $h;

		      if ($w > $h && $max < $w)
		      {
		        $th = $max / $w * $h;
		        $tw = $max;
		      }
		      elseif ($h > $w && $max < $h)
		      {
		        $tw = $max / $h * $w;
		        $th = $max;
		      }
		      elseif ($max < $w)
		      {
		        $tw = $th = $max;
		      }

		      $tmp = imagecreatetruecolor($tw, $th);
		      imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
		      imageconvolution($tmp, array(array(-1, -1, -1),
		      array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
		      imagejpeg($tmp, $upload_file);
		      imagedestroy($tmp);
		      imagedestroy($src);
		      $image=true;
		    }
		  }
		}
		if (!$result->num_rows && $image) 
		{
				$add_post="<span class='finish'><i>Ваш Пост Добавлен "."&nbsp;&#x2714; </i></span><br><br>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Добавьте пост</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<style type="text/css">
		.finish
		{
			color: green;
			text-decoration: underline;
		}
		.error
		{
			color: red;
		}
		.container{
			max-width: 450px;
		}
	</style>
</head>
<body class="bg-light">
<div class="container text-secondary">
	<center>
		<header>
			<h3>Добавьте пост</h3>
		</header>
	</center>
	<center>
		<?php echo $error; ?>
		<?php echo $add_post; ?>
	</center>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<input type="text" name="linkHeader" class="form-control" placeholder="Введите ссылку заголвка">
		</div>
		<div class="mb-3">
			<input type="text" name="header" placeholder="Введите Заголовок" class="form-control" value="<?php echo $header; ?>">
		</div>
		<div class="mb-3">
			<input type="text" name="category" class="form-control" placeholder="Введите категорию">
		</div>
		<div class="mb-3">
			<textarea name="text" cols="60" rows="5" class="form-control"><?php echo $text; ?></textarea>
		</div>
		<div class="mb-3">
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" id="customFileLang" lang="ru" name="image">
		    <label class="custom-file-label" for="customFileLang">Загрузить Фото</label>
		  </div>
		</div>
		<div class="mb-3">
			<input type="text" name="link" class="form-control" placeholder="Введите сcылку">
		</div>
		<div class="mb-3">
			<input type="text" name="linkText" placeholder="Введите текст сcылки" class="form-control" >
		</div>
		<button type="submit" class="btn btn-info btn-sm">Отправить</button>
		<button type="reset" class="btn btn-info btn-sm">Очистить и начать все сначала</button>
	</form>
</div>
</body>
</html>
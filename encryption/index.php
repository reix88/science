<?php
require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Шифрование | Основная страница</title>
  	<meta name="description" content="Выберите из списка - каким способом шифрование воспользоваться">
  	<meta name="keywords" content="Шифрование текста, шифрование цифр, декодирование">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../css/normalize.css">

  	<link rel="icon" type="image/x-icon" href="../favicon.ico">

  	<style>
	    h1, h2 {
	      font-weight: 400;
	      width: 100%;
	    }
	    @media (max-width: 460px) {
	      .h1-size {
	        font-size: 40px;
	      }
	      h2 {
	        font-size: 22px;
	      }
	    }
	  	.jumbotron {
	  		margin-top: 10%;
	  	}
	  	.list-group {
	  		margin-left: auto;
	  		margin-right: auto;
	  		width: 90%;
	  		max-width: 600px;
	  		margin-bottom: 100px;
	  	}
	  	.list-group-item:hover {
	  		color: #007BFF;
	  	}
      span {
        color: green;
        font-weight: 600;
      }
      .margin-top-kek {
        margin-top: 150px;
      }
	</style>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../computer_science/index.php" style="color: #007BFF;">#Информатика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Главная страница<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Выбрать задачу
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BC; ?>">Кодировать в бинарный код</a>
          <a class="dropdown-item" href="<?php echo BCR; ?>">Декодировать бинарный код</a>
          <a class="dropdown-item" href="<?php echo BN; ?>">Десятичная система в двоичную</a>
          <a class="dropdown-item" href="<?php echo BNR; ?>">Двоичная система в десятичную</a>
          <a class="dropdown-item" href="<?php echo HN; ?>">Десятичная система в шестнадцатиричную</a>
          <a class="dropdown-item" href="<?php echo HNR; ?>">Шестнадцатиричная система в десятичную</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Дополнительно
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Шифрование</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>

    <a href="#" class="btn btn-outline-primary my-2 my-sm-0">
      Шифрование <span style="color: #00ef00">online</span>
    </a>
  </div>
</nav>

<center><h2 class="margin-top-kek">Какую задачу вам нужно решить?</h2></center>

<div class="list-group">
  <a class="list-group-item list-group-item-action" href="<?php echo CAE; ?>">Шифр Цезаря <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BCR; ?>">...<span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BN; ?>">...<span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BNR; ?>">...<span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo HN; ?>">...<span style="float: right">✓</span></a>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
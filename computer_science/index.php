<?php
require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Информатика | Основная страница</title>
  <meta name="description" content="Выберите из списка - какую задачу вам нужно решить">
  	<meta name="keywords" content="Кодирование текста, кодирование цифр, декодирование">

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
	</style>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="color: #007BFF;">#Информатика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Главная страница<span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="<?php echo ENC; ?>">Шифрование</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>

    <a href="<?php echo ENC; ?>" class="btn btn-outline-primary my-2 my-sm-0">
      Шифрование <span style="color: #00ef00">online</span>
    </a>
  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-4 h1-size" style="color: #007BFF; margin: 0px;">Информатика</h1>
  <p class="lead">Как дисциплина, информатика охватывает широкий круг тем от теоретических исследований алгоритмов и пределов вычислений до практической реализации вычислительных систем в области аппаратного и программного обеспечения. Информатика делится на ряд разделов: <br><br>
  - Теоретическая информатика<br>
  - Теория алгоритмов<br>
  - Информация и теория кодирования<br>
  - Алгоритмы и структуры данных<br>
  - Теория языков программирования</p>
  <hr class="my-4">
  <p style="color: #007BFF;"><cite title="Source Title">- Администрация сайта</cite></p>
</div>

<center><h2>Какую задачу вам нужно решить?</h2></center>

<div class="list-group">
  <a class="list-group-item list-group-item-action" href="<?php echo BC; ?>">Кодировать в бинарный код <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BCR; ?>">Декодировать бинарный код <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BN; ?>">Десятичная система в двоичную <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo BNR; ?>">Двоичная система в десятичную <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo HN; ?>">Десятичная система в шестнадцатиричную <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo HNR; ?>">Шестнадцатиричная система в десятичную <span style="float: right">✓</span></a>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
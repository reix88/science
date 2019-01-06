<?php
  require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Математика | Основная страница</title>
	<!-- <meta name="description" content="Выберить из списка - какую задачу нужно решить!">
	<meta name="keywords" content="решить линейные уравнения, решить квадратные уравнения, арифметическая прогрессия онлайн, геометрическая прогрессия онлайн"> -->

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
	    .button-circle {
	      border-radius: 20px;
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
  <a class="navbar-brand" href="#" style="color: #007BFF;">#Математика</a>
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
          <a class="dropdown-item" href="<?php echo LE; ?>">Линейные уравнения</a>
          <a class="dropdown-item" href="<?php echo SLE; ?>">Система линейных уравнений с 2 неизвестными</a>
          <a class="dropdown-item" href="<?php echo SLE3; ?>">Система линейных уравнений с 3 неизвестными</a>
          <a class="dropdown-item" href="<?php echo QE; ?>">Квадратые уравнения</a>
          <a class="dropdown-item" href="<?php echo DES; ?>">Система уравнений 2-й степени</a>
          <a class="dropdown-item" href="<?php echo DI; ?>">Неравенства 1-й степени</a>
          <a class="dropdown-item" href="<?php echo DIS; ?>">Система Неравенств 1-й степени</a>
          <a class="dropdown-item" href="<?php echo DI2; ?>">Неравенства 2-й степени</a>
          <a class="dropdown-item" href="<?php echo AP; ?>">Арифметическая прогрессия</a>
          <a class="dropdown-item" href="<?php echo GP; ?>">Геометрическая прогрессия</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Дополнительно
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo NOD; ?>">Найти НОД</a>
          <a class="dropdown-item" href="<?php echo NOK; ?>">Найти НОК</a>
          <a class="dropdown-item" href="<?php echo FACT; ?>">Разложение квадартного 3-х члена на множ...</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>

    <a href="<?php echo CALC; ?>" class="btn btn-outline-primary my-2 my-sm-0 button-circle">
      Калькулятор <span style="color: #00ef00">online</span>
    </a>

  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-4 h1-size" style="color: #007BFF; margin: 0px;">Алгебра</h1>
  <p class="lead"><span style="color: #007BFF;">Элементарная алгебра</span> — раздел алгебры, который изучает самые базовые понятия. Обычно изучается после изучения основных понятий арифметики. В арифметике изучаются числа и простейшие (+, −, ×, ÷) действия с ними. В алгебре числа заменяются на переменные (a, b, c, x, y и так далее).</p>
  <hr class="my-4">
  <p style="color: #007BFF;"><cite title="Source Title">- Администрация сайта</cite></p>
</div>

<center>
  <h2>Какое уравнение нужно решить?</h2>
</center>

<div class="list-group">
  <a class="list-group-item list-group-item-action" href="<?php echo LE; ?>">Линейные уравнения <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo SLE; ?>">Система линейных уравнений с 2 неизвестными <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo SLE3; ?>">Система линейных уравнений с 3 неизвестными <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo QE; ?>">Квадратые уравнения <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo DES; ?>">Система уравнений 2-й степени</a>
  <a class="list-group-item list-group-item-action" href="<?php echo DI; ?>">Неравенства 1-й степени</a>
  <a class="list-group-item list-group-item-action" href="<?php echo DIS; ?>">Система Неравенств 1-й степени</a>
  <a class="list-group-item list-group-item-action" href="<?php echo DI2; ?>">Неравенства 2-й степени</a>
  <a class="list-group-item list-group-item-action" href="<?php echo AP; ?>">Арифметическая прогрессия <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo GP; ?>">Геометрическая прогрессия <span style="float: right">✓</span></a>
</div>

<center>
  <h2 style="font-weight: 400; margin-top: -60px; color: #007BFF;">Дополнительно</h2>
</center>

<div class="list-group">
  <a class="list-group-item list-group-item-action" href="<?php echo NOD; ?>">Найти НОД <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo NOK; ?>">Найти НОК <span style="float: right">✓</span></a>
  <a class="list-group-item list-group-item-action" href="<?php echo FACT; ?>">Разложение квадартного 3-х члена на множители <span style="float: right">✓</span></a>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
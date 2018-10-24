<?php
  require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Калькулятор | Математика </title>
	<meta name="description" content="Калькулятор онлайн! Поможет подсчитать">
	<meta name="keywords" content="калькулятор, calculator, calc">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">

	<link rel="icon" type="image/x-icon" href="../favicon.ico">

	<style>
		.form-control {
			margin-top: 10px;
			width: 400px;
			height: 45px;
		}
		.calc {
			width: 288px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
		}
		.button-class-lol {
			width: 50px;
			height: 50px;
			border-radius: 4px;
			font-size: 22px;
			margin: 2px;
		    -webkit-box-shadow: 0 0 3px 3px #ebebeb;
		    box-shadow: 0 0 3px 3px #ebebeb;
		}
		.button-class-lol-2 {
			width: 108px;
			height: 50px;
			border-radius: 4px;
			font-size: 22px;
			margin: 2px;
		    -webkit-box-shadow: 0 0 3px 3px #ebebeb;
		    box-shadow: 0 0 3px 3px #ebebeb;
		}
		.input-calc {
			margin-bottom: 5px;
			width: 288px;
		}
		.admiral {
			margin-top: 100px;
		}
		.button-circle {
			border-radius: 20px;
		}
		h1 {
			font-weight: 400;
			width: 100%;
		}
		@media (max-width: 460px) {
			.h1-size {
				font-size: 42px;
			}
		}
	</style>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/calculator.js"></script>
</head>
<body>
<script>
document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../math/index.php" style="color: #007BFF;">#Математика</a>
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

    <a href="#" class="btn btn-outline-primary my-2 my-sm-0 button-circle">
      Калькулятор <span style="color: #00ef00">online</span>
    </a>

  </div>
</nav>

<div class="calc">
	<center><h1 class="display-4 h1-size" style="margin-bottom: 10px; margin-top: -25px;">Калькулятор</h1></center>
	<img src="../img/gif/matrix.gif" width="288">

	<div class="input-group input-group-lg input-calc">
		<input type="text" name="result" id="result" class="form-control" placeholder="Введите значение" aria-describedby="inputGroup-sizing-lg">
	</div>

	<div id='operations'>
		<button id="clear" class="btn btn-danger button-class-lol-2">Delete</button>
		<button id="procent" class="btn btn-success button-class-lol">%</button>
		<button class="btn btn-success button-class-lol" id="sqrt" value="" >√</button>
		<button id="squad" class="btn btn-success button-class-lol" value="x2" >x<sup>2</sup></button>
	</div>

	<div id='number' class="mb-3">
		<button id="num" class="btn btn-primary button-class-lol" value="1" >1</button>
		<button id="num1" class="btn btn-primary button-class-lol" value="2" >2</button>
		<button id="num2" class="btn btn-primary button-class-lol" value="3">3</button>
		<button  id="operations1" class="btn btn-success button-class-lol" value="/">/</button>
		<button id="operations5" class="btn btn-success button-class-lol" value="^" >x<sup>y</sup></button><br>
		<button id="num3" class="btn btn-primary button-class-lol" value="4">4</button>
		<button id="num4" class="btn btn-primary button-class-lol" value="5" >5</button>
		<button id="num5" class="btn btn-primary button-class-lol" value="6" >6</button>
		<button  id="operations2" class="btn btn-success button-class-lol" value="*">*</button>
		<button id="factorial" class="btn btn-success button-class-lol">n!</button><br>
		<button id="num6" class="btn btn-primary button-class-lol" value="7" >7</button>
		<button id="num7" class="btn btn-primary button-class-lol" value="8" >8</button>
		<button id="num8" class="btn btn-primary button-class-lol" value="9" >9</button>
		<button  id="operations3" class="btn btn-success button-class-lol" value="-">-</button>
		<button class="btn btn-success button-class-lol" value="log">log</button><br>
		<button id="num9" class="btn btn-primary button-class-lol-2" value="0" >0</button>
		<button id="operations6" class="btn btn-primary button-class-lol" value="." >.</button>
		<button  id="operations4" class="btn btn-success button-class-lol" value="+">+</button>
		<button id="enter" class="btn btn-primary button-class-lol" value="=">=</button>
	</div>
</div>

<center><p class="admiral" style="color: silver">Created by admiral-shepard</p></center>

<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>

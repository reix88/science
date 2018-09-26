<?php

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

	<script>
		    function funcSuccess(data)
			{
			   $("#result").text(data);
			}
		    $(document).ready (function () {
		    $('#number#num').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({name: $("#number#num").val()}),
		    dataType: "html",
		    success:funcSuccess
		  });
		});
	</script>

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
	</style>
</head>
<body>
<script>
document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../math/index.html" style="color: #007BFF;">#Математика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Решить Уравнение
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../math/linear_equations.php">Линейные уравнения</a>
          <a class="dropdown-item" href="../math/system_of_linear equations.php">Система линейных уравнений</a>
          <a class="dropdown-item" href="../math/quadratic_equations.php">Квадратые уравнения</a>
          <a class="dropdown-item" href="#">Система уравнений 2-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 1-й степени</a>
          <a class="dropdown-item" href="#">Система Неравенств 1-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 2-й степени</a>
          <a class="dropdown-item" href="#">Арифметическая прогрессия</a>
          <a class="dropdown-item" href="#">Геометрическая прогрессия</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Дополнительно
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Найти НОД</a>
          <a class="dropdown-item" href="#">Найти НОК</a>
          <a class="dropdown-item" href="../math/factorization.php">Разложение квадартного 3-х члена на множ...</a>
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

	<img src="../img/gif/matrix.gif" width="288">

	<form action='calculator.php' method='post'>
		<div class="input-group input-group-lg input-calc">
			<input type="text" name="result" id="result" class="form-control" placeholder="Введите значения" aria-describedby="inputGroup-sizing-lg">
		</div>

		<div id='operations'>
			<button class="btn button-class-lol-2" style="background-color: #fc3232" value="del" >Delete</button>
			<button class="btn btn-success button-class-lol" value="percent" >%</button>
			<button class="btn btn-success button-class-lol" value="root" >√</button>
			<button class="btn btn-success button-class-lol" value="x2" >x<sup>2</sup></button>
		</div>

		<div id='number' class="mb-3">
			<button class="btn btn-primary button-class-lol" value="1" >1</button>
			<button class="btn btn-primary button-class-lol" value="2" id='num'>2</button>
			<button class="btn btn-primary button-class-lol" value="3">3</button>
			<button class="btn btn-success button-class-lol" value="/">/</button>
			<button class="btn btn-success button-class-lol" value="xy" >x<sup>y</sup></button><br>
			<button class="btn btn-primary button-class-lol" value="4">4</button>
			<button class="btn btn-primary button-class-lol" value="5" >5</button>
			<button class="btn btn-primary button-class-lol" value="6" >6</button>
			<button class="btn btn-success button-class-lol" value="*">*</button>
			<button class="btn btn-success button-class-lol" value="n">n!</button><br>
			<button class="btn btn-primary button-class-lol" value="7" >7</button>
			<button class="btn btn-primary button-class-lol" value="8" >8</button>
			<button class="btn btn-primary button-class-lol" value="9" >9</button>
			<button class="btn btn-success button-class-lol" value="-">-</button>
			<button class="btn btn-success button-class-lol" value="log">log</button><br>
			<button class="btn btn-primary button-class-lol-2" value="0" >0</button>
			<button class="btn btn-primary button-class-lol" value="dot" >.</button>
			<button class="btn btn-success button-class-lol" value="+">+</button>
			<button class="btn btn-primary button-class-lol" value="=">=</button>
		</div>
	</form>
</div>

<center><p class="admiral" style="color: silver">Created by admiral-shepard</p></center>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<!-- End -->

</body>
</html>
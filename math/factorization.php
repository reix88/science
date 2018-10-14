<?php
  require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Разложение на множители | Математика</title>
  <meta name="description" content="Разложение квадратного уравнения на множители онлайн, просто и быстро!">
  <meta name="keywords" content="разложение на множители онлайн, разложение на множители">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">

  <link rel="icon" type="image/x-icon" href="../favicon.ico">

  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

  <style>
    .jumbotron {
      margin-top: 15px;
    }
  </style>

  <script>

    function funcSuccess(data) {
      if ($("#done").text() != '') {
        elText = $("#done").html();
        elText = elText.replace(elText,data);
        $("#done").html(elText);
      } else {
        $("#done").html(data);
      }
    }
    function funcFixString (input){
      $(document).ready (function () {
        $(input).bind("blur",function () {
          inputBlur = $(input).val()
          if (Number(inputBlur))
          {
            $(input).css({
              'border':'1px solid green'
            });
          }else {
            $(input).css({
              'border':'1px solid red'
            });
          }
        });
      });
    }
    funcFixString('#a');
    funcFixString('#b');
    funcFixString('#c');
      $(document).ready (function () {
        $('#enter').bind("click", function () {
        $.ajax({
         url: 'math.php',
         type: "POST",
         data:({
          a_f: $('#a').val(),
          b_f: $('#b').val(),
          c_f: $('#c').val(),
        }),
         dataType: "html",
         success:funcSuccess
          });
        });
      });
  </script>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="color: #007BFF;">#Математика</a>
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
          Решить Уравнение
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
          <a class="dropdown-item" href="#">Разложение квадартного 3-х члена на множ...</a>
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

<center>
  <h1>Разложение квадратного 3-х члена на множители</h1>
</center>

<div class="borderright">
<h6 style="color: #007BFF;">Квадратное уравнение обычно имеет вид:<br></h3>
	<p class="podskazka">
		<font style="color: red;">a</font><sup>2</sup>x + <font style="color: green;">b</font>x + <font style="color: blue;">c</font> = 0
	</p>
</div>

<div class="form">
	<div class="form-group row">
    <label for="fora" class="col-sm-2 col-form-label">Значение <font style='color: red'>A</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="a" class="form-control" id="a" placeholder="Enter A">
	    </div>
	</div>

	<div class="form-group row">
    <label for="forb" class="col-sm-2 col-form-label">Значение <font style='color: green;'>B</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="b" class="form-control" id="b" placeholder="Enter B">
	    </div>
	</div>

	<div class="form-group row">
    <label for="forc" class="col-sm-2 col-form-label">Значение <font style='color: blue;'>C</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="c" class="form-control" id="c" placeholder="Enter C">
	    </div>
	</div>

  <input class="btn btn-outline-success btn-lg" type="submit" value="Найти" id="enter">
</div>

<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">

  <div id="done"></div>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>

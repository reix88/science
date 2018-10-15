<?php
require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Система линейных уравнений с 3 неизвестными | Математика</title>
  <meta name="description" content="Разложение квадратного уравнения на множители онлайн, просто и быстро!">
  <meta name="keywords" content="разложение на множители онлайн, разложение на множители">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">
  <link rel="icon" type="image/x-icon" href="../favicon.ico">

  <script  src="../js/jquery-3.3.1.min.js"></script>

  <script>
    function funcSuccess(data) {
      if ($("#done").text() != '') {
        elText = $("#done").text();
        elText = elText.replace(elText,data);
        $("#done").html(elText); 
      } else {
        $("#done").html(data);
      }
    }
    $(document).ready (function () {
    $('#enter').bind("click", function () {
    $.ajax({
     url: 'math.php',
     type: "POST",
     data:({
      a11: $('#a1').val(),
      b11: $('#b1').val(),
      c11: $('#c1').val(),
      d11: $('#d1').val(),
      a12: $('#a2').val(),
      b12: $('#b2').val(),
      c12: $('#c2').val(),
      d12: $('#d2').val(),
      a13: $('#a3').val(),
      b13: $('#b3').val(),
      c13: $('#c3').val(),
      d13: $('#d3').val()
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
          <a class="dropdown-item" href="#">Система линейных уравнений с 3 неизвестными</a>
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

<center><h1>Система линейных уравнений с 3 неизвестными</h1></center>

<div class="borderright">
  <h6 style="color: #007BFF;">Стандартный вид:<br></h3>
    <p class="podskazka">
      <font style="color: red;">a</font>x + <font style="color: green;">b</font>y + <font style="color: blue;">c</font>z = <font style="color: #ffaa00;">d</font><br>
      <font style="color: red;">a</font><sub>1</sub>x + <font style="color: green;">b</font><sub>1</sub>y + <font style="color: blue;">c</font><sub>1</sub>z = <font style="color: #ffaa00;">d</font><sub>1</sub><br>
      <font style="color: red;">a</font><sub>2</sub>x + <font style="color: green;">b</font><sub>2</sub>y + <font style="color: blue;">c</font><sub>2</sub>z= <font style="color: #ffaa00;">d</font><sub>2</sub>
    </p>
  </div>

<div class="form">
  <center>
    <p class="podskazka">Введите Коэффициент от 1-го Уравнения:</p>
  </center>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: red;">a</font>:</label>
        <div class="col-sm-9">
          <input type="text" name="a1" class="form-control" id="a1" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: green;">b</font>:</label>
        <div class="col-sm-9">
          <input type="text" name="b1" class="form-control" id="b1" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: blue;">c</font>:</label>
        <div class="col-sm-9">
          <input type="text" name="c1" class="form-control" id="c1" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: #ffaa00;">d</font>:</label>
        <div class="col-sm-9">
          <input type="text" name="d1" class="form-control" id="d1" placeholder="Enter Number">
        </div>
    </div>

    <center>
      <p class="podskazka">Введите Коэффициент от 2-го Уравнения:</p>
    </center>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: red;">a</font><sub>1</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="a2" class="form-control" id="a2" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: green;">b</font><sub>1</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="b2" class="form-control" id="b2" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: blue;">c</font><sub>1</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="c2" class="form-control" id="c2" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: #ffaa00;">d</font><sub>1</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="d2" class="form-control" id="d2" placeholder="Enter Number">
        </div>
    </div>

    <center>
      <p class="podskazka">Введите Коэффициент от 3-го Уравнения:</p>
    </center>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: red;">a</font><sub>2</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="a3" class="form-control" id="a3" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: green;">b</font><sub>2</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="b3" class="form-control" id="b3" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: blue;">c</font><sub>2</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="c3" class="form-control" id="c3" placeholder="Enter Number">
        </div>
    </div>

    <div class="form-group row">
      <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: #ffaa00;">d</font><sub>2</sub>:</label>
        <div class="col-sm-9">
          <input type="text" name="d3" class="form-control" id="d3" placeholder="Enter Number">
        </div>
    </div>

    <input class="btn btn-outline-success btn-lg" type="submit" value="Решить" id="enter" style="margin-bottom:15px;">
<div>

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


<script>
document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<?php
# Форма для Ввода
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Система линейных уравнений | Математика</title>
  <meta name="description" content="Решить систему линейных уравнений онлайн, просто и быстро!">
  <meta name="keywords" content="система линейных уравнения, система линейных уравнений онлайн, решить систему линейных уравнений онлайн">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html" style="color: #007BFF;">#Математика</a>
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
          <a class="dropdown-item" href="linear_equations.php">Линейные уравнеия</a>
          <a class="dropdown-item" href="#">Система линейных уравнений</a>
          <a class="dropdown-item" href="quadratic_equations.php">Квадратые уравнения</a>
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
          <a class="dropdown-item" href="factorization.php">Разложение квадартного 3-х члена на множ...</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>
  </div>
</nav>

<center>
  <h1>Система линейных уравнений!</h1>
</center>

  <div class="borderright">
  <h6 style="color: #007BFF;">Стандартный вид:<br></h3>
    <p class="podskazka">
      <font style="color: red;">a</font>x + <font style="color: green;">b</font>y = <font style="color: blue;">c</font> <br>
      <font style="color: red;">a</font><sub>1</sub>x + <font style="color: green;">b</font><sub>1</sub>y = <font style="color: blue;">c</font><sub>1</sub>
    </p>
  </div>

<center>
  <p class="podskazka">Введите Коэффициент от 1-го Уравнения:</p>
</center>

<form method="post" action="system_of_linear equations.php">

	<div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: red;">a</font>:</label>
      <div class="col-sm-9">
        <input type="text" name="a" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: green;">b</font>:</label>
      <div class="col-sm-9">
        <input type="text" name="b" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: blue;">c</font>:</label>
      <div class="col-sm-9">
        <input type="text" name="c" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <center>
    <p class="podskazka">Введите Коэффициент от 2-го Уравнения:</p>
  </center>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: red;">a</font><sub>1</sub>:</label>
      <div class="col-sm-9">
        <input type="text" name="a1" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: green;">b</font><sub>1</sub>:</label>
      <div class="col-sm-9">
        <input type="text" name="b1" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">Значение <font style="color: blue;">c</font><sub>1</sub>:</label>
      <div class="col-sm-9">
        <input type="text" name="c1" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>

  <input class="btn btn-outline-success btn-lg" type="submit" value="Решить">
</form>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
_END;

/* $number = $_POST['number'];

while ($number > 0) {
  echo <<<_END
  <div class="form-group row">
      <div class="col-sm-10">
        <input type="text" name="number" class="form-control" id="fora" placeholder="Enter Number">
      </div>
  </div>
_END;
  --$number;
} */

# Значения из 1-го Ур.
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

# Значения из 2-го Ур.
$a1 = $_POST['a1'];
$b1 = $_POST['b1'];
$c1 = $_POST['c1'];

# Решение
$x = ($b1*$c - $b*$c1) / ($a*$b1 - $a1*$b);
$y = ($a*$c1 - $a1*$c) / ($a*$b1 - $a1*$b);

# Ответ
echo <<<_END
<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">X = $x</h1>
  <h1 class="display-4 margin-bottom">Y = $y</h1>
</div>
_END;
?>
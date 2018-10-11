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
	<title>Система линейных уравнений с 3 неизвестными | Математика</title>
  <meta name="description" content="Разложение квадратного уравнения на множители онлайн, просто и быстро!">
  <meta name="keywords" content="разложение на множители онлайн, разложение на множители">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">

  <link rel="icon" type="image/x-icon" href="../favicon.ico">
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
        <a class="nav-link" href="../index.html">Главная страница<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Решить Уравнение
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="linear_equations.php">Линейные уравнеия</a>
          <a class="dropdown-item" href="system_of_linear_equations.php">Система линейных уравнений с 2 неизвестными</a>
          <a class="dropdown-item" href="#">Система линейных уравнений с 3 неизвестными</a>
          <a class="dropdown-item" href="quadratic_equations.php">Квадратые уравнения</a>
          <a class="dropdown-item" href="#">Система уравнений 2-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 1-й степени</a>
          <a class="dropdown-item" href="#">Система Неравенств 1-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 2-й степени</a>
          <a class="dropdown-item" href="arithmetic_progression.php">Арифметическая прогрессия</a>
          <a class="dropdown-item" href="geometric_progression.php">Геометрическая прогрессия</a>
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

    <a href="../other_prog/calculator.php" class="btn btn-outline-primary my-2 my-sm-0 button-circle">
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

<form method="post" action="system_of_linear_equations_3.php" class="form">
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
</form>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
_END;
# Ввод значения Уравнения
$a1 = $_POST['a1'];
$b1 = $_POST['b1'];
$d1 = $_POST['d1'];
$c1 = $_POST['c1'];

$a2 = $_POST['a2'];
$b2 = $_POST['b2'];
$d2 = $_POST['d2'];
$c2 = $_POST['c2'];

$a3 = $_POST['a3'];
$b3 = $_POST['b3'];
$d3 = $_POST['d3'];
$c3 = $_POST['c3'];

# Общий знаменатель
$denominator = $a1 * $b2 * $c3 + $b1 * $c2 * $a3 + $c1 * $a2 * $b3 - $c1 * $b2 * $a3 - $a1 * $c2 * $b3 - $b1 * $a2 * $c3;
$numerator_x = $d1 * $b2 * $c3 + $b1 * $c2 * $d3 + $c1 * $d2 * $b3 - $c1 * $b2 * $d3 - $d1 * $c2 * $b3 - $b1 * $d2 * $c3;
$numerator_y = $a1 * $d2 * $c3 + $d1 * $c2 * $a3 + $c1 * $a2 * $d3 - $c1 * $d2 * $a3 - $a1 * $c2 * $d3 - $d1 * $a2 * $c3;
$numerator_z = $a1 * $b2 * $d3 + $b1 * $d2 * $a3 + $d1 * $a2 * $b3 - $d1 * $b2 * $a3 - $a1 * $d2 * $b3 - $b1 * $a2 * $d3;

$x = ($numerator_x)/($denominator);
$y = ($numerator_y)/($denominator);
$z = ($numerator_z)/($denominator);

if ($denominator == 0 and $numerator_x == 0 and $numerator_y == 0 and $numerator_z == 0) {
  $text = "Система имеет бесчисленное множество решений!";
}

if ($denominator == 0 and $numerator_x != 0 and $numerator_y != 0 and $numerator_z != 0) {
  $text = "Система не имеет решений!";
}

# Ответ
echo <<<_END
<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">X = $x</h1><br>
  <h1 class="display-4 margin-bottom">Y = $y</h1><br>
  <h1 class="display-4 margin-bottom">Z = $z</h1><br>
  <h1 class="display-4 margin-bottom"><span style="color: red;">$text</span></h1>
</div>
_END;
?>
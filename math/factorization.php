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
	<title>Разложение на множители | Математика</title>

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
          <a class="dropdown-item" href="system_of_linear equations.php">Система линейных уравнений</a>
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
          <a class="dropdown-item" href="#">Разложение квадартного 3-х члена на множ...</a>
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

<center><h1>Разложение квадратного 3-х члена на множители!</h1></center>

<div class="borderright">
<h6 style="color: #007BFF;">Квадратное уравнение обычно имеет вид:<br></h3>
	<p class="podskazka">
		<font style="color: red;">a</font><sup>2</sup>x + <font style="color: green;">b</font>x + <font style="color: blue;">c</font> = 0
	</p>
</div>

<form method="post" action="factorization.php">
	<div class="form-group row">
    <label for="fora" class="col-sm-2 col-form-label">Значение <font style='color: red'>A</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="a" class="form-control" id="fora" placeholder="Enter A">
	    </div>
	</div>

	<div class="form-group row">
    <label for="forb" class="col-sm-2 col-form-label">Значение <font style='color: green;'>B</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="b" class="form-control" id="forb" placeholder="Enter B">
	    </div>
	</div>

	<div class="form-group row">
    <label for="forc" class="col-sm-2 col-form-label">Значение <font style='color: blue;'>C</font></label>
	    <div class="col-sm-10">
	    	<input type="text" name="c" class="form-control" id="forc" placeholder="Enter C">
	    </div>
	</div>

  <input class="btn btn-outline-success btn-lg" type="submit" value="Найти">
</form>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
_END;
# Ввод значения Уравнения
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

# Проверки
if ($a == 0 xor $b == 0) {
	echo "<center><h4 style='color: red'>Это не квадратное уравнение!</h4></center><br>";
} else {
	# Дискриминант
	$d = ($b*$b) - 4*($a*$c);
}

if ($d > 0) {
	# Корни
	$x1 = (($b * -1) + sqrt($d)) / (2*$a);
	$x2 = (($b * -1) - sqrt($d)) / (2*$a);
} elseif ($d == 0) {
	$x1 = (($b * -1) / (2*$a));
} else {
	echo "<center><h4 style='color: red'>Квадратное Уравнение не имеет решения!</h4></center><br>";
}

# Ответ
echo <<<_END
<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">$a(x - ($x1))(x - ($x2))</h1>
</div>
_END;
?>
<script>
document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<?php
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Арифметическая прогрессия | Математика</title>
  <meta name="description" content="Арифметическая прогрессия онлайн, просто и быстро!">
  <meta name="keywords" content="арифметическая прогрессия онлайн, арифметическая прогрессия">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">

  <link rel="icon" type="image/x-icon" href="../favicon.ico">

  <style>
    sub {
      font-size: 12px;
    }
    .buttons-link {
      margin-top: 20px;
      margin-bottom: 30px;
    }
    .hover-a {
      background-color: rgba(8, 165, 42, 0.5);
    }
    .text-font {
      font-size: 40px;
    }
  </style>
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
          <a class="dropdown-item" href="linear_equations.php">Линейные уравнения</a>
          <a class="dropdown-item" href="system_of_linear_equations.php">Система линейных уравнений с 2 неизвестными</a>
          <a class="dropdown-item" href="system_of_linear_equations_3.php">Система линейных уравнений с 3 неизвестными</a>
          <a class="dropdown-item" href="quadratic_equations.php">Квадратые уравнения</a>
          <a class="dropdown-item" href="#">Система уравнений 2-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 1-й степени</a>
          <a class="dropdown-item" href="#">Система Неравенств 1-й степени</a>
          <a class="dropdown-item" href="#">Неравенства 2-й степени</a>
          <a class="dropdown-item" href="#">Арифметическая прогрессия</a>
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

<center><h1>Арифметическая прогрессия</h1></center>

<div class="borderright">
<h6 style="color: #007BFF;">Арифметическая прогрессия имеет вид:</h6>
	<p class="podskazka">
		(a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub> ... a<sub>n</sub>) или (2, 4, 6 ... 16)
	</p>
</div>

<center>
  <div class="buttons-link">
    <a href="#" class="btn btn-outline-success btn-lg hover-a">Найти n-й член прогрессии</a>
    <a href="arithmetic_progression_sum.php" class="btn btn-outline-success btn-lg">Найти сумму первых n членов прогрессии</a>
  </div>

  <p class="podskazka">Найти n-й член прогрессии:</p>
</center>

<form method="post" action="arithmetic_progression.php" class="form">
	<div class="form-group row">
    <label for="fora" class="col-sm-2 col-form-label">Значение a<sub>1</sub></label>
	    <div class="col-sm-10">
	    	<input type="text" name="a1" class="form-control" id="fora" placeholder="Enter a1">
	    </div>
	</div>

	<div class="form-group row">
    <label for="forb" class="col-sm-2 col-form-label">Значение a<sub>2</sub></label>
	    <div class="col-sm-10">
	    	<input type="text" name="a2" class="form-control" id="forb" placeholder="Enter a2">
	    </div>
	</div>

  <div class="form-group row">
    <label for="forn" class="col-sm-4 col-form-label">Какой член прог. найти? (n)</label>
      <div class="col-sm-8">
        <input type="text" name="n" class="form-control" id="forn" placeholder="Enter n">
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
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$n = $_POST['n'];

$d = $a2 - $a1;
$an = $a1 + $d * ($n - 1);

if ($d < 0) {
  $text = "Убывающая";
  $color = "blue";
} elseif ($d > 0) {
  $text = "Возрастающая";
  $color = "red";
} else {
  $text = "Стационарная";
  $color = "yellow";
}


# Ответ
echo <<<_END
<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">a<sub>$n</sub> = $an</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom text-font">Тип прогрессии - <<span style="color: $color;">$text</span>></h1>
</div>
_END;
?>
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
  <title>Геометрическая прогрессия | Математика</title>
  <meta name="description" content="Геометрическая прогрессия онлайн, просто и быстро!">
  <meta name="keywords" content="геометрическая прогрессия онлайн, геометрическая прогрессия">

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
      width: 90%;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }
    .hover-a {
      background-color: #17A2B8;
      color: white;
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
          <a class="dropdown-item" href="arithmetic_progression.php">Арифметическая прогрессия</a>
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

    <a href="../other_prog/calculator.php" class="btn btn-outline-primary my-2 my-sm-0 button-circle">
      Калькулятор <span style="color: #00ef00">online</span>
    </a>

  </div>
</nav>

<center><h1>Геометрическая прогрессия</h1></center>

<div class="borderright">
<h6 style="color: #007BFF;">Геометрическая прогрессия имеет вид:</h6>
  <p class="podskazka">
    (b<sub>1</sub>, b<sub>2</sub>, b<sub>3</sub> ... b<sub>n</sub>) или (2, 4, 8 ... 32)
  </p>
</div>


  <div class="buttons-link">
    <a href="#" class="btn btn-outline-info btn-lg hover-a btn-block">Найти n-й член прогрессии</a>
    <a href="geometric_progression_sum.php" class="btn btn-outline-info btn-lg btn-block">Найти сумму первых n членов прогрессии</a>
    <a href="geometric_progression_composition.php" class="btn btn-outline-info btn-lg btn-block">Найти произведение первых n членов прогрессии</a>
  </div>
  
<center>
  <p class="podskazka">Найти n-й член прогрессии:</p>
</center>

<form method="post" action="geometric_progression.php" class="form">
  <div class="form-group row">
    <label for="fora" class="col-sm-2 col-form-label">Значение b<sub>1</sub></label>
      <div class="col-sm-10">
        <input type="text" name="b1" class="form-control" id="fora" placeholder="Enter b1">
      </div>
  </div>

  <div class="form-group row">
    <label for="forb" class="col-sm-2 col-form-label">Значение b<sub>2</sub></label>
      <div class="col-sm-10">
        <input type="text" name="b2" class="form-control" id="forb" placeholder="Enter b2">
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
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$n = $_POST['n'];

$q = $b2/$b1;

$power = $n - 1;
$bn = $b1 * ($q**$power);

if ($q != 1 and $q < 1 and $q > 0) {
  $text = "Убывающая";
  $color = "blue";
} elseif ($q != 1 and $q > 1) {
  $text = "Возрастающая";
  $color = "red";
} elseif ($q == 1) {
  $text = "Стационарная";
  $color = "yellow";
} elseif ($q < 0) {
  $text = "Знакочередующиеся";
  $color = "green";
}


# Ответ
echo <<<_END
<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">b<sub>$n</sub> = $bn</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom text-font">Тип прогрессии - <<span style="color: $color;">$text</span>></h1>
</div>
_END;
?>
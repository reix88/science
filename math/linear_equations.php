<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Линейные уравнения | Математика</title>
  <meta name="description" content="Решить линейные уравнения онлайн, просто и быстро!">
  <meta name="keywords" content="линейные уравнения,линейные уравнения онлайн, решить линейные уравнения онлайн">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">

  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<script>
    function funcSuccess(data) {
      if ($("#text2").text() != '') {
        elText = $("#text2").text();
        elText = elText.replace(elText,data);
        $("#text2").text(elText); 
      } else {
        $("#text2").text(data);
      }
    }

    function Request_Ajax(click,val) {
      $(document).ready (function () {
        $(click).bind("click", function () {
        $.ajax({
         url: 'math.php',
         type: "POST",
         timeout: 2000,                     
         data:({val_x: $(val).val()}),
         dataType: "html",
         success:funcSuccess
          });
        });
      });
    }

    function Request_Ajax_num(click,val) {
      $(document).ready (function () {
        $(click).bind("click", function () {
        $.ajax({
         url: 'math.php',
         type: "POST",
         timeout: 2000,                     
         data:({val_num: $(val).val()}),
         dataType: "html",
         success:funcSuccess
          });
        });
      });
    }

    Request_Ajax('#enter','#x1')
    Request_Ajax('#enter','#x2')
    Request_Ajax('#enter','#x3')
    Request_Ajax('#enter','#x4')
    Request_Ajax('#enter','#x5')

    Request_Ajax_num('#enter','#num1')
    Request_Ajax_num('#enter','#num2')
    Request_Ajax_num('#enter','#num3')
    Request_Ajax_num('#enter','#num4')
    Request_Ajax_num('#enter','#num5')
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
          <a class="dropdown-item" href="#">Линейные уравнеия</a>
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

<center>
  <h1>Решение линейных уравнений</h1>
  <p class="podskazka">Введите Коэффициент перед Х:</p>
</center>

<form method="post" action="linear_equations.php">

	<div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">1-Коэффициент</label>
      <div class="col-sm-9">
        <input type="text" name="x1" class="form-control" id="x1" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">2-Коэффициент</label>
      <div class="col-sm-9">
        <input type="text" name="x2" class="form-control" id="x2" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">3-Коэффициент</label>
      <div class="col-sm-9">
        <input type="text" name="x3" class="form-control" id="x3" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">4-Коэффициент</label>
      <div class="col-sm-9">
        <input type="text" name="x4" class="form-control" id="x4" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">5-Коэффициент</label>
      <div class="col-sm-9">
        <input type="text" name="x5" class="form-control" id="x5" placeholder="Enter Number">
      </div>
  </div>

  <center>
    <p class="podskazka">Введите значения Свободного члена:</p>
  </center>

  <div class="borderright">
  <h6 style="color: #007BFF;">ВНИМАНИЕ:<br></h6>
    <p style="color: gray">
      Если какие-то из значений находятся после знака Равно "=", то их значения Отрицательное, то есть пишити перед ними знак Минус "-"!
    </p>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">1-Число</label>
      <div class="col-sm-9">
        <input type="text" name="1" class="form-control" id="num1" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">2-Число</label>
      <div class="col-sm-9">
        <input type="text" name="2" class="form-control" id="num2" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">3-Число</label>
      <div class="col-sm-9">
        <input type="text" name="3" class="form-control" id="num3" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">4-Число</label>
      <div class="col-sm-9">
        <input type="text" name="4" class="form-control" id="num4" placeholder="Enter Number">
      </div>
  </div>

  <div class="form-group row">
    <label for="fora" class="col-sm-3 col-form-label">5-Число</label>
      <div class="col-sm-9">
        <input type="text" name="5" class="form-control" id="num5" placeholder="Enter Number">
      </div>
  </div>

  <input class="btn btn-outline-success btn-lg" type="submit" value="Решить" id="enter">
  
</form>

<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
  <h1 class="display-4 margin-bottom">X = $answer_a</h1>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>


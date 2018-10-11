<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Квадратные уравнения | Математика</title>
  <meta name="description" content="Решить квадратные уравнения онлайн, просто и быстро!">
  <meta name="keywords" content="квадратные уравнения, квадратные уравнения онлайн, решить квадратные уравнения онлайн">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_math.css">

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
      a: $('#a').val(),
      b: $('#b').val(),
      c: $('#c').val()
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
          <a class="dropdown-item" href="system_of_linear_equations_3.php">Система линейных уравнений с 3 неизвестными</a>
          <a class="dropdown-item" href="#">Квадратые уравнения</a>
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
<div class="form">
<center><h1>Решение квадратных уравнений</h1></center>

<div class="borderright">
<h6 style="color: #007BFF;">Квадратное уравнение обычно имеет вид:<br></h3>
	<p class="podskazka">
		<font style="color: red;">a</font><sup>2</sup>x + <font style="color: green;">b</font>x + <font style="color: blue;">c</font> = 0
	</p>
</div>


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

  <input class="btn btn-outline-success btn-lg" id="enter" type="submit" value="Решить" style="margin-bottom:15px;">
</div>

<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>

<div class="jumbotron">
  <h1 class="display-5 margin-top">Ответ:</h1>
  <hr class="my-4">
<div id="done"></div>
</div>

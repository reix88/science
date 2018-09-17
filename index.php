<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Главная страница | Project One</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">

  <style>
    h5 {
      color: #007BFF;
    }
    .carousel {
      max-width: 700px;
      margin-bottom: 20px;
    }
    .group-fix {
      max-width: 700px;
    }
    h1 {
      margin-top: 18px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<center><h1 class="display-4">WELCOME!</h1></center>

<div id="carouselExampleFade" class="carousel slide carousel-fade mx-auto" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bg/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="group-fix mx-auto">
<div class="list-group">
  <a href="math/index.html" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">МАТЕМАТИКА</h5>
      <small style="color: red">New!</small>
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small>- Решение квадартных уравнений</small><br>
    <small>- Решение линейных уравнений и etc..</small>
  </a>

  <a href="computer_science/index.html" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">ИНФОРМАТИКА</h5>
      <small style="color: red">New!</small>
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small>- Кодирование текста в бинарный код</small><br>
    <small>- Раскодирование бинарного кода в текст и etc..</small>
  </a>

  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">ФИЗИКА</h5>
      <!--<small style="color: red">New!</small>-->
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small class="text-muted">- Неизвестно</small>
  </a>

  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">ХИМИЯ</h5>
      <!--<small style="color: red">New!</small>-->
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small class="text-muted">- Неизвестно</small>
  </a>

  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">ЭКОНОМИКА</h5>
      <!--<small style="color: red">New!</small>-->
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small class="text-muted">- Неизвестно</small>
  </a>

  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">КОТОВЕДЕНИЕ</h5>
      <small style="color: red">Top Secret!</small>
    </div>
    <p class="mb-1">Список возможностей:</p>
    <small class="text-muted">- Захват мира как клубка шерсти!!!</small>
  </a>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: red;"><img src="img/Achtung.svg" width="30">Ограниченный доступ<img src="img/Achtung.svg" width="30"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form lol kek cheburek>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Username:</label>
              <input type="email" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Password:</label>
              <input type="password" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Войти</button>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

<!-- Scripts! -->
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
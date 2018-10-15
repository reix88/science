<?php
require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Кодировать и декодировать | Информатика</title>
  <meta name="description" content="Кодировать бинарный код в текст, декодировать бинарный код в текст">
  <meta name="keywords" content="кодировать текст в бинарный код, bin code, bin, декодировать бинарный код в текст">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_compsci.css">

  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

  <style>
    .kek-lol {
      display: none;
      visibility: hidden;
    }
  </style>

  <script>
    function funcSuccess(data)
    {
    	if ($("#text2").val() != '') 
    	{
    		elText = $("#text2").val();
    		elText = elText.replace(elText,data);
    		$("#text2").val(elText); 
    	} else 
    	{
    		$("#text2").val(data);
    	}
    }  	
    function Request_Ajax(click,val) 
    {
    	$(document).ready (function () {
    		$(click).bind("click", function () {
    		$.ajax({
    		 url: 'hex_value.php',
    		type: "POST",                     
    		 data:({binary_c: $(val).val()}),
    		 dataType: "html",
    		 success:funcSuccess
    			});
    		});
    	});
    }
    Request_Ajax('#enter','#text1')
  </script>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="color: #007BFF;">#Информатика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Главная страница <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Выбрать уравнение
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Кодировать в бинарный код</a>
          <a class="dropdown-item" href="#">Декодировать бинарный код</a>
          <a class="dropdown-item" href="<?php echo BN; ?>">Десятичная система в двоичную</a>
          <a class="dropdown-item" href="<?php echo BNR; ?>">Двоичная система в десятичную</a>
          <a class="dropdown-item" href="<?php echo HN; ?>">Десятичная система в шестнадцатиричную</a>
          <a class="dropdown-item" href="<?php echo HNR; ?>">Шестнадцатиричная система в десятичную</a>

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

<center><h1>Кодировать и декодировать</h1></center>

<form name="bintext" class="form-row form-col">
  <div class="col col1">
    <p>Текст -></p>
    <textarea class="form-control" name="source" rows="5"></textarea>
    <p><button type="button" name="text2bin" class="btn btn-primary btn-lg btn-margin">Кодировать</button></p>
  </div>

  <div class="col col1">
    <p>-> Бинарный код</p>
    <textarea class="form-control" name="result" rows="5"></textarea>
    <p><button type="button" name="bin2text" class="btn btn-primary btn-lg btn-margin">Декодировать</button></p>
  </div>

  <input type="checkbox" name="rep_filled" class="kek-lol">
</form>

<script src="../js/bhd.min.js"></script>

<script>
  var source   = document.bintext.source,
      result   = document.bintext.result,
      t2b      = document.bintext.text2bin,
      b2t      = document.bintext.bin2text;

  rep_filled = document.bintext.rep_filled;

  t2b.onclick = function() {
      var bin = text2bin(source.value);

      if (rep_filled.checked) {
          bin = bin.replace(/0/ig, " ");
          result.value = bin.replace(/1/ig, "█");
      } else {
          result.value = bin;
      }
  }

  b2t.onclick = function() {
      if (rep_filled.checked) {
          var bin = result.value.replace(/ /ig, "0");
          source.value = bin2text(bin.replace(/█/ig, "1"));

      } else {
          source.value = bin2text(result.value);
      }
  }
</script>

<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
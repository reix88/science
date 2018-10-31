<?php
	define("DB_HOST", "localhost");
	define("USER_N", "lool");
	define("U_PASSWD", "1234");
	define("DB_NAME", "science");

	$conn = new mysqli(DB_HOST,USER_N,U_PASSWD,DB_NAME);

	function queryMysql($query) {
	    global $conn;
	    $result = $conn->query($query);
	    if (!$result) die($conn->error);
	    return $result;
  	}

	$result=queryMysql("SELECT * FROM lenta ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Science | Решай базовые задачи по основным техническим наукам онлайн</title>
	<meta name="description" content="Помогаем решить задачи по математике, физике, информатике, химии и экономике!">
	<meta name="keywords" content="The Sci, The Science, Решить задачи онлайн, Решить задачи по математики, Решить задачи по физике, Решить задачи по информатике, Решить задачи по химии, Решить задачи по экономике, решить онлайн, наука">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/chat-slide-menu/right-nav-style.css">

    <link rel="shortcut icon" type="text/css" href="favicon.ico">
  	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<style>
		html,
		body {
			width: 100%;
    		height: 100%;
		}
		::-webkit-scrollbar {
		    display: none
		}
		h1 {
	    	margin-top: 18px;
	    	margin-bottom: 20px;
	    	font-weight: 400;
	    }
	    small {
        	color: green;
    	}
    	iframe {
      		border: none;
    	}
	    .gray-coloud {
	    	color: gray;
	    	font-size: 22px;
	    	margin-top: -20px;
	    	margin-bottom: 10px;
	    }
	    @media (max-width: 460px) {
	    	.gray-coloud {
	    		font-size: 18px;
	    	}
	    	h1 {
	    		font-size: 15px;
	    	}
	    }
	</style>

	<script type="text/javascript" src="js/holder.js"></script>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<!-- Chat -->
<input type="checkbox" id="nav-toggle" hidden>
<nav class="nav">
	<label for="nav-toggle" class="nav-toggle" onclick><span class="text-chat">ЧАТ</span></label>

	<iframe src="chat/index.php" align="left">
    	Ваш браузер не поддерживает плавающие фреймы!
 	</iframe>
</nav>
<!-- End -->

<main role="main">
	<!-- <article> При открытие меню - содержимое будет сдвигаться -->
	<!-- Menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<a class="navbar-brand" href="#" style="color: #007BFF; font-weight: 600;">THE SCIENCE</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="math/index.php" class="nav-link" style="color: #f93b3b;">АЛГЕБРА</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" style="color: #4AB8FF;">ГЕОМЕТРИЯ</a>
				</li>
				<li class="nav-item">
					<a href="computer_science/index.php" class="nav-link" style="color: #A024E2;">ИНФОРМАТИКА</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" style="color: #434CF9;">ФИЗИКА</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" style="color: #58FF4C;">ХИМИЯ</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" style="color: #FFDE23;">ЭКОНОМИКА</a>
				</li>
	    	</ul>
		</div>
	</nav>

	<center>
		<h1 class="display-4">The Science</h1>
		<h2 class="display-4 gray-coloud">Сайт, который решит за вас все задачи</h2>
	</center>

	<!-- Album -->
	<div class="album py-5">
    	<div class="container">
			<div class="row">
		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="math/index.php">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=f93b3b&fg=eceeef&text=АЛГЕБРА" alt="Card image cap">
		            </a>

		            <div class="card-body">
		             	<p class="card-text">Решение уравнений, систем уравнений, прогрессий и etc..</p>
		                <span class="badge badge-pill badge-danger" style="height: 20px; float: right;">New!</span>
		            </div>
		          </div>
		        </div>

		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="#">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=4ab8ff&fg=eceeef&text=ГЕОМЕТРИЯ" alt="Card image cap">
		            </a>

		            <div class="card-body">
		              <p class="card-text">[Coming soon]</p>
		            </div>
		          </div>
		        </div>

		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="computer_science/index.php">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=a024e2&fg=eceeef&text=ИНФОРМАТИКА" alt="Card image cap">
		            </a>

		            <div class="card-body">
		              <p class="card-text">Кодирование в бинарный код, перевод в разные системы счисления, etc...</p>
		              <span class="badge badge-pill badge-danger" style="height: 20px; float: right;">New!</span>
		            </div>
		          </div>
		        </div>

		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="#">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=434cf9&fg=eceeef&text=ФИЗИКА" alt="Card image cap">
		            </a>

		            <div class="card-body">
		              <p class="card-text">[Coming soon]</p>
		              <!--<span class="badge badge-pill badge-danger" style="height: 20px; float: right;">New!</span>-->
		            </div>
		          </div>
		        </div>

		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="#">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=58ff4c&fg=eceeef&text=ХИМИЯ" alt="Card image cap">
		            </a>

		            <div class="card-body">
		              <p class="card-text">[Coming soon]</p>
		              <!--<span class="badge badge-pill badge-danger" style="height: 20px; float: right;">New!</span>-->
		            </div>
		          </div>
		        </div>

		        <div class="col-md-4">
		          <div class="card mb-4 shadow-sm">
		          	<a href="#">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=ffde23&fg=eceeef&text=ЭКОНОМИКА" alt="Card image cap">
		            </a>

		            <div class="card-body">
		              <p class="card-text">[Coming soon]</p>
		              <!-- <span class="badge badge-pill badge-danger" style="height: 20px; float: right;">New!</span> -->
		            </div>
		          </div>
		        </div>
			</div>
	<!-- End -->

	<!-- News -->
	<center><h1 style="margin-bottom: 40px;">Новости</h1></center>
	<div class="row mb-2">
	<?php foreach ($result as $value): ?>
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 shadow-sm h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-primary"><?php echo $value['category']; ?></strong>
					<h3 class="mb-0">
					<span class="text-dark"><?php echo $value['header']; ?></span>
					</h3>
					<div class="mb-1 text-muted"><?php echo $value['date']; ?></div>
					<p class="card-text mb-auto"><?php echo $value['text']; ?></p>
					<?php echo $value['link']; ?>
				</div>
				<?php echo '<img class="" src="lenta/uploads/'.$value['headername'].'/'.$value['headername'].'.jpg" alt="'.$value['headername'].'">'; ?>
			</div>
		</div>
	<?php endforeach;?>
	</div>
	<!-- End News -->
    	</div>
  </div>

<!-- </article> -->
</main>

<!--Scripts -->
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- End -->
</body>
</html>
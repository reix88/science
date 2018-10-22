<?php
	session_start();
	if (isset($_POST['delete']) && isset($_POST['id']) && isset($_SESSION['admin'])) 
	{
		$id=fix_String($_POST['id']);
		queryMysql("DELETE FROM chat WHERE id='$id'");
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Science | Решай базовые задачи по основным техническим наукам онлайн</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">

	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<style type="text/css">
		html,
		body {
			width: 100%;
			height: auto;
			max-width: 320px;
		}
		::-webkit-scrollbar {
		    display: none
		}
		.form-class {
			margin-top: 60px;
			margin-left: 1%;
			margin-right: 1%;
		}
		.delete-btn {
			float: left;
			max-width: 100px;
			min-width: 80px;
		}
		.ava {
			width: 60px;
			height: auto;
			margin: 0px;
			border-radius: 200px;
		}
		.chat-text {
			font-size: 34px;
			font-weight: 400;
		}
		.text-span {
			font-size: 20px;
			font-weight: 400;	
		}
		.nav-toggle {
		    position: absolute;
		    right: 0px;
		    top: 0em;
		    padding: 0.5em;
		    background: #4AB8FF;
		    color: white;
		    cursor: pointer;
		    font-size: 1.4em;
		    line-height: 1;
		    z-index: 2001;
		    border-radius: 0px 0px 0px 10px;
		}
		.nav-toggle:hover {
		    color: #e5e5e5;
		}
		/* .form-shadow {
			box-shadow: -3px 0px 10px rgba(100, 100, 100, 0.4);
		    -moz-box-shadow: -3px 0px 10px rgba(100, 100, 100, 0.4);
		    -webkit-box-shadow: -3px 0px 10px rgba(100, 100, 100, 0.4);
		} */
	</style>

	<script>
		function funcSend() {
	      $('#load').append('<img src="img/loader/6.gif" style="width:250px; height:128px;">');
	    }
	    function funcComplete() {
	      $('#load').remove();                              
	    }
	    function funcSuccess(data) {
	    	elText = $("#body")
	    	elText.remove()
	    	$('#done').html(data);
	    }
	    function funcReset(data) {
	    	elText = $("#body")
			elText.html(data);
		}
		$(document).ready (function () {
	        $('#enter').bind("click", function () {
	       	 $.ajax({
		         url: 'scripts/update_chat.php',
		         type: "POST",
		         data:({
		          author : $('#username').val(),
		          text : $('#text').val()
	        	}),
		         dataType: "html",
		         beforeSend: funcSend,
		         complete: funcComplete,
		         success:funcSuccess
	          	});
	        });
	     });
		$(document).ready (function () {
		  	$.ajax({
			         url: 'scripts/update_chat.php',
			         dataType: "html",
			         beforeSend: funcSend,
			         complete: funcComplete,
			         success:funcReset
		    });
		});
	</script>
</head>
<body class="bg-light">
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<div class="navbar">
    <a href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-toggle"><i class="fas fa-sign-in-alt"></i></a>
	<div class="dropdown-menu dropdown form-shadow" style="width: 290px; margin-top: 32px; margin-left: 4px;">
	  <form action="../scripts/verify.php" method="post" class="px-4 py-3">
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
          		<span class="input-group-text">@</span>
        	</div>
	    	<input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="username" name="username">
	    </div>
	    <div class="form-group">
	      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Пароль" name="passwd">
	    </div>
	    <button type="submit" class="btn btn-primary" style="float: right;">Войти</button>
	  </form>
	</div>
</div>

<div class="form-class">
	<center><p class="text-span">Введите сообщение</p><hr></center>
	<?php if (!isset($_SESSION['admin'])):?>
		<div class="form-label-group" style="margin-bottom: 10px;">
	      	<div class="input-group">
	        	<div class="input-group-prepend">
	          		<span class="input-group-text">@</span>
	        	</div>
	        	<input type="text" class="form-control" id="username" name="username" placeholder="username" required="" maxlength="15">
	    	</div>
	    </div>
	<?php endif;?>
	<textarea class="form-control textarea" rows="3" name="post" placeholder="Начните вводить текст..." id="text"></textarea>
	<button type="submit" class="btn btn-outline-info" style="margin-top: 10px; height: 40px; margin-left: 64%;" id="enter" name="enter">Отправить</button>

	<hr class="my-4">
</div>

<center>
	<span class="chat-text">CHAT</span>
</center>

<fieldset>		
	<div id="load">
		
	</div>
	<div id="done">
	
	</div>
	<div id="body">

	</div>
</fieldset>

<!-- Scripts! -->
	<script src="../js/bootstrap.min.js"></script>
<!-- END -->

</body>
</html>
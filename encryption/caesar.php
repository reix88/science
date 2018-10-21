<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ceaser Sipher</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
	.container {
		max-width: 520px;
		padding: 15px 0px 15px 0px;
		width: 92%;
	}
	</style>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	
	<script type="text/javascript">
		
    function funcSuccess(data) {
      if ($("#done").text() != '') {
        elText = $("#done").html();
        elText = elText.replace(elText,data);
        $("#done").html(elText);
      } else {
        $("#done").html(data);
      }
    }
    function funcFixString (input){
      $(document).ready (function () {
        $(input).bind("blur",function () {
          inputBlur = $(input).val()
			if (Number(inputBlur))
			{
				$(input).css({
					'border':'1px solid green'
				});
          	}else {
				$(input).css({
					'border':'1px solid red'
				});
			}
        });
      });
    }
		funcFixString('#shift');
		function CeaserShipher (obj) {
			alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".toLowerCase(),
			otherCharacters = '-=~\"\'#$%&*^:<>?/!{(|)}.1234567890\, \\',
			OUTPUT = "",
			STRING = "",
			shiftAmount= "",
			ShiftedAlphabet = "";
			if (typeof obj === "object") {
				shiftAmount = obj.shift;
				STRING = obj.msg.toLowerCase();
			}else {
				return;
			}
			if (typeof STRING === "string" || typeof(STRING + "") === "string") {
				ShiftedAlphabet = alphabet.slice(shiftAmount)
				ShiftedAlphabet += alphabet.slice(0,shiftAmount)
				ShiftedAlphabet += otherCharacters;
				alphabet += otherCharacters
				for (var i = 0 ; i < STRING.length;  i++) {
					var NUMBER = alphabet.indexOf(STRING[i])

					OUTPUT += ShiftedAlphabet[NUMBER]
				}
			}else {
				return;
			}
			return OUTPUT;
		}
      $(document).ready (function () {
        $('#enter').bind("click", function () {
        	$('#done').text( CeaserShipher ({ 
        		msg : $('#text').val(),
        		shift : $('#shift').val() 
        	}));
        });
      });
	</script>
</head>
<body class="bg-light">
<div class="container">
	<div class="mb-3">
		<textarea type="text" class="form-control" id="text" placeholder="Введите текст" rows="5"></textarea>
	</div>
	<div class="mb-3">
		<input type="text" class="form-control" id="shift" placeholder="Введите сдвиг">
	</div>
	<button class="btn btn-outline-danger" id="enter">Зашифровать</button>
	<hr class="my-4">

	<div class="jumbotron">
		<h3 class="">Ответ:</h1>
		<hr class="my-4">
		<div id="done"> </div>
	</div>
</div>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
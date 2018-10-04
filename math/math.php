<?php
if (isset($_POST['x1']) && isset($_POST['x2']) && isset($_POST['x3']) && isset($_POST['x4']) && isset($_POST['x5']) &&
isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])) 
{

	$x1 = $_POST['x1'];
	$x2 = $_POST['x2'];
	$x3 = $_POST['x3'];
	$x4 = $_POST['x4'];
	$x5 = $_POST['x5'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$num5 = $_POST['num5'];

		$answer_x = $x1 + $x2 + $x3 + $x4 + $x5;
		$answer_n = $num1 + $num2 + $num3 + $num4 + $num5;
		$answer_a = $answer_n / $answer_x;
		
		echo "<h1 class='display-4 margin-bottom'>X = ".$answer_a."</h1>";

}
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) 
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	if ($a == 0 xor $b == 0) {
		echo "<center><h4 style='color: red'>Это не квадратное уравнение!</h4></center><br>";
	} else 
	{
		$d = ($b*$b) - 4*($a*$c);
	}

	if ($d > 0) {
		$x1 = (($b * -1) + sqrt($d)) / (2*$a);
		$x2 = (($b * -1) - sqrt($d)) / (2*$a);
		echo  "<h1 class='display-4 margin-bottom'>X1 = ".$x1."</h1><h1 class='display-4 margin-bottom'>X2 = ".$x2."</h1>";
	} elseif ($d == 0) {
		$x1 = (($b * -1) / (2*$a));
		echo  "<h1 class='text-secondary display-4 margin-bottom'>X1 = ".$x1."</h1>";
	} else {
		echo "<center><h4 style='color: red'>Квадратное Уравнение не имеет решения!</h4></center><br>";
	}
	
}
if (isset($_POST['a1']) && isset($_POST['b1']) && isset($_POST['c1']) && 
	isset($_POST['a2']) && isset($_POST['b2']) && isset($_POST['c2'])) 
{
	# Значения из 1-го Ур.
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];

	# Значения из 2-го Ур.
	$a1 = $_POST['a1'];
	$b1 = $_POST['b1'];
	$c1 = $_POST['c1'];

	# Решение
	$x = ($b1*$c - $b*$c1) / ($a*$b1 - $a1*$b);
	$y = ($a*$c1 - $a1*$c) / ($a*$b1 - $a1*$b);
	
	echo "<h1 class='display-4 margin-bottom'>X = ".$x."</h1> <h1 class='display-4 margin-bottom'>Y = ".$y."</h1>";
}
?>
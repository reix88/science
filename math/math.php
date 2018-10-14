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
	} else {
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
if ( isset($_POST['a1']) && isset($_POST['a2']) && isset($_POST['n'])) 
{

	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$n = $_POST['n'];

	$d = $a2 - $a1;
	$an = $a1 + $d * ($n - 1);
	echo '<h1 class="display-4 margin-bottom">a '.'<sub>'.$n.'</sub> ='.$an.'</h1>';
    echo '<hr class="my-4">';
   	if ($d < 0) 
	{
	  $text = "Убывающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:blue;"><'.$text.'></span></h1>';
	} elseif ($d > 0) 
	{
	  $text = "Возрастающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:red;"><'.$text.'></span></h1>';
	} else 
	{
	  $text = "Стационарная";
 	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:yellow;"><'.$text.'></span></h1>';
	}
}
if ( isset($_POST['a3']) && isset($_POST['a4']) && isset($_POST['n'])) 
{
	$a1 = $_POST['a3'];
	$a2 = $_POST['a4'];
	$n = $_POST['n'];

	$d = $a2 - $a1;
	$an = $a1 + $d * ($n - 1);

	$ansum = (($a1 + $an) * $n)/2;
	echo '<h1 class="display-4 margin-bottom">S '.'<sub>'.$n.'</sub> ='.$ansum.'</h1>';
    echo '<hr class="my-4">';

   	if ($d < 0) 
	{
	  $text = "Убывающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:blue;"><'.$text.'></span></h1>';
	} elseif ($d > 0) 
	{
	  $text = "Возрастающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:red;"><'.$text.'></span></h1>';
	} else 
	{
	  $text = "Стационарная";
 	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:yellow;"><'.$text.'></span></h1>';
	}
}
if ( isset($_POST['b1']) && isset($_POST['b2']) && isset($_POST['n'])) 
{
	$b1 = $_POST['b1'];
	$b2 = $_POST['b2'];
	$n = $_POST['n'];

	$q = $b2/$b1;

	$power = $n - 1;
	$bn = $b1 * ($q**$power);
	echo '<h1 class="display-4 margin-bottom">b '.'<sub>'.$n.'</sub> ='.$bn.'</h1>';
    echo '<hr class="my-4">';
	
	if ($q != 1 and $q < 1 and $q > 0) 
	{
	  $text = "Убывающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:blue;"><'.$text.'></span></h1>';
	} elseif ($q != 1 and $q > 1) 
	{
	  $text = "Возрастающая";
 	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:red;"><'.$text.'></span></h1>';
	} elseif ($q == 1) 
	{
	  $text = "Стационарная";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:yellow;"><'.$text.'></span></h1>';
	} elseif ($q < 0)
	{
	  $text = "Знакочередующиеся";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:green;"><'.$text.'></span></h1>';
	} 
}
if ( isset($_POST['b3']) && isset($_POST['b4']) && isset($_POST['n']))
{
	$b1 = $_POST['b3'];
	$b2 = $_POST['b4'];
	$n = $_POST['n'];

	$q = $b2/$b1;

	$power = $n - 1;
	$bn = $b1 * ($q**$power);

	if ($q != 1 and $q < 1 and $q > 0) 
	{
	  $text = "Убывающая";
	  $sum_n = ($b1 - ($bn * $q))/(1 - $q);
	  echo '<h1 class="display-4 margin-bottom">S '.'<sub>'.$n.'</sub> ='.$sum_n.'</h1>';
      echo '<hr class="my-4">';
      echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:blue;"><'.$text.'></span></h1>';
	} elseif ($q != 1 and $q > 1) 
	{
	  $text = "Возрастающая";
	  $sum_n = (($bn * $q) - $b1)/($q - 1);
	  echo '<h1 class="display-4 margin-bottom">S '.'<sub>'.$n.'</sub> ='.$sum_n.'</h1>';
      echo '<hr class="my-4">';
      echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:red;"><'.$text.'></span></h1>';
	} elseif ($q == 1) 
	{
	  $text = "Стационарная";
	  $sum_n = $n * $b1;
	  echo '<h1 class="display-4 margin-bottom">S '.'<sub>'.$n.'</sub> ='.$sum_n.'</h1>';
      echo '<hr class="my-4">';
      echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:yellow;"><'.$text.'></span></h1>';
	} elseif ($q < 0) {
	  $text = "Знакочередующиеся";
	  $sum_n = (($bn * $q) - $b1)/($q - 1);
	  echo '<h1 class="display-4 margin-bottom">S '.'<sub>'.$n.'</sub> ='.$sum_n.'</h1>';
      echo '<hr class="my-4">';
      echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:green;"><'.$text.'></span></h1>';
	}
}
if ( isset($_POST['b5']) && isset($_POST['b6']) && isset($_POST['n']))
{
	$b1 = $_POST['b5'];
	$b2 = $_POST['b6'];
	$n = $_POST['n'];

	$q = $b2/$b1;

	$power = $n - 1;
	$bn = $b1 * ($q**$power);
	$sum_p = ($b1 * $bn) ** ($n/2);
	echo '<h1 class="display-4 margin-bottom">P '.'<sub>'.$n.'</sub> ='.$sum_p.'</h1>';
    echo '<hr class="my-4">';
	if ($q != 1 and $q < 1 and $q > 0) {
	  $text = "Убывающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:blue;"><'.$text.'></span></h1>';
	} elseif ($q != 1 and $q > 1) {
	  $text = "Возрастающая";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:red;"><'.$text.'></span></h1>';
	} elseif ($q == 1) {
	  $text = "Стационарная";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:yellow;"><'.$text.'></span></h1>';
	} elseif ($q < 0) {
	  $text = "Знакочередующиеся";
	  echo '<h1 class="display-4 margin-bottom text-font">Тип прогрессии - <span style="color:green;"><'.$text.'></span></h1>';
	}
}
if (isset($_POST['a11']) && isset($_POST['b11']) && isset($_POST['d11']) && isset($_POST['c11']) && isset($_POST['a12']) &&
isset($_POST['b12']) && isset($_POST['d12']) && isset($_POST['c12']) && isset($_POST['a13']) && isset($_POST['b13']) &&
isset($_POST['d13']) && isset($_POST['c13']))
{
	$a1 = $_POST['a11'];
	$b1 = $_POST['b11'];
	$d1 = $_POST['d11'];
	$c1 = $_POST['c11'];

	$a2 = $_POST['a12'];
	$b2 = $_POST['b12'];
	$d2 = $_POST['d12'];
	$c2 = $_POST['c12'];

	$a3 = $_POST['a13'];
	$b3 = $_POST['b13'];
	$d3 = $_POST['d13'];
	$c3 = $_POST['c13'];

	$denominator = $a1 * $b2 * $c3 + $b1 * $c2 * $a3 + $c1 * $a2 * $b3 - $c1 * $b2 * $a3 - $a1 * $c2 * $b3 - $b1 * $a2 * $c3;
	$numerator_x = $d1 * $b2 * $c3 + $b1 * $c2 * $d3 + $c1 * $d2 * $b3 - $c1 * $b2 * $d3 - $d1 * $c2 * $b3 - $b1 * $d2 * $c3;
	$numerator_y = $a1 * $d2 * $c3 + $d1 * $c2 * $a3 + $c1 * $a2 * $d3 - $c1 * $d2 * $a3 - $a1 * $c2 * $d3 - $d1 * $a2 * $c3;
	$numerator_z = $a1 * $b2 * $d3 + $b1 * $d2 * $a3 + $d1 * $a2 * $b3 - $d1 * $b2 * $a3 - $a1 * $d2 * $b3 - $b1 * $a2 * $d3;

	$x = ($numerator_x)/($denominator);
	$y = ($numerator_y)/($denominator);
	$z = ($numerator_z)/($denominator);

	echo '<h1 class="display-4 margin-bottom">X = '.$x.'</h1>';
	echo '<h1 class="display-4 margin-bottom">Y = '.$y.'</h1>';
	echo '<h1 class="display-4 margin-bottom">Z = '.$z.'</h1>';

 	if ($denominator == 0 and $numerator_x == 0 and $numerator_y == 0 and $numerator_z == 0) 
 	{
	  $text = "Система имеет бесчисленное множество решений!";
	  echo '<h1 class="display-4 margin-bottom"><span style="color: red;">'.$text.'</span></h1>';
	}
	if ($denominator == 0 and $numerator_x != 0 and $numerator_y != 0 and $numerator_z != 0) 
	{
	  $text = "Система не имеет решений!";
	  echo '<h1 class="display-4 margin-bottom"><span style="color: red;">'.$text.'</span></h1>';
	}
}
if (isset($_POST['a_f']) && isset($_POST['b_f']) && isset($_POST['c_f'])) 
{
	$a = $_POST['a_f'];
	$b = $_POST['b_f'];
	$c = $_POST['c_f'];

	# Проверки
	if ($a == 0 xor $b == 0) {
		echo "<center><h4 style='color: red'>Это не квадратное уравнение!</h4></center><br>";
	} else {
		# Дискриминант
		$d = ($b*$b) - 4*($a*$c);
	}

	if ($d > 0) {
		# Корни
		$x1 = (($b * -1) + sqrt($d)) / (2*$a);
		$x2 = (($b * -1) - sqrt($d)) / (2*$a);

		  echo '<h1 class="display-4 margin-bottom">'.$a.'(x - ('.$x1.'))(x - ('.$x2.'))</h1>';
	} elseif ($d == 0) {
		$x1 = (($b * -1) / (2*$a));
	} else {
		echo "<center><h4 style='color: red'>Квадратное Уравнение не имеет решения!</h4></center><br>";
	}
}
if (isset($_POST['a31']) && isset($_POST['b31'])) 
{
	$a = $_POST['a31'];
	$b = $_POST['b31'];

	$m = $a * $b;

	while ($a != 0 and $b != 0) {
	  if ($a > $b) {
	    $a %= $b;
	  } else {
	    $b %= $a;
	  }
	}

	$lcm = $m / ($a + $b);
	echo '<h1 class="display-4 margin-bottom">НОК для A и B = '.$lcm.'</h1>';
}
if (isset($_POST['a21']) && isset($_POST['b21'])) 
{
	$a = $_POST['a21'];
	$b = $_POST['b21'];

	while ($a != $b) 
	{
	  if ($a > $b) 
	  {
	    $a = $a - $b;
	  } else 
	  {
	    $b = $b - $a;
	  }
	}
	
	echo  '<h1 class="display-4 margin-bottom">НОД для A и B = '.$a.'</h1>';
}
?>
<?php
if (isset($_POST['number']) || isset($_POST['result']) || isset($_POST['squad']) || isset($_POST['sqrt'])) {

	$sqrt = $_POST['sqrt'];
	$squad = $_POST['squad'];
	$result = $_POST['result'];
	$num = $_POST['number'];
	
	$plus = strpos($result, '+'); 
	$pow = strpos($result, '^'); 
	$minus = strpos($result, '-'); 
	$divided = strpos($result, '/'); 
	$multipilied = strpos($result, '*');

	if ($plus>0) {
		$one_p = substr($result,0,$plus);
		$two_p = substr($result,$plus+1);
		$answer_p = $one_p+$two_p;
		echo $answer_p;
	} elseif ($minus>0) {
		$one_m =substr($result,0,$minus);
		$two_m = substr($result,$minus+1);
		$answer_m = $one_m-$two_m;
		echo $answer_m;
	} elseif ($pow>0) {
		$one_pow =substr($result,0,$pow);
		$two_pow = substr($result,$pow+1);
		$answer_pow = pow($one_pow, $two_pow);
		echo $answer_pow;
	} elseif ($divided>0) {
		$one_d =substr($result,0,$divided);
		$two_d = substr($result,$divided+1);
		$answer_d = $one_d/$two_d;
		echo $answer_d;
	} elseif ($multipilied>0) {
		$one_mu = substr($result,0,$multipilied);
		$two_mu = substr($result,$multipilied+1);
		$answer_mu = $one_mu*$two_mu;
		echo $answer_mu;
	} elseif (empty($num) && empty($result) && empty($squad) && empty($sqrt)) {
		echo "Вы нечего не ввели !";
	} elseif (!empty($squad)) {
		$answer_squad = pow($squad,2);
		echo $answer_squad;
	} elseif (!empty($sqrt)) {
		$answer_sqrt = sqrt($sqrt);
		echo $answer_sqrt;	
	} else {
		echo $num;
	}
}

?>
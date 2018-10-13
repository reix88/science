<?php
if (isset($_POST['number']) || isset($_POST['result']) || isset($_POST['squad']) || 
	isset($_POST['sqrt']) || isset($_POST['clear']) || isset($_POST['factorial']) || isset($_POST['procent'])) 
{
	function factorial ($n) 
	{	
		if ($n <= 0) return 1 ;
		return $n * factorial ($n-1);
	}

	$sqrt = $_POST['sqrt'];
	$squad = $_POST['squad'];
	$result = $_POST['result'];
	$num = $_POST['number'];
	$clear = trim($_POST['clear']);
	$factorial = $_POST['factorial'];
	$procent = $_POST['procent'];

	$plus = strpos($result, '+'); 
	$pow = strpos($result, '^'); 
	$minus = strpos($result, '-'); 
	$divided = strpos($result, '/'); 
	$multipilied = strpos($result, '*');
	$if_procent = strpos($procent,'*');

	if ($plus>0) 
	{
		$one_p = substr($result,0,$plus);
		$two_p = substr($result,$plus+1);
		$answer_p = $one_p+$two_p;
		echo $answer_p;
	}
	elseif ($minus>0) 
	{
		$one_m =substr($result,0,$minus);
		$two_m = substr($result,$minus+1);
		$answer_m = $one_m-$two_m;
		echo $answer_m;
	}
	elseif ($pow>0) 
	{
		$one_pow =substr($result,0,$pow);
		$two_pow = substr($result,$pow+1);
		$answer_pow = pow($one_pow, $two_pow);
		echo $answer_pow;
	}
	elseif ($divided>0) 
	{
		$one_d =substr($result,0,$divided);
		$two_d = substr($result,$divided+1);
		$answer_d = $one_d/$two_d;
		echo $answer_d;
	}
	elseif ($multipilied>0) 
	{
		$one_mu = substr($result,0,$multipilied);
		$two_mu = substr($result,$multipilied+1);
		$answer_mu = $one_mu*$two_mu;
		echo $answer_mu;
	}
	elseif (!isset($num) && empty($result) && empty($squad) && empty($sqrt) && 
		empty($clear) && empty($factorial) && empty($procent)) 
	{
		echo "Вы нечего не ввели !";
	}elseif (!empty($squad)) 
	{
		$answer_squad = pow($squad,2);
		echo $answer_squad;
	}elseif (!empty($sqrt)) 
	{
		$answer_sqrt = sqrt($sqrt);
		echo $answer_sqrt;	
	}elseif (!empty($clear)) 
	{
		$del_int = substr($clear,0,-1);
		echo $del_int;
	}elseif (!empty($factorial)) 
	{
		$res_factorial = factorial($factorial);
		echo $res_factorial ;
	}elseif ($if_procent != 0) 
	{
		$one_procent = substr($procent,0,$if_procent);
		$two_procent = substr($procent,$if_procent+1);
		$answer_procent = $one_procent*$two_procent/100;
		echo $answer_procent;
	}
	elseif (!empty($procent) && $if_procent == 0) 
	{
		$answer_procent_2 = $procent/100;
		echo $answer_procent_2;	
	}
	else 
	{
		echo $num;
	}
}
?>
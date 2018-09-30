<?php
if (isset($_POST['val_x']) && isset($_POST['val_num'])) {
	$val_x = $_POST['val_x'];
	$val_num = $_POST['val_num'];

	if (!empty($val_x) && !empty($val_num)) {
		$answer_x = $val_x + $val_x + $val_x + $val_x + $val_x;
		$answer_n = $val_num + $val_num + $val_num + $val_num + $val_num;
		$answer_a = $answer_n / $answer_x;
		
		echo $answer_a;
	}
}
?>
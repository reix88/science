<?php
if (isset($_POST['dec'])||isset($_POST['hex'])||isset($_POST['binary_c'])||isset($_POST['binary_r'])||isset($_POST['dec_bin'])||isset($_POST['dec_bin_r'])) {

	$dec_bin = $_POST['dec_bin'];
	$dec_bin_r = $_POST['dec_bin_r'];
	$binary_r = $_POST['binary_r'];
	$binary_c = $_POST['binary_c'];
	$hex1 = $_POST['hex'];
	$dec = $_POST['dec'];

	if (!empty($dec)) {
		$hex = dechex($dec);
		echo $hex;
	} elseif (!empty($hex1)) {
		$dec_r = hexdec($hex1);
		echo $dec_r;
	} elseif (!empty($binary_c)) {
		for($i = 0; $i < strlen($binary_c); $i++){
        	$res .= decbin(ord($binary_c[$i]));
		}
		echo $res;
	} elseif (!empty($binary_r)) {
		$bins = str_split($binary_r, 8);
		$len = count($bins);

		foreach($bins as $item) {
		        $item = bindec($item);
		        $textarray[] = chr($item);
		}
		echo implode($textarray);
	} elseif (!empty($dec_bin)) {
		$bin = decbin($dec_bin);
		echo $bin;
	} elseif (!empty($dec_bin_r)) {	
		$bin_r = bindec($dec_bin_r);
		echo $bin_r;
	}
}

?>
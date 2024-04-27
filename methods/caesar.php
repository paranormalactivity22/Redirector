<?php
function caesarShift($string, $key) {
	if ($key < 0) {
		return caesarShift($string, $key + 26);
	}
	$output = [];
	for ($i = 0; $i < strlen($string); $i++) {
		$c = $string[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($string[$i]);
			if ($code >= 65 && $code <= 90) 
				$c = chr((($code - 65 + $key) % 26) + 65);
			elseif ($code >= 97 && $code <= 122) 
				$c = chr((($code - 97 + $key) % 26) + 97);
		}
		$output[] = $c;
	}
	return implode('', $output);
}
?>
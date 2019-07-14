<?php
	// 値渡しの場合
	function square($num){
		$num = $num * $num;
		return $num;
	}

	$a = 4;
	$ans = square($a);
	print $a."の2乗は".$ans."<br>";

	// 参照渡しの場合
	function square2(&$num){
		$num = $num * $num;
		return $num;
	}

	$a = 4;
	$ans = square2($a);
	print $a."の2乗は".$ans."<br>";
 ?>
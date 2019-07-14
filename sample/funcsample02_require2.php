<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			require_once("funcsample02_require2_sub.php");
			$num = 9999999999999;
			$num = twice($num);
			print $num;
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			$num = 3;
			function twice(){
				global $num;		// グローバル変数
				$num = $num * 2;
			}
			twice();
			print $num;
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>ファイル操作</title>
	</head>
	<body>
		<?php
			// ファイルに文字列を書き込み
			$str = "php";
			$f_pt = fopen('filesample01.txt','a+');
			fputs($f_pt,$str);
			fclose($f_pt);
		?>
	</body>
</html>
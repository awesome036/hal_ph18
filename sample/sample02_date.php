<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			print date("Y")."<br>";
			print date("今日はY年n月j日")."<br>";
			print date("Y年n月j日",mktime(0,0,0,5,16,1991))."<br>";
			print date("Y年m月d日H時i分s秒\n",time())."<br>";
		?>
	</body>
</html>

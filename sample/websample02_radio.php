<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>ラジオボタンのテスト</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			/* ラジオボタンから送られてきた値を出力 */
			$seibetsu = $_POST["gender"];
			print "性別：".$seibetsu."<br>\n";
		?>
	</body>
</html>
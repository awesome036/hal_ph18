<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>レコード挿入</title>
	</head>
	<body>
		<?php
			// データベースへの接続
			$con = mysqli_connect("localhost","root","");

			// 文字コードの指定
			mysqli_set_charset($con,"utf8");

			// データベースの指定
			mysqli_select_db($con,"ph18_test");

			// 実行するSQL文
			$sql = "INSERT INTO member VALUES(4,'おおさわ',21)";

			// SQLを実行する
			mysqli_query($con,$sql);

			// データベース接続終了
			mysqli_close($con);
		?>
	</body>
</html>
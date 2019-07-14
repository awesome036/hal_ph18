<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一覧表示</title>
		<style type="text/css">
			.button {
				border: solid 1px #000;
				background: #eee;
				font-size: 80%;
				padding: 0 3px;
				margin-left: 3px;
			}
			.button:hover {
				background: #fefeff;
				border-color: #33f;
			}
		</style>
	</head>
	<body>
		<h1>一覧表示</h1>
		<?php
			require_once("fnc.php");

			db_itiran();
		 ?>
		 <br>
		 <a href="./index.html">ホーム</a>
	</body>
</html>
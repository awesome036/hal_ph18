<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>削除</title>
	</head>
	<body>
		<?php
			require_once("fnc.php");

			db_delete($_GET{"id"});
		 ?>
		 <br>
		 <a href="./itiran.php">一覧表示へ</a>
		 <br>
		 <a href="./index.html">ホーム</a>
	</body>
</html>
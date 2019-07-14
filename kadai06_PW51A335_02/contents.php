<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>内容表示</title>
	</head>
	<body>
		<h1>内容表示</h1>
		<?php
			require_once("fnc.php");

			db_ikken($_GET{"id"});
		 ?>
		 <br>
		 <button onclick="location.href='./delete.php?id=<?php print $_GET["id"] ?>'">削除</button>
		 <br>
		 <a href="./itiran.php">一覧表示へ</a>
		 <br>
		 <a href="./index.html">ホーム</a>
	</body>
</html>
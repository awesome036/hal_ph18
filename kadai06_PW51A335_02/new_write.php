<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>登録完了</title>
	</head>
	<body>
		<?php
			require_once("fnc.php");

			db_insert($_POST["title"],$_POST["contents"]);

			print "<p>登録しました。</p>";

		 ?>
		 <br>
		 <a href="./index.html">ホーム</a>
	</body>
</html>
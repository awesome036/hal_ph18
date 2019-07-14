<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>￥\を含んだテキスト出力</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			print $_POST["name"]."<br>\n";
			print stripslashes($_POST["name"])."<br>\n";
		?>
	</body>
</html>
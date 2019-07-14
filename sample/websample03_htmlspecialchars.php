<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>HTMLタグを含んだテキスト出力</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			print $_POST["name"]."<br>\n";
			print htmlspecialchars($_POST["name"])."<br>\n";
			print htmlspecialchars($_POST["name"],ENT_COMPAT)."<br>\n";
			print htmlspecialchars($_POST["name"],ENT_QUOTES)."<br>\n";
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>登録完了</title>
	</head>
	<body>
		<?php
			$f_pt = fopen('filesample01_reg.txt','w');
			fputs($f_pt,$_POST["name"]."\n");
			fputs($f_pt,$_POST["address"]."\n");
			fputs($f_pt,$_POST["phone"]."\n");
			print "<h2>登録しました。</h2>";
			fclose($f_pt);
		?>
	</body>
</html>
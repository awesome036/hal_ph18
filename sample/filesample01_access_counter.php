<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>アクセスカウンター</title>
	</head>
	<body>
		<?php
			// ファイルから1レコード読み込む
			$f_pt = fopen('filesample01_access_counter.txt','r+');
			$count = fgets($f_pt);

			// カウントを増やして表示
			$count++;
			print "<h2>あなたは{$count}人目のお客様です。</h2>\n";

			// カウントをファイルに書き込む
			rewind($f_pt);
			fputs($f_pt,$count);
			fclose($f_pt);
		?>
	</body>
</html>
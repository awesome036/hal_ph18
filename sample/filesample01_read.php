<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>ファイル操作</title>
	</head>
	<body>
		<?php
			// ファイルから1レコード読み込み表示する
			$f_pt = fopen('filesample01.txt','r');
			$str = fgets($f_pt);
			fclose($f_pt);

			print $str."<hr>\n";

			// ファイルから複数行読み込み表示する
			$f_pt = fopen('filesample01.txt','r');
			while($str = fgets($f_pt)){
				print $str."<br>\n";
			}
			fclose($f_pt);
		?>
	</body>
</html>
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
			$f_pt = fopen('count.txt','r+');
			$count = fgets($f_pt);

			$count++;				// カウントアップ
			$str = (string)$count;	// 数値を文字型に変更
			$num = 7;				// 表示したい桁数

			// 空の画像を表示
			for($i=0; $i < $num - strlen($str); $i++){
				print "<img src='./images/none.png'>";
			}
			// 数字を表示
			for($i=0; $i < strlen($str); $i++){
				print "<img src='./images/{$str[$i]}.png'>";
			}

			// カウントをファイルに書き込む
			rewind($f_pt);
			fputs($f_pt,$count);
			fclose($f_pt);
		?>
	</body>
</html>
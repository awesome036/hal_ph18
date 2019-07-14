<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：削除実行</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>削除実行</h1>
			<div id="content">
				<?php
				$f_pt = fopen("memo.txt","w");
				print "<p>削除しました。</p>\n";
				fclose($f_pt);
				?>
				<p><a href="./index.html">メニュー</a></p>
			</div>
		</div>
	</body>
</html>
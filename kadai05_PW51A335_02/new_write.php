<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：追加完了</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>追加完了</h1>
			<div id="content">
				<?php
				$f_pt = fopen("memo.txt","a");
				$str = htmlspecialchars($_POST["comment"])."\n";

				fputs($f_pt,$str);
				print "<p>{$str}<br>を追加しました。</p>\n";
				fclose($f_pt);
				?>
					<p><a href="./index.html">メニュー</a></p>
					<p><a href="./new.php">新規追加</a></p>
			</div>
		</div>
	</body>
</html>
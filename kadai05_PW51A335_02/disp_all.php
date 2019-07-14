<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：全件表示</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>全件表示</h1>
			<div id="content">
				<?php
				$f_pt = fopen("memo.txt","r");
				while(!feof($f_pt)){
					$str = fgets($f_pt);
					print $str."<br>\n";
				}
				fclose($f_pt);
				?>
				<p><a href="./index.html">メニュー</a></p>
			</div>
		</div>
	</body>
</html>
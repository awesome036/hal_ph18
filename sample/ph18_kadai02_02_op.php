<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<style type="text/css">
			* {
				font-size: 24px;
			}
			body {
				text-align: center;
			}
			span {
				color: yellow;
				text-shadow:	2px 2px 2px #666,
								-2px 2px 2px #666,
								2px -2px 2px #666,
								-2px -2px 2px #666;
			}
			.red {
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
			$job = array("サラリーマン","警官","教師","社長","無職","フリーター");
			$item = array("<span>高価なツボ</span>","黄色いハンカチ","色違いの靴下","赤いマフラー","革のカバン");
			$itemnum = rand(0,100);
			$jobnum = rand(0,5);
			srand();

			print "<h2>今日の職業は{$job[$jobnum]}<br>\n</h2>";

			if($itemnum == 100){
				print "<h2>ラッキーアイテムは{$item[0]}です。</h2>";
			}else if($itemnum >= 90){
				print "<h2>ラッキーアイテムは{$item[1]}です。</h2>";
			}else if($itemnum >= 70){
				print "<h2>ラッキーアイテムは{$item[2]}です。</h2>";
			}else if($itemnum >= 40){
				print "<h2 class=red>ラッキーアイテムは{$item[3]}です。</h2>";
			}else{
				print "<h2>ラッキーアイテムは{$item[4]}です。</h2>";
			}
		?>
	</body>
</html>
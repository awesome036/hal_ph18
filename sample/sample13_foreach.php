<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php

			// foreachの練習１
			$names = array("山田","鈴木","斎藤");
			foreach ($names as $name) {
				print $name."<br/>\n";
			}
			print "<hr/>\n";

			// foreachの練習２
			$test = array(10,20,30,40,50,60,70,80,90,100);
			$sum = 0;
			foreach($test as $score){
				print $score."点<br/>\n";
				$sum += $score;
			}
			print "合計は{$sum}点<br/>\n";
			print "<hr/>\n";

			// 配列に不定がある場合にforeachで出力
			$test2[0] = 10;
			$test2[2] = 30;
			$test2[3] = 40;
			$test2[4] = 50;
			foreach($test2 as $value){		//不定があった場合判断される
				print $value."点<br/>\n";
			}
			print "<hr/>\n";

			// 配列に不定がある場合にforで出力
			for($i = 0; $i < 5; $i++){		//不定の内容はエラーを出す
				print $test2[$i]."<br/>\n";
			}
		?>
	</body>
</html>
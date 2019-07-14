<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			//パターン１
			for($i = 0; $i <= 10; $i++){
				if($i%2 == 0){
					print "$i<br/>\n";
				}
			}
			print "<hr/>";

			//パターン２
			for($i = 0; $i <= 10; $i+=2){
				print "$i<br/>\n";
			}
			print "<hr/>";

			//パターン３
			for($i = 10; $i >= 1; $i--){
				print "$i<br/>\n";
			}
			print "<hr/>";

			//test配列の内容を出力
			$sum = 0;
			$test = array("29","35","76","55","87","98","56","87","76","66");
			for($i = 0; $i < 10; $i++){
				$sum += $test[$i];
				print "{$test[$i]}点<br/>\n";
			}
			print "合計点は{$sum}点です。<br/>\n";
		?>
	</body>
</html>
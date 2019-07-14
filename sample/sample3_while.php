<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 24px;">
		<?php
			$omikuji = array("大吉","吉","凶");

			do{
				$num = rand(0,2);
				print "今日のあなたの運勢は{$omikuji[$num]}です<br>\n";
			}while($num != 0);
			print "<hr/>";

			$num1 = 0;
			while($num1 != 5){
				$num1 = rand(0,5);
				print $num1."<br>\n";
			}
			print "<hr/>";

			do{
				$num2 = rand(0,5);
				print $num2."<br>\n";
			}while($num2 != 5);

			srand();
		?>
	</body>
</html>
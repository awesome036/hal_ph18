<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 24px;">
		<?php
			/*-----算術演算子-----*/
			//足し算
			print 1 + 3;
			print "<br>\n";

			//掛け算
			$num1 = 5;
			$num2 = 3;
			print $num1 * $num2;
			print "<br>\n";
			$num1 = 11111111;
			$num2 = 123453429;
			print $num1 * $num2;
			print "<br>\n";

			//引き算
			$num1 = 8;
			$num2 = 2;
			print $num1 - $num2;
			print "<br>\n";
			$num1 = 2;
			$num2 = 8;
			print $num1 - $num2;
			print "<br>\n";

			//割り算
			$num1 = 24;
			$num2 = 6;
			print $num1 / $num2;
			print "<br>\n";
			$num1 = 25;
			$num2 = 6;
			print $num1 / $num2;
			print "<br>\n";

			//剰余
			$num1 = 15;
			$num2 = 7;
			print $num1 % $num2;
			print "<br>\n";
			$num1 = 15;
			$num2 = 3;
			print $num1 % $num2;
			print "<hr>\n";

			/*-----代入演算子-----*/
			//乗算して代入
			$num1 = 50;
			$num1 = $num1 * 2;
			print $num1;
			print "<br>\n";
			$num1 *= 2;
			print $num1;
			print "<br>\n";

			//減算して代入
			$num1 = 60;
			$num1 = $num1 - 3;
			print $num1;
			print "<br>\n";
			$num1 -= 3;
			print $num1;
			print "<hr>\n";

			/*複数の変数を用意*/
			$test0 = 65;
			$test1 = 45;
			$test2 = 76;
			$test3 = 66;
			$test4 = 78;
			$test5 = 43;
			$test6 = 55;
			$test7 = 87;
			$test8 = 98;
			$test9 = 80;

			$sum = 0;
			$ave = 0;
			$sum += $test0;
			$sum += $test1;
			$sum += $test2;
			$sum += $test3;
			$sum += $test4;
			$sum += $test5;
			$sum += $test6;
			$sum += $test7;
			$sum += $test8;
			$sum += $test9;
			$ave = $sum/10;
			print "合計は{$sum}点<br>\n";
			print "平均点は{$ave}点";
			print "<br>\n";
		?>
	</body>
</html>
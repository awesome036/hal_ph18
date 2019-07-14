<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 24px;">
		<?php
			/*配列の書き方①*/
			$week[] = "月";		//添え字を省略で自動カウントアップ
			$week[] = "火";
			print $week[0];
			print $week[1];
			print "<br>\n";

			/*配列の書き方②*/
			$week[2] = "水";		//任意の場所へ挿入可能
			print $week[2];
			print "<br>\n";

			/*配列の書き方③*/
			$test[] = 22;
			$test[] = 34;
			$test[] = 56;
			$test[] = 76;
			$test[] = 87;
			$test[] = 78;
			$test[] = 99;
			$test[] = 67;
			$test[] = 24;
			$test[] = 65;
			$test[3] -= 10;

			$sum = 0;
			$ave = 0;
			$sum += $test[0];
			$sum += $test[1];
			$sum += $test[2];
			$sum += $test[3];
			$sum += $test[4];
			$sum += $test[5];
			$sum += $test[6];
			$sum += $test[7];
			$sum += $test[8];
			$sum += $test[9];
			$ave = $sum/10;

			print "合計点は{$sum}点です。<br>\n";
			print "平均点は{$ave}点です。<br>\n";

			/*array関数の利用*/
			//文字列の場合
			$week2 = array("日","月","火","水","木","金","土");
			print $week2[0];
			print $week2[1];
			print $week2[2];
			print $week2[3];
			print $week2[4];
			print $week2[5];
			print $week2[6];
			print "<hr>\n";

			//数値の場合
			$test2 = array(25,65,55,78,87,98,77,68,45,33);
			print "6番目の人は{$test2[6]}点です。<hr>\n";

			/*explode関数の利用*/
			$week3 = explode("、","日、月、火、水、木、金、土");
			print "4番目の曜日は{$week3[4]}曜日です。<hr>\n";

			$week4 = explode("-","日-月-火-水-木-金-土");
			print_r($week4);
		?>
	</body>
</html>
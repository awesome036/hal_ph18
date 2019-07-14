<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<style type="text/css">

			span {
				font-size: 32px;
			}

			.rock {
				color: blue;
			}

			.paper {
				color: green;
			}

			.saw {
				color: red;
			}
		</style>
	</head>
	<body style="font-size: 24px;">
		<?php
			print rand()."<br>\n";			//ランダムな整数
			print rand(1,3)."<br>\n";		//特定の範囲の整数

			/*配列で乱数を使う*/
			$rock = "<span class=rock>グー</span>";
			$paper =  "<span class=paper>パー</span>";
			$saw =  "<span class=saw>チョキ</span>";
			$janken = array("$rock","$paper","$saw");
			$num = rand(0,2);
			srand();						//乱数の規則性をリセット
			print "じゃんけん{$janken[$num]}<br>\n";

			/*乱数の最大値を取得*/
			print getrandmax();
		?>
	</body>
</html>
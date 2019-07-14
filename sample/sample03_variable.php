<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 28px;">
		<?php
			//変数に数値を入れて加算した時の表示
			$num1=1;
			$num2=2;
			print $num1+$num2;
			print "<hr>";

			//変数に数値や文字列を入れて加算した時の表示
			$num=1;				//数値
			$str="1";			//文字列
			print $num+$num;
			print "<br>";
			print $str+$str;
			print "<hr>";

			//変数の方を取得して表示（文字列）
			$str="abc";
			print $str." ".gettype($str)."<hr>";

			//変数の方を取得して表示（数値）
			$str=123;
			print $str." ".gettype($str)."<hr>";

			//変数内容の出力方法
			$msg="おはよう";
			print $msg;			//①
			print "$msg";		//②
			print "<hr>";

			//文字列を組み合わせて出力
			print $msg."HALさん<br>";
			print "$msg HALさん";
			print "<hr>";

			//「"」と「'」の違い
			$num=5;
			print "変数$num の内容は$num です。<br>\n";		//「"」を使った場合
			print '変数$num の内容は$num です。<br>\n';		//「'」を使った場合
			print "<hr>";

			//変数出力時の半角スペース削除
			print "\$numは$num です。<br>";			//半角スペースあり
			print "\$numは{$num}です。";			//半角スペース削除
		?>
	</body>
</html>

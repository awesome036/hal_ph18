<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 24px;">
		<?php
			//文字列連結①
			$msg="なかがわ";
			print $msg."いさとし先生<br>\n";

			//文字列連結②
			$num=5;
			print '変数$numの内容は'."$num です。<br>\n";

			//数値の連結
			$suchi=4;
			$suchi=$suchi+5;
			print $suchi;
			print "<br>";
			$suchi=$suchi."7";
			print $suchi;

		?>
	</body>
</html>
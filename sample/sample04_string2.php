<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 24px;">
		<?php
			//パターン1
			$when="今日";
			$where="新宿";
			$who="猿";
			$what="出会った";
			print "{$when}、{$where}で{$who}に{$what}";
			print "<br>\n";

			//パターン2
			$when="昨日、";
			$where="新宿で";
			$who="友達と";
			$what="買い物した";
			print $when.$where.$who.$what;
			print "<br>\n";

			//パターン3
			$when="明日の８時半";
			$where="区役所";
			$who="呂飛";
			$what="住所の登録をする";
			print $when."、".$where."で".$who."は".$what;
			print "<br>\n";
		?>
	</body>
</html>
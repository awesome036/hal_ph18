<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			$num = rand(0,5);
			srand();

			if($num == 0){
				print "今日の運勢は大吉です。";
			}else if($num == 1){
				print "今日の運勢は中吉です。";
			}else if($num == 2){
				print "今日の運勢は小吉です。";
			}else if($num == 3){
				print "今日の運勢は末吉です。";
			}else if($num == 4){
				print "今日の運勢は凶です。";
			}else if($num == 5){
				print "今日の運勢は大凶です。";
			}
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body style="font-size: 30px; text-align: center;">
		<?php
			$test = 60;
			if($test == 100){
				print "最高";
			}else if($test >= 60){
				print "良い";
			}else{
				print "だめ";
			}
			print "<br/>\n";

			$color = "red";
			$type = "yasai";

			if($color == "yellow" and $type == "fruits"){
				print "パイナップル<br/>\n";
			}else if($color == "red" and $type == "fruits"){
				print "リンゴ<br/>\n";
			}
			if($type == "fruits" or $type == "meet"){
				print "食べられます。<br/>\n";
			}else{
				print "食べられません。<br/>\n";
			}
		?>
	</body>
</html>
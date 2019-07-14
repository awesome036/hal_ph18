<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>チェックボックスのテスト</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			/* チェックボックスから送られてきた値を出力 */
			if(isset($_POST["hobby"])){
				foreach($_POST["hobby"] as $val){
					$hb = implode("と",$_POST["hobby"]);
				}
				print $hb;
			}else{
				print "この中に趣味がありませんでした。<br/>\n";
			}
		?>
	</body>
</html>
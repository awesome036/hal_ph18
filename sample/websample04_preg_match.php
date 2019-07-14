<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<style type="text/css">
			.red {
				color: #f00;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<?php
			if(preg_match("/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{4}$/",$_POST["tel"])){
				print "電話番号：".$_POST["tel"]."<br>\n";
			}else{
				print "電話番号：<span class='red'>入力エラー</span><br>\n";
			}

			if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$_POST["zipcode"])){
				print "郵便番号：".$_POST["zipcode"]."<br>\n";
			}else{
				print "郵便番号：<span class='red'>入力エラー</span><br>\n";
			}

			if(preg_match("/^[a-z0-9]{8,16}$/",$_POST["password"])){
				print "パスワード：".$_POST["password"]."<br>\n";
			}else{
				print "パスワード：<span class='red'>入力エラー</span><br>\n";
			}
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>あなたについて</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<link rel="stylesheet" type="text/css" href="./kadai04.css">
	</head>
	<body>
		<?php
			// 名前を出力
			if(empty($_POST["namae"])){
				print "<p class='red'>氏名を入力してください！</p>\n";
			}else{
				print "<p>名前：{$_POST["namae"]}<p>\n";
			}

			// 性別を出力
			if(isset($_POST["gender"])){
				if($_POST["gender"] == 0){
					print "<p>性別：<span class='blue'>男性</span></p>\n";
				}else{
					print "<p>性別：<span class='red'>女性</span></p>\n";
				}
			}else{
				print "<p class='red'>性別を選択してください！</p>\n";
			}

			// 趣味を出力
			if(isset($_POST["hobby"])){
				// 趣味を全部出力
				foreach($_POST["hobby"] as $val){
					$hb = implode("と",$_POST["hobby"]);
				}
				print "<p>趣味：{$hb}</p>\n";

				if(count($_POST["hobby"]) >= 2 and !isset($_POST["hobby"][3]) == "true" and !isset($_POST["hobby"][4]) == "true"){
					print "<p class='red'>たまには外に出ましょう！</p>";
				}
			}else{
				print "<p>この中に趣味はありませんでした！</p>\n";
			}

			// 血液型を出力
			if(empty($_POST["blood"])){
				print "<p class='red'>血液型を選択してください！</p>";
			}else{
				print "<p>血液型：{$_POST["blood"]}</p>";
			}

		?>
	</body>
</html>
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
			/*
			// 1人のIDとパスワードを変数に格納
			$id = "kurosawa";
			$pass = "osamu036";

			// IDとパスワード認証
			if($id == $_POST["id"] && $pass == $_POST["password"]){
				print "<h2>認証成功！<h2>\n";
			}else{
				print "<h2 class='red'>IDまたはパスワードが違います！</h2>\n";
			}
			*/


			// 複数人のIDとパスワードを配列に格納
			$accounts[] = array("id" => "arisawa", "pass" => "junpei");
			$accounts[] = array("id" => "kurosawa", "pass" => "osamu");
			$accounts[] = array("id" => "nakajima", "pass" => "natsumi");
			$accounts[] = array("id" => "matsumura", "pass" => "naoki");
			$accounts[] = array("id" => "ro", "pass" => "hi");
			$accounts[] = array("id" => "nakagawa", "pass" => "isatoshi");
			$accounts[] = array("id" => "tsuruho", "pass" => "koutyou");

			// 認証チェック変数
			$check = false;

			// IDとパスワード認証
			foreach($accounts as $val){
				if($val["id"] == $_POST["id"] && $val["pass"] == $_POST["password"]){
					$check = true;
					break;
				}
			}
			if($check){
				print "<h2>認証成功！</h2><br/>\n";
			}else{
				print "<h2 class='red'>IDまたはパスワードが違います！</h2>\n";
			}
		?>
	</body>
</html>
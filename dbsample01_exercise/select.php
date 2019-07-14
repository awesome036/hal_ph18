<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>レコードを選択</title>
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			if(!empty($_POST["id"]) && preg_match("/^[0-9]+$/",$_POST["id"])){
				// データベースへの接続
				$con = mysqli_connect("localhost","root","");

				// 文字コードの指定
				mysqli_set_charset($con,"utf8");

				// データベースの指定
				mysqli_select_db($con,"ph18_test");

				// 実行するSQL文
				$sql = "SELECT * FROM member WHERE id = {$_POST["id"]}";

				// SQLを実行する
				$result = mysqli_query($con,$sql);

				// SQL失敗時にエラーを出力
				// 本番環境時には削除する
				if(!$result){
					print mysqli_error($con);
				}

				// 実行した結果を取り出す
				if($row = mysqli_fetch_array($result)){
					print $row["id"]." ".$row["name"]." ".$row["age"]."<br>";
				}else{
					print "<p>該当するIDは見つかりませんでした。</p>";
				}

				// データベース接続終了
				mysqli_close($con);

			}else{
				print "<p>IDを入力してください。</p>\n";
			}
		?>
		<p><a href="./index.html">戻る</a></p>
	</body>
</html>
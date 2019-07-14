<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>20代の人だけ取り出す</title>
	</head>
	<body>
		<?php
			// データベースへの接続
			$con = mysqli_connect("localhost","root","");

			// 文字コードの指定
			mysqli_set_charset($con,"utf8");

			// データベースの指定
			mysqli_select_db($con,"ph18_test");

			// 実行するSQL文(パラメータは？に置き換え)
			$sql = "SELECT * FROM member WHERE age BETWEEN ? AND ?";

			// SQLステートメントを準備
			$stmt = mysqli_prepare($con,$sql);

			// パラメータに入れる変数
			$age_st = 20;
			$age_ed = 29;

			// プリペアードステートメントのパラメータに変数をバインド
			// 整数型なのでi:integer
			// 変数が二つあるのでバインド変数は2文字（'ii'）になる
			mysqli_stmt_bind_param($stmt,'ii',$age_st,$age_ed);

			// プリペアードクエリを実行
			mysqli_stmt_execute($stmt);

			// プリペアードステートメントから結果セットを取得
			$result = mysqli_stmt_get_result($stmt);

			// 実行した結果を取り出す
			while($row = mysqli_fetch_array($result)){
				print $row["id"]." ".$row["name"]." ".$row["age"]."<br>";
			}

			// プリペアードステートメントを閉じる
			mysqli_stmt_close($stmt);

			// データベース接続終了
			mysqli_close($con);
		?>
	</body>
</html>
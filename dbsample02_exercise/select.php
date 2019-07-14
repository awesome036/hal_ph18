<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>レコードを選択</title>
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			// データベースへの接続
			$con = mysqli_connect("localhost","root","");

			// 文字コードの指定
			mysqli_set_charset($con,"utf8");

			// データベースの指定
			mysqli_select_db($con,"ph18_test");

			// 実行するSQL文
			$sql = "SELECT * FROM member WHERE id = ?";

			// SQLステートメントを準備
			$stmt = mysqli_prepare($con,$sql);

			// パラメータに入れる変数
			$id = $_POST["id"];

			// プリペアードステートメントのパラメータに変数をバインド
			mysqli_stmt_bind_param($stmt,'i',$id);

			// プリペアードクエリを実行
			mysqli_stmt_execute($stmt);

			// プリペアードステートメントから結果セットを取得
			$result = mysqli_stmt_get_result($stmt);

			// 実行した結果を取り出す
			if($row = mysqli_fetch_array($result)){
				print $row["id"]." ".$row["name"]." ".$row["age"]."<br>";
			}else{
				print "<p>該当するIDは見つかりませんでした。</p>";
			}

			// プリペアードステートメントを閉じる
			mysqli_stmt_close($stmt);

			// データベース接続終了
			mysqli_close($con);
		?>
		<p><a href="./index.html">戻る</a></p>
	</body>
</html>
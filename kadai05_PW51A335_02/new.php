<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：新規追加画面</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>新規追加</h1>
			<div id="content">
				<form action="./new_conf.php" method="post">
					<label>一言：</label>
					<input type="text" name="comment" maxlength="50" />
					<br />
					<br />
					<input type="submit" value="確認" />
					<input type="reset" value="リセット" />
				</form>
				<p><a href="./index.html">メニュー</a></p>
			</div>
		</div>
	</body>
</html>
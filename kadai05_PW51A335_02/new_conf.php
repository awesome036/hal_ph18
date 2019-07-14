<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：追加確認</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>追加確認</h1>
			<div id="content">
				<form action="./new_write.php" method="post">
					<?php
					if(!empty($_POST["comment"])){
						// 値が入力された場合
						$str = htmlspecialchars($_POST["comment"]);
						print "一言:".$str;
						?>
						<input type="hidden" name="comment" value="<?php print $str; ?>" />
						<br />
						<br />
						<input type="submit" value="登録" />
						<br />
						<?php
					}else{
						// 値が入力されなかった場合
						print "<p>一言入力してください</p>";
					}
					?>
					<br />
					<input type="button" value="戻る" onclick="location.href='./new.php';" />
				</form>
			</div>
		</div>
	</body>
</html>
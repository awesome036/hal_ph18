<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<title>確認</title>
	</head>
	<body>
		<?php
			$check = false;

			// 名前入力チェック
			if(empty($_POST["name"])){
				$name = "入力してください。";
			}else{
				$name = $_POST["name"];
			}

			// 住所入力チェック
			if(empty($_POST["address"])){
				$address = "入力してください。";
			}else{
				$address = $_POST["address"];
			}

			// 電話番号入力チェック
			if(preg_match("/^[0-9]{10,11}$/",$_POST["phone"]) || preg_match("/^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}$/",$_POST["phone"])){
				$phone = $_POST["phone"];
			}else{
				$phone = "入力してください。";
			}

			print "名前:".$name."<br>\n";
			print "住所:".$address."<br>\n";
			print "電話:".$phone."<br>\n";
		?>
		<form action="filesample01_reg_exec.php" method="post">
			<input type="hidden" name="name" value="<?php print $name; ?>" />
			<input type="hidden" name="address" value="<?php print $address; ?>" />
			<input type="hidden" name="phone" value="<?php print $phone; ?>" />
			<br />
			<input type="submit" name="submit" value="登録" />
		</form>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>文字列の操作</title>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			$str = "Webプログラミング";

			// 文字数をカウント
			print "strlen()では".strlen($str)."<br/>\n";			// strlen()では24
			print "mb_strlen()では".mb_strlen($str)."<hr/>\n";	// mb_strlen()では10

			// 文字列を置き換える(小文字・大文字区別)
			print str_replace("Web","PHP",$str)."<br/>\n";		// PHPプログラミング
			print str_replace("WEB","PHP",$str)."<hr/>\n";		// WEBプログラミング

			// 文字列を置き換える（区別なし）
			print str_ireplace("WEB","PHP",$str)."<hr/>\n";		// PHPプログラミング

			// 文字列から文字列を取り出す
			print substr($str,0,3)."<br/>\n";		// Web					0文字目から3バイト
			print substr($str,3,7)."<br/>\n";		// プロ�				3文字目から7バイト
			print substr($str,3,21)."<br/>\n";		// プログラミング		3文字目から21バイト(全角7文字分)
			print mb_substr($str,3,7)."<hr/>\n";	// プログラミング		3文字目から7文字分

			$str = " web プログラミング ";
			print "[{$str}]<br>\n";
			// 文字列の前後の空白を削除する
			print "[".trim($str)."]<br>\n";

		?>
	</body>
</html>
<?php
	// ファイルの内容全レコード表示
	$f_pt = fopen("filesample03.txt","r");
	while(!feof($f_pt)){
		$str = fgets($f_pt);
		print $str."<br>\n";
	}
	fclose($f_pt);

	print "<h2>読み込み完了！</h2>\n";
 ?>
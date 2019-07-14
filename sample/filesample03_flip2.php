<?php
	// ファイルの内容の順番反転
	$f_pt = fopen("filesample03.txt","r+");
	while(!feof($f_pt)){
		$strs[] = fgets($f_pt);
	}

	// ファイルポインタを先頭に戻す
	rewind($f_pt);

	// 配列の中身を反転
	$strs = array_reverse($strs);

	// ファイルに配列の内容を書き込み
	foreach($strs as $str){
		fputs($f_pt,$str);
	}
	fclose($f_pt);

	print "<h2>反転完了！</h2>\n";
 ?>
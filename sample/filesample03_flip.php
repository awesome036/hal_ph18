<?php
	// ファイルの内容の順番反転
	$f_pt = fopen("filesample03.txt","r+");
	while(!feof($f_pt)){
		$strs[] = fgets($f_pt);
	}

	// ファイルポインタを先頭に戻す
	rewind($f_pt);

	// ファイルに配列の内容を書き込み
	for($i=count($strs)-1; $i>=0; $i--){
		fputs($f_pt,$strs[$i]);
	}
	fclose($f_pt);

	print "<h2>反転完了！</h2>\n";
 ?>
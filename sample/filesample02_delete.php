<?php
	$filename = "filesample02.txt";
	if(file_exists($filename)){
		unlink($filename);
		print "<h2>削除</h2>";
	}else{
		print "<h2>ファイル無いよ</h2>";
	}
 ?>
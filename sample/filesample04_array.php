<?php
	$filename = "filesample04.txt";
	$tbl = file($filename);
	print implode("<br>",$tbl);
 ?>
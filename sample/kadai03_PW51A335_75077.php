<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			for($i = 0; $i<4; $i++){
				$data[$i] =rand(0,9);
				srand();
			}

			foreach($data as $value){
				print $value."<br/>\n";
			}
		?>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
	</head>
	<body>
		<?php
			// 乱数を配列に格納
			$min = 0;						// 乱数の最小値
			$max = 100;						// 乱数の最大値
			$num = 10;						// 配列の要素数
			for($i = 0; $i<$num; $i++){
				$data[$i] =rand($min,$max);
			}
			srand();

			// 配列の内容を出力
			print "<h2>{$min}から{$max}までの数字をランダムに{$num}個出力</h2>\n";
			$maximum = $min;
			$minimum = $max;
			$sum = 0;
			foreach($data as $value){
				if($value > $maximum){		// 最大値を更新
					$maximum = $value;
				}elseif($value < $minimum){	// 最小値を更新
					$minimum = $value;
				}
				$sum += $value;				// $sumに値を代入加算
				print $value."<br/>\n";		// 配列のi番目の内容を出力
			}
			print "<h3>最大は".$maximum."</h3>\n";
			print "<h3>最小は".$minimum."</h3>\n";
			print "<h3>平均は".($sum/$num)."</h3>\n";

			// 配列の内容を昇順に並べ替え
			print "<h2>配列の内容を昇順に出力</h2>";
			$work = 0;
			/*   パターン１
			for($i = 0; $i < $num-1; $i++){
				for($j = 0; $j < $num-1; $j++ ){
					if($data[$j] > $data[$j+1] ){
						$work = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $work;
					}
				}
			}
			*/

			/* パターン２*/
			for($i = 0; $i < $num-1; $i++){
				for($j = $i+1; $j < $num; $j++ ){
					if($data[$j] < $data[$i] ){
						$work = $data[$j];
						$data[$j] = $data[$i];
						$data[$i] = $work;
					}
				}
			}

			/* パターン３
			sort($data);
			*/
			
			foreach($data as $value){
				print $value."<br/>\n";
			}
		?>
	</body>
</html>
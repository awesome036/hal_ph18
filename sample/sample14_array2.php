<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Osamu Kurosawa">
		<style type="text/css">
			* {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<?php
			// 連想配列
			$gakusei["name"] = "ナカガワ";
			$gakusei["gakuban"] = 99999;
			print $gakusei["name"]." ".$gakusei["gakuban"]."<br/>\n";

			// array関数を使った連想配列
			$gakusei2 = array(	"name"		=> "中川",
								"gakuban"	=> 12345,
								"age"		=> 45);
			foreach($gakusei2 as $val){
				print $val." ";
			}
			print "<hr/>";

			// 生徒情報を配列に格納
			$student[] = array("class" => "PW51A", "no" => 1, "name" => "アリサワ");
			$student[] = array("class" => "PI51A", "no" => 1, "name" => "イ");
			$student[] = array("class" => "IT51A", "no" => 1, "name" => "オオサワ");
			$student[] = array("class" => "PW51A", "no" => 2, "name" => "クロサワ");
			$student[] = array("class" => "PI51A", "no" => 2, "name" => "ウ");
			$student[] = array("class" => "IT51A", "no" => 2, "name" => "ラッキー");
			$student[] = array("class" => "PW51A", "no" => 3, "name" => "ナカジマ");
			$student[] = array("class" => "PI51A", "no" => 3, "name" => "オオキ");
			$student[] = array("class" => "IT51A", "no" => 3, "name" => "タナカ");

			foreach($student as $val){
				print "class:".$val["class"]." no:".$val["no"]." name:".$val["name"]."<br/>\n";
			}
			print "<hr/>\n";

			// PW51Aの生徒情報だけ出力
			foreach($student as $val){
				if($val["class"] == "PW51A"){
						print "class:".$val["class"]." no:".$val["no"]." name:".$val["name"]."<br/>\n";
				}
			}
		?>
	</body>
</html>
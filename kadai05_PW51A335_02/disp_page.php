<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>一言メモ：全件表示（ページ制御あり）</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<div id="wrap">
			<h1>全件表示（ページ制御あり）</h1>
			<div id="content">
				<?php
				$dispNum = 5;					// 表示したい件数
				$count = 0;						// 総コメント数用の変数
				$dispPage = $_GET["page"];		// 現在のページ番号取得
				$next = $dispPage + 1;			// 次のページ番号
				$prev = $dispPage -1;			// 前のページの番号
				$start = $dispNum * ($dispPage - 1);	// 表示したい配列の開始要素番号
				$end = $dispNum * $dispPage - 1;		// 表示したい配列の終了要素番号
				$first = FALSE;					// 最初のページ判定
				$last = FALSE;					// 最後のページ判定

				// ファイルの内容を1レコードずつ配列に格納
				$f_pt = fopen("memo.txt","r");
				while(!feof($f_pt)){
					$comments[$count] = fgets($f_pt);
					$count++;
				}
				fclose($f_pt);

				// カウント補正
				// 最終行の改行を除外するため
				$count -= 1;

				// ページに応じたコメント表示
				for($i = $start; $i <= $end; $i++){
					if(isset($comments[$i])){
						print $comments[$i]."<br>\n";
					}
				}

				// 現在ページの判定
				// TRUE:YES  FALSE:NO
				if($start == 0){
					// 最初のページだったら
					$first = TRUE;
				}elseif($count <= $end + 1){
					// 最後のページだったら
					$last = TRUE;
				}

				// 前後ページのリンク
				$nextLink = "<a class='next' href='./disp_page.php?page={$next}'>次へ</a>\n";
				$prevLink = "<a class='prev' href='./disp_page.php?page={$prev}'>前へ</a>\n";

				// 2ページ以上ある場合
				if($count > $dispNum){
					if($first){
						print $nextLink;
					}elseif($last){
						print $prevLink;
					}else{
						print $prevLink;
						print $nextLink;
					}
				}

				?>
				<p><a href="./index.html">メニュー</a></p>
			</div>
		</div>
	</body>
</html>
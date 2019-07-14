<?php

	function db_insert($title,$contents){

		// データベースへの接続
		$con = mysqli_connect("localhost","root","");

		// 文字コードの指定
		mysqli_set_charset($con,"utf8");

		// データベースの指定
		mysqli_select_db($con,"ph18_kadai06_pw51a335_02");

		$title = htmlspecialchars($title);
		$contents = htmlspecialchars($contents);
		$sql = "INSERT INTO memo_list(title,contents,ins_dt) VALUES('$title','$contents',NOW())";

		// 命令を実行
		mysqli_query($con,$sql);

		// データベース接続終了
		mysqli_close($con);
	}

	function db_itiran(){
		// データベースへの接続
		$con = mysqli_connect("localhost","root","");

		// 文字コードの指定
		mysqli_set_charset($con,"utf8");

		// データベースの指定
		mysqli_select_db($con,"ph18_kadai06_pw51a335_02");

		$sql = "SELECT id,title,ins_dt FROM memo_list";

		// SQLを実行する
		$result = mysqli_query($con,$sql);

		// 一覧表示
		while($row = mysqli_fetch_array($result)){
			print $row["id"].".".$row["title"]." ".$row["ins_dt"]."<a class='button' href='./contents.php?id={$row["id"]}'>表示</a>"."<br>";
		}

		// データベース接続終了
		mysqli_close($con);
	}

	function db_ikken($id){
		// データベースへの接続
		$con = mysqli_connect("localhost","root","");

		// 文字コードの指定
		mysqli_set_charset($con,"utf8");

		// データベースの指定
		mysqli_select_db($con,"ph18_kadai06_pw51a335_02");

		$sql = "SELECT * FROM memo_list WHERE id = $id";

		// SQLを実行する
		$result = mysqli_query($con,$sql);

		// 内容を１件のみ表示
		$row = mysqli_fetch_array($result);
		print $row["id"].".".$row["title"]." ".$row["ins_dt"]."<br>";
		print "<textarea rows='8' cols='80'>{$row["contents"]}</textarea>";

		// データベース接続終了
		mysqli_close($con);
	}

	function db_delete($id){
		// データベースへの接続
		$con = mysqli_connect("localhost","root","");

		// 文字コードの指定
		mysqli_set_charset($con,"utf8");

		// データベースの指定
		mysqli_select_db($con,"ph18_kadai06_pw51a335_02");

		$sql = "DELETE FROM memo_list WHERE id = $id";

		// SQLを実行する
		$result = mysqli_query($con,$sql);

		print "削除しました<br>";

		// データベース接続終了
		mysqli_close($con);
	}

 ?>
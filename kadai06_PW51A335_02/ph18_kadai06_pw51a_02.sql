DROP DATABASE ph18_kadai06_pw51a335_02;

/* 文字コードセット */
SET character_set_client=sjis;
SET character_set_connection=utf8;
SET character_set_server=utf8;
SET character_set_results=sjis;

CREATE DATABASE ph18_kadai06_pw51a335_02;
USE ph18_kadai06_pw51a335_02;

DROP TABLE memo_list;
CREATE TABLE memo_list(
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(30),
	contents VARCHAR(100),
	ins_dt DATETIME
);
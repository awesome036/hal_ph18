DROP DATABASE ph18_test;

/* 文字コードセット */
SET character_set_client=sjis;
SET character_set_connection=utf8;
SET character_set_server=utf8;
SET character_set_results=sjis;

CREATE DATABASE ph18_test;
USE ph18_test;

DROP TABLE member;
CREATE TABLE member(
	id INT PRIMARY KEY,
	name VARCHAR(10),
	age INT
);

DELETE FROM member WHERE id = 4;

INSERT INTO member(id,name,age)VALUES(1,'ありさわ',21);
INSERT INTO member(id,name,age)VALUES(2,'くろさわ',22);
INSERT INTO member(id,name,age)VALUES(3,'まつむら',24);

UPDATE member SET age = age + 1 WHERE id = 4;
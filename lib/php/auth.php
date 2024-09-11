<?php


function MYSQLIAuth() {
	return [
"localhost", // mysql host
"lee0411", // mysql user name
"Ss970411", // mysql user password
"lee0411", // mysql database name
	];
}



function PDOAuth() {
	return [
"mysql:host=localhost;dbname=lee0411", // mysql host
"lee0411", // mysql user name
"Ss970411", // mysql user password
[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
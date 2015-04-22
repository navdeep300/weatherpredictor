<?php
//This file includes connection information to DB
define('SERVER', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB_NAME', 'weather');

$connection = mysql_connect(SERVER, USER, PASS) or die("Could not connect to database.");
mysql_select_db(DB_NAME, $connection) or die("please check database");
?>
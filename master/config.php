<?php
	$host = "localhost";
	$user = "fake";
	$pass = "fake";
	$db = "fake";
	$dbtable = "servers";
	$settings_table = "settings";

	//$msip = "127.0.0.1";
	//$msport = 27010;

	//$sort = 0; // 1 - sort by player ping, 0 - disabled

	mysql_connect($host, $user, $pass);
	mysql_select_db($db);

	$settings = mysql_fetch_array(mysql_query("SELECT * FROM `settings`"));

?>

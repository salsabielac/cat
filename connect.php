<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database ="cat";
	$connect = mysql_connect($host, $user, $password);
	$selectdb = mysql_select_db($database, $connect);
	if($selectdb) 
		echo " ";
	else
		echo "Failed to Connect";
?>
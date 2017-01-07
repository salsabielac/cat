<?php
session_start();
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysql_query("SELECT * FROM user where username='$username' and password='$password'");
if(mysql_num_rows($login)==1){
	$row=$login->fetch_assoc();
		$_SESSION['username']=$username;
		header('location:index.php');
	}else{
		$_SESSION['username']=$username;
		header('location:index-before.php');	
	}
?>
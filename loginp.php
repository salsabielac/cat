<?php
session_start();
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysql_query("SELECT * FROM cat where username='$username' and password='$password'");
if(mysql_num_rows($login)==1){
	$row=$login->fetch_assoc();
	$_SESSION['role'] = $row['role'];
	if ($row['role']=='cat_files'){
		$_SESSION['username']=$username;
		header('location:cat_files/home.php');
	}else{
		$_SESSION['username']=$username;
		header('location:home.php');	
	}
}
?>
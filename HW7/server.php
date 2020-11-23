<?php

	$connect = mysqli_connect("localhost","root","","ls7");

	$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
	$pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";

	$sql = "SELECT id FROM `users` WHERE login='$login' AND pass='$pass'";
	$res = mysqli_query($connect, $sql) or die("Error: ".mysql_error($connect));

	if(mysqli_num_rows($res) == 1){
		setcookie("login",$login);
		setcookie("pass",$pass);
		header("Location: formLogin.php?success=true");
	} else {
		header("Location: formLogin.php");
	}




	include "config.php";

	$action = $_GET['action'];
	$id = $_GET['id'];

	if($action == "delete"){
		$sql = "delete from shop where id=$id";
		if(mysqli_query($connect,$sql)){
			header("Location: admin.php");
		}
	}

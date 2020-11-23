<?php
include "config.php";

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "delete"){
	$sql = "delete from shop where id=$id";
	if(mysqli_query($connect,$sql)){
		header("Location: admin.php");
	}
}
?>
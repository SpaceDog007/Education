<h1>"<?=$data['name']?>"</h1>
<?php
//$path = $_SERVER["DOCUMENT_ROOT"]."/user/4/gallery.php";
//include_once($path);
//
//
include "config.php";

	$sql = "select * from img";
	$res = mysqli_query($connect,$sql);
?>
<img width="<?=$data['size']?>" src="<?=$_GET['img']?>"><br>
<!-- сделать вывод описания из бд -->
<p>Телефон пушка</p>
<a href="<?= $_SERVER['HTTP_REFERER']?>"> Назад </a>
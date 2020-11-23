
<?php
if ($_GET['success'] && $_COOKIE['login']) {?>
	<h1>Здравствуйте <?="{$_COOKIE['login']}"?></h1>
	<a href="verstka.php">Перейти к новинкам</a><br>
	<a href="verstka.php">Выйти</a> 
	<?php } else {?>
	<h1>Пользовательс таким имененм не найдем, повторите ввод данных или воспользуйтесь регистрацией</h1>
<form action="server.php" method="post">
	<p>Введите ваш логин</p>
	<input type="text" name="login" value="<?= $_COOKIE['login']?>">
	<p>Введите ваш пароль</p>
	<input type="pass" name="pass" value="<?= $_COOKIE['pass']?>"><br><br>
	<input type="submit" value="Вход">
		
</form>
<?}

?>
<form action="server.php" method="post">
	<p>ФИО</p>
	<input type="text" name="fio">
	<p>Расскажите о впечатлениях о нашем магазине</p>
	<textarea name="message" cols="30" rows="10"></textarea>

	<p>Откуда узнали про наш магазин</p>
	<input type="checkbox" name="news[]" value="Друзья">Друзья <br>
	<input type="checkbox" name="news[]" value="Реклама">Реклама <br>
	<input type="checkbox" name="news[]" value="Собака рассказала">Собака рассказала <br>

	<p>Еще придете к нам за покупками</p>
	<input type="radio" name="mean" value="Да">Да, все очень понравилось <br>
	<input type="radio" name="mean" value="Возможно">Возможно прийду <br>
	<input type="radio" name="mean" value="Нет">Нет, отвратительное место <br>

	<p>Дата вашего визита в магазин</p>
	<input type="date" name="bd">

	<p>
		<input type="submit" value="Сохранить">
	</p>


</form>

<a href="server.php?id=1">link</a>
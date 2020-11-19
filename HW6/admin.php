<?php
	include "config.php";

	$sql = "select * from shop";
	$res = mysqli_query($connect,$sql);
?>


<table style="text-align:center;" border = "1" with="600">
	<tr>
		<th>Название товара</th>
		<th>Стоимость</th>
		<th>Действие</th>
	</tr>
<?php
	while($data = mysqli_fetch_assoc($res)):?>
		<tr>
			<td><?= $data['title']?></td>
			<td><input id="price_<?=$data['id']?>" value="<?= $data['price']?>" type="text"></td>
			<td>
				<button onclick="f(<?= $data['id']?>)">Сохранить</button>
				<a href="server.php?action=delete&id=<?= $data['id']?>"><button>Удалить товар</button></a>
			</td>
		</tr>

<?php
endwhile;
?>
</table>
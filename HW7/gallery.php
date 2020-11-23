<?php

//$files = scandir("files");
	include "config.php";

	$sql = "select * from goods";
	$res = mysqli_query($connect,$sql);
/*
for ($id=1; $i < count($files) ; $i++) { ?>
    <a href = "full.php?img=<?=$files[$i]?>">
        <img width="200" src="files/<?=$files[$i]?>">
    </a>
    <hr>

    <?php
}
?>
*/

while ($data = mysqli_fetch_assoc($res)) { ?>
		<a href = "item.php?img=<?=$data['path']?>">
        <img width="200" src="<?=$data['path']?>">
    </a>
<?php
	}

?>

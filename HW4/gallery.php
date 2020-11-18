<?php

$files = scandir("files");
for ($i=8; $i <count($files) ; $i++) {?>
    <a href = "full.php?img=<?=$files[$i]?>">
        <img width="200" src="files/<?=$files[$i]?>">
    </a>
    <hr>
    <?php
}
?>




<html>
<body>
<?php

if (isset($_GET['x']))
    $x=(int)($_GET['x']);
else $x=1;

if (isset($_GET['y']))
    $y=(int)($_GET['y']);
else $y=1;

if (isset($_GET['sign']))
    $sign=htmlspecialchars($_GET['sign']);
else
    $sign='plus';

if (isset($x)&&isset($y))
    switch ($sign) {
        case 'plus': $z=$x+$y;
            break;
        case 'minus': $z=$x-$y;
            break;
        case 'multiply': $z=$x*$y;
            break;
        case 'division': $z=$x/$y;
            break;
    }
?>
<h1>Калькулятор 1</h1>
<form>
    <input type="number" name="x" value="<?=$x?>">
    <select name="sign">
        <option <?php if ($sign=='plus') echo "выбран"?> value="plus">+</option>
        <option <?php if ($sign=='minus') echo "выбран"?> value="minus">-</option>
        <option <?php if ($sign=='multiply') echo "выбран"?> value="multiply">*</option>
        <option <?php if ($sign=='division') echo "выбран"?> value="division">/</option>
    </select>
    <input type="number" name="y" value="<?=$y?>">
    <input type="submit" value="=">
    <b><?php if (isset($z)) echo "$z"?></b>

</form>

<h1>Калькулятор 2</h1>
<?php
if (isset($_GET['a']))
    $a=(int)($_GET['a']);
else $a=1;

if (isset($_GET['b']))
    $b=(int)($_GET['b']);
else $b=1;

if (isset($_GET['do']))
    $do=htmlspecialchars($_GET['do']);
else
    $do='plus';

if (isset($x)&&isset($y))
    switch ($do) {
        case '+': $c=$a+$b;
            break;
        case '-': $c=$a-$b;
            break;
        case '*': $c=$a*$b;
            break;
        case '/': $c=$a/$b;
            break;
    }

?>
<form>
    <input type="number" name="a" value="<?=$a?>">
    <input type="number" name="b" value="<?=$b?>">
    <input type="submit" name="do" value="+">
    <input type="submit" name="do" value="-">
    <input type="submit" name="do" value="*">
    <input type="submit" name="do" value="/">
    <!-- <input type="submit" value="посчитать"> -->
    <b><?php if (isset($c)) echo "Результат равен "."$c"?></b>


</form>




</body>
</html>
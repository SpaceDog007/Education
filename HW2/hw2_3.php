<?php
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
function mathSum($a,$b){
	$res = $a+$b;
	echo "Сложение $res <br>";
	return $res;
};

function mathminus($a,$b){
	$res = $a-$b;
	echo "Вычитание $res <br>";
	return $res;
};

function mathDiv($a,$b){
	$res = $a/$b;
	echo "Деление $res <br>";
	return $res;
};

function mathMulti($a,$b){
	$res = $a*$b;
	echo "Умножение $res <br>";
	return $res;
};

mathminus(1,5);
mathMulti(3,5);
mathSum(6,99);
mathDiv(14,88);
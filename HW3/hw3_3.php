<?php
//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
//
//Московская область:
//Москва, Зеленоград, Клин
//Ленинградская область:
//Санкт-Петербург, Всеволожск, Павловск, Кронштадт
//Рязанская область … (названия городов можно найти на maps.yandex.ru)


/* цикл for (выражение 1, выражение 2, выражение 3) {

операторы или блоки операторов
}

выражение 1 - переменная которая будет отвечать за истиность в цикле for ПРИМЕР: $i=0

выражение 2 - продолжение цикла, проверяется на истинность ПРИМЕР: $i<10

выражение 3 - изменяет значение переменноей - счетчика ПРИМЕР: $i++
 */

/* в массиве значения одного типа
преобразование массива в строку через функцию implote() ПРИМЕР $str = implode(", ",$array);
обратное преобразование из строки в массив explote() ПРИМЕР $array = explode(", ",$str);
добавить элемент в массив:
- $array[]="new";
-array_push($array, "new");
удаление элемента из массива:
-array_pop($array)
*/

/*
 АССОЦИАТИВНЫЙ МАССИВ -индекс(ключ) массива это строка
 */

$arrayRegion = ["Московская область" => "Москва, Зеленоград, Клин", "Ленинградская область" => "Санкт-Петербург, Всеволожск, Павловск, Кронштадт","Рязанская область" => "Рязань, Касимов, Михайлов, Новомичуринск"];
foreach ($arrayRegion as $key => $value) {
    echo "В $key находятся такие города, как $value <br>";
}
<?php
//6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
// Необходимо представить пункты меню как элементы массива и вывести их циклом.
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

function menu(){
    $array = ["Личный кабинет" => ["Настройки" , "Выход"], "Закладки" => ["Статьи", "Комментарии"], "Оценки" => "Оценки"];
    $str = "<ul>";
    foreach ($array as $item => $punkt) {
        if (is_array($punkt)) {
            $str .= "<li>$item</li><ul>";
            foreach ($punkt as $itemTwoLvl){
                $str .= "<li>$itemTwoLvl</li>";
            }
        } else {
            $str .= "<li>$item</li>";
        }
        $str .="</ul>";
    }
    echo $str;
}

menu();
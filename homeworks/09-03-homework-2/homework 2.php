<?php

/*1. Цель задачи - сформировать html-код списка
• Сформируйте массив (10 элементов) со строками вида:
Кнопка 10
Кнопка 9
Кнопка 8
...
Кнопка 1
• Отсортируйте массив в обратном порядке любым способом. Получить такой результат:
Кнопка 1
Кнопка 2
...
Кнопка 10
 • При помощи echo, операторов склеивания и цикла foreach получить и вывести на экран такой html-код:
<ul>
    <li><a href="#">Кнопка 1</a></li>
    <li><a href="#">Кнопка 2</a></li>
    <li><a href="#">Кнопка 3</a></li>
    ...
    <li><a href="#">Кнопка 10</a></li>
</ul>*/

$buttons = [];

for ($i = 10; $i > 0; $i--) {
    array_push($buttons, "Кнопка $i");
}

$buttons = array_reverse($buttons);

foreach ($buttons as $key => $button) {
    switch ($key) {
        case array_key_first($buttons) :
            echo '<ul><li><a href="#">' . $button . '</a></li>';
            break;
        case array_key_last($buttons) :
            echo '<li><a href="#">' . $button . '</a></li></ul>';
            break;
        default :
            echo '<li><a href="#">' . $button . '</a></li>';
    }
}

/*2) Удаление отрицательных элементов из массива
Есть массив с элементами (отрицательными и положительными). Нужно написать такую функцию deleteNegtives(), которая будет принимать массив, удалять из него элементы меньше 0 и возвращать этот массив.
Подсказки:
Можно использовать цикл foreach для обхода элементов массива.
Пример:
// Сейчас $digits содержит отрицательные и положительные числа $digits = array(2,10, -2, 4, -5, 1, -6, 200, 1.6, 95);
$digits = deleteNegtives($digits);
// Теперь $digits содержит только положительные числа*/

$digits = array(2,10, -2, 4, -5, 1, -6, 200, 1.6, 95);

/**
 * Filter function for positive numbers
 *
 * @param array $digits
 * @return array of positive numbers
 */

function deleteNegtives($digits)
{
    $positiveNumbers = [];
    foreach ($digits as $digit) {
        if ($digit < 0) continue;
        else {
            $positiveNumbers[] = $digit;
        }
    }
    return $positiveNumbers;
}

$digits = deleteNegtives($digits);

var_dump($digits);

/*3) Квадратное уравнение
Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента (коефициенты).
Возвращает:
• Массив с двумя корнями х1, х2, если D > 0
• Один корень х, если D = 0
• false, если D < 0 Подсказки:*/

/**
 * Quadratic equation
 *
 * @param $a
 * @param $b
 * @param $c
 * @return false|float|float[]|int|int[]
 */

function quadraticEquation(float $a = 1, float $b = 1, float $c = 0)
{
    $D = $b ** 2 - 4 * $a * $c;
    var_dump($D);
    if ($D > 0) {
        $x1 = (-$b + sqrt($D)) / 2 * $a;
        $x2 = (-$b - sqrt($D)) / 2 * $a;
        var_dump($x1);
        return ['x1' => $x1, 'x2' => $x2];
    } elseif ($D === 0) {
        $x = -$b / 2 * $a;
        return $x;
    } else {
        echo 'Корней нет';
        return false;
    }
}

$result = quadraticEquation(1, 4, '1');
var_dump($result);
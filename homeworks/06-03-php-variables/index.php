<?php

//1) Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.

$a = 10;
$b = 2;
$c = 5;
var_dump($a + $b + $c);

/*2) Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте
переменную $d, присвойте ей значение   Сложите переменные $c и $d, а результат запишите в переменную $result.
Выведите на экран значение переменной $result.*/

$a = 17;
$b = 10;
$c = $a - $b;
$d = 44;
$result = $c + $d;
var_dump($result);

/*3) Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно
стоять ваше имя.*/

$name = 'Serhii';
echo "Привет, $name";

/*Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом
не должно измениться.
$var = 1;
	$var = $var + 12;
	$var = $var - 14;
	$var = $var * 5;*/

$var = 1;

$var += 12;
$var -= 14;
$var *= 5;

/*5)  Дан многомерный массив $arr:
$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
Выведите с его помощью слово 'голубой'.*/

$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];

var_dump($arr['ru'][0]);

/*6) Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй,
а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.*/

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
var_dump($result);

/*7) Ассоциативные массивы
Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели
(понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.*/

$daysWeek = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
];

var_dump($daysWeek[6]);

/*8) Условия IF
В переменной $min лежит число от 0 до 59. Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую).
$min = 10;*/

$min = 10;

if($min <= 15){
    echo 'min в первой четверти';
} elseif($min > 15 && $min <= 30){
    echo 'min во второй четверти';
} elseif($min > 30 && $min <= 45){
    echo 'min в третьей четверти';
} elseif($min > 45 && $min < 60){
    echo 'min в четвертой четверти';
}

/*9) Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в
переменную $result запишем 'зима', если имеет значение '2' – 'весна' и так далее. Решите задачу через switch-case.*/

$num = 3;

switch ($num){
    case 1:
        $result = 'зима';
        var_dump($result);
        break;
    case 2:
        $result = 'весна';
        var_dump($result);
        break;
    case 3:
        $result = 'лето';
        var_dump($result);
        break;
    case 4:
        $result = 'осень';
        var_dump($result);
        break;
}

/*10) Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных,
иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.*/

$a = 3;
$b = 5;

if($a <= 1 && $b >= 3){
    var_dump($a + $b);
} else{
    var_dump($a - $b);
}
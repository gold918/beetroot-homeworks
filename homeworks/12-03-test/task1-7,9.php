<?php
declare(strict_types = 1);
/*Задача 7: Работа со cookie
Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!*/
if (isset($_POST['submit'])) {
    setcookie('birthday', $_POST['birthday']);
}

if (isset($_COOKIE['birthday'])) {
    $birthday = date_format(date_create($_COOKIE['birthday']), 'd F');
    $currentDate = date('d F');
    $dateInterval = (strtotime($birthday) - strtotime($currentDate)) / (3600 * 24);

    if ($dateInterval == 0) {
        echo 'Поздравляю с Днем рождения! </br>';
    } elseif ($dateInterval > 0) {
        echo "До дня рождения осталось столько дней: $dateInterval </br>";
    } else {
        $daysYear = date('L') ? 366 : 365;
        echo 'До дня рождения осталось столько дней: ' . ($dateInterval + $daysYear) . '</br>';
    }
} else {
    ?>
    <form action="" method="post">
        <label for="birthday">Введите дату рождения</label>
        <input type="date" name="birthday" id="birthday">
        <input type="submit" name="submit">
    </form>
    <?php
}

/*Задача 1: Работа со строками и переменными
• Определить три переменных со значениями:
"Доброе утро"
"дамы"
"и господа"
• Вывести значения переменных в браузер.
• Сформировать строку "Доброе утро, дамы и господа" используя созданные переменные и
комбинированный оператор склеивания*/

$var1 = 'Доброе утро';
$var2 = 'дамы';
$var3 = 'и господа';
echo $var1 . ', ' . $var2 . ' ' . $var3;

/*Задача 2: Работа с массивами
• Создать 2 простых массива с количеством элементов 5.
• В первый массив добавить один элемент с индексом (!)element и произвольным значением.
• Из второго массива удалить элемент с индексом 0. Используйте функцию unset();
• Вывести на экран элементы под индексом 2 из первого и второго массива.
• Вывести на экран содержимое массивов полностью.
• Найти количество элементов в каждом массиве. Используйте функцию count(). Вывести
результаты на экран*/

$array1 = [1, 4, 6, 8, 0];
$array2 = [6, 8, 5, 38, 456];
$array1['(!)element'] = 666;
unset($array2[0]);
var_dump($array1[2], $array2[2]);
var_dump($array1, $array2);
var_dump(count($array1), count($array2));

/*Задача 3: Работа с датами
- Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.
Сконвертируйте UNIX дату: 1615632772 в формат "2025-12-31 12:59:59'*/

$date = date_create();
date_date_set($date, 2025, 12, 31);
echo date_format($date, 'Y-m-d') . '</br>';

date_date_set($date, 2025, 12, 31);
echo date_format($date, 'd.m.Y') . '</br>';

date_date_set($date, 2031, 12, 13);
echo date_format($date, 'y.m.d') . '</br>';

date_time_set($date, 12, 59, 59);
echo date_format($date, 'H:i:s') . '</br>';

echo date('Y-m-d H:i:s',1615632772) . '</br>';

/*Задача 4: Сделайте функцию. Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. Если есть - выведите 'да', а если нет - выведите 'нет'.*/
$array = [23, 12, 435, 435, 233, 231, 23];

/**
 * sameNumbers - the function checks the array for the presence of two consecutive identical numbers
 *
 * @param array $array
 * @return string
 */

function sameNumbers(array $array): string
{
    $answer = 'Нет';
    foreach ($array as $elem) {
        if ($elem === next($array)) {
            $answer = 'Да';
            break;
        }
    }
    return $answer;
}

echo sameNumbers ($array);
/*Задача 5: Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false.*/

/**
 * moreThanTen - the function checks if the number is greater than 10
 *
 * @param float $a
 * @param float $b
 * @return bool
 */

function moreThanTen (float $a, float $b) : bool
{
    return ($a + $b) > 10;
}

var_dump(moreThanTen(5, 4));

/*Задача 6: Сделайте функцию. Дан двухмерный массив с числами, например [[1, 2], [3, 4]], [[5, 6], [7, 8]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.*/

$array = [[1, 2], [3, 4], [5, 6], [7, 8]];

/**
 * sumElements -counts the sum of array elements
 *
 * @param array $array
 * @return float
 */

function sumElements(array $array): float
{
    $sum = 0;
    foreach ($array as $elem) {
        if (is_array($elem)) {
            $sum += array_sum($elem);
        } else {
            $sum += $elem;
        }
    }
    return $sum;
}

var_dump(sumElements($array));

/*Задача 9: Работа со файлами
- Пусть в корне вашего сайта лежит файл test.txt, в котором записан текст '12345'. Откройте этот файл, запишите в конец текста восклицательный знак и сохраните новый текст обратно в файл.
- Пусть в корне вашего сайта лежит файл test.txt. Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.*/

file_put_contents('test.txt', '!', FILE_APPEND);
copy('test.txt', 'dir/test.txt');
unlink('test.txt');

?>
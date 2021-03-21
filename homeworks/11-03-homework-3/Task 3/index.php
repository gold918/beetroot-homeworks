<?php
/*3. Счетчик посещений Используя cookie реализовать вывод на страницу сообщения с количеством посещений страницы*/

$counter = (isset($_COOKIE['counter'])) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie('counter', $counter);
echo "На сайте ты уже был столько раз: $counter";
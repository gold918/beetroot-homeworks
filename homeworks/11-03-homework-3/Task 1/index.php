<?php
/*1. Время жизни cookie Пользователь приходит на сайт. Используя cookie сделать так, что б впервые пришедший пользователь видел фразу: "Добро пожаловать, новичек!" Если пользователь уже посещал сайт в течении последних 10-ти часов, выводить фразу: "С возвращением, дружище!" */

setcookie('greeting', 'С возвращением, дружище!', time() + 10 * 3600);
if (isset($_COOKIE['greeting'])) {
    $greeting = $_COOKIE['greeting'];
} else {
    $greeting = 'Добро пожаловать, новичек!';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <b style="color: darkgreen"><?php echo $greeting; ?></b>

</body>
</html>

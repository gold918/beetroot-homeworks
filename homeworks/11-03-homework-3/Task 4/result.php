<?php
/*4. Многостраничный тест Представим себе сайт с прохождением теста: на каждой странице находится вопрос, варианты ответа и кнопка “Далее”. Тест содержит некоторое количество страниц (допустим 3). На последней, 4-й странице пользователь должен получить результат теста. Задача – создать подобный тест.*/

session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['animal'];

if($answer1 === 'giraffe' && $answer2 === 'bear' && $answer3 === 'tiger') {
    $result = 'Ты сделал верный выбор';
} else {
    $result = 'Возможно, повезёт в следующий раз!';
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
    <h1 style="text-align: center; text-transform: uppercase">Результаты</h1>
    <b><?php echo $result; ?></b>
</body>
</html>
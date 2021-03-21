<?php
/*4. Многостраничный тест Представим себе сайт с прохождением теста: на каждой странице находится вопрос, варианты ответа и кнопка “Далее”. Тест содержит некоторое количество страниц (допустим 3). На последней, 4-й странице пользователь должен получить результат теста. Задача – создать подобный тест.*/

session_start();
$animal1 = $_POST['animal'];
$_SESSION['answer1'] = $animal1;

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
    <h1 style="text-align: center; text-transform: uppercase">Тест</h1>
    <p>2. Какое животное огромнее?</p>
    <form action="page-3.php" method="post">
        <label for="wolf">
            Волк
            <input type="radio" name="animal" value="wolf" id="wolf">
        </label>

        <label for="bear">
            Медведь
            <input type="radio" name="animal" value="bear" id="bear">
        </label>
    <p>
        <input type="submit" value="Далее" name="submit">
    </p>
    </form>
</body>
</html>
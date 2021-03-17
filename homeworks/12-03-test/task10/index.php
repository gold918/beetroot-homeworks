<?php
/*Задача 10: Создать форму авторизации
<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit" value="Отправить">
</form>
- Сделайте так, чтобы, если пользователь прошел авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о том, что введенный логин или пароль вбиты не правильно.
Подсказка: сверять введенные данные можно с заранее подготовленными в массиве.
- Модифицируйте код так, чтобы в случае успешной авторизации форма для ввода пароля и логина не показывалась на экране. ( Добавьте кнопку по которой будет происходить разлогнинивание.)
- Модифицируйте код так, чтобы на странице index.php выводилось сообщение об успешной авторизации. Решите задачу через флеш-сообщения на сессиях.
- Пусть на нашем сайте, кроме страницы login.php, есть еще и страницы 1.php, 2.php и 3.php. Сделайте так, чтобы к этим страницам мог получить доступ только авторизованный пользователь. Если пользователь не авторизован - выведите ему сообщение об этом и ссылку на страницу login.php.
- Модифицируйте ваш код так, чтобы нельзя было зарегистрировать пользователя с пустым логином или паролем.
- Модифицируйте ваш код так, чтобы логин был длиной от 4 до 10 символов. В случае, если это не так, выводите сообщение об этом над формой.
- Модифицируйте ваш код так, чтобы пароль был длиной от 6 до 12 символов. В случае, если это не так, выводите сообщение об этом над формой.*/

session_start();
$form = '
        <form action="login.php" method="POST">
            <input name="login" placeholder="login">
            <input name="password" type="password" placeholder="password">
            <input type="submit" value="Отправить">
        </form>
    ';

if (isset($_SESSION['message']['shortInfo'])) {
    foreach ($_SESSION['message']['shortInfo'] as $message) {
        echo '<p style = "color: green">' . $message . '</p>';
    }
    unset($_SESSION['message']);
}

if (isset($_SESSION['name'])) {
    echo '<h2>' . $_SESSION['message']['signIn'] . '</h2>';
    unset($_SESSION['message']);
    ?>
    <form action="login.php" method="POST">
        <input type="submit" value="Выйти" name="exit">
    </form>
    <?php
} else {
    echo $form;
}

if (isset($_SESSION['message']['error'])) {
    ?>
    <p style="color: red; text-transform: uppercase;"><?php echo $_SESSION['message']['error']; ?></p>
    <?php
    unset($_SESSION['message']);
}
?>

<a  href="page1.php">Page 1</a>
<a style="display: block" href="page2.php">Page 2</a>
<a style="display: block" href="page3.php">Page 3</a>


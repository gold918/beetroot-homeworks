<?php
session_start();

$authorisation = [
    'aaaa' => '111100',
    'abab' => '123450',
    'gors' => '543210',
    'wwww' => '111111',
];

if (!empty($_POST['login'] && !empty($_POST['password']))) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (strlen($login) < 4 || strlen($login) > 10) {
        $_SESSION['message']['shortInfo'][] = 'Слишком короткий или длинный логин. Логин должен быть от 4 до 10 символов.';
    }
    if (strlen($password) < 6 || strlen($password) > 12) {
        $_SESSION['message']['shortInfo'][] = 'Слишком короткий или длинный пароль. Пароль должен быть от 6 до 12 символов.';
    }

    if (!isset($_SESSION['message']['shortInfo'])) {
        if ($authorisation[$login] === $password) {
            $_SESSION['name'] = $login;
            $_SESSION['message']['signIn'] = "Поздравляю, $login. Вы ввошли";
        } else {
            $_SESSION['message']['error'] = 'Неверный логин или пароль';
        }
    }
}

if (isset($_POST['exit'])) {
    session_destroy();

}

header("Location: index.php");




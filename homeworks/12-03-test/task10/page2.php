<?php

session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['back'] = true;
    header('Location: block.php');
}

echo 'Поздравляю. Вы ввошли на страницу два';
<?php
session_start();

if (isset($_SESSION['back'])) {
    echo '<h1>Доступ запрещён. Пожалуйста, аторизируйтесь для просмотра данного контента.</h1>';
    unset($_SESSION['back']);
} else {
    header('Location: index.php');
}





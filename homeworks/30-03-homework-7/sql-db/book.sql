-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2021 г., 17:25
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(3) NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `author`, `title`, `path_file`, `type_file`, `sort_order`) VALUES
(1, 'Люк Веллинг', 'Разработка веб-приложений с помощью PHP', 'file/PHPbook.pdf', 'pdf', 1),
(2, 'Кевин Янк', 'PHP и MySQL. От новичка к профессионалу', 'file/PHPbook.pdf', 'docx', 2),
(3, 'Бретт Маклафлин', 'PHP и MySQL. Исчерпывающее руководство', 'file/PHPbook.pdf', 'pdf', 3),
(4, 'Павел Савинов', 'PHP: Правильный путь', 'file/PHPbook.pdf', 'pdf', 4),
(5, 'Роберт Никсон', 'Создаем динамические веб-сайты с помощью PHP, MySQL и JavaScript', 'file/PHPbook.pdf', 'txt', 5),
(6, 'Мэт Зандстра', 'PHP: объекты, шаблоны и методики программирования', 'file/PHPbook.pdf', 'txt', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sort_order` (`sort_order`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

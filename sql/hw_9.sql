-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2021 г., 00:06
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw_9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `list` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `paragraph`, `list`) VALUES
(1, 'About', 'This page is about everything', '{\"list\": [\"about first\", \"about second\", \"about third\"]}');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `list` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `title`, `paragraph`, `list`) VALUES
(1, 'Admin', 'Welcome to admin page', '{\"list\": [\"admin first\", \"admin second\", \"admin third\"]}');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `list` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `paragraph`, `list`) VALUES
(1, 'Gallery', 'There are lot\'s of various photos', '{\"list\": [\"gallery first\", \"gallery second\", \"gallery third\"]}'),
(2, 'Gallery 2', 'There are a lot of smt', '{\"list\": [\"gallery first 2\", \"gallery second 2\", \"gallery third 2\"]}');

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `list` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `title`, `paragraph`, `list`) VALUES
(1, 'Index', 'List of available pages', '{\"pages\": [\"about\", \"about/hi\", \"about/bye\", \"gallery\", \"gallery/hi\", \"gallery/bye\", \"admin\", \"admin/hi\", \"admin/bye\"]}');

-- --------------------------------------------------------

--
-- Структура таблицы `page404`
--

CREATE TABLE `page404` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `page404`
--

INSERT INTO `page404` (`id`, `title`, `paragraph`) VALUES
(1, 'Page 404', 'Sorry, required page does not exist');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `select_sandbox_id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `select_sandbox_id`, `title`) VALUES
(1, 1, 'Post 1'),
(2, 1, 'Post 2'),
(3, 2, 'Post 3'),
(4, 2, 'Post 4'),
(5, 3, 'Post 5'),
(6, 3, 'Post 6'),
(7, 4, 'Post 7'),
(8, 4, 'Post 8');

-- --------------------------------------------------------

--
-- Структура таблицы `select_sandbox`
--

CREATE TABLE `select_sandbox` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `select_sandbox`
--

INSERT INTO `select_sandbox` (`id`, `title`) VALUES
(1, 'Selection 1'),
(2, 'Selection 2'),
(3, 'Selection 3'),
(4, 'Selection 4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page404`
--
ALTER TABLE `page404`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `select_sandbox`
--
ALTER TABLE `select_sandbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `page404`
--
ALTER TABLE `page404`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `select_sandbox`
--
ALTER TABLE `select_sandbox`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

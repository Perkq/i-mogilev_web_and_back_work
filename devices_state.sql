-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2022 г., 21:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `devices_state`
--

-- --------------------------------------------------------

--
-- Структура таблицы `denied`
--

CREATE TABLE `denied` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMail` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check series` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `denied`
--

INSERT INTO `denied` (`id`, `Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES
(2, 'я', 'крутой', '26/4/2022', 'Denied', 'перец', 'test.jpg', '', ''),
(3, 'я', 'крутой', '26/4/2022', 'Denied', 'перец', 'test.jpg', '', ''),
(6, 'я', 'крутой', '26/4/2022', 'Denied', 'перец', 'test.jpg', '', ''),
(9, 'Kjk', 'Asfsa', '8/5/2022', 'Denied', 'INIfdmsd', '', '', ''),
(10, 'Kjk', 'Asfsa', '8/5/2022', 'Denied', 'INIfdmsd', '', '', ''),
(11, 'Я', 'Лол', '8/5/2022', 'Done', 'Кек', '', '', ''),
(12, 'klsmf', 'asicm', '9/5/2022', 'Done', 'f;sakmf', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `done`
--

CREATE TABLE `done` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMail` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check series` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `done`
--

INSERT INTO `done` (`id`, `Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES
(3, 'я', 'крутой', '26/4/2022', 'Done', 'перец', 'test.jpg', '', ''),
(4, 'я', '', '26/4/2022', 'Done', 'перец', 'test.jpg', '', ''),
(6, 'Я', 'Лол', '8/5/2022', 'Done', 'Кек', '', '', ''),
(10, 'Kjk', 'Asfsa', '8/5/2022', 'Done', 'INIfdmsd', '', '', ''),
(12, 'я', 'крутой', '26/4/2022', 'Done', 'перец', 'test.jpg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `inprogress`
--

CREATE TABLE `inprogress` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMail` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check series` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `inprogress`
--

INSERT INTO `inprogress` (`id`, `Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES
(2, 'я', '', '26/4/2022', 'in progress', 'перец', 'test.jpg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `moderation`
--

CREATE TABLE `moderation` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMail` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check series` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `moderation`
--

INSERT INTO `moderation` (`id`, `Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES
(136, 'klsmf', 'asicm', '9/5/2022', 'moderation', 'f;sakmf', '', '', ''),
(137, 'klsmf', 'asicm', '9/5/2022', 'moderation', 'f;sakmf', '', '', ''),
(138, 'klsmf', 'asicm', '9/5/2022', 'moderation', 'f;sakmf', '', '', ''),
(139, 'klsmf', 'asicm', '9/5/2022', 'moderation', 'f;sakmf', '', '', ''),
(140, 'klsmf', 'asicm', '9/5/2022', 'moderation', 'f;sakmf', '', '', ''),
(141, 'fklamdf', 'srlvkmskc', '9/5/2022', 'moderation', 'skemf;skmf', '', 'A', 'ABFS'),
(142, 'fklamdf', 'srlvkmskc', '9/5/2022', 'moderation', 'skemf;skmf', '', 'AB', ''),
(143, 'fklamdf', 'srlvkmskc', '9/5/2022', 'moderation', 'skemf;skmf', '', 'AB', '0'),
(144, 'fffffffffffffffff', 'afasf@mail.ru', '9/5/2022', 'moderation', 'gsldmnvslkdmv', '2.jpg', 'AB', '0'),
(145, 'herabora', 'lolkek@mail.ru', '9/5/2022', 'moderation', 'gskjnfsjkdfnsdf', '3.jpg', 'AB', '1402');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `denied`
--
ALTER TABLE `denied`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `done`
--
ALTER TABLE `done`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inprogress`
--
ALTER TABLE `inprogress`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `moderation`
--
ALTER TABLE `moderation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `denied`
--
ALTER TABLE `denied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `done`
--
ALTER TABLE `done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `inprogress`
--
ALTER TABLE `inprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `moderation`
--
ALTER TABLE `moderation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2017 г., 01:35
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base_tech`
--

-- --------------------------------------------------------

--
-- Структура таблицы `remont`
--

CREATE TABLE IF NOT EXISTS `remont` (
  `imei` bigint(20) NOT NULL,
  `model` text NOT NULL,
  `status` text NOT NULL,
  `cost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `remont`
--

INSERT INTO `remont` (`imei`, `model`, `status`, `cost`) VALUES
(1, 'Sony', 'OK', '200 руб'),
(6, 'Sony', 'OK', '200 rub.'),
(5, 'Телефон', 'ОК', '40 грівень'),
(2, 'Samsung', 'Not OK', '25 рублей'),
(3, 'Nokia', 'OK', '36 рублей'),
(4, 'Xiaomi', 'OK', '24 рублей');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

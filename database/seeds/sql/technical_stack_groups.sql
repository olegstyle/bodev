-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 15 2017 г., 12:55
-- Версия сервера: 5.6.34
-- Версия PHP: 5.3.10-1ubuntu3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bodev`
--

-- --------------------------------------------------------
--
-- Дамп данных таблицы `technical_stack_groups`
--

INSERT INTO `technical_stack_groups` (`id`, `name`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Frontend', 100, '2017-02-16 12:41:46', '2017-02-16 12:41:46'),
(2, 'Backend', 200, '2017-02-16 12:42:05', '2017-02-16 12:42:05'),
(3, 'DataBase', 300, '2017-02-16 14:54:32', '2017-02-16 14:54:32'),
(4, 'CMS', 400, '2017-02-17 15:25:33', '2017-02-17 15:25:33'),
(5, 'GEO', 500, '2017-02-19 05:48:26', '2017-02-19 05:48:26'),
(6, 'Framework', 450, '2017-02-19 06:14:28', '2017-02-19 06:14:28'),
(7, 'Other', 800, '2017-02-19 06:30:00', '2017-02-19 06:30:28'),
(8, 'Mobile', 50, '2017-02-21 16:55:32', '2017-02-21 16:55:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

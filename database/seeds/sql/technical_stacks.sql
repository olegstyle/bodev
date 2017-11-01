-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 15 2017 г., 12:56
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
-- Дамп данных таблицы `technical_stacks`
--

INSERT INTO `technical_stacks` (`id`, `name`, `image_url`, `level`, `date_start`, `created_at`, `updated_at`, `group_id`) VALUES
(1, 'HTML', 'technicalstacks/February2017/V3CwVdkxl2ZL33P9vflG.png', 5, '2011-01-14', '2017-01-17 04:32:40', '2017-02-17 15:21:18', 1),
(2, 'CSS', 'technicalstacks/February2017/p3LQlZWTYS9qnh3VWBwc.png', 5, '2011-01-14', '2017-01-17 04:33:00', '2017-02-16 14:52:43', 1),
(3, 'PHP', 'technicalstacks/February2017/2SIs5zBAfQdXcuD0ZLOf.png', 5, '2011-04-08', '2017-02-16 14:51:25', '2017-02-16 14:51:52', 2),
(4, 'MySQL', 'technicalstacks/February2017/asHRzjOonYEQg7eqFYQn.png', 5, '2011-04-22', '2017-02-16 15:00:36', '2017-02-16 15:00:36', 3),
(5, 'jQuery', 'technicalstacks/February2017/9jvjnQTR02tK3fZOutiS.png', 5, '2012-06-01', '2017-02-17 15:22:29', '2017-02-17 15:22:29', 1),
(7, 'WordPress', 'technicalstacks/February2017/PDpQOQGrU5yVzy79306P.png', 3, '2013-08-12', '2017-02-17 15:25:07', '2017-02-17 15:26:37', 4),
(8, 'QPLBoard', 'technicalstacks/February2017/joiRygoTZ4fLujzuFUA1.gif', 4, '2014-02-12', '2017-02-18 08:54:08', '2017-02-18 08:54:08', 4),
(9, 'Bitrix', 'technicalstacks/February2017/KefVNLwN09N8jbo3xODw.png', 3, '2014-05-05', '2017-02-18 15:25:33', '2017-02-18 15:25:33', 4),
(10, 'ExtJS', 'technicalstacks/February2017/J2ZbYfpCMkQ4UIbIHH44.png', 3, '2014-06-02', '2017-02-19 06:13:46', '2017-02-19 06:15:07', 6),
(11, 'OpenLayers', 'technicalstacks/February2017/IwvNBN3V13AzQKi0dcp2.png', 3, '2014-07-07', '2017-02-19 06:19:38', '2017-02-19 06:19:38', 5),
(12, 'OSM', 'technicalstacks/February2017/unWadoN5zgf6KyO7lEIc.png', 3, '2014-07-07', '2017-02-19 06:20:47', '2017-02-22 08:38:22', 5),
(13, 'GMaps', 'technicalstacks/February2017/HOI8FLeHWOV3pnojkUM5.png', 4, '2014-07-07', '2017-02-19 06:24:16', '2017-02-22 08:38:34', 5),
(14, 'TileCache', 'technicalstacks/February2017/wShmHzDBhq9lU2zta7rL.png', 4, '2014-08-11', '2017-02-19 06:27:30', '2017-02-19 06:27:30', 5),
(15, 'Mapnik', 'technicalstacks/February2017/skrJ1NmnWHh8C9dGfIVJ.png', 3, '2014-08-11', '2017-02-19 06:28:22', '2017-02-19 06:28:22', 5),
(16, 'Bitbucket', 'technicalstacks/February2017/vIiQSHMhJTA931NC4sDV.png', 5, '2014-07-07', '2017-02-19 06:29:56', '2017-02-19 06:39:48', 7),
(17, 'Git', 'technicalstacks/February2017/TFO1UmT3MwTTlhXXaEUj.png', 4, '2014-07-07', '2017-02-19 06:42:48', '2017-02-19 06:42:48', 7),
(18, 'Sass', 'technicalstacks/February2017/LHjvBiF63Q7HP86aOpL2.png', 4, '2014-07-07', '2017-02-19 06:52:44', '2017-02-19 06:52:44', 1),
(19, 'PostgreSQL', 'technicalstacks/February2017/w0NrsVgj8uObiEtTAZdK.png', 4, '2014-07-07', '2017-02-19 06:59:46', '2017-02-19 06:59:46', 3),
(20, 'OpenCart', 'technicalstacks/February2017/Ozlp9769LQBwWdjlwZaG.png', 5, '2014-12-01', '2017-02-19 07:17:01', '2017-02-19 07:17:01', 4),
(21, 'Rest API', 'technicalstacks/February2017/TLefiH4jwoQm9yMiJZhd.png', 4, '2014-07-07', '2017-02-19 08:53:05', '2017-02-19 08:53:24', 7),
(22, 'C++', 'technicalstacks/February2017/yE2bZLVasXjZZpLcTUaR.png', 3, '2012-01-16', '2017-02-19 08:54:16', '2017-02-19 08:54:16', 2),
(23, 'Redis', 'technicalstacks/February2017/riIsTvjnWSlDG6mxum5K.png', 5, '2015-02-02', '2017-02-19 08:55:08', '2017-02-19 08:55:08', 3),
(24, 'Python', 'technicalstacks/February2017/QQcaAGstj0tQ3DedOrjg.png', 4, '2013-07-08', '2017-02-21 09:49:01', '2017-02-21 09:55:37', 2),
(25, 'Android', 'technicalstacks/February2017/J8BmjDYEiiMJGvmusXTh.png', 5, '2015-10-08', '2017-02-21 16:57:53', '2017-02-21 16:57:53', 8),
(26, 'Java', 'technicalstacks/February2017/E3DokEaNSUXfEOA4Zxln.png', 4, '2013-09-09', '2017-02-21 17:01:13', '2017-02-21 17:01:13', 2),
(27, 'iOS', 'technicalstacks/February2017/HQb45qHyTI4llWxuzlik.png', 4, '2016-02-08', '2017-02-21 17:02:05', '2017-02-21 17:02:05', 8),
(28, 'Swift', 'technicalstacks/February2017/Z7ibwQFZFEgDQ4vJLCLv.png', 4, '2016-02-08', '2017-02-21 17:03:03', '2017-02-21 17:03:03', 2),
(29, 'Bootstrap', 'technicalstacks/February2017/GiXZ7jTxytQLURM2DYfD.png', 5, '2015-01-12', '2017-02-22 05:07:29', '2017-02-22 05:22:16', 6),
(30, 'Django', 'technicalstacks/February2017/JH0k4bfJUeugvSlkyvNy.png', 3, '2016-09-05', '2017-02-22 05:23:14', '2017-02-22 05:23:14', 6),
(31, 'SQLite', 'technicalstacks/February2017/LFjDQEK9pvwp33zsSJyc.png', 5, '2016-05-16', '2017-02-22 16:56:49', '2017-02-22 16:57:11', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

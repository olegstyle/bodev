-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 15 2017 г., 13:26
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
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`) VALUES
(4, 'title', 'Title', 'Borisenko Oleg • Borysenko Oleh • Software Engineer • iOS development • Android development • Web and RESTful Development • Portfolio • CV', '', 'text', 0),
(5, 'email', 'Email', 'olegstyle1@gmail.com', '', 'text', 2),
(6, 'header_title', 'Header Title', 'Software Engineer', '', 'text', 1),
(7, 'header_subtitle', 'Header Subtitle', 'Android development • iOS development • Web Development * RESTful API Development', '', 'text', 3),
(12, 'about_me_long_ru', 'About Me Long (RU)', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', '', 'text_area', 10),
(13, 'about_me_short_en', 'About Me Short (EN)', '                                                                                                                                                                                                                                                                                                                                                                                                                                Hi! I am Oleg. <strong>Borisenko Oleg</strong>. I am <strong>Software Engineer</strong> in Royal Soft Studio and can make an Web applications, RESTful API, Android and iOS applications. <br>\r\nI like programming. When i was 7 years old I was dreaming to create a video game for my Sega Mega Drive and firmly went to that goal. At 14 years old I went to college and when I was 15 years old I made my first console application "Hello World" with C++.<br>\r\nI had diploma project on the subject: "Music player developing" when I was 18 years old. Served task at C++ Builder 6 with used library bass.dll. I got highest result for the project - 100 of 100.<br>\r\nNow I improve myself when i have a free time. I improve my skills of Android SDK, Laravel and also english language. I would like to learn tennis and go to gym, someday. Necessarily I will learn a new accords for my electro gitar, and maybe i can find some time for video games.  As for video games, i would like to improve my skill in League of Legends.                                                                                                                                                                                                                                                                                                                                                                ', '', 'text_area', 9),
(14, 'about_me_long_en', 'About Me Long (EN)', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', '', 'text_area', 11),
(15, 'skype', 'Skype', 'olehstail', '', 'text', 4),
(16, 'about_me_short_ru', 'About Me Short (RU)', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Привет! Меня зовут Олег. <strong>Борисенко Олег</strong>. Я <strong>Software Engineer</strong> в студии Royal Soft. Занимаюсь разработкой Web приложений,  RESTful API, Android и iOS приложений.<br>\r\nЯ люблю программирование. Еще в 7 лет я хотел создавать игры для своей Sega Mega Drive и твердо шел к своей цели. В 14 пошел в колледж и уже в 15 начал изучать Pascal и C/С++. <br>\r\nВ 18 лет мне предстояла защита дипломной работы на тему: "Разработка музыкального плеера". Выполнял задачу на C++ Builder 6 используя библиотеку bass.dll. Добавив в плейлист песню "NickelBack - Far Away" она начала играть и комиссия в ответ поставила наивысшую оценку: 100/100.\r\nЯ имею два диплома: <br>\r\n• Об окончании колледжа: <i>Младший специалист</i><br>\r\n• Об окончании университета: <i>Бакалавр</i><br>\r\nСразу же после окончания колледжа попробовал реализовать себя как web-разработчика и через более 3 лет работы стал инженером в области web и мобильных приложений. <br>\r\nСейчас уделяю много времени на самосовершенствование. Подтягиваю знания по Android SDK, Laravel а так же хожу на курсы по разговорному английскому. Хочу в скором времени заняться спортом. Может пойду на теннис и когда-то поеду на горы покататься на сноуборде. Займусь музыкой, есть электрогитара, но нет времени учиться. Знаю всего несколько аккордов.\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', '', 'text_area', 8),
(17, 'seo_description', 'SEO Description', '                                                                                                Hi! I am Oleg. Borisenko Oleg. I am Software Engineer and doing Web applications, RESTful API, Android and iOS applications.                                                                                    ', '', 'text_area', 6),
(18, 'seo_keywords', 'SEO Keywords', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                development, engineering, Borisenko, Oleg, Software Engineer, Full Stack Developer, Android, iOS, dev, Portfolio, CV, REST, RESTful, bodev, bodev.pro, developer, Software Engineer, engineer, web, Backend developer, frontend developer, app, application                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ', '', 'text_area', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

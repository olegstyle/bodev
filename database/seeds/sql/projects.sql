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
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name_ru`, `gist_ru`, `description_ru`, `created_at`, `updated_at`, `name_en`, `gist_en`, `description_en`, `image_url`, `date_start`, `date_end`, `link`) VALUES
(1, 'LuckyFlowers', 'Магазин цветов', 'Это мой первый заказ. В проекте не используется Framework''и или CMSки. Только php. Только хардкор)', '2017-01-10 04:33:00', '2017-02-17 18:22:47', 'LuckyFlowers', 'Flowers Shop', 'It''s my first project by customer. I didn''t use framework or CMS in project. Only php. Only hardcore)', 'projects/February2017/gpiNzLMxMxaoGXrcTkRc.jpg', '2012-05-15', '2012-06-21', 'http://luckyflowers.com.ua/'),
(2, 'BabyConference', 'Регистрация на конференцию для беременных', 'Этот проект мне предоставила студия Sierra Group как тестовое задание. В короткие сроки необходимо было изучить CMS WordPress и на нем же реализовать проект. ', '2017-02-18 04:50:22', '2017-02-18 05:03:22', 'BabyConference', 'Sign up to conference for pregnant', 'Studia Sierra group give me this project for test task. I must be learn CMS WordPress in short time and on it create a Project ', 'projects/February2017/8FZew5r8M9hbpwiaNylb.jpg', '2013-08-05', '2013-08-30', ''),
(3, 'BigBang', 'Персональный сайт коллектива BigBang', 'Второй проект от Sierra Group. Реализовался на CMS WordPress. К сожалению проект не дожил до production и он был закрыт не реализовавши и половины ', '2017-02-18 05:27:11', '2017-02-18 05:41:57', 'BigBang', 'Personal site for collective BigBang', 'Second project by Sierra Group. Realizated on CMS WordPress. Unfortunately project didn''t live in production and didn''t realized a 50% of it', 'projects/February2017/gJGvWx3XKDhOMtS9x1OZ.jpg', '2013-09-09', '2013-09-27', ''),
(4, 'GeekCranium', 'Сайт порфолио GeekCranium', 'Последняя работа в студии Sierra Group. Использвался CMS WordPress. Общался с заказчиком по скайпу для уточнения деталей и всвязи с этим улучшил свой английский. На сайте было много анимаций то всподвигло меня лучше озучить jQuery и функцию animate', '2017-02-18 06:51:45', '2017-02-18 07:04:59', 'GeekCranium', 'Site portfolio for GeekCranium', 'Last work in Sierra Group Studio. Used CMS WordPress. I am communicated with customer in skype for give details and in this connection my english level up. Site have more animations and in this connection i know better jQuery and it function - animate ', 'projects/February2017/G95BN3L6Jv3vCNzXdiLJ.jpg', '2013-10-01', '2013-11-01', 'http://www.geekcranium.com/'),
(5, 'Atkonti', 'Тестовое задание от студии RoyalWeb', 'Задание оказалось довольно простым. Потратил на решение всего 6 часов.  ', '2017-02-18 08:48:10', '2017-02-18 08:49:26', 'Atkonti', 'Test task by RoyalWeb Studio', 'Task was very easy. I did this work for 6 hours', 'projects/February2017/ti5khauoFOeq43uZS6Oa.jpg', '2014-01-25', '2014-01-25', 'http://royalweb.com.ua/portfolio/vebsajty/shou_zvezd/'),
(6, 'Foro.ge', 'Доска обьявлений', 'В начале работы в студии RoyalWeb мне дали не оконченый проект. Нужно было провести реинженеринг кода CMS QPLboard и добавить возможность выбора языка. Также провести fix для более 20 багов ', '2017-02-18 09:02:15', '2017-02-23 05:25:50', 'Foro.ge', 'ADV Board', 'When i begin work in RoyalWeb Studio i was given didn''t ended project. I was did code reingenering CMS QPLboard and add switch language. Also I was did bigfix for more of 20 items ', 'projects/February2017/ki7GDmdww6BXrLgCctX0.jpg', '2014-02-12', '2017-03-31', 'Http://foro.ge/'),
(7, 'БиБиЭс', 'Доска обьявлений', 'Мой поседний проект на QPLboard.\r\nЗдесь мне предоставили создание проекта с нуля. Мне необходимо было сверстать странички, натянуть верстку на QPLboard а так же создать и подключить пару модулей для комментирования и удобства работы с пользователями.', '2017-02-18 10:26:21', '2017-02-23 14:21:11', 'БиБиЭс', 'ADV board', 'My last project on CMS QPLboard. This project I was done from begin to end. My task was create and include two modules for commenting and beautifully look users.', 'projects/February2017/6rmAy9qfmEfmAGvKyYbe.jpg', '2014-03-24', '2014-04-25', 'Http://бибиэс.рф/'),
(8, '7Koleso', 'Магазин шин и дисков', 'Для работы над этим проектом необходимо было изучить CMS bitrix и как можно быстрее т.к. дедлайн был буквально через 3 недели.\r\nМне довелось изучать CMS во время проектирования. Проект был сдан вовремя, но к сожалению он не дожил до наших дней', '2017-02-18 15:28:16', '2017-02-23 14:26:43', '7Koleso', 'Tyres and wheels shop', 'I was need learning a CMS Bitrix before work with this project and did it as soon as possible because after 3 weeks deadline. I done project in time and I received an award', 'projects/February2017/KfFY1pITrJZRT0PBqb3m.jpg', '2014-05-05', '2014-06-06', ''),
(9, 'TyreMag', 'Магазин шин и дисков', 'Мой второй проект на CMS Bitrix. Верстка, натяжка функционала и оптимизация была на мне. Проект сдан в срок, но не дожил до наших дней', '2017-02-19 05:23:56', '2017-02-23 14:32:49', 'Tyremag', 'Tyres and wheels shop', 'My second project on CSM Bitrix', 'projects/February2017/NHBwaeRsUwH3Z9wRhA8g.jpg', '2014-06-09', '2014-07-04', ''),
(10, 'GPSRadar', 'GPS-трекинг в реальном времени для транспорта', 'В этом проекте моими тасками было: история трека (путь транспорта), админ панель и эмулятор движения. История трека рисуется с помощью TileCache на Python’e. Админка предусмотрена как для менеджеров, так и для администраторов. Они имеют возможность редактирования информации своих водителей, автомобилей и т.д. Для эмуляции движения был создан демон на основе PHP+PostgreSql. Пользователи сервиса GPSRadar могут указать путь эмуляции движения как отрезком, так и кольцом, места остановки, время остановки, скорость движения и другие параметры', '2017-02-19 05:32:19', '2017-02-24 05:01:48', 'GPSRadar', 'Realtime gps-traking of various vehicle', 'At that project a had a task: track history (vehicle way), admin panel and device emulator. Track history draw at Python by library TileCache. I was create demon for emulator at PHP and PostgreSQL. Users can create way for device, stop points, stop time, device speed and other parameters\r\n', 'projects/February2017/6vOCskk2O0kG93Dznek3.jpg', '2014-07-07', '2014-11-07', 'http://control.gpsradar.com.ua'),
(11, 'GPSRadar', 'Landing page для GPSRadar', 'Мой первый лендинг', '2017-02-19 05:37:41', '2017-02-24 05:02:35', 'GPSRadar', 'Landing page for GPSRadar', 'My first Landing-page', 'projects/February2017/Pqvej06YQEI10Es21cdm.jpg', '2014-11-10', '2014-11-21', 'https://gpsradar.com.ua'),
(12, 'HullTyre', 'Магазин шин и дисков', 'Для данного магазина был написан модуль импорта из csv файла. <br>Особенности:<br>\r\n- Ежедневный импорт товаров из csv файла<br>\r\n- Подбор шин и дисков по авто<br>', '2017-02-19 07:12:27', '2017-02-24 05:09:31', 'HulkTyre', 'Tyres and wheels shop', 'I was create module of import from csv file for that shop.<br>\r\nFeatures:<br>\r\n- product import everyday<br>\r\n- search tyres and wheels by automobile<br>', 'projects/February2017/pKZfvFdHTpTFUnWWacRh.jpg', '2014-12-01', '2014-12-26', 'http://hulktyre.ru'),
(13, 'Shindi', 'Магазин шин и дисков', 'В проекте используется CMS Opencart. Для данного магазина был написан модуль импорта из csv файла. Особенности:\r\n- Ежедневный импорт товаров из csv файла<br>\r\n- Подбор шин и дисков по авто<br>\r\n- Калькулятор шин и дисков<br>\r\n- Подключен виджет примерки шин и дисков WheelsVision<br>\r\n', '2017-02-19 07:14:35', '2017-02-24 05:11:37', 'Shindi', 'Tyres and wheels shop', 'I was create module of import from csv file for that shop.<br>\r\nFeatures:<br>\r\n- product import everyday<br>\r\n- search tyres and wheels by automobile<br>\r\n- tyres and wheels calculation <br>\r\n- included WheelsVision widget<br>', 'projects/February2017/19ZFMmjDwk9wi0uIMsDL.jpg', '2015-01-12', '2015-01-30', 'http://shindi.com.ua'),
(14, 'TyreTrader', 'Биржа шин и дисков', 'В этом проекте необходимо было сделать редизайн, переход на более свежую версию ExtJS, а также добавление новых функций. Проект был командный и необходима была хорошая коммуникация для решения задачи. Здесь перечислены некоторые таски из моего проекта: \r\n1) весь Личный кабинет: <br>\r\n1.1) форма личных данных <br>\r\n1.2) менеджеры<br>\r\n1.3) Анкета поставщика<br>\r\n1.4) Анкета магазина<br>\r\n1.5) Баланс и пополнение баланса<br>\r\n1.6) Активация и просмотр активируемых услуг<br>\r\n2) Наложение watermark на фотографии из базы TyreTrader и их выгрузка (по-одиночно, несколько и по cron’у)<br>\r\n3) Страница поставщика<br>\r\n4) Добавление в корзину<br>\r\n5) Покупки (для клиентов) и продажи (для поставщиков)<br>\r\n6) История покупок и продаж<br>\r\n', '2017-02-19 07:35:55', '2017-02-24 07:15:22', 'TyreTrader', 'Exchange of tires and wheels', 'At this project I had tasks: do redesign, ExtJS move from version 3 to version 5, and add new functions. Project had been at command and I was need good communication. Task detail: <br>\r\n1) Personal area<br>\r\n1.1) Personal data form<br>\r\n1.2) Managers form<br>\r\n1.3) Supplier form<br>\r\n1.4) Shop form<br>\r\n1.5) Balance and cash<br>\r\n1.6) Services view and activate<br>\r\n2) Programmatically append watermark at foto and downloading it<br>\r\n3) Supplier page<br>\r\n4) Adding to basket<br>\r\n5) Sale (for suppliers) and Purchases (for buyers) <br>\r\n6) History of Sale and Purchases<br>\r\n', 'projects/February2017/jrXGY0eel7T1IV15Kt7O.png', '2015-02-02', '2015-07-06', 'tyretrader.ua/account/'),
(15, 'WheelsVision', 'Конфигуратор дисокв', 'Моей задачей в этом проекте было:<br>\r\n- верстка\r\n- наложение цвета на авто (использовалась маска авто и python PiP lib)<br> \r\n- наложение диска<br>\r\n- автоматический расчет размера шин и дисков<br>\r\n- подключаемый виджет для сайтов<br>\r\nТакже было проведено тестирование работы библиотек работы с изображением на python (0.2 сек) против php (4.7 сек), в результате которого и был принят выбор.', '2017-02-19 07:39:38', '2017-02-24 07:54:26', 'WheelsVision', 'Configurator of wheels', 'It is my tasks for this project: <br>\r\n- makeup\r\n- color mix at automobile image (with PiP python lib)<br>\r\n- append wheels to automobile image<br>\r\n- automatically calculation image size of tyre and wheel image <br>\r\n- widget for including at clients web-pages<br>', 'projects/February2017/0Mn21ktm0JAoRFydBhWv.jpg', '2015-07-06', '2015-10-02', 'http://wheelsvision.com/'),
(16, 'TyreTrader для android', 'Биржа шин и дисков', 'Мне предоставили возможность изучить Android для проекта TyreTrader. Необходимо было перенести некоторый функционал из web-приложения дабы предоставить упрощенный доступ к данным из мобильных устройств. Вся разработка приложения лежала на мне и по сегодняшний день создаю для него обновления', '2017-02-19 07:42:19', '2017-02-24 08:02:58', 'TyreTrader for android', 'Exchange of tires and wheels', 'I had give task optimize project TyreTrader for Android. Detail: Needed move some functions from web app to mobile device. Some of these:<br>\r\n- Filtering and searching tyres or wheels at wholesale<br>\r\n- Personal data form<br>\r\n- Supplier page<br> \r\n- Adding to basket<br>\r\n- Sale (for suppliers) and Purchases (for buyers)<br>\r\n- History of Sale and Purchases<br>', 'projects/February2017/aw5jNqWrLFj09aJCIRcF.png', '2015-11-02', '2016-01-04', 'https://play.google.com/store/apps/details?id=ua.tyretrader.opt'),
(17, 'Kinosklad', 'Магазин КиноСклад', 'В этом проекте мне необходимо было сделать редизайн, сделать ежедневный импорт из 1C предприятие, а так же провести bugfix', '2017-02-19 07:44:48', '2017-02-24 08:55:59', 'Kinosklad', 'Film store shop', 'At this project i had tasks: do redesign and import from 1C app every day', 'projects/February2017/TSq1grenfPSebOiotMlj.jpg', '2016-01-04', '2016-01-29', 'http://www.kinosklad.ru/'),
(18, 'TyreTrader для iOS', 'Биржа шин и дисков', 'Мне предоставили возможность изучить iOS для проекта TyreTrader. Необходимо было перенести некоторый функционал из web-приложения дабы предоставить упрощенный доступ к данным из мобильных устройств. Вся разработка приложения лежала на мне и по-сегодняшний день создаю для него обновления', '2017-02-19 07:48:24', '2017-02-24 08:03:17', 'TyreTrader for iOS', 'Exchange of tires and wheels', 'I had give task optimize project TyreTrader for iOS. Detail: Needed move some functions from web app to mobile device. Some of these:<br>\r\n- Filtering and searching tyres or wheels at wholesale<br>\r\n- Personal data form<br>\r\n- Supplier page<br> \r\n- Adding to basket<br>\r\n- Sale (for suppliers) and Purchases (for buyers)<br>\r\n- History of Sale and Purchases<br>', 'projects/February2017/F76mxpvKZ37UA4bzGpAl.jpeg', '2016-02-01', '2016-03-18', 'https://itunes.apple.com/app/tyretrader-birza-sin-i-diskov/id1137883500'),
(19, 'WheelsVision для Android', 'Конфигуратор дисков', 'Перенос веб-версии приложения под Android. Здесь появился обновленный дизайн, а так же некоторые новые функции как, например, "сделать фото авто".', '2017-02-19 07:51:20', '2017-02-24 08:10:42', 'WheelsVision for Android', 'Configurator of wheels', 'I had give task optimize project Android for iOS. At this app I had need: <br> \r\n- append wheels to automobile image<br> \r\n- automatically calculation image size of tyre and wheel image <br> \r\n- take automobile photo<br>\r\n- and other<br>', 'projects/February2017/LllbLpLhbW7NWHVTM1aH.jpg', '2016-04-04', '2016-05-13', 'https://play.google.com/store/apps/details?id=com.wheelsvision'),
(20, 'WheelsVision для iOS', 'Конфигуратор дисков', 'Перенос веб-версии приложения под iOS. Здесь появился обновленный дизайн, а так же некоторые новые функции как, например, "сделать фото авто".', '2017-02-19 07:56:39', '2017-02-24 08:10:23', 'WheelsVision for iOS', 'Configurator of wheels', 'I had give task optimize project WheelsVision for iOS. At this app I had need: <br> - append wheels to automobile image<br> - automatically calculation image size of tyre and wheel image <br> - take automobile photo<br> - and other<br>', 'projects/February2017/slUcKBS35umgj44h7IUt.jpg', '2016-05-16', '2016-07-15', 'https://itunes.apple.com/ru/app/wheelsvision/id1141295175'),
(21, 'TyreTrader Assistant for Android', 'Калькулятор шин и дисков', 'Необходимо было создать приложение для расчета размера шин и дисков. Также предоставление справки по шинам, дискам и автомобилям\r\n', '2017-02-19 08:03:28', '2017-02-23 12:38:59', 'Tyretrader Assistant for Android', 'Calculator of tyres and wheels', '', 'projects/February2017/xi2mfs90aEasbNI2aXJW.jpg', '2016-07-25', '2016-07-08', 'https://play.google.com/store/apps/details?id=info.tyretrader.assistant'),
(22, 'TyreTrader Assistant for iOS', 'Калькулятор шин и дисков', 'Необходимо было создать приложение для расчета размера шин и дисков. Также предоставление справки по шинам, дискам и автомобилям', '2017-02-19 08:05:41', '2017-02-23 12:40:22', 'TyreTrader Assistant for iOS', 'Calculator of tyres and wheels', '', 'projects/February2017/Fd6hHaWvBs9RXRauG51D.jpg', '2016-07-11', '2016-07-22', ''),
(23, 'Isingle', 'Магазин Автотоваров', 'Верстка, натяжка верстки на CMS Bitrix, интеграция с 1C Предприятием, а также исправление ошибок связанные с ЧПУ', '2017-02-19 08:09:05', '2017-02-23 12:43:10', 'Isingle', 'Vehicle products shop', '', 'projects/February2017/yxVRsC73k1znNgP96lrp.jpg', '2016-08-01', '2016-09-16', 'https://www.isingle.com.ua/'),
(24, 'BlackBox', 'Черный список покупателей', 'Вся работа над приложением была на мне. Основные таски были такие:<br>\r\n- Добавлять недоброжелателя указав необходимые поля. При этом будет осуществлена проверка по api почтовых служб была ли получена посылка.<br>\r\n- Проверять недоброжелателя по номеру телефона<br>\r\n- Проверять недоброжелателя по фамилии<br>\r\n- Регистрироваться как магазин<br>\r\n- Выгружать csv файла (только для проверенных магазинов)<br>\r\n', '2017-02-19 08:11:11', '2017-02-23 12:45:03', 'BlackBox', 'Black list of buyers', '', 'projects/February2017/ZSe6JngskiKoXLKHvwgs.jpg', '2016-10-03', '2016-10-07', 'http://blackbox.net.ua/'),
(25, 'BlackBox для Android', 'Черный список покупателей', 'Приложение получило весь функционал веб-версии BlackBox.net.ua, а так же возможность проверки телефонных номеров из телефонной книги и проверку исходящих/входящих звонков.', '2017-02-19 08:14:29', '2017-02-23 12:49:23', 'BlackBox for Android', 'Black list of buyers', '', 'projects/February2017/tlVYW2071LhTRvYDpnEU.jpg', '2016-10-17', '2016-10-25', 'http://blackbox.net.ua/#app'),
(26, 'BlackBox для iOS', 'Черный список покупателей', 'Приложение получило весь функционал веб-версии BlackBox.net.ua, а так же возможность проверки телефонных номеров из телефонной книги.', '2017-02-19 08:15:46', '2017-02-23 12:49:34', 'BlackBox for iOS', 'Black list of buyers', '', 'projects/February2017/qfFp5QaVY5RVwq54HTLC.jpg', '2016-10-18', '2016-10-28', 'http://blackbox.net.ua/#app'),
(27, 'Save Weather Save Money', 'Опросник для клиентов', 'Передо мной  задача создать копию приложения опроса клиентов iOS для Android. Опросы проводят работники компании. При разработке были применены некоторые изменения:<br>\r\n- Улучшен UI<br>\r\n- При выходе из приложения больше не запрашивает пароль, но только в случае если токен еще не устарел<br>\r\n- При выходе из приложения больше не пропадают завершенные опросы<br>\r\n- Теперь можно обновлять список событий<br>\r\n', '2017-02-19 08:23:24', '2017-02-23 12:52:56', 'Save Weather Save Money', 'Interview for clients', '', 'projects/February2017/bRWoXAAHzpx792J2xB1I.jpg', '2017-01-09', '2017-01-13', 'https://sesw-hwec.savewatersavemoney.co.uk/appLink/clientDownload/index.html'),
(28, 'Felgtech', 'Магазин дисков', 'Freelance проект на OpenCart. Дизайн и разработка by Me', '2017-02-19 08:27:45', '2017-02-23 12:57:46', 'Felgtech', 'Wheels shop', '', 'projects/February2017/fznb0hA5aP6oVZKZOis2.jpg', '2016-11-21', '2017-03-03', 'http://www.felgtech.com.ua/'),
(29, 'APKRynok', 'Доска обьявлений', 'Freelance проект где был малый бюджет. От платных CMS заказчик отказывался пришлось делать велосипед из CMS OpenCart)\r\nДизайн и реализация by Me', '2017-02-19 08:30:36', '2017-02-23 13:00:11', 'APKRynok', 'ADV board', '', 'projects/February2017/1KRGEoBdefOFz6Mxk0Gm.jpg', '2015-08-03', '2015-09-11', 'http://apkrynok.com.ua/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

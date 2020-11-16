-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 02 2020 г., 01:03
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `content` text NOT NULL,
  `announcement` text,
  `img` text,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `content`, `announcement`, `img`, `timestamp`) VALUES
(73, 'Lorem', ' \r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro harum sed veritatis impedit at corrupti, necessitatibus velit aliquid repellendus, magnam explicabo volupdtates ex nam culpa ipsum nemo quae pariatur aliquam! ', 'Lorem ipsum dolor sit, amet.', '1.jpg', '2020-11-02 01:00:23'),
(74, 'Lorem ipsum', ' \r\n    Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Voluptas similique temporibus sit excepturi molestiae tenetur quod est, itaqu12e? Fugiat, sit architecto numquam, necessitatibus, commodi doloremque modi saepe, tempora nemo vero mollitia. Ab repellat quia nemo mollitia illum praesentium modi voluptatem! ', 'Lorem ipsum dolor sit, amet.', '2.jpg', '2020-11-02 01:00:30'),
(75, 'News 146%', 'orem ipsum dolor sit, amet consectetur, adipisicing elit. Voluptas similique temporibus sit excepturi molestiae tenetur quod est, itaque? Fugiat, sit architecto numquam, necessitatibus, commodi doloremque modi saepe, tempora nemo vero mollitia. Ab repellat quia nemo mollitia illum praesentium modi voluptatem!', 'Lorem ipsum dolor sit amet consectetur.', '3.jpg', '2020-11-02 01:00:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

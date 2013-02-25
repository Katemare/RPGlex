-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 25 2013 г., 16:49
-- Версия сервера: 5.5.29
-- Версия PHP: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `gurpsterms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category_fields`
--

CREATE TABLE IF NOT EXISTS `category_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `category_fields`
--

INSERT INTO `category_fields` (`id`, `category_id`, `name`) VALUES
(7, 3, 'Ð¡Ñ‚Ð¾Ð¸Ð¼Ð¾ÑÑ‚ÑŒ'),
(8, 3, 'Ð”Ð»Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ'),
(9, 3, 'Ð¢Ð¸Ð¿');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `term_id`, `text`, `stamp`) VALUES
(1, 0, 1, 'ÐšÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¹ 1', '2013-02-15 12:41:43'),
(2, 0, 1, 'ÐšÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¹ Ð´Ð²Ð°', '2013-02-15 12:41:57'),
(3, 0, 9, 'asdsa', '2013-02-25 13:24:17');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'address', 'some address'),
(2, 'email', 'email@example.com'),
(3, 'new', 'a;kjd;askda'),
(4, 'one_more', 'asdasdasdasdasdad');

-- --------------------------------------------------------

--
-- Структура таблицы `static_pages`
--

CREATE TABLE IF NOT EXISTS `static_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `static_pages`
--

INSERT INTO `static_pages` (`id`, `url`, `title`, `content`) VALUES
(1, 'test', 'Test Static Pa', 'Test Static Page Content! asdsa ');

-- --------------------------------------------------------

--
-- Структура таблицы `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `last_user_id` int(11) NOT NULL,
  `english` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `russian` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `terms`
--

INSERT INTO `terms` (`id`, `category_id`, `last_user_id`, `english`, `russian`, `page`) VALUES
(1, 1, 0, 'advantadge', 'ÐŸÑ€ÐµÐ¸Ð¼ÑƒÑ‰ÐµÑÑ‚Ð²Ð¾', 'B59'),
(2, 1, 0, 'disadvantage', 'ÐÐµÐ´Ð¾ÑÑ‚Ð°Ñ‚Ð¾Ðº', 'Ð¾Ð»ÑƒÐ²Ñ€'),
(3, 2, 0, 'Elbow Drop', 'ÐŸÐ°Ð´ÐµÐ½Ð¸Ðµ Ð›Ð¾ÐºÑ‚ÐµÐ¼', ''),
(4, 2, 0, 'Knee Drop', 'ÐŸÐ°Ð´ÐµÐ½Ð¸Ðµ ÐšÐ¾Ð»ÐµÐ½Ð¾Ð¼', ''),
(5, 3, 0, 'Seek Water', 'ÐÐ°Ð¹Ñ‚Ð¸ Ð’Ð¾Ð´Ñƒ', ''),
(6, 3, 0, 'laskd', 'asdkf', 'jtu'),
(7, 3, 0, '12', '12', '12'),
(8, 3, 0, '12', '12', '12'),
(9, 3, 0, '12', '12', '12'),
(10, 3, 0, '45', '12', '4556fd'),
(11, 1, 0, 'spell', 'Ð·Ð°ÐºÐ»Ð¸Ð½Ð°Ð½Ð¸Ðµ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `term_categories`
--

CREATE TABLE IF NOT EXISTS `term_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `term_categories`
--

INSERT INTO `term_categories` (`id`, `name`) VALUES
(1, 'Ð‘Ð°Ð·Ð¾Ð²Ñ‹Ð¹ Ð½Ð°Ð±Ð¾Ñ€'),
(2, 'Martial Arts'),
(3, 'Ð—Ð°ÐºÐ»Ð¸Ð½Ð°Ð½Ð¸Ñ');

-- --------------------------------------------------------

--
-- Структура таблицы `term_fields`
--

CREATE TABLE IF NOT EXISTS `term_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `term_fields`
--

INSERT INTO `term_fields` (`id`, `term_id`, `field_id`, `value`) VALUES
(1, 9, 7, '12'),
(2, 9, 8, '12'),
(3, 9, 9, '12'),
(4, 10, 7, 'fg'),
(5, 10, 8, 'sdf'),
(6, 10, 9, ' bc');

-- --------------------------------------------------------

--
-- Структура таблицы `translate_variants`
--

CREATE TABLE IF NOT EXISTS `translate_variants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `value` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `translate_variants`
--

INSERT INTO `translate_variants` (`id`, `term_id`, `value`) VALUES
(6, 2, 'asd'),
(7, 1, 'ÐÐ´Ð²ÐµÐ½Ñ‚Ð°Ð³Ð°'),
(9, 1, 'ÐŸÑ€ÐµÐ¸Ð¼ÑƒÑ‰ÐµÑÑ‚Ð²Ð¾');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(16) NOT NULL,
  `role` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `role`) VALUES
(2, 'admin', '355522c9ff1616725fabfba0f58c0760', '463128696', 'backend/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

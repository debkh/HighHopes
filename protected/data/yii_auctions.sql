-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Хост: openserver:3306
-- Время создания: Июн 11 2012 г., 08:45
-- Версия сервера: 5.1.62-community-log
-- Версия PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii_auctions`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_auctions`
--

CREATE TABLE IF NOT EXISTS `tbl_auctions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tbl_auctions`
--

INSERT INTO `tbl_auctions` (`id`, `name`, `description`, `date`) VALUES
(1, 'New test', 'Lorem Ipsum', '2012-05-22'),
(2, 'Yeah', '!@#', '2012-05-22'),
(3, 'One more auction', '123', '2012-06-01');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_lots`
--

CREATE TABLE IF NOT EXISTS `tbl_lots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auction` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `price` float NOT NULL,
  `creation_date` date NOT NULL,
  `sold_date` date NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tbl_lots`
--

INSERT INTO `tbl_lots` (`id`, `id_auction`, `name`, `description`, `price`, `creation_date`, `sold_date`, `other`) VALUES
(3, 1, 'test', '123', 0, '0000-00-00', '0000-00-00', ''),
(4, 2, 'Test', 'Test', 0, '0000-00-00', '0000-00-00', ''),
(5, 2, 'Test2', 'Test2', 0, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'test1@example.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

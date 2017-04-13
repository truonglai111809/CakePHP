-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 25 Juin 2015 à 08:53
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sanpham`
--
CREATE DATABASE IF NOT EXISTS `sanpham` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sanpham`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'nokia', 'day la ddien thoai nokia'),
(2, 'samsung', 'day la dien thoai sam sung');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`name`, `description`, `id`, `content`, `price`, `qty`, `image`, `category_id`) VALUES
('sam sung E7', 'sam sung E7', 1, 'sam sung E7', 50, 10, 'images/a.jpg', 1),
('sam sung S5', 'sam sung E7', 2, 'sam sung E7', 50, 10, 'images/b.jpeg', 1),
('Nokia Lumia', 'Nokia Lumia', 3, 'Nokia Lumia', 50, 10, 'images/c.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_group_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `telephone`, `email`, `address`, `city`, `sex`, `user_group_id`, `created`, `modified`) VALUES
(21, '12', '12', 'fdfgdg', '5646445656', 'sada@gmail.com', 'dffdfd', 'eeeeerwere', 'nam', 1, '2015-06-16 00:00:00', '2015-06-16 00:00:00'),
(22, 'sa', 'asf', 'asf', 'asf', 'asf', 'saf', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'saffsa33643', 'asf', 'saf', 'saf', 'saf@yahoo.com', 'saf', 'saf', 'male', 1, '0000-00-00 00:00:00', '2015-06-18 15:19:32'),
(24, 'saffsa', 'asf', 'saf', 'saf', 'saf', 'saf', 'saf', 'asf', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '12345678', '', 'dinh', '345345353', 'vfffdfd@gmail.com', 'dong da', '', 'male', 1, '2015-06-18 15:10:51', '2015-06-18 15:10:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

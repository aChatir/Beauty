-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 22 Mars 2013 à 11:35
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `beauty`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subTitle` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `imageLink` varchar(150) NOT NULL,
  `imgBlog` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updateAt` datetime NOT NULL,
  `publish` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `subTitle`, `content`, `imageLink`, `imgBlog`, `createdAt`, `updateAt`, `publish`) VALUES
(1, 'Lorem ipsum dolor sit amet 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sem lectus, commodo eget aliquet non, convallis faucibus nisl. Sed mattis, tellus vitae venenatis egestas, purus augue congue eros, in varius elit ipsum nec metus. Sed nibh elit, molestie in tincidunt in, tempus eu turpis. Fusce ac velit id tortor iaculis condimentum a et metus. Maecenas orci justo, pretium eget sollicitudin vitae, gravida vel purus. Morbi viverra leo non turpis aliquam dapibus. Nulla rutrum vestibulum nunc, in facilisis est viverra vitae. Etiam at ultricies odio. Curabitur dignissim mattis massa ut lacinia. Mauris ut odio in purus consectetur placerat. Aenean quis eros ac enim bibendum adipiscing in ac est.\r\n\r\nSed vitae nunc nunc. Integer in dolor ac quam fringilla feugiat nec vitae lorem. In hac habitasse platea dictumst. Nulla nisl neque, hendrerit et iaculis vitae, vulputate a magna. Sed tincidunt urna in nunc dignissim sit amet scelerisque nunc volutpat. Pellentesque ut viverra justo. Sed id dolor nec ante tempor rhoncus. Etiam mattis tortor at nisl molestie gravida auctor purus pharetra. Fusce sit amet lorem turpis. Sed adipiscing sapien non metus pellentesque fermentum. ', '/images/templatemo_image_01.jpg', '/images/portfolio/01.jpg', '2013-03-26 00:00:00', '2013-03-20 00:00:00', 1),
(2, 'Lorem ipsum dolor sit amet 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sem lectus, commodo eget aliquet non, convallis faucibus nisl. Sed mattis, tellus vitae venenatis egestas, purus augue congue eros, in varius elit ipsum nec metus. Sed nibh elit, molestie in tincidunt in, tempus eu turpis. Fusce ac velit id tortor iaculis condimentum a et metus. Maecenas orci justo, pretium eget sollicitudin vitae, gravida vel purus. Morbi viverra leo non turpis aliquam dapibus. Nulla rutrum vestibulum nunc, in facilisis est viverra vitae. Etiam at ultricies odio. Curabitur dignissim mattis massa ut lacinia. Mauris ut odio in purus consectetur placerat. Aenean quis eros ac enim bibendum adipiscing in ac est.\r\n\r\nSed vitae nunc nunc. Integer in dolor ac quam fringilla feugiat nec vitae lorem. In hac habitasse platea dictumst. Nulla nisl neque, hendrerit et iaculis vitae, vulputate a magna. Sed tincidunt urna in nunc dignissim sit amet scelerisque nunc volutpat. Pellentesque ut viverra justo. Sed id dolor nec ante tempor rhoncus. Etiam mattis tortor at nisl molestie gravida auctor purus pharetra. Fusce sit amet lorem turpis. Sed adipiscing sapien non metus pellentesque fermentum. ', '/images/templatemo_image_02.jpg', '/images/portfolio/02.jpg', '2013-03-25 00:00:00', '2013-03-20 00:00:00', 1),
(3, 'Lorem ipsum dolor sit amet 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sem lectus, commodo eget aliquet non, convallis faucibus nisl. Sed mattis, tellus vitae venenatis egestas, purus augue congue eros, in varius elit ipsum nec metus. Sed nibh elit, molestie in tincidunt in, tempus eu turpis. Fusce ac velit id tortor iaculis condimentum a et metus. Maecenas orci justo, pretium eget sollicitudin vitae, gravida vel purus. Morbi viverra leo non turpis aliquam dapibus. Nulla rutrum vestibulum nunc, in facilisis est viverra vitae. Etiam at ultricies odio. Curabitur dignissim mattis massa ut lacinia. Mauris ut odio in purus consectetur placerat. Aenean quis eros ac enim bibendum adipiscing in ac est.\r\n\r\nSed vitae nunc nunc. Integer in dolor ac quam fringilla feugiat nec vitae lorem. In hac habitasse platea dictumst. Nulla nisl neque, hendrerit et iaculis vitae, vulputate a magna. Sed tincidunt urna in nunc dignissim sit amet scelerisque nunc volutpat. Pellentesque ut viverra justo. Sed id dolor nec ante tempor rhoncus. Etiam mattis tortor at nisl molestie gravida auctor purus pharetra. Fusce sit amet lorem turpis. Sed adipiscing sapien non metus pellentesque fermentum. ', '/images/templatemo_image_01.jpg', '/images/portfolio/03.jpg', '2013-03-05 00:00:00', '2013-03-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL,
  PRIMARY KEY (`id`,`email`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'ahmed@gmail.com'),
(2, 'kalo@gmil.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 oct. 2018 à 19:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fluxrss`
--
CREATE DATABASE IF NOT EXISTS `fluxrss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fluxrss`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `daterecuperation` datetime DEFAULT NULL,
  `titrearticle` varchar(255) DEFAULT NULL,
  `urlarticle` varchar(255) DEFAULT NULL,
  `datepublication` varchar(200) DEFAULT NULL,
  `imagedescription` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nomclub` varchar(255) NOT NULL,
  `titreclub` varchar(255) NOT NULL,
  `urlclub` varchar(255) NOT NULL,
  `logoclub` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

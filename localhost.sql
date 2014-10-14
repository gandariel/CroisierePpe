-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 07 Octobre 2014 à 14:29
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `croisiere`
--
CREATE DATABASE `croisiere` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `croisiere`;

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

CREATE TABLE IF NOT EXISTS `bateau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

CREATE TABLE IF NOT EXISTS `liaison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesecteur_id` int(11) NOT NULL,
  `portdepart_id` int(11) NOT NULL,
  `portarrive_id` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD9895ABBFAF1EF` (`lesecteur_id`),
  KEY `IDX_CD9895ABFEA1ED4A` (`portdepart_id`),
  KEY `IDX_CD9895ABA4A19549` (`portarrive_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE IF NOT EXISTS `port` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `traversee`
--

CREATE TABLE IF NOT EXISTS `traversee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `laliaison_id` int(11) NOT NULL,
  `lebateau_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_347977A22A8ED7ED` (`laliaison_id`),
  KEY `IDX_347977A249FE0B80` (`lebateau_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD CONSTRAINT `FK_CD9895ABA4A19549` FOREIGN KEY (`portarrive_id`) REFERENCES `port` (`id`),
  ADD CONSTRAINT `FK_CD9895ABBFAF1EF` FOREIGN KEY (`lesecteur_id`) REFERENCES `secteur` (`id`),
  ADD CONSTRAINT `FK_CD9895ABFEA1ED4A` FOREIGN KEY (`portdepart_id`) REFERENCES `port` (`id`);

--
-- Contraintes pour la table `traversee`
--
ALTER TABLE `traversee`
  ADD CONSTRAINT `FK_347977A249FE0B80` FOREIGN KEY (`lebateau_id`) REFERENCES `bateau` (`id`),
  ADD CONSTRAINT `FK_347977A22A8ED7ED` FOREIGN KEY (`laliaison_id`) REFERENCES `liaison` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 03 déc. 2019 à 14:55
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--
/* Mohammad 03/12/19 : Il faut créer la base !!!!*/
CREATE DATABASE IF NOT EXISTS `app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `app`;
-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

DROP TABLE IF EXISTS `boitier`;
CREATE TABLE IF NOT EXISTS `boitier` (
  `idBoitier` int(11) NOT NULL,
  `Date` date NOT NULL,
  `idCapteur` int(11) NOT NULL,
  PRIMARY KEY (`idBoitier`),
  KEY `idCapteur` (`idCapteur`),
  KEY `Date` (`Date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `idCapteur` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Valeur` double NOT NULL,
  `seuil` double NOT NULL,
  PRIMARY KEY (`idCapteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Structure de la table `entit`
--

DROP TABLE IF EXISTS `entit`;
CREATE TABLE IF NOT EXISTS `entit` (
  `idEntité` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Gestionnaire` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idEntité`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Heure` datetime NOT NULL,
  `contenu` text CHARACTER SET latin1 NOT NULL,
  `idUser` int(255) NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Structure de la table `messageuser`
--

DROP TABLE IF EXISTS `messageuser`;
CREATE TABLE IF NOT EXISTS `messageuser` (
  `idMessageUser` int(11) NOT NULL AUTO_INCREMENT,
  `idMessage` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idMessageUser`),
  KEY `idMessage` (`idMessage`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Date` date NOT NULL,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Durée` datetime NOT NULL,
  `idUser` int(255) NOT NULL,
  PRIMARY KEY (`Date`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
/* Mohammad 03/12/19 : table pour les codes d'inscriptions. Surement à modifier*/
--
-- Structure de la table `codeInscription`
--

DROP TABLE IF EXISTS `codeInscription`;
CREATE TABLE IF NOT EXISTS `codeInscription` (
  `id` varchar(25) NOT NULL ,
  `fonction` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeInscription` 
--

INSERT INTO codeInscription (id,fonction) VALUES
('azerty','Utilisateur'),
('qsdfgh','Gestionnaire'),
('wxcvbn','Administrateur');

-- --------------------------------------------------------
/* Mohammad 03/12/19 : Table pour les cgu et ml*/
--
-- Structure de la table `CGU`
--

DROP TABLE IF EXISTS `CGU`;
CREATE TABLE IF NOT EXISTS `CGU`(
  `idCGU` INT(25) NOT NULL AUTO_INCREMENT,
  `MentionLegales` TEXT(100000) NOT NULL,
  `CGU` TEXT(100000) NOT NULL,
  PRIMARY KEY (`idCGU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Mohammad 03/12/19 : dumping data pour cgu*/
--
-- Dumping data for table `utilisateur`
--

INSERT INTO CGU (idCGU, MentionLegales, CGU) VALUES 
('1', 'Vos Mentions legales...', 'Vos CGU...');


-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `login` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Mdp` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Nom` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Prenom` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Mail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Sexe` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Taille` int(32) NOT NULL,	
  `Poids` int(32) NOT NULL,
  `DateDeNaissance`DATE NOT NULL,
  `codeInscription` varchar(255) COLLATE latin1_general_cs DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

/* Mohammad 03/12/19 : dumping data pour utilisateur*/
--
-- Dumping data for table `utilisateur`
--

INSERT INTO utilisateur (Type, login, Mdp, Nom, Prenom, Mail) VALUES 
('Administrateur', 'Moh2a91', 'tqtpas', 'AMLA', 'Mohammad','mohammad.amla.pro@gmail.com');
COMMIT;
-- --------------------------------------------------------

--
-- Structure de la table `utilisateur/entité`
--

DROP TABLE IF EXISTS `utilisateur/entité`;
CREATE TABLE IF NOT EXISTS `utilisateur/entité` (
  `idU/E` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `idEntité` int(11) NOT NULL,
  PRIMARY KEY (`idU/E`),
  KEY `idEntité` (`idEntité`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boitier`
--
ALTER TABLE `boitier`
  ADD CONSTRAINT `boitier_ibfk_1` FOREIGN KEY (`idCapteur`) REFERENCES `capteur` (`idCapteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `boitier_ibfk_2` FOREIGN KEY (`Date`) REFERENCES `test` (`Date`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `messageuser`
--
ALTER TABLE `messageuser`
  ADD CONSTRAINT `messageuser_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur/entité`
--
ALTER TABLE `utilisateur/entité`
  ADD CONSTRAINT `utilisateur/entité_ibfk_1` FOREIGN KEY (`idEntité`) REFERENCES `entit` (`idEntité`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

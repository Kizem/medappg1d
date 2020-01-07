-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 jan. 2020 à 21:58
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

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
CREATE DATABASE IF NOT EXISTS `app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `app`;
-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

DROP TABLE IF EXISTS `boitier`;
CREATE TABLE IF NOT EXISTS `boitier` (
  `idBoitier` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idBoitier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `boitier`
--

INSERT INTO `boitier` (`idBoitier`) VALUES
(1);

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
  `Date` date DEFAULT NULL,
  `idBoitier` int(11) NOT NULL,
  PRIMARY KEY (`idCapteur`),
  KEY `idBoitier` (`idBoitier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`idCapteur`, `Type`, `Valeur`, `seuil`, `Date`, `idBoitier`) VALUES
(1, 'Pouls', 1, 85, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `idCGU` int(25) NOT NULL AUTO_INCREMENT,
  `MentionLegales` mediumtext NOT NULL,
  `CGU` mediumtext NOT NULL,
  PRIMARY KEY (`idCGU`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`idCGU`, `MentionLegales`, `CGU`) VALUES
(1, 'Vos cgu....', 'Vos mentions lelaes...');

-- --------------------------------------------------------

--
-- Structure de la table `codeinscription`
--

DROP TABLE IF EXISTS `codeinscription`;
CREATE TABLE IF NOT EXISTS `codeinscription` (
  `id` varchar(25) NOT NULL,
  `fonction` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeinscription`
--

INSERT INTO `codeinscription` (`id`, `fonction`) VALUES
('azerty', 'Utilisateur'),
('qsdfgh', 'Gestionnaire'),
('wxcvbn', 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `entit`
--

DROP TABLE IF EXISTS `entit`;
CREATE TABLE IF NOT EXISTS `entit` (
  `idEntité` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Nom` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Adresse` varchar(100) CHARACTER SET latin1 NOT NULL,
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
  `idBoitier` int(11) NOT NULL,
  `Type` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Durée` datetime DEFAULT NULL,
  `idUser` int(255) NOT NULL,
  PRIMARY KEY (`Date`),
  KEY `idUser` (`idUser`),
  KEY `idBoitier` (`idBoitier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

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
  `Taille` int(32) DEFAULT NULL,
  `Poids` int(32) DEFAULT NULL,
  `DateDeNaissance` date DEFAULT NULL,
  `Photos` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `codeInscription` varchar(255) COLLATE latin1_general_cs DEFAULT NULL,
  `idBoitier` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idBoitier` (`idBoitier`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `Type`, `login`, `Mdp`, `Nom`, `Prenom`, `Mail`, `Sexe`, `Taille`, `Poids`, `DateDeNaissance`, `Photos`, `codeInscription`, `idBoitier`) VALUES
(1, 'Administrateur', 'admin', '$2y$10$s6C..sIveo4/eiKvt7/Xc.3q/qrzHHf19axr02lyLCNXEN55GA54u', 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Gestionnaire', 'gestionnaire', '$2y$10$jhKE5AtJ7nez0yYtRn9iKuDwkdb3yrPIG9ophoxTVnuVAPbuI/4Gi', 'gestionnaire', 'gestionnaire', 'gestionnaire@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 'Gestionnaire', 'gestionnaire2', '$2y$10$ItduDsRjV2KCbIFyOcB4Kusi.9xLOOC4N61oFK0oml9tsFj13Cdcy', 'gestionnaire', 'gestionnaire', 'gestionnaire2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  KEY `idEntité` (`idEntité`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`idBoitier`) REFERENCES `boitier` (`idBoitier`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messageuser`
--
ALTER TABLE `messageuser`
  ADD CONSTRAINT `messageuser_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE CASCADE;

--
-- Contraintes pour la table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `idBoitier` FOREIGN KEY (`idBoitier`) REFERENCES `boitier` (`idBoitier`) ON DELETE CASCADE,
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idBoitier`) REFERENCES `boitier` (`idBoitier`) ON DELETE SET NULL;

--
-- Contraintes pour la table `utilisateur/entité`
--
ALTER TABLE `utilisateur/entité`
  ADD CONSTRAINT `utilisateur/entité_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE CASCADE,
  ADD CONSTRAINT `utilisateur/entité_ibfk_2` FOREIGN KEY (`idEntité`) REFERENCES `entit` (`idEntité`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

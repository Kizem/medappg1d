-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 03 déc. 2019 à 14:05
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

-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

DROP TABLE IF EXISTS `boitier`;
CREATE TABLE IF NOT EXISTS `boitier` (
  `idBoitier` int(11) NOT NULL,
  PRIMARY KEY (`idBoitier`)
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
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `MentionLegales` mediumtext NOT NULL,
  `CGU` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Date` date NOT NULL,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Durée` datetime NOT NULL,
  PRIMARY KEY (`Date`)
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

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `login` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Mdp` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Nom` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Prenom` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Mail` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `Type`, `login`, `Mdp`, `Nom`, `Prenom`, `Mail`) VALUES
(1, 'Administrateur', 'Moh2a91', 'tqtpas', 'AMLA', 'Mohammad', 'mohammad.amla.pro@gmail.com'),
(3, 'Utilisateur', 'momo', '$2y$10$e6K0GruoBnIs9qfad3xmcOKo1o9nB0ZaP6.SyytQ6hFcSRwLaWkea', 'AMLE', 'Mohammed', 'jerotm@pmfpoj.com'),
(4, 'Utilisateur', 'tyty', '$2y$10$hLk642ZBF0lSndviVJE4QOprCPWTeuwUcrd8ufC05YaCHAKQX8Sxa', 'LOPEZ', 'Ammad', 'youpu@lkjml.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

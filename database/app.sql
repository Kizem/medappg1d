-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 jan. 2020 à 22:42
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
  `Reference` varchar(100) CHARACTER SET latin1 NOT NULL,
  `idEntité` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBoitier`),
  KEY `idEntité` (`idEntité`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `boitier`
--

INSERT INTO `boitier` (`idBoitier`, `Reference`, `idEntité`) VALUES
(1, 'Protoype', NULL),
(2, 'AZX', 1),
(3, 'B2SA', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`idCapteur`, `Type`, `Valeur`, `seuil`, `Date`, `idBoitier`) VALUES
(1, 'Pouls', 1, 85, NULL, 1),
(4, 'Temperature', 12, 8, '2020-01-30', 2),
(5, 'Visuel', 1, 5, NULL, 2),
(6, 'Pouls', 1, 50, NULL, 2);

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
(1, 'Mentions Légales\r\nCe site est édité par la société {nom_société}.\r\nSiège social : {nom_société} {nom_adresse} Capital social : XXXXX euros Téléphone : +33 (0)4.74.00.00.00\r\nResponsable de la rédaction :\r\nDéveloppement, hébergement :\r\nIce development – www.ice-dev.com\r\n16 rue Maurice Bouchor - 69007 Lyon\r\nTél : 08 21 23 03 54\r\nInformatique et liberté\r\nAucune information personnelle n\'est collectée à votre insu. Les informations que vous nous communiquez lors d’une demande de devis, de renseignements ou d’inscription à la newsletter par courrier, par téléphone, par e-mail ou par formulaire sont uniquement destinées au traitement administratif et commercial de votre demande par la société {nom_société}.\r\nElles ne font l\'objet d\'aucune cession à des tiers. {nom_société} traite les informations qui vous concernent avec la plus grande confidentialité.\r\nConformément à la loi « Informatique et Libertés » n°78-17 du 6 janvier 1978, vous disposez d\'un droit d\'accès, de rectification et d\'opposition aux données personnelles vous concernant. Pour l\'exercer, il suffit de nous en faire la demande par écrit aux coordonnées suivantes : ________, _________adresse__________, France.\r\nDroit d\'auteur / copyright\r\nL\'ensemble du contenu du présent site Internet, y compris nom de domaine, marques, logo, texte… est la propriété de la société ___________, il est protégé par les lois en vigueur de la législation française sur la propriété intellectuelle.\r\nAucun élément de ce site ne peut être copié, reproduit, détourné ou dénaturé, et ce, sur quelque support que ce soit, sans constituer un acte de contrefaçon au sens des articles L 335-2 et suivants du code de la propriété intellectuelle.\r\nAccès au site\r\nL\'utilisateur de ce site reconnaît disposer de la compétence et des moyens nécessaires pour accéder et utiliser ce site. ___________ ne saurait être tenu responsable des éléments en dehors de son contrôle et des dommages qui pourraient éventuellement être subis par l\'environnement technique de l\'utilisateur et notamment, ses ordinateurs, logiciels, équipements réseaux et tout autre matériel utilisé pour accéder ou utiliser le service et/ou les informations.\r\nIl est rappelé que le fait d\'accéder ou de se maintenir frauduleusement dans un système informatique, d\'entraver ou de fausser le fonctionnement d\'un tel système, d\'introduire ou de modifier frauduleusement des données dans un système informatique constitue des délits passibles de sanctions pénales.\r\nLimitation de responsabilité\r\n{nom_société} s\'attache à transmettre des informations régulièrement mises à jour, notamment sur les actualités ainsi que sur le contenu des articles. Toutefois des informations erronées ou des omissions peuvent être constatées, suite notamment à des erreurs de saisie ou de mise en page. Si vous en faisiez le constat nous vous invitons à nous le signaler pour que nous puissions procéder à leur rectification.\r\nNous nous réservons par ailleurs le droit de modifier les informations ou les éventuelles offres commerciales fournies par le présent site, dans le cadre de nos opérations d\'actualisation et de mise à jour des données, et ce sans préavis.\r\nLes liens hypertextes mis en oeuvre au sein du présent site Internet, en direction d\'autres sites et/ou de pages personnelles et d\'une manière générale vers toutes ressources existantes sur Internet, ne sauraient engager la responsabilité de _________. De même que la société {nom_société} ne pourra en aucune façon être tenue pour responsable des sites ayant un lien hypertexte avec le présent site et décline toute responsabilité quant à leur contenu et à leur utilisation.\r\nSource : http://www.journaldunet.com/ebusiness/le-net/mentions-legales-site.shtml\r\n\r\n', 'Le présent document a pour objet de définir les modalités et conditions dans lesquelles d’une part, ____ , ci-après dénommé l’EDITEUR, met à la disposition de ses utilisateurs le site, et les services disponibles sur le site et d’autre part, la manière par laquelle l’utilisateur accède au site et utilise ses services.\r\nToute connexion au site est subordonnée au respect des présentes conditions.\r\nPour l’utilisateur, le simple accès au site de l’EDITEUR à l’adresse URL suivante ____ implique l’acceptation de l’ensemble des conditions décrites ci-après.\r\nPropriété intellectuelle\r\nVariante 1\r\nLa structure générale du site ____ , ainsi que les textes, graphiques, images, sons et vidéos la composant, sont la propriété de l\'éditeur ou de ses partenaires. Toute représentation et/ou reproduction et/ou exploitation partielle ou totale des contenus et services proposés par le site ____ , par quelque procédé que ce soit, sans l\'autorisation préalable et par écrit de ____ et/ou de ses partenaires est strictement interdite et serait susceptible de constituer une contrefaçon au sens des articles L 335-2 et suivants du Code de la propriété intellectuelle.\r\nLes marques \"____ \", \"____\" sont des marques déposées par____ .Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de ces marques, de quelque nature que ce soit, est totalement prohibée.\r\nVariante 2\r\nAucune reproduction, même partielle prévue à l’article L.122-5 du Code de la propriété intellectuelle, ne peut être faite de ce site sans l’autorisation du directeur de publication.\r\nVariante 3\r\nTous les éléments de ce site, y compris les documents téléchargeables, sont libres de droit. A l’exception de l’iconographie, la reproduction des pages de ce site est autorisée à la condition d’y mentionner la source. Elles ne peuvent être utilisées à des fins commerciales et publicitaires.\r\nLiens hypertextes\r\nLe site ____ peut contenir des liens hypertextes vers d’autres sites présents sur le réseau Internet. Les liens vers ces autres ressources vous font quitter le site ____\r\nIl est possible de créer un lien vers la page de présentation de ce site sans autorisation expresse de l’EDITEUR. Aucune autorisation ou demande d’information préalable ne peut être exigée par l’éditeur à l’égard d’un site qui souhaite établir un lien vers le site de l’éditeur. Il convient toutefois d’afficher ce site dans une nouvelle fenêtre du navigateur. Cependant, l’EDITEUR se réserve le droit de demander la suppression d’un lien qu’il estime non conforme à l’objet du site ____\r\nResponsabilité de l’éditeur\r\nLes informations et/ou documents figurant sur ce site et/ou accessibles par ce site proviennent de sources considérées comme étant fiables.\r\nToutefois, ces informations et/ou documents sont susceptibles de contenir des inexactitudes techniques et des erreurs typographiques.\r\nL’EDITEUR se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance.\r\nIl est fortement recommandé de vérifier l’exactitude et la pertinence des informations et/ou documents mis à disposition sur ce site.\r\nLes informations et/ou documents disponibles sur ce site sont susceptibles d’être modifiés à tout moment, et peuvent avoir fait l’objet de mises à jour. En particulier, ils peuvent avoir fait l’objet d’une mise à jour entre le moment de leur téléchargement et celui où l’utilisateur en prend connaissance.\r\nL’utilisation des informations et/ou documents disponibles sur ce site se fait sous l’entière et seule responsabilité de l’utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l’EDITEUR puisse être recherché à ce titre, et sans recours contre ce dernier.\r\nL’EDITEUR ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu’il soit résultant de l’interprétation ou de l’utilisation des informations et/ou documents disponibles sur ce site.\r\nAccès au site\r\nL’éditeur s’efforce de permettre l’accès au site 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d’un événement hors du contrôle de l’EDITEUR, et sous réserve des éventuelles pannes et interventions de maintenance nécessaires au bon fonctionnement du site et des services.\r\nPar conséquent, l’EDITEUR ne peut garantir une disponibilité du site et/ou des services, une fiabilité des transmissions et des performances en terme de temps de réponse ou de qualité. Il n’est prévu aucune assistance technique vis à vis de l’utilisateur que ce soit par des moyens électronique ou téléphonique.\r\nLa responsabilité de l’éditeur ne saurait être engagée en cas d’impossibilité d’accès à ce site et/ou d’utilisation des services.\r\nPar ailleurs, l’EDITEUR peut être amené à interrompre le site ou une partie des services, à tout moment sans préavis, le tout sans droit à indemnités. L’utilisateur reconnaît et accepte que l’EDITEUR ne soit pas responsable des interruptions, et des conséquences qui peuvent en découler pour l’utilisateur ou tout tiers.\r\nModification des conditions d’utilisation\r\nL’EDITEUR se réserve la possibilité de modifier, à tout moment et sans préavis, les présentes conditions d’utilisation afin de les adapter aux évolutions du site et/ou de son exploitation.\r\nRègles d\'usage d\'Internet\r\nL’utilisateur déclare accepter les caractéristiques et les limites d’Internet, et notamment reconnaît que :\r\nL’EDITEUR n’assume aucune responsabilité sur les services accessibles par Internet et n’exerce aucun contrôle de quelque forme que ce soit sur la nature et les caractéristiques des données qui pourraient transiter par l’intermédiaire de son centre serveur.\r\nL’utilisateur reconnaît que les données circulant sur Internet ne sont pas protégées notamment contre les détournements éventuels. La présence du logo ____ institue une présomption simple de validité. La communication de toute information jugée par l’utilisateur de nature sensible ou confidentielle se fait à ses risques et périls.\r\nL’utilisateur reconnaît que les données circulant sur Internet peuvent être réglementées en termes d’usage ou être protégées par un droit de propriété.\r\nL’utilisateur est seul responsable de l’usage des données qu’il consulte, interroge et transfère sur Internet.\r\nL’utilisateur reconnaît que l’EDITEUR ne dispose d’aucun moyen de contrôle sur le contenu des services accessibles sur Internet\r\nDroit applicable\r\nTant le présent site que les modalités et conditions de son utilisation sont régis par le droit français, quel que soit le lieu d’utilisation. En cas de contestation éventuelle, et après l’échec de toute tentative de recherche d’une solution amiable, les tribunaux français seront seuls compétents pour connaître de ce litige.\r\nPour toute question relative aux présentes conditions d’utilisation du site, vous pouvez nous écrire à l’adresse suivante :\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `codeinscription`
--

DROP TABLE IF EXISTS `codeinscription`;
CREATE TABLE IF NOT EXISTS `codeinscription` (
  `idCodeInscription` int(11) NOT NULL AUTO_INCREMENT,
  `fonction` varchar(25) NOT NULL,
  `code` varchar(25) NOT NULL,
  `idEntité` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCodeInscription`),
  KEY `idEntité` (`idEntité`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeinscription`
--

INSERT INTO `codeinscription` (`idCodeInscription`, `fonction`, `code`, `idEntité`) VALUES
(3, 'Administrateur', 'wxcvbn', NULL),
(28, 'Administrateur', 'z0GGZktzjM', NULL),
(41, 'Utilisateur', 'LeHZRMvmU3', NULL),
(42, 'Administrateur', 'A5PY3tPpcF', NULL),
(43, 'Gestionnaire', 'oS4dF9bfaV', NULL),
(44, 'Gestionnaire', 'fg1PU4JK3N', NULL),
(47, 'Administrateur', 'rRck529DNO', NULL),
(48, 'Gestionnaire', '93KlRY7dsZ', NULL),
(56, 'Utilisateur', '3IitjiMhcg', 1),
(57, 'Utilisateur', 'qFBElgGzpN', 1),
(73, 'Utilisateur', '3iHYp8eZDX', 1),
(76, 'Utilisateur', 'k6BcAe1YZ3', 1),
(77, 'Utilisateur', 'zWaGgyEJOy', 1),
(78, 'Utilisateur', '7Nqzatr42B', 1),
(79, 'Utilisateur', 'Q8mkpB4Vsq', 1),
(80, 'Utilisateur', '9BdTNDPWsR', 1);

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
  PRIMARY KEY (`idEntité`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `entit`
--

INSERT INTO `entit` (`idEntité`, `Type`, `Nom`, `Adresse`) VALUES
(1, 'Auto-école', 'Cer', '2, allée de AMLA, Marseille 13000'),
(2, 'Auto-école', 'CER VIRY', 'Viry-Chatillon');

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
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `idUser` (`idUser`)
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
  `Score` int(255) DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`Date`),
  KEY `idUser` (`idUser`),
  KEY `idBoitier` (`idBoitier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`Date`, `idBoitier`, `Type`, `Code`, `Durée`, `Score`, `idUser`) VALUES
('2001-01-01', 2, 'Pouls', 'AHBeJzsWZK', '2001-01-01 00:00:00', NULL, 18),
('2020-01-02', 2, 'Pouls', 'hjgvbc', '2020-01-02 00:00:00', 24, 16),
('2020-01-03', 2, 'Pouls', 'hjgvbc', '2020-01-03 00:00:00', 1, 16),
('2020-01-14', 2, 'Pouls', 'ghjk', '2020-01-01 00:00:00', 90, 2),
('2020-01-15', 2, 'Temperature', 'vcbnjhk', '2020-01-23 00:00:00', 24, 16),
('2020-01-16', 2, 'Pouls', 'fhgjk', '2020-01-15 00:00:00', 86, 2),
('2020-01-17', 2, 'Visuel', 'fhgjk', '2020-01-17 00:00:00', 10, 2),
('2020-01-18', 2, 'Visuel', 'gfhj', '2020-01-18 00:00:00', 9, 2),
('2020-01-31', 2, 'Temperature', 'ddfdg', '2020-01-23 00:00:00', 19, 16);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `Type`, `login`, `Mdp`, `Nom`, `Prenom`, `Mail`, `Sexe`, `Taille`, `Poids`, `DateDeNaissance`, `Photos`, `codeInscription`, `idBoitier`) VALUES
(1, 'Administrateur', 'admin', '$2y$10$s6C..sIveo4/eiKvt7/Xc.3q/qrzHHf19axr02lyLCNXEN55GA54u', 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, 'Photos/852115717e8be6442586741530edff80.png', NULL, NULL),
(2, 'Gestionnaire', 'gestionnaire', '$2y$10$jhKE5AtJ7nez0yYtRn9iKuDwkdb3yrPIG9ophoxTVnuVAPbuI/4Gi', 'gestionnaire', 'gestionnaire', 'gestionnaire@gmail.com', 'Homme', 185, 85, '1998-10-31', NULL, NULL, 2),
(14, 'Gestionnaire', 'gestionnaire2', '$2y$10$ItduDsRjV2KCbIFyOcB4Kusi.9xLOOC4N61oFK0oml9tsFj13Cdcy', 'gestionnaire', 'gestionnaire', 'gestionnaire2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Gestionnaire', 'gestionnaire3', '$2y$10$IMVG6oFaaVhmW8P6KVaa3.OYvfcAJxLm/l5yAHG1xbc3R6NRckmaa', 'MATIN', 'Martin', 'gestionnaire3@gmail.com', 'Homme', 185, 85, '1998-10-31', 'Photos/a0ecb0f6ffbc81bf901906cc03a5014d.jpg', NULL, NULL),
(16, 'Utilisateur', 'utilisateur', '$2y$10$QxlrFOhFfy.ZBYfQodTc/emlRGKUWoXUB3Smr5/XA3QYjooIwZ5LG', 'utilisateur', 'utilisateur', 'utilisateur@gmail.com', 'Homme', 187, 90, NULL, 'Photos/793da19062ba47cacd3b0fac2bb2eca4.jpg', NULL, NULL),
(17, 'Administrateur', 'null', '$2y$10$V.KwQSuL9GgPAN8iWMouWOQl4QJuWELVW0xe.QJJYnxcNic6U7bA2', 'admin2', 'admin2', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Utilisateur', 'amla', '$2y$10$rxQCjORnYbe330FryxRQJelHsIbD3M0cxxOCjVmbMxAcBr10OTFGO', 'amla', 'amla', 'amla@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Utilisateur', 'al', '$2y$10$H5MR9wgskbJjqKKcoxq1f.0evK8X4ZM6muTEF1/bnabk/X.Wfewje', 'al', 'al', 'al@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Utilisateur', 'Utili', '$2y$10$xGgQw866Hd1mvwOLCPpk3.iEmjtisdgrrEGY2yI0RyFO9jvDwb6yO', 'Utili', 'Utili', 'Utili@gmail.Com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `utilisateur/entité`
--

INSERT INTO `utilisateur/entité` (`idU/E`, `idUser`, `idEntité`) VALUES
(1, 2, 1),
(2, 15, 1),
(3, 19, 1),
(4, 20, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boitier`
--
ALTER TABLE `boitier`
  ADD CONSTRAINT `boitier_ibfk_1` FOREIGN KEY (`idEntité`) REFERENCES `entit` (`idEntité`) ON DELETE SET NULL;

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`idBoitier`) REFERENCES `boitier` (`idBoitier`) ON DELETE CASCADE;

--
-- Contraintes pour la table `codeinscription`
--
ALTER TABLE `codeinscription`
  ADD CONSTRAINT `codeinscription_ibfk_1` FOREIGN KEY (`idEntité`) REFERENCES `entit` (`idEntité`) ON DELETE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messageuser`
--
ALTER TABLE `messageuser`
  ADD CONSTRAINT `messageuser_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`) ON DELETE CASCADE,
  ADD CONSTRAINT `messageuser_ibfk_2` FOREIGN KEY (`idMessage`) REFERENCES `message` (`idMessage`) ON DELETE CASCADE;

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

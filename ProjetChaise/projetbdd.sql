-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 nov. 2018 à 18:11
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `NomCli` varchar(50) NOT NULL,
  `PrenomCli` varchar(50) NOT NULL,
  `MailCli` varchar(50) NOT NULL,
  `UsernameCli` varchar(50) NOT NULL,
  `NumeroCli` int(11) NOT NULL,
  `MdpCli` varchar(50) NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idclient`),
  KEY `Client_Ville_FK` (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `NomCli`, `PrenomCli`, `MailCli`, `UsernameCli`, `NumeroCli`, `MdpCli`, `idVille`) VALUES
(1, 'Ruff', 'Hugo', 'hugo.ruffus@hotmail.fr', 'CUPKEK', 601251510, 'azerty', 1),
(2, 'BOB', 'DYLAN', 'BOB@BOB.BOB', 'BOB', 601251510, 'azerty', 1);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `idclient` int(11) NOT NULL
  KEY `Image_Client_FK` (`idclient`)
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(2, 'test.jpg', '2018-11-15 14:27:54', '1'),
(3, 'test.jpg', '2018-11-15 14:28:52', '1'),
(4, 'test.jpg', '2018-11-15 14:32:10', '1'),
(5, 'test.jpg', '2018-11-15 14:38:00', '1'),
(6, 'test.jpg', '2018-11-15 14:38:01', '1'),
(7, 'test.jpg', '2018-11-15 14:39:16', '1'),
(8, 'test.jpg', '2018-11-15 14:39:20', '1'),
(9, 'test.jpg', '2018-11-15 14:39:43', '1'),
(10, 'test.jpg', '2018-11-15 15:24:40', '1'),
(11, 'test.jpg', '2018-11-15 15:32:36', '1');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `PrixVenteProduit` int(11) NOT NULL,
  `PrixAchatProduit` int(11) NOT NULL,
  `StockProduit` int(11) NOT NULL,
  `PoidProduit` int(11) NOT NULL,
  `NomProduit` varchar(50) NOT NULL,
  `DescriptionProduit` varchar(500) NOT NULL,
  `MateriauxProduit` varchar(50) NOT NULL,
  `TypeProduit` varchar(50) NOT NULL,
  `CouleurProduit` varchar(50) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `Produit_Client_FK` (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `PrixVenteProduit`, `PrixAchatProduit`, `StockProduit`, `PoidProduit`, `NomProduit`, `DescriptionProduit`, `MateriauxProduit`, `TypeProduit`, `CouleurProduit`, `idclient`) VALUES
(1, 40, 20, 2, 2, 'Ruff', 'ff', '1', '1', 'Rouge', 1),
(2, 40, 20, 2, 2, 'skjeg', 'sef', '2', '1', 'Rouge', 1),
(3, 40, 20, 2, 2, 'ersgqesrdhqsetrh', 'qeryqethqrth', '2', '1', 'erhqerh', 1),
(4, 1, 1, 1, 1, '1', '1', '1', '1', '1', 1),
(5, 40, 20, 2, 2, 'RRRRRR', 'sjkqghlkfhrf', '1', '1', 'Rouggggge', 2),
(6, 1, 1, 1, 1, '1', '1', '1', '1', '1', 1),
(7, 1, 1, 1, 1, '1', '1', '1', '1', '1', 1),
(8, 1, 1, 1, 1, '1', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `NomVille` varchar(50) NOT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `NomVille`) VALUES
(1, 'Montpellier (34000)');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `Client_Ville_FK` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `Produit_Client_FK` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

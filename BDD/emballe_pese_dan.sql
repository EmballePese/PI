-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 déc. 2017 à 15:46
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
-- Base de données :  `emballe_pese`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `Composition` varchar(45) DEFAULT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `DLC` date DEFAULT NULL,
  `Date_crea` date DEFAULT NULL,
  `Prix_achat` float DEFAULT NULL,
  `Label` int(11) NOT NULL,
  `Fermier` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `Label` (`Label`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `Composition`, `Nom`, `DLC`, `Date_crea`, `Prix_achat`, `Label`, `Fermier`) VALUES
(1, 'Tomate,CourPOSTte,Poivron', 'Ratatouille', '2017-06-15', '2017-06-01', 3, 1, 'Jean-Mi'),
(2, 'Pomme,Eau', 'Jus de Pomme', '2017-06-15', '2017-06-01', 4, 1, 'Jean-Mi'),
(3, 'Riz,Eau', 'Jus de Riz', '2020-07-15', '2020-06-15', 2.5, 1, 'Michel'),
(4, 'Riz,Eau', 'Jus de Riz', '2020-07-15', '2020-06-15', 2.5, 1, 'Jean-Paul'),
(5, 'Fraises,Creme,', 'Tarte aux fraises', '2019-10-05', '2019-09-28', 10, 1, 'Celestin');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` enum('fermier','consommateur','gerant') DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `Categorie`) VALUES
(1, 'fermier'),
(2, 'consommateur'),
(3, 'gerant');

-- --------------------------------------------------------

--
-- Structure de la table `cmd_achat`
--

DROP TABLE IF EXISTS `cmd_achat`;
CREATE TABLE IF NOT EXISTS `cmd_achat` (
  `id_cmd_achat` int(11) NOT NULL AUTO_INCREMENT,
  `Paye` enum('oui','non') DEFAULT NULL,
  `Livre` enum('oui','non') DEFAULT NULL,
  `Date_cmd` date DEFAULT NULL,
  `Fermier` int(11) NOT NULL,
  PRIMARY KEY (`id_cmd_achat`),
  KEY `Fermier` (`Fermier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cmd_vente`
--

DROP TABLE IF EXISTS `cmd_vente`;
CREATE TABLE IF NOT EXISTS `cmd_vente` (
  `id_cmd_vente` int(11) NOT NULL AUTO_INCREMENT,
  `Consommateur` int(11) NOT NULL,
  `Paye` enum('oui','non') DEFAULT NULL,
  `Livre` enum('Market','House') DEFAULT NULL,
  `Date_cmd` date DEFAULT NULL,
  `Date_livraison` date DEFAULT NULL,
  PRIMARY KEY (`id_cmd_vente`),
  KEY `Consommateur` (`Consommateur`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cmd_vente`
--

INSERT INTO `cmd_vente` (`id_cmd_vente`, `Consommateur`, `Paye`, `Livre`, `Date_cmd`, `Date_livraison`) VALUES
(1, 14, 'oui', 'Market', '2017-12-13', '2017-12-13'),
(2, 14, 'oui', 'Market', '2017-12-13', '2017-12-13'),
(3, 14, 'oui', 'Market', '2017-12-13', '2017-12-13'),
(4, 14, 'oui', 'Market', '2017-12-13', '2017-12-13'),
(5, 14, 'oui', 'House', '2017-12-13', '2017-12-13'),
(6, 14, 'oui', 'House', '2017-12-13', '2017-12-13'),
(7, 14, 'oui', 'House', '2017-12-13', '2017-12-13'),
(8, 14, 'oui', 'House', '2017-12-13', '2017-12-13'),
(9, 14, 'oui', 'Market', '2017-12-14', '2017-12-17'),
(10, 14, 'oui', 'Market', '2017-12-14', '2017-12-17'),
(11, 14, 'oui', 'Market', '2017-12-19', '2017-12-22'),
(12, 17, 'oui', 'Market', '2017-12-19', '2017-12-22'),
(13, 14, 'non', 'Market', '2017-12-19', '2017-12-22'),
(14, 14, 'non', 'Market', '2017-12-19', '2017-12-22');

-- --------------------------------------------------------

--
-- Structure de la table `label`
--

DROP TABLE IF EXISTS `label`;
CREATE TABLE IF NOT EXISTS `label` (
  `id_label` int(11) NOT NULL AUTO_INCREMENT,
  `Label` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_label`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `label`
--

INSERT INTO `label` (`id_label`, `Label`) VALUES
(1, 'Bio'),
(2, 'Plein Air');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_cmd_achat`
--

DROP TABLE IF EXISTS `ligne_cmd_achat`;
CREATE TABLE IF NOT EXISTS `ligne_cmd_achat` (
  `id_ligne_cmd_achat` int(11) NOT NULL AUTO_INCREMENT,
  `Cmd_achat` int(11) NOT NULL,
  `Article` int(11) NOT NULL,
  `Qte` int(4) DEFAULT NULL,
  `Prix_facture` float DEFAULT NULL,
  PRIMARY KEY (`id_ligne_cmd_achat`),
  KEY `Cmd_achat` (`Cmd_achat`),
  KEY `Article` (`Article`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_cmd_vente`
--

DROP TABLE IF EXISTS `ligne_cmd_vente`;
CREATE TABLE IF NOT EXISTS `ligne_cmd_vente` (
  `id_ligne_cmd_vente` int(11) NOT NULL AUTO_INCREMENT,
  `cmd_vente` int(11) NOT NULL,
  `Produit` int(11) NOT NULL,
  `Qte` int(2) DEFAULT NULL,
  `Prix_facture` float DEFAULT NULL,
  PRIMARY KEY (`id_ligne_cmd_vente`),
  KEY `cmd_vente` (`cmd_vente`),
  KEY `Produit` (`Produit`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligne_cmd_vente`
--

INSERT INTO `ligne_cmd_vente` (`id_ligne_cmd_vente`, `cmd_vente`, `Produit`, `Qte`, `Prix_facture`) VALUES
(1, 1, 1, 4, 30),
(2, 1, 3, 3, 22.5),
(3, 2, 1, 4, 30),
(4, 3, 1, 3, 22.5),
(5, 4, 1, 6, 45),
(6, 5, 1, 3, 22.5),
(7, 5, 3, 3, 22.5),
(8, 8, 1, 4, 30),
(9, 8, 3, 4, 30),
(10, 9, 1, 20, 150),
(11, 9, 3, 15, 112.5),
(12, 10, 3, 2, 15),
(13, 11, 1, 1, 7.5),
(14, 12, 1, 11, 82.5),
(15, 13, 1, 5, 37.5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `Type` int(11) NOT NULL,
  `Article` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Qte_stock` int(4) DEFAULT NULL,
  `Stock_mini` int(3) DEFAULT NULL,
  `Marge` float DEFAULT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `Type` (`Type`),
  KEY `Article` (`Article`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `Type`, `Article`, `Nom`, `Qte_stock`, `Stock_mini`, `Marge`) VALUES
(1, 1, 1, 'Ratatouille', 500, 20, 1.5),
(2, 3, 3, 'Jus de Riz', 500, 20, 1.5),
(3, 1, 5, 'Tarte aux fraises', 500, 20, 1.5);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `Type`) VALUES
(1, 'Plat_Prepare'),
(2, 'Fruit_Legume'),
(3, 'Boisson');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Prenom` varchar(45) DEFAULT NULL,
  `Adresse` varchar(60) DEFAULT NULL,
  `CP` varchar(5) DEFAULT NULL,
  `Ville` varchar(45) DEFAULT NULL,
  `Tel` varchar(12) DEFAULT NULL,
  `Mail` varchar(60) DEFAULT NULL,
  `Mdp` varchar(45) DEFAULT NULL,
  `Status` enum('Ban','Suspendu','Actif') DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `Categorie` (`Categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `Categorie`, `Nom`, `Prenom`, `Adresse`, `CP`, `Ville`, `Tel`, `Mail`, `Mdp`, `Status`) VALUES
(16, 3, 'God', 'Kratos', '46 Rue Des Duchesnes', '95370', 'Montigny-les-Cormeilles', '0685686229', 'Kratos@gmail.fr', 'e2122da186fd6c3bcf63214f8e3da68640fbca2c', 'Actif'),
(15, 1, 'Chiche', 'Dan', '46 Rue Des Duchesnes', '95370', 'Montigny-les-Cormeilles', '0685686229', 'DCHICHE9@hotmail.fr', '1b5422dc9146d69233b7b430a6598fad78773afe', 'Actif'),
(14, 2, 'DCHICHE', 'ShinigamiNoKira', '46 Rue Des Duchesnes', '95370', 'Montigny-les-Cormeilles', '0685686229', 'DCHICHE94@hotmail.fr', '298ee7bff236227579ecdf65f990a551bbbd2077', 'Actif'),
(17, 2, 'Chiche', 'Dan', '46 Rue Des Duchesnes', '95370', 'Montigny-les-Cormeilles', '0685686229', 'DCHICHE@hotmail.fr', '298ee7bff236227579ecdf65f990a551bbbd2077', 'Actif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

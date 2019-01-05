-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 09 Octobre 2017 à 10:28
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestion_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE IF NOT EXISTS `affectation` (
  `Taux` int(11) DEFAULT NULL,
  `CA` int(11) DEFAULT NULL,
  `Date_affectation` date DEFAULT NULL,
  `affectationID` int(11) NOT NULL AUTO_INCREMENT,
  `ressourcesID` int(11) NOT NULL,
  `tachesID` int(11) NOT NULL,
  PRIMARY KEY (`affectationID`),
  KEY `ressourcesID` (`ressourcesID`),
  KEY `tachesID` (`tachesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `affectation`
--

INSERT INTO `affectation` (`Taux`, `CA`, `Date_affectation`, `affectationID`, `ressourcesID`, `tachesID`) VALUES
(12, 12, '2016-06-05', 1, 2, 2),
(65, 16, '2016-06-02', 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `catégories`
--

CREATE TABLE IF NOT EXISTS `catégories` (
  `Description` varchar(100) DEFAULT NULL,
  `catégoriesID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`catégoriesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `catégories`
--

INSERT INTO `catégories` (`Description`, `catégoriesID`) VALUES
('projet de gestion', 1),
('projet de génie civil', 2);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `nom_dept` char(100) DEFAULT NULL,
  `departementID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`departementID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`nom_dept`, `departementID`) VALUES
('web', 1),
('informatique', 2),
('Technologie', 3),
('Industriel', 4);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `Description` char(10) DEFAULT NULL,
  `equipeID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`equipeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`Description`, `equipeID`) VALUES
('Equipe1', 1),
('Equipe2', 2),
('Equipe3', 3),
('Equipe4', 4);

-- --------------------------------------------------------

--
-- Structure de la table `gantt_links`
--

CREATE TABLE IF NOT EXISTS `gantt_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `gantt_links`
--

INSERT INTO `gantt_links` (`id`, `source`, `target`, `type`) VALUES
(3, 2, 2, 'G'),
(4, 3, 3, 'h');

-- --------------------------------------------------------

--
-- Structure de la table `livrable`
--

CREATE TABLE IF NOT EXISTS `livrable` (
  `Date_livraison` date DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `lIVRABLEID` int(11) NOT NULL AUTO_INCREMENT,
  `catégoriesID` int(11) NOT NULL,
  `projetID` int(11) DEFAULT NULL,
  PRIMARY KEY (`lIVRABLEID`),
  KEY `catégoriesID` (`catégoriesID`),
  KEY `projetID` (`projetID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `livrable`
--

INSERT INTO `livrable` (`Date_livraison`, `Description`, `lIVRABLEID`, `catégoriesID`, `projetID`) VALUES
('2016-06-10', 'application de gestion hhhhhh', 7, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `budget` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `nom` char(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `projetID` int(11) NOT NULL AUTO_INCREMENT,
  `departementID` int(11) NOT NULL,
  `chef_Projet` varchar(30) NOT NULL,
  PRIMARY KEY (`projetID`),
  KEY `departementID` (`departementID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`budget`, `date_debut`, `date_fin`, `nom`, `description`, `projetID`, `departementID`, `chef_Projet`) VALUES
(4444, '2002-12-12', '1970-01-09', 'gestion de projet  de developpement', 'gestion de projet informatique', 2, 2, 'fatima drhhh22'),
(444, '2016-05-02', '2016-05-19', 'Application mobile', 'Gestion des comptes bancaires', 7, 2, 'admin'),
(1222, '2016-05-03', '2016-05-18', 'Gestion des ressources humaines', 'Gestion des ressources humaines', 8, 1, 'jjjjjjjj');

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE IF NOT EXISTS `ressources` (
  `ressourcesID` int(11) NOT NULL AUTO_INCREMENT,
  `equipeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ressourcesID`),
  KEY `equipeID` (`equipeID`),
  KEY `ressourcesID` (`ressourcesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ressources`
--

INSERT INTO `ressources` (`ressourcesID`, `equipeID`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `Description_rôle` char(10) DEFAULT NULL,
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateursID` int(11) NOT NULL,
  `projetID` int(11) NOT NULL,
  PRIMARY KEY (`roleID`),
  KEY `utilisateursID` (`utilisateursID`),
  KEY `projetID` (`projetID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE IF NOT EXISTS `suivi` (
  `réalisation` int(11) DEFAULT NULL,
  `Reste` int(11) DEFAULT NULL,
  `Travail` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `suiviID` int(11) NOT NULL AUTO_INCREMENT,
  `affectationID` int(11) NOT NULL,
  `Taux-avancement` int(11) NOT NULL,
  `tachesID` int(11) DEFAULT NULL,
  PRIMARY KEY (`suiviID`),
  KEY `affectationID` (`affectationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `suivi`
--

INSERT INTO `suivi` (`réalisation`, `Reste`, `Travail`, `date`, `suiviID`, `affectationID`, `Taux-avancement`, `tachesID`) VALUES
(12, 6, '6', '2016-06-02', 14, 2, 50, NULL),
(12, 6, '6', '2016-06-01', 15, 2, 50, NULL),
(5, 3, '2', '2016-06-04', 16, 1, 40, NULL),
(5, 3, '2', '2016-06-04', 17, 1, 40, NULL),
(5, 3, '2', '2016-06-04', 21, 1, 40, NULL),
(20, 10, '10', '2016-06-01', 23, 2, 50, NULL),
(20, 10, '10', '2016-06-02', 24, 2, 50, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE IF NOT EXISTS `taches` (
  `createur` varchar(20) DEFAULT NULL,
  `Date_debut` date DEFAULT NULL,
  `Date_fin` date DEFAULT NULL,
  `nom` char(100) DEFAULT NULL,
  `Duree` int(11) DEFAULT NULL,
  `tachesID` int(11) NOT NULL AUTO_INCREMENT,
  `projetID` int(11) DEFAULT NULL,
  PRIMARY KEY (`tachesID`),
  KEY `projetID` (`projetID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Contenu de la table `taches`
--

INSERT INTO `taches` (`createur`, `Date_debut`, `Date_fin`, `nom`, `Duree`, `tachesID`, `projetID`) VALUES
('fatima', '2016-05-01', '2016-05-04', 'codage de authentification', 4, 2, 2),
('fatima', '2016-06-01', '1970-01-01', 'codage', 2, 3, 7),
('fatima2', '2016-06-01', '1970-01-01', 'conception', 2, 4, 2),
('admin', '1970-01-01', '1970-01-01', 'ggggggggg', 3, 9, 2),
('admin', '1970-01-01', '1970-01-01', 'DDDDDDD', 4, 10, 2),
('admin', '1970-01-01', '1970-01-01', 'KKKKKKK', 5, 11, 2),
('', '2016-06-01', '0000-00-00', 'hhhhh', 0, 2147483647, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `age` int(11) DEFAULT NULL,
  `nom` char(10) DEFAULT NULL,
  `prenom` char(10) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  `utilisateursID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`utilisateursID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`age`, `nom`, `prenom`, `mail`, `password`, `utilisateursID`) VALUES
(24, 'driouch', 'salma', 'driouch88.f@gmail.com', 'admin', 2),
(23, 'FFFF', 'fff', 'fatima@fatima.com', '12345', 3),
(23, 'FFFF', 'fff', 'fatima@fatima.com', '12345', 4),
(23, 'FFFF', 'fff', 'fatima@fatima.com', '12345', 5),
(22, 'salma', 'salma', 'salma@ss.com', '12345', 6);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `FK_Affectation_Ressources` FOREIGN KEY (`ressourcesID`) REFERENCES `ressources` (`ressourcesID`),
  ADD CONSTRAINT `FK_Affectation_Taches` FOREIGN KEY (`tachesID`) REFERENCES `taches` (`tachesID`);

--
-- Contraintes pour la table `livrable`
--
ALTER TABLE `livrable`
  ADD CONSTRAINT `FK_LIVRABLE_Catégories` FOREIGN KEY (`catégoriesID`) REFERENCES `catégories` (`catégoriesID`),
  ADD CONSTRAINT `FK_LIVRABLE_Projet` FOREIGN KEY (`projetID`) REFERENCES `projet` (`projetID`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_Projet_Departement` FOREIGN KEY (`departementID`) REFERENCES `departement` (`departementID`);

--
-- Contraintes pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `FK_Ressources_Equipe` FOREIGN KEY (`equipeID`) REFERENCES `equipe` (`equipeID`),
  ADD CONSTRAINT `FK_Ressources_Utilisateurs` FOREIGN KEY (`ressourcesID`) REFERENCES `utilisateurs` (`utilisateursID`);

--
-- Contraintes pour la table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `FK_Role_Projet` FOREIGN KEY (`projetID`) REFERENCES `projet` (`projetID`),
  ADD CONSTRAINT `FK_Role_Utilisateurs` FOREIGN KEY (`utilisateursID`) REFERENCES `utilisateurs` (`utilisateursID`);

--
-- Contraintes pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD CONSTRAINT `FK_Suivi_Affectation` FOREIGN KEY (`affectationID`) REFERENCES `affectation` (`affectationID`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `FK_Taches_Projet` FOREIGN KEY (`projetID`) REFERENCES `projet` (`projetID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

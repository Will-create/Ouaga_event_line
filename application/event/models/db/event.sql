-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 mai 2020 à 00:01
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `event`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(254) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'louis', 'Nabaloum', 'mellylastar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'JNVNKMVB', 'QSDOQIFNB', 'mellyastar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Louis', 'Bertson', 'louis@gmail.com', '46f227e9cf17e2e1e88b14e679047bd9'),
(4, 'SABA', 'Fatimata', 'fatimatasaba6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'hjk', 'gvbhh', 'mellylatar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'SABA', 'Sadia', 'sadia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(255) NOT NULL,
  `nom_categorie` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Musique'),
(2, 'Festival'),
(3, 'Conférence de presse'),
(4, ' Mariage'),
(5, 'Gouvernemental'),
(6, 'Divers');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(255) NOT NULL,
  `id_event` int(254) NOT NULL,
  `pseudo` varchar(254) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_comment` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_event`, `pseudo`, `email`, `date_comment`, `content`) VALUES
(1, 2, 'LOUIS', 'louisbertson@gmail.com', '2020-05-12', 'luijhe;fgj;efojgherg'),
(2, 2, 'Raston', 'raston@gmail.com', '2020-05-12', ';sikhgo[wihgk\'0iodhgr\'go;sjodg[g'),
(3, 1, 'Bertille', 'bertille@gmail.com', '2020-05-08', ';wuejgj;hgw;gjhguw');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `descriptions` text NOT NULL,
  `date_debut` varchar(254) NOT NULL,
  `date_fin` varchar(254) NOT NULL,
  `organisateur` text NOT NULL,
  `lieu` text NOT NULL,
  `infoline` varchar(255) NOT NULL,
  `photo` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_event`, `id_categorie`, `nom`, `descriptions`, `date_debut`, `date_fin`, `organisateur`, `lieu`, `infoline`, `photo`) VALUES
(1, 0, 'Concert', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '21H ', '2H', 'DESTINY Prod', 'State 4Aout', '70883948', '/PHOTO/img.jpg'),
(2, 0, 'Fespaco', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '12h', '23h', 'ministere de la culture', 'SIEGE', '37485987892873', '/PHOTO/img.jpg'),
(3, 2, 'Faso ACADEMY', 'uhjokomvoeruighzmorgjh\r\nzioajdbvjmkvv\r\nkzjgideijkzebhjikv\r\nishdbvkjlazeidjhbvz\r\nkzdjhgvioazdhv\r\naijhdgfviovejkh', '25k', '145', 'SODIUJFBGJVJHKOZL', 'LSJDHGJKLD', 'DOJBGJKLBVJ', 'QOUJHBFJOB');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

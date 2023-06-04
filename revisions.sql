-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 juin 2023 à 18:20
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `revisions`
--
CREATE DATABASE IF NOT EXISTS `revisions` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `revisions`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `article`, `id_utilisateur`) VALUES
(30, 'dslkjfldsfjdfkjsdlkf', 34),
(31, 'test 1 cat', 34),
(32, 'TEST 2 cat', 34),
(33, 'test 2eme profil', 36),
(34, '', 34),
(35, '', 34),
(36, '', 34),
(37, '', 34),
(38, '', 34),
(39, '', 34),
(40, 'dsdsdsdsd', 34),
(41, 'sdsds', 34),
(42, 'dsdsd', 34),
(43, 'dsdsds', 34),
(44, 'nouveau article', 45),
(45, 'cl', 45),
(46, 'cslkdsldksldk', 45),
(47, 'ddslkjqskd', 45),
(48, 'fksdjflsdf', 45),
(49, 'jlkdsqljqsdjql', 45),
(50, 'lkdmlfkds', 45),
(51, 'djqdqskd', 45),
(52, 'fdkjdskf', 45);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorieTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorieTitle`) VALUES
(1, 'horreur'),
(2, 'aventure'),
(3, 'action');

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

CREATE TABLE `liaison` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `liaison`
--

INSERT INTO `liaison` (`id`, `id_article`, `id_categorie`) VALUES
(11, 30, 1),
(12, 30, 2),
(13, 31, 3),
(14, 32, 1),
(15, 32, 2),
(16, 33, 1),
(17, 33, 2),
(18, 33, 3),
(19, 38, 1),
(20, 42, 1),
(21, 44, 1),
(22, 45, 1),
(23, 45, 2),
(24, 45, 3),
(25, 46, 1),
(26, 46, 2),
(27, 48, 1),
(28, 49, 1),
(29, 49, 2),
(30, 49, 3),
(31, 50, 1),
(32, 51, 3),
(33, 52, 1);

-- --------------------------------------------------------

--
-- Structure de la table `userscore`
--

CREATE TABLE `userscore` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `userscore`
--

INSERT INTO `userscore` (`id`, `level`, `score`, `id_utilisateur`) VALUES
(1, 3, 13, 34),
(2, 3, 10, 34),
(3, 3, 10, 34),
(4, 3, 16, 34),
(5, 3, 15, 34),
(6, 3, 14, 34),
(7, 3, 14, 34),
(8, 3, 13, 34),
(9, 6, 19, 34),
(10, 3, 10, 34),
(11, 3, 13, 34),
(12, 3, 13, 34),
(13, 3, 10, 34),
(14, 3, 13, 39),
(15, 3, 16, 45),
(16, 3, 15, 45),
(17, 3, 14, 45),
(18, 3, 16, 45),
(19, 3, 15, 45),
(20, 3, 16, 45),
(21, 3, 15, 45),
(22, 3, 14, 45),
(23, 3, 16, 45),
(24, 3, 15, 45),
(25, 3, 14, 45),
(26, 3, 10, 45),
(27, 3, 19, 45),
(28, 3, 15, 45),
(29, 3, 14, 45),
(30, 3, 14, 45),
(31, 3, 18, 45),
(32, 3, 18, 45),
(33, 3, 20, 45),
(34, 3, 14, 45);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `firstname`, `lastname`) VALUES
(1, 'test', '', 'test', 'test', 'test'),
(7, 'testLogin', 'testPassword', 'testEmail', 'testFirstname', 'testLastname'),
(34, 'd', 'd', 'd', 'd', 'd'),
(37, 'a', 'a', 'a', 'a', 'a'),
(42, 'q', 'q', 'q', 'q', 'q'),
(43, 'c', '$2y$10$oK0RPYBxmX9IFzeeMLFczur2Zu/m.q7T0h6vv4N/bTPPYUaSK6mfy', 'c', 'c', 'c'),
(44, 'x', 'x', 'x', 'x', 'x'),
(45, 'w', '$2y$10$itFwoLn8TGXBVlcoZvrFYePqlGtIipbrh26gmwDQr9veteLSE3REm', 'w', 'w', 'w');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userscore`
--
ALTER TABLE `userscore`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `liaison`
--
ALTER TABLE `liaison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `userscore`
--
ALTER TABLE `userscore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

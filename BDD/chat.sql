-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 mars 2022 à 01:27
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 425522591, 334373254, 'bonjour'),
(2, 425522591, 558142944, 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `uesr_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `post` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`uesr_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `post`, `status`) VALUES
(2, 425522591, 'Dosso', 'Alex', 'alexandrekla@gmail.com', 'bonjour', '1645377074IMG_20191229_153842_507_1577634064825.jpg', 'admin', 'Hors ligne'),
(9, 595869813, 'root', 'root', 'root@gmail.com', 'bonjour', '1646957787foot.jpg', 'admin', 'Hors ligne'),
(10, 876603570, 'Boni', 'Esther', 'boni@gmail.com', 'bonjour', '1646957881facebook_logos_PNG19764.png', 'cc', 'Hors ligne'),
(11, 332201671, 'Kouadio', 'Ethy', 'ethy@gmail.com', 'bonjour', '1646957966IMG_20191229_153842_507_1577634064825.jpg', 'cc', 'Hors ligne'),
(12, 554786896, 'Alexandra', 'Esther', 'alex@gmail.com', 'bonjour', '1646958058foot.jpg', 'cc', 'Hors ligne'),
(13, 85570466, 'Coubaly', 'Zie', 'zie@gmail.com', 'bonjour', '1646958107IMG_20191229_155023_345.jpg', 'autre', 'Hors ligne'),
(14, 1534129435, 'Gbery', 'Evrard', 'gbery@gmail.com', 'bonjour', '1646958178IMG_20191229_155027_096.jpg', 'autre', 'Hors ligne');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uesr_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `uesr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

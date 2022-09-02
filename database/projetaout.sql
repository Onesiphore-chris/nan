-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 août 2022 à 15:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetaout`
--

-- --------------------------------------------------------

--
-- Structure de la table `enrollement`
--
-- Création : lun. 22 août 2022 à 15:25
--

CREATE TABLE `enrollement` (
  `id` int(11) NOT NULL,
  ` centre` int(200) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  ` tel_whatsapp` varchar(100) NOT NULL,
  `date_de_naissance` varchar(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  ` pays_de_residence` varchar(100) NOT NULL,
  ` commune` varchar(100) NOT NULL,
  `nationalite` varchar(200) NOT NULL,
  `numero_cmu` int(11) NOT NULL,
  `niveau_instruction` varchar(200) NOT NULL,
  `corp_metier` varchar(100) NOT NULL,
  `quartier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `information-contact`
--
-- Création : lun. 22 août 2022 à 15:25
--

CREATE TABLE `information-contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` int(120) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `information-contact`
--

INSERT INTO `information-contact` (`id`, `name`, `email`, `numero`, `texte`) VALUES
(1, 'vhgj', 'bjbhbk@gmail.com', 11, 'biugkuyfu'),
(2, 'dsvsds', 'as@gmail.com', 151, 'zdvsdvsvs');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--
-- Création : jeu. 25 août 2022 à 21:40
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero` int(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `numero`, `password`, `confirm_password`, `role`) VALUES
(1, 'chris', 'chris@gmail.com', 769362851, 'chris123@', '', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enrollement`
--
ALTER TABLE `enrollement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information-contact`
--
ALTER TABLE `information-contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enrollement`
--
ALTER TABLE `enrollement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `information-contact`
--
ALTER TABLE `information-contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

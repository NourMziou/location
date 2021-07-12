-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 oct. 2020 à 13:44
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `espace_client`
--

CREATE TABLE `espace_client` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `civilité` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mot_de_passe` varchar(50) NOT NULL,
  `Numero` int(15) NOT NULL,
  `Date_de_naissance` varchar(255) NOT NULL,
  `Date_permis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `espace_client`
--

INSERT INTO `espace_client` (`id`, `nom`, `prenom`, `civilité`, `Email`, `Mot_de_passe`, `Numero`, `Date_de_naissance`, `Date_permis`) VALUES
(1, 'hajji', 'molka', 'Mlle', 'molkahajji@gmail.com', 'MOLKA123', 92416611, '2000-01-01', '2020-09-25'),
(45, 'hajji', 'ala', 'Mr.', 'alahajji@gmail.com', '123', 27212070, '1996-05-01', '2015-05-02'),
(46, 'zghal', 'saoussen', 'Mme', 'saoussen123@gmail.co', '123456', 92416611, '1970-09-17', '2000-04-20'),
(47, 'hajji', 'mongi', 'Mr.', 'mongi@gmail.com', '789456', 97202508, '1963-11-18', '1998-05-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `espace_client`
--
ALTER TABLE `espace_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `espace_client`
--
ALTER TABLE `espace_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 oct. 2020 à 13:45
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
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(30) NOT NULL,
  `ID_client` int(30) NOT NULL,
  `Date_de_prise` varchar(255) NOT NULL,
  `Date_de_restitution` varchar(255) NOT NULL,
  `heure_de_prise` varchar(15) NOT NULL,
  `heure_de_restitution` varchar(20) NOT NULL,
  `Payement` varchar(50) NOT NULL DEFAULT 'non_payé',
  `ID_véhicule` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `ID_client`, `Date_de_prise`, `Date_de_restitution`, `heure_de_prise`, `heure_de_restitution`, `Payement`, `ID_véhicule`) VALUES
(67, 1, '2020-09-14', '2020-09-24', '17:26', '19:26', 'pas_encore', 3),
(68, 1, '2020-10-02', '2020-09-14', '17:27', '20:27', 'payé', 6),
(69, 45, '2020-10-13', '2020-09-29', '18:28', '20:28', 'pas_encore', 12),
(70, 45, '2020-09-14', '2020-09-21', '18:29', '21:29', 'payé', 5),
(71, 45, '2020-09-08', '2020-09-16', '17:32', '19:32', 'pas_encore', 5),
(72, 47, '2020-09-08', '2020-10-01', '17:40', '18:40', 'pas_encore', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

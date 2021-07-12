-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 oct. 2020 à 13:48
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
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id_vehicule` int(3) NOT NULL,
  `ID_client` int(255) NOT NULL,
  `ID_reservation` int(255) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `prix_location` double NOT NULL,
  `catégorie` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `date_visite` varchar(255) NOT NULL,
  `date_assurance` varchar(255) NOT NULL,
  `carburant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id_vehicule`, `ID_client`, `ID_reservation`, `marque`, `prix_location`, `catégorie`, `photo`, `etat`, `date_visite`, `date_assurance`, `carburant`) VALUES
(1, 0, 0, 'SKODA FABIA', 52, 'économique', 'v1.png', 'oui', '2020-09-30', '2020-09-10', 'Diesel'),
(2, 0, 0, 'TOYOTA YARIS', 53, 'économique', 'v2.png', 'non', '2020-09-15', '2020-09-23', 'Essence'),
(3, 0, 0, 'VOLKSWAGEN POLO SEDAN', 68, 'économique', 'v3.png', 'oui', '2020-10-30', '2020-09-14', 'Diesel'),
(4, 0, 0, 'FIAT 500', 83, 'économique', 'v4.png', 'non', '2020-10-05', '2020-11-17', 'Essence'),
(5, 0, 0, 'FORD FOCUS', 163, 'Intermédiaire', 'p.jpg', 'oui', '2020-09-12', '2021-01-01', 'Diesel'),
(6, 0, 0, 'SEAT LEON', 159, 'Intermédiaire', 'p2.jpg', 'oui', '2021-03-27', '2020-09-16', 'Essence'),
(7, 0, 0, 'VOLKSWAGEN GOLF 7', 210, 'Intermédiaire', 'p3.png', 'non', '2020-12-25', '2020-09-11', 'Diesel'),
(8, 0, 0, 'SUZUKI VITARA', 250, 'Intermédiaire', 'p4.jpg', 'oui', '2021-05-21', '2021-08-13', 'Essence'),
(9, 0, 0, 'MERCEDES CLASSE C', 518, 'Luxe', 'mm.jpg', 'oui', '2020-10-01', '2021-04-13', 'Diesel'),
(10, 0, 0, 'AUDI A4', 400, 'Luxe', 'm.png', 'oui', '2020-12-23', '2020-10-03', 'Essence'),
(11, 0, 0, 'PEUGEOT 5008', 352, 'Luxe', 'pe.jpg', 'non', '2021-03-05', '2021-04-08', 'Diesel'),
(12, 0, 0, 'RANGE ROVER VELAR', 600, 'Luxe', 'rr.png', 'oui', '2020-09-30', '2020-09-12', 'Essence');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id_vehicule` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

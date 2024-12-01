-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 01 déc. 2024 à 23:51
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionimmobiliers`
--

-- --------------------------------------------------------

--
-- Structure de la table `immobilier`
--

CREATE TABLE `immobilier` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(50) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `surface` float NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `domaineUsage` varchar(50) NOT NULL,
  `nature` enum('Appartement','Villa') NOT NULL,
  `nbEtages` int(11) DEFAULT NULL,
  `surfaceCommune` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `immobilier`
--

INSERT INTO `immobilier` (`reference`, `proprietaire`, `localite`, `surface`, `nbPieces`, `domaineUsage`, `nature`, `nbEtages`, `surfaceCommune`) VALUES
(2, 'Rahma', 'Tunis', 4109, 16, 'Domicile', 'Appartement', NULL, 4942),
(3, 'Rahma', 'Tunis', 2685, 19, 'Domicile', 'Appartement', NULL, 5804),
(4, 'Rahma', 'Tunis', 7439, 9, 'Domicile', 'Appartement', NULL, 7111),
(5, 'Rahma', 'Tunis', 756, 18, 'Domicile', 'Appartement', NULL, 2029),
(6, 'Rahma', 'Tunis', 9359, 19, 'Domicile', 'Appartement', NULL, 1549),
(7, 'Rahma', 'Tunis', 7558, 10, 'Domicile', 'Appartement', NULL, 5303),
(8, 'Rahma', 'Tunis', 2671, 17, 'Domicile', 'Appartement', NULL, 7636),
(9, 'Rahma', 'Tunis', 4238, 17, 'Domicile', 'Appartement', NULL, 7408),
(10, 'Rahma', 'Tunis', 9407, 1, 'Domicile', 'Appartement', NULL, 9526),
(11, 'Rahma', 'Tunis', 1875, 12, 'Domicile', 'Appartement', NULL, 5066),
(12, 'Rahma', 'Tunis', 2429, 11, 'Domicile', 'Appartement', NULL, 9519),
(13, 'Rahma', 'Tunis', 5489, 14, 'Domicile', 'Appartement', NULL, 5948),
(14, 'Rahma', 'Tunis', 1528, 11, 'Domicile', 'Appartement', NULL, 2904),
(15, 'Rahma', 'Tunis', 1404, 12, 'Domicile', 'Appartement', NULL, 9517),
(16, 'Rahma', 'Tunis', 1307, 11, 'Domicile', 'Appartement', NULL, 3976),
(17, 'Rahma', 'Tunis', 5459, 14, 'Domicile', 'Appartement', NULL, 7932),
(18, 'Rahma', 'Tunis', 4855, 13, 'Domicile', 'Appartement', NULL, 3645),
(19, 'Rahma', 'Tunis', 9946, 15, 'Domicile', 'Appartement', NULL, 5701),
(20, 'Rahma', 'Tunis', 2620, 1, 'Domicile', 'Appartement', NULL, 8936),
(21, 'Rahma', 'Tunis', 5313, 6, 'Domicile', 'Appartement', NULL, 4244),
(22, 'Rahma', 'Tunis', 5021, 5, 'Domicile', 'Appartement', NULL, 8121),
(23, 'Rahma', 'Tunis', 1896, 19, 'Domicile', 'Appartement', NULL, 6367),
(24, 'Rahma', 'Tunis', 6701, 17, 'Domicile', 'Appartement', NULL, 6299),
(25, 'Rahma', 'Tunis', 2592, 6, 'Domicile', 'Appartement', NULL, 2290),
(26, 'Rahma', 'Tunis', 6945, 13, 'Domicile', 'Appartement', NULL, 1746),
(27, 'Rahma', 'Tunis', 5961, 14, 'Domicile', 'Appartement', NULL, 2583),
(28, 'Rahma', 'Tunis', 3303, 15, 'Domicile', 'Appartement', NULL, 166),
(29, 'Rahma', 'Tunis', 9251, 7, 'Domicile', 'Appartement', NULL, 4395),
(30, 'Rahma', 'Tunis', 4036, 13, 'Domicile', 'Appartement', NULL, 7323),
(31, 'Rahma', 'Tunis', 2995, 7, 'Domicile', 'Appartement', NULL, 3451),
(32, 'Rahma', 'Tunis', 4023, 14, 'Domicile', 'Appartement', NULL, 1852),
(33, 'Rahma', 'Tunis', 3199, 10, 'Domicile', 'Appartement', NULL, 1848),
(34, 'Rahma', 'Tunis', 5442, 15, 'Domicile', 'Appartement', NULL, 8716),
(35, 'Rahma', 'Tunis', 3945, 16, 'Domicile', 'Appartement', NULL, 1791),
(36, 'Rahma', 'Tunis', 4851, 12, 'Domicile', 'Appartement', NULL, 9208),
(37, 'Rahma', 'Tunis', 3063, 18, 'Domicile', 'Appartement', NULL, 716),
(38, 'Rahma', 'Tunis', 157, 18, 'Domicile', 'Appartement', NULL, 7977),
(39, 'Rahma', 'Tunis', 9684, 5, 'Domicile', 'Appartement', NULL, 5499),
(40, 'Rahma', 'Tunis', 2192, 8, 'Domicile', 'Appartement', NULL, 8420),
(41, 'Rahma', 'Tunis', 1300, 5, 'Domicile', 'Appartement', NULL, 5156),
(42, 'Rahma', 'Tunis', 4372, 11, 'Domicile', 'Appartement', NULL, 6716),
(43, 'Rahma', 'Tunis', 5418, 10, 'Domicile', 'Appartement', NULL, 5322),
(44, 'Rahma', 'Tunis', 6207, 4, 'Domicile', 'Appartement', NULL, 8187),
(45, 'Rahma', 'Tunis', 6424, 1, 'Domicile', 'Appartement', NULL, 8143),
(46, 'Rahma', 'Tunis', 2394, 14, 'Domicile', 'Appartement', NULL, 8775),
(47, 'Rahma', 'Tunis', 3103, 1, 'Domicile', 'Appartement', NULL, 7040),
(48, 'Rahma', 'Tunis', 1369, 18, 'Domicile', 'Appartement', NULL, 2378),
(49, 'Rahma', 'Tunis', 7897, 16, 'Domicile', 'Appartement', NULL, 6809),
(50, 'Rahma', 'Tunis', 3921, 20, 'Domicile', 'Appartement', NULL, 9781),
(51, 'Rahma', 'Tunis', 7078, 15, 'Domicile', 'Appartement', NULL, 8015),
(52, 'Rahma', 'Tunis', 7555, 8, 'Domicile', 'Appartement', NULL, 9318),
(53, 'Rahma', 'Tunis', 8533, 15, 'Domicile', 'Appartement', NULL, 773),
(54, 'Rahma', 'Tunis', 7226, 14, 'Domicile', 'Appartement', NULL, 6579),
(55, 'Rahma', 'Tunis', 4898, 3, 'Domicile', 'Appartement', NULL, 8128),
(56, 'Rahma', 'Tunis', 2228, 11, 'Domicile', 'Appartement', NULL, 629),
(57, 'Rahma', 'Tunis', 1087, 3, 'Domicile', 'Appartement', NULL, 603),
(58, 'Rahma', 'Tunis', 2253, 2, 'Domicile', 'Appartement', NULL, 3002),
(59, 'Rahma', 'Tunis', 3952, 3, 'Domicile', 'Appartement', NULL, 9179),
(60, 'Rahma', 'Tunis', 1612, 7, 'Domicile', 'Appartement', NULL, 4357),
(61, 'Rahma', 'Tunis', 3244, 1, 'Domicile', 'Appartement', NULL, 9058),
(62, 'Rahma', 'Tunis', 3048, 9, 'Domicile', 'Appartement', NULL, 8868),
(63, 'Rahma', 'Tunis', 7129, 9, 'Domicile', 'Appartement', NULL, 379),
(64, 'Rahma', 'Tunis', 5726, 7, 'Domicile', 'Appartement', NULL, 5379),
(65, 'Rahma', 'Tunis', 7799, 1, 'Domicile', 'Appartement', NULL, 1375),
(66, 'Rahma', 'Tunis', 3423, 9, 'Domicile', 'Appartement', NULL, 4485),
(67, 'Rahma', 'Tunis', 4705, 5, 'Domicile', 'Appartement', NULL, 982),
(68, 'Rahma', 'Tunis', 1374, 18, 'Domicile', 'Appartement', NULL, 6966),
(69, 'Rahma', 'Tunis', 1283, 18, 'Domicile', 'Appartement', NULL, 2093),
(70, 'Rahma', 'Tunis', 8983, 6, 'Domicile', 'Appartement', NULL, 6340),
(71, 'Rahma', 'Tunis', 3926, 5, 'Domicile', 'Appartement', NULL, 2890),
(72, 'Rahma', 'Tunis', 8991, 9, 'Domicile', 'Appartement', NULL, 7501),
(73, 'Rahma', 'Tunis', 7759, 16, 'Domicile', 'Appartement', NULL, 484),
(74, 'Rahma', 'Tunis', 3254, 1, 'Domicile', 'Appartement', NULL, 5823),
(75, 'Rahma', 'Tunis', 9670, 16, 'Domicile', 'Appartement', NULL, 4484),
(76, 'Rahma', 'Tunis', 8733, 11, 'Domicile', 'Appartement', NULL, 4737),
(77, 'Rahma', 'Tunis', 3742, 19, 'Domicile', 'Appartement', NULL, 8489),
(78, 'Rahma', 'Tunis', 1638, 14, 'Domicile', 'Appartement', NULL, 2474),
(79, 'Rahma', 'Tunis', 7632, 5, 'Domicile', 'Appartement', NULL, 9972),
(80, 'Rahma', 'Tunis', 1251, 8, 'Domicile', 'Appartement', NULL, 998),
(81, 'Rahma', 'Tunis', 6713, 11, 'Domicile', 'Appartement', NULL, 2132),
(82, 'Rahma', 'Tunis', 4643, 9, 'Domicile', 'Appartement', NULL, 6282),
(83, 'Rahma', 'Tunis', 8070, 16, 'Domicile', 'Appartement', NULL, 5766),
(84, 'Rahma', 'Tunis', 7543, 20, 'Domicile', 'Appartement', NULL, 2096),
(85, 'Rahma', 'Tunis', 7725, 5, 'Domicile', 'Appartement', NULL, 8636),
(86, 'Rahma', 'Tunis', 7736, 20, 'Domicile', 'Appartement', NULL, 3140),
(87, 'Rahma', 'Tunis', 5251, 14, 'Domicile', 'Appartement', NULL, 8479),
(88, 'Rahma', 'Tunis', 372, 11, 'Domicile', 'Appartement', NULL, 3149),
(89, 'Rahma', 'Tunis', 7780, 6, 'Domicile', 'Appartement', NULL, 8385),
(90, 'Rahma', 'Tunis', 7354, 7, 'Domicile', 'Appartement', NULL, 1159),
(91, 'Rahma', 'Tunis', 7101, 9, 'Domicile', 'Appartement', NULL, 3689),
(92, 'Rahma', 'Tunis', 4800, 1, 'Domicile', 'Appartement', NULL, 9221),
(93, 'Rahma', 'Tunis', 7910, 13, 'Domicile', 'Appartement', NULL, 3123),
(94, 'Rahma', 'Tunis', 420, 7, 'Domicile', 'Appartement', NULL, 1750),
(95, 'Rahma', 'Tunis', 952, 11, 'Domicile', 'Appartement', NULL, 9630),
(96, 'Rahma', 'Tunis', 6465, 14, 'Domicile', 'Appartement', NULL, 8258),
(97, 'Rahma', 'Tunis', 6249, 2, 'Domicile', 'Appartement', NULL, 9313),
(98, 'Rahma', 'Tunis', 948, 20, 'Domicile', 'Appartement', NULL, 7269),
(99, 'Rahma', 'Tunis', 9490, 8, 'Domicile', 'Appartement', NULL, 3236);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `immobilier`
--
ALTER TABLE `immobilier`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

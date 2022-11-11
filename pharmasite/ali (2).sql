-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 nov. 2022 à 16:54
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
-- Base de données : `ali`
--

-- --------------------------------------------------------

--
-- Structure de la table `ali`
--

CREATE TABLE `ali` (
  `id` int(11) NOT NULL,
  `Nom_medicament` varchar(23) NOT NULL,
  `Nom_molecule` varchar(30) NOT NULL,
  `Grammage` int(30) NOT NULL,
  `Type_medicament` varchar(30) NOT NULL,
  `Conseil_utilisation` text NOT NULL,
  `Effets_secondaires` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ali`
--

INSERT INTO `ali` (`id`, `Nom_medicament`, `Nom_molecule`, `Grammage`, `Type_medicament`, `Conseil_utilisation`, `Effets_secondaires`, `status`) VALUES
(13, 'DAFALGAN', 'Paracetamol', 500, 'Comprimé', 'Le matin', 'Douleurs abdominales', 1),
(16, 'furosémide', 'furosémide', 40, 'diurétique', 'hypertension artérielle', 'déshydratation', 1),
(17, 'Catalgine', 'acetylcysteine', 100, 'antipyrétique', 'fiévre', 'allergie', 1),
(25, 'Saroukh w el coca', 'la canon', 500, 'Drogue', 'après midi', 'planer', 0),
(26, 'manini wel 7alawiyat', 'manini', 100, 'calment', 'midi minuit', 'overdose', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `fullname` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`fullname`, `username`, `password`) VALUES
('ali', 'ali', '$2y$10$XLgxPvfQso.N8g//uXdHee75y2JuvhhWKEIHhuwEnV3MEiH/yThWa'),
('ilian', 'ilian', '$2y$10$mz9a.hSVQ9cu.xRwdtj2Te16qe82eV1n2N2khzEZG6fuSemnVjGpW'),
('smail', 'smailisgay', '$2y$10$ZwNo6hK9ZuqSOLhjfUbNjerXrdsQtuFmXPEqi6NgIjRqpErGW.PCS'),
('yacine', 'alem', '$2y$10$lAXe7IaKH3NF4FamiwsW4uXtPQ7Jm6hYcIl7PoXXTmyd5JrE5yjm6'),
('ILIAN', 'ilian2', '$2y$10$4KCjJcqrGqjmo3pwTzzmCu2tZgDv5bvC/hGoGQ8B6SrVtrYI3PHv2'),
('', '', '$2y$10$r97pg0UcmhpRjuV0fTK7aujXzVxRPCfhfpxQvdwsAAPn2MiUl87bK'),
('', 'ILIANii', '$2y$10$8YCdUOa.KKXJfk6vDXuL9uGaH3SmpjkGY47TvVkmuHb16N3NKqRKa'),
('username', 'sisi', '$2y$10$jGD7Hn9FNOLvZ/UGqfxbx.td4NjzMdZqfcW9B/MuaVH9oNXmUAF.q'),
('mohamed', 'foumed', '$2y$10$Lqb1DSNTgoVfNHgdXnIrBubq1ZyRT3ik034nL3PCu14.VGKJdcy.K'),
('dramalou', 'dr', '$2y$10$HkHKqm5.ExMirY9RJN9hOeaPi1N43osnOrgsV/Dpj7qZBJyVdNJA.'),
('ilian', 'ilian', '$2y$10$NVzpjIE/DCPjrE6aAaMOmu1bpDcYzIeJZbpeYJyjNyU1BzCdpnC4W'),
('TP', 'TPDEVWEB', '$2y$10$VPpB0FLQe3JaX50GyjgbWuhyjeqHGyHp418NC/YqNicxN48Jm4zYW'),
('test', 'test', '$2y$10$eyNQlqu2WhnU8lr4C9mF3O.mw2SLmT0zYcfR4HAd2WBi4UF8uqN02'),
('quelafamille', 'mif', '$2y$10$TUQoremWpQH59nQJZ/HQ2enDp/ROmA4EyTEZr.L83Kp6movkKpCZu'),
('yannis', 'yannis', '$2y$10$gsix7.waX.V.gE5XYQI4ceDqXLxO5VduoSGIVSP/zUQx2zCJIzG1i'),
('erwan', 'erwan', '$2y$10$pOerjC8B6qddt9hsUtvGtOIXcjyBMZ/EOoD/m84tOROEXisPZRmUK'),
('lyes', 'lyeslamenace', '$2y$10$nhmhhJ.ZvmezeCvetlUqc.OFEtNG5QqWlfEal282/nRLzp2eY6k6S');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ali`
--
ALTER TABLE `ali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ali`
--
ALTER TABLE `ali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

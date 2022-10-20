-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 mai 2022 à 23:03
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionstagaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `admiiin`
--

CREATE TABLE `admiiin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `entrreprise`
--

CREATE TABLE `entrreprise` (
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entrreprise`
--

INSERT INTO `entrreprise` (`nom`, `email`, `password`) VALUES
(' fesmarketing', 'fes@gmail.com', '123'),
(' test', 'fati@gmail.com', 'klk'),
(' soufiane', 'soufianeelbekkali@gmail.com', '123'),
(' new dev', 'test@gmail.com', '123'),
(' te', 'iosbekkali1337@gmail.com', '123'),
(' yassin', 'test@gmail.com', 'kjk');

-- --------------------------------------------------------

--
-- Structure de la table `postadmiiin`
--

CREATE TABLE `postadmiiin` (
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `post_entreprise`
--

CREATE TABLE `post_entreprise` (
  `entreprise` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `post_stagaiire`
--

CREATE TABLE `post_stagaiire` (
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stagaire`
--

CREATE TABLE `stagaire` (
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagaire`
--

INSERT INTO `stagaire` (`nom`, `email`, `password`) VALUES
(' soufiane', 'soufianeelbekkali@gmail.com', '123'),
(' yassin', 'iosbekkali1337@gmail.com', '12'),
(' test', 'iosbekkali1337@gmail.com', 'jhgbjf'),
(' fesmarketing', 'test@gmail.com', '876'),
(' new dev', 'fati@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

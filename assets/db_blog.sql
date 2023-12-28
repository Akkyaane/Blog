-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 déc. 2023 à 13:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text NOT NULL,
  `publication_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `author`, `category`, `title`, `content`, `publication_date`) VALUES
(1, 'user3', 'Technologie', 'PS5 Pro et PS6 : un processeur dédié à l\'IA pourrait vous aider lors de vos parties', 'Selon un brevet, les PS5 Pro ou PS6 profiteraient de l’intelligence artificielle. La console de Sony pourrait prédire les actions des joueurs et leur fournir une assistance en temps réel. Les conseils seraient affichés à l’écran, mais aussi depuis une dalle intégrée à la manette DualSense.\r\n\r\nSelon un brevet déposé par Sony Interactive Entertainment, la PlayStation profitera de l’intelligence artificielle avec un processeur dédié. À travers une assistance dite prédictive, la console serait en mesure d’analyser le profil d’un joueur, puis de l’aider en temps réel. La technologie se destinerait à la PS5 Pro, qui s’annonce ambitieuse, ou à la PS6.\r\n\r\nUne aide personnalisée en jeu selon le profil du joueur\r\n\r\nL’intelligence artificielle s’invite dans tous les aspects de nos vies. Capables de prédire des maladies ou des dates de décès, ces modèles améliorent aussi l’expérience de divertissement. Le brevet US20230405461 déposé par Sony décrit un système fait de différents types d’entrées et de contextes qui construisent le profil d’un joueur avec ses faiblesses potentielles.\r\n\r\nLe document indique qu’avec l’aide d’un ou de plusieurs processeurs d’intelligence artificielle, la console pourrait prédire pendant une partie où l’utilisateur souhaite se rendre ou effectuer comme manœuvre, par exemple. Si le joueur tente une entrée ou une combinaison d’entrées dans un contexte spécifique, le ou les processeurs fournissent une assistance sous forme de touches à utiliser ou de tactiques à suivre.\r\n\r\nDes conseils affichés sur la manette DualSense\r\n\r\nCes conseils personnalisés selon le niveau du joueur ne s’afficheraient pas qu’à l’écran, mais aussi sur la face avant de la manette. Si une telle technologie voit le jour, peut-on s’attendre à une nouvelle DualSense dotée d’une dalle où se trouve l’actuel pavé tactile ?\r\n\r\nSachant que Microsoft mise plus que jamais sur cette technologie avec l’assistant Copilot sous Windows, il n’y aurait rien d’étonnant à ce que le constructeur de la PlayStation s\'en empare pour sa prochaine génération. D’autant moins que Sony cherche à renforcer sa position dans de nombreux domaines avec le possible lancement d’un futur PlayStation Plus 3.0.\r\n\r\nLe but ? Atteindre un maximum de joueurs. Quoi de mieux pour s\'adresser à tous les publics que de leur offrir une assistance personnalisée en jeu. Un processeur dédié à l\'intelligence artificielle permettrait également de fournir des suggestions personnalisées aux utilisateurs qui cherchent de nouveaux films et séries à découvrir depuis le PlayStation Plus 3.0.', '2023-12-28 00:00:00'),
(2, 'user3', 'Politique', 'LOI IMMIGRATION: EMMANUEL MACRON A OFFICIELLEMENT SAISI LE CONSEIL CONSTITUTIONNEL', 'Après l\'adoption de la loi mardi 19 décembre, le président de la République avait annoncé qu\'il saisirait les Sages, pour s\'assurer de la régularité du texte. C\'est chose faite ce mardi 26 décembre.\r\nUne semaine pile après l\'adoption, dans la douleur, de la loi immigration, le Conseil constitutionnel a annoncé avoir été saisi par Emmanuel Macron pour s\'assurer de la régularité du texte, comme l\'a repéré France info. Le président de la République, mais également Élisabeth Borne et \"plus de soixante députés\" ont sollicité les Sages, indique l\'institution sur son site.\r\n\r\nDans sa saisine, Emmanuel Macron évoque \"\'l\'évolution du texte par rapport à sa version initiale\" et explique vouloir \"que les dispositions de la loi ne puissent être mises en œuvre qu\'après que le Conseil constitutionnel aura vérifié qu\'elles respectent les droits et les libertés que la Constitution garantit\".\r\n\r\nVendredi 22 décembre, les députés des quatre groupes de gauche (LFI, PS, écologistes et communistes) ont déjà saisi les Sages pour contester la totalité de la loi immigration et \"un nombre record d\'articles contraires aux principes constitutionnels\".\r\n\r\nPlusieurs articles menacés de censure\r\nDès l\'adoption de la loi controversée, le ministre de l\'Intérieur Gérald Darmanin avait admis que le texte contenait \"des mesures manifestement et clairement contraires à la Constitution\". Le lendemain, c\'est la cheffe du gouvernement Élisabeth Borne qui avait reconnu des \"dispositions\" sur lesquelles des \"doutes\" avaient été émis.\r\n\r\nQuelles dispositions de la loi risquent alors d\'être censurées? En premier lieu, la création de quotas migratoires qui pourrait aller contre la séparation des pouvoirs et créer des discriminations entre étrangers.\r\n\r\nUne autre mesure, qui a fait l\'objet de vifs débats en commission mixte paritaire, pourrait être censurée: le versement des prestations sociales conditionné à la situation professionnelle et à la durée de résidence, qui renvoie à la \"préférence nationale\" et pourrait contrevenir aux principes d\'égalité.\r\n\r\nLa caution étudiante pour les étrangers non-européens, les conditions d\'accès au regroupement familial compliquées et le remaniement du droit du sol pourraient également être retoqués par les Sages.\r\n\r\nDésormais, les Sages ont un mois pour rendre leur décision, qui ne pourra alors faire l\'objet d\'aucun recours. Si ceux-ci valident le texte, il pourra être promulgué. Si, à l\'inverse, ils le jugent contraire à la Constitution, le vote au Parlement sera annulé. Enfin, le Conseil constitutionnel peut choisi de censurer certains articles. Le texte pourra alors être promulgué, délesté des articles en question.', '2023-12-26 00:00:00'),
(10, 'user3', 'Faits divers', 'Santé : la grippe continue de progresser en France, alors que la bronchiolite décline', 'La région parisienne fait partie des nouveaux territoires touchés par l\'épidémie de grippe ces derniers jours.\r\n\r\nC\'est le cadeau indésirable de la saison hivernale. L\'épidémie de grippe saisonnière a continué à progresser ces derniers jours en France, gagnant notamment la région parisienne, a fait savoir Santé publique France, mercredi 27 décembre. A l\'inverse, le nombre de nouveaux cas de bronchiolite continue de chuter après un pic observé début décembre.\r\n\r\nLes principaux indicateurs de l\'épidémie de grippe \"étaient en hausse\" la semaine dernière, achevée le 24 décembre, selon le bilan hebdomadaire de l\'agence sanitaire. L\'épidémie, qui avait gagné tout le pan Est du pays, frappe désormais aussi l\'Ile-de-France et les Hauts-de-France. Quant aux régions de l\'Hexagone où l\'épidémie ne bat pas encore son plein, elles sont d\'ores et déjà en phase dite \"pré-épidémique\".\r\n\r\nLes gestes barrières toujours recommandés\r\nDernière grande épidémie hivernale à être suivie hebdomadairement, le Covid-19 continue à enregistrer une vague importante, mais celle-ci commence à légèrement refluer.\r\n\r\n\"Dans ce contexte de circulation élevée des différents virus respiratoires et en complément de la vaccination contre la grippe et le Covid-19\" chez les plus fragiles comme les plus de 65 ans, \"l\'adoption systématique des gestes barrières par tous reste primordiale, notamment le port du masque en cas de symptômes, dans les lieux fréquentés et en présence de personnes fragiles\", rappelle Santé publique France.', '2023-12-28 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_article` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `publication_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`),
  KEY `id_user` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `author`, `content`, `publication_date`) VALUES
(1, 1, 'user3', 'Article intéressant !', '2023-12-28 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'user1', 'user1@gmail.com', '$2y$10$imLn.eDggYkR80n2Fg9IXeGu43SfAAlvJthVHbMOWABqrFS4WLD8G'),
(2, 'user2', 'user2@gmail.com', '$2y$10$tmgLKolOtaMpLUTOlTVq1u6M8JEZJruOmU4R3ZhTLg4EgEZRarGFi'),
(4, 'user3', 'user3@gmail.com', '$2y$10$5aqwkDVJMeEC8.nrTaBV6uS.Sza8NBEXSEp5iMSwWCY2GWdUqvbUO'),
(5, 'user4', 'user4@gmail.com', '$2y$10$qPeMBBBd3De7qQyXZaOp0uI.zrR.TP2PW2q8vFZF/5DaaLrHGIl3e');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

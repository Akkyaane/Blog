-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 30 nov. 2023 à 15:38
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `auteur_article` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `auteur_article`, `date_creation`) VALUES
(1, 'Hogwarts Legacy : alors cette version Nintendo Switch, désastre ou vraie bonne surprise ?', 'Nombreux sont ceux qui n’y croyaient pas, et pourtant elle est bien là ! Après une communication plutôt discrète, la version Nintendo Switch d’Hogwarts Legacy est sortie. Et malgré tout, elle est très attendue par tous les joueurs qui n’ont qu’une Nintendo Switch à disposition. Mais est-ce que ces joueurs vont pouvoir profiter du jeu dans l’univers d’Harry Potter dans les meilleures conditions ? C’est l’heure du verdict. \r\n\r\nNous sommes en 1890. L’école de sorcellerie de Poudlard existe depuis maintenant 900 ans et s’est forgée une solide réputation dans le monde des sorciers. Les jeunes magiciens n’attendent qu’une seule chose : pouvoir y entrer. Et bien cette année, c’est votre tour ! Et vu que vous faites une entrée un peu tardive, vous voilà directement propulsé en cinquième année. Autant dire qu’il va y avoir pas mal de choses à rattraper. Et puis il va falloir trouver sa place aussi, en se faisant de nouveaux amis. Et comme si tout cela ne suffisait pas, voilà que vous vous retrouvez au beau milieu d’une révolution gobeline dévastatrice. Le vil Ranrok a clairement décidé de faire payer aux sorciers les longues années de répression et d’injustice. Et pour cela, il s’intéresse à une forme de magie toute particulière : la magie ancienne. Et il se trouve que vous pourriez bien être étonnamment lié à cette forme de magie ancestrale et particulièrement puissante. Le destin du monde des sorciers pourrait reposer sur vous. Mais attention, ce n’est pas une excuse pour négliger vos études. Fin du monde ou pas, à la fin de l’année vous passerez vos BUSE !', 'Cyril Clos', '2023-11-19 11:00:45'),
(2, 'GTA 6 : la date des précommandes aurait été dévoilée', 'Alors qu\'on attend le 1er trailer officiel de GTA 6 début décembre, une chaîne de magasin anglais aurait divulgué la date de précommande du prochain jeu de Rockstar Games. Après l\'excellentissime Baldur\'s Gate 3 sorti en août dernier, le jeu le plus attendu de l\'année est probablement GTA 6. La suite de la célèbre série de jeux signés Rockstar Games, dont le dernier opus date de 2013, se fait attendre depuis très longtemps. Surtout que cela fait déjà un an que le studio a été la cible d\'une fuite massive de données du titre, dont on sait depuis pas mal de choses. La cyberattaque a d\'ailleurs déclenché une enquête du FBI pour aboutir à plusieurs arrestations de hackers présumés.\r\n\r\nOfficiellement, nous avons d\'abord eu droit à un possible “teaser de teaser” prenant la forme d\'une image savamment composée, avant la confirmation. Le premier trailer de GTA 6 sera publié début décembre. Cela ne veut pas dire que la sortie du jeu suivra rapidement. Rien n\'empêche le studio d\'en dévoiler des éléments par petites touches des années avant de proposer le produit fini s\'il le souhaite. Mais comme on pouvait s\'y attendre, l\'annonce du trailer a engrangé de nouvelles rumeurs, dont celle sur la date d\'ouverture des précommandes.', 'Thomas Povéda', '2023-11-29 16:30:30');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `nom_categorie` varchar(100) NOT NULL,
  `commentaires` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `nom_categorie`, `commentaires`, `date_commentaire`) VALUES
(1, 2, 'Jérémie Bayon', 'Jeux vidéos', 'Whoah, je suis trop pressé que le trailer sorte !!!', '2023-11-30 15:33:46'),
(2, 1, 'Adel Bouacem', 'Jeux vidéos', 'Le jeu, c\'est de la merde ! J\'ai la phobie des araignées et il n\'y a pas de mode arachnophobe. Je trouve cela scandaleux qu\'en big 2023, on ne pense toujours pas aux minorités. Les gens meurent de faim, bordel de merde !!!', '2023-11-30 15:35:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_billet` (`id_billet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_billet`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

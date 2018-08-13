-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3308
-- Généré le :  lun. 13 août 2018 à 06:55
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_films`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(50) NOT NULL,
  `prenom_acteur` varchar(50) NOT NULL,
  `sexe_acteur` char(1) NOT NULL,
  `date_naissance_acteur` date DEFAULT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `prenom_acteur`, `sexe_acteur`, `date_naissance_acteur`) VALUES
(1, 'Vikander', 'Alicia', 'F', '1988-10-03'),
(2, 'Wu', 'Daniel', 'M', '1974-09-30'),
(3, 'Goggins', 'Walton', 'M', '1971-11-10'),
(4, 'Pitt', 'Brad', 'M', '1963-12-18'),
(5, 'Gosling', 'Ryan', 'M', '1980-11-12'),
(6, 'Theron', 'Charlize', 'F', '1975-08-07'),
(7, 'Di Caprio', 'Leonardo', 'M', '1974-11-11'),
(8, 'Cotillard', 'Marion', 'F', '1975-09-30'),
(9, 'Canet', 'Guillaume', 'M', '1973-04-10'),
(10, 'Smith', 'Will', 'M', '1968-09-25'),
(11, 'Eastwood', 'Clint', 'M', '1930-05-31'),
(12, 'Sy', 'Omar', 'M', '1978-01-20'),
(13, 'Norton', 'Edward', 'M', '1969-08-18'),
(14, 'Hardy', 'Tom', 'M', '1977-09-15'),
(15, 'Hoult', 'Nicholas', 'M', '1989-12-07'),
(16, 'Bonham Carter', 'Helena', 'F', '1966-05-26'),
(17, 'Pratt', 'Chris', 'M', '1979-06-21'),
(18, 'Hanks', 'Tom', 'M', '1956-07-09'),
(19, 'Ford', 'Harrison', 'M', '1942-07-13'),
(20, 'McGregor', 'Ewan', 'M', '1971-03-31'),
(21, 'Boseman', 'Chadwick', 'M', '1977-11-29'),
(22, 'B. Jordan', 'Michael', 'M', '1987-02-09'),
(23, 'Hamill', 'Mark', 'M', '1951-09-25'),
(24, 'Baker', 'Kenny', 'M', '1934-08-24'),
(25, 'J. Fox', 'Michael', 'M', '1961-06-09'),
(26, 'Finney', 'Albert', 'M', '1936-05-09'),
(27, 'Crowe', 'Russell', 'M', '1964-04-07'),
(28, 'Wood', 'Elijah', 'M', '1981-01-28');

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

DROP TABLE IF EXISTS `casting`;
CREATE TABLE IF NOT EXISTS `casting` (
  `role` varchar(100) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`,`id_film`),
  KEY `FK_casting_id_film` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `casting`
--

INSERT INTO `casting` (`role`, `id_acteur`, `id_film`) VALUES
('Lara Croft', 1, 3),
('Lu Ren', 2, 3),
('Mathias Vogel', 3, 3),
('Tyler Durden', 4, 8),
('Le conducteur', 5, 6),
('Julian', 5, 7),
('Imperator Furiosa', 6, 5),
('Hugh Glass', 7, 9),
('Sophie', 8, 11),
('Julien Janvier', 9, 11),
('Muhammad Ali', 10, 13),
('Walt Kowalski', 11, 10),
('Barry', 12, 12),
('Le narrateur', 13, 8),
('Max Rockatansky', 14, 5),
('John Fitzgerald', 14, 9),
('Nux', 15, 5),
('Marla Singer', 16, 8),
('Owen Grady', 17, 12),
('Peter Quill / Star-Lord', 17, 14),
('Paul Edgecomb', 18, 15),
('Forrest Gump', 18, 16),
('Han Solo', 19, 17),
('Obi Wan Kenobi', 20, 18),
('Obi Wan Kenobi', 20, 19),
('Obi Wan Kenobi', 20, 20),
('Edward Bloom jeune', 20, 30),
('Panthère Noire', 21, 4),
('Erik Killmonger', 22, 4),
('Luke Skywalker', 23, 17),
('R2-D2', 24, 17),
('Marty McFly ', 25, 23),
('Marty McFly ', 25, 24),
('Marty McFly ', 25, 25),
('Edward Bloom', 26, 30),
('Maximus', 27, 31),
('Frodon Sacquet', 28, 32),
('Frodon Sacquet', 28, 33),
('Frodon Sacquet', 28, 34);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(250) NOT NULL,
  `annee_film` int(11) NOT NULL,
  `duree_film` int(11) NOT NULL,
  `id_realisateur` int(11) NOT NULL,
  `resume` text,
  `url_image` varchar(255) DEFAULT NULL,
  `note` float DEFAULT NULL,
  PRIMARY KEY (`id_film`),
  KEY `FK_FILM_id_realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `titre_film`, `annee_film`, `duree_film`, `id_realisateur`, `resume`, `url_image`, `note`) VALUES
(2, 'Ready Player One', 2018, 139, 1, '2045. Le monde est au bord du chaos. Les êtres humains se réfugient dans l\'OASIS, univers virtuel mis au point par le brillant et excentrique James Halliday. Avant de disparaître, celui-ci a décidé de léguer son immense fortune à quiconque découvrira l\'œuf de Pâques numérique qu\'il a pris soin de dissimuler dans l\'OASIS', NULL, 4),
(3, 'Tomb Raider', 2018, 140, 2, 'Lara Croft, 21 ans, n\'a ni projet, ni ambition : fille d\'un explorateur excentrique porté disparu depuis sept ans, cette jeune femme rebelle et indépendante refuse de reprendre l\'empire de son père. Convaincue qu\'il n\'est pas mort, elle met le cap sur la destination où son père a été vu pour la dernière fois : la tombe légendaire d\'une île mythique au large du Japon. Mais le voyage se révèle des plus périlleux et il lui faudra affronter d\'innombrables ennemis et repousser ses propres limites pour devenir \"Tomb Raider\"…', NULL, 3),
(4, 'Black Panther', 2018, 135, 3, 'Après les événements qui se sont déroulés dans Captain America : Civil War, T’Challa revient chez lui prendre sa place sur le trône du Wakanda, une nation africaine technologiquement très avancée. Mais lorsqu’un vieil ennemi resurgit, le courage de T’Challa est mis à rude épreuve, aussi bien en tant que souverain qu’en tant que Black Panther. Il se retrouve entraîné dans un conflit qui menace non seulement le destin du Wakanda, mais celui du monde entier…', NULL, 4),
(5, 'Mad Max : Fury Road', 2015, 120, 4, 'Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d\'un véhicule militaire piloté par l\'Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s\'est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement… ', NULL, 5),
(6, 'Drive', 2011, 103, 5, 'Un jeune homme solitaire, \"The Driver\", conduit le jour à Hollywood pour le cinéma en tant que cascadeur et la nuit pour des truands. Ultra professionnel et peu bavard, il a son propre code de conduite. Jamais il n’a pris part aux crimes de ses employeurs autrement qu’en conduisant - et au volant, il est le meilleur !', NULL, 5),
(7, 'Only God Forgives', 2013, 90, 5, 'À Bangkok, Julian, qui a fui la justice américaine, dirige un club de boxe thaïlandaise servant de couverture à son trafic de drogue.\r\nSa mère, chef d’une vaste organisation criminelle, débarque des États-Unis afin de rapatrier le corps de son fils préféré, Billy : le frère de Julian vient en effet de se faire tuer pour avoir sauvagement massacré une jeune prostituée. Ivre de rage et de vengeance, elle exige de Julian la tête des meurtriers.\r\nJulian devra alors affronter Chang, un étrange policier à la retraite, adulé par les autres flics … ', NULL, 4),
(8, 'Fight Club', 1999, 139, 6, 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d\'autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C\'est pourquoi il va devenir membre du Fight club, un lieu clandestin ou il va pouvoir retrouver sa virilité, l\'échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d\'anarchiste entre gourou et philosophe qui prêche l\'amour de son prochain. ', NULL, 4.5),
(9, 'The Revenant', 2016, 156, 7, 'Dans une Amérique profondément sauvage, Hugh Glass, un trappeur, est attaqué par un ours et grièvement blessé. Abandonné par ses équipiers, il est laissé pour mort. Mais Glass refuse de mourir. Seul, armé de sa volonté et porté par l’amour qu’il voue à sa femme et à leur fils, Glass entreprend un voyage de plus de 300 km dans un environnement hostile, sur la piste de l’homme qui l’a trahi. Sa soif de vengeance va se transformer en une lutte héroïque pour braver tous les obstacles, revenir chez lui et trouver la rédemption. ', NULL, 5),
(10, 'Gran Torino', 2009, 111, 8, 'Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières. Avant de mourir, sa femme exprima le voeu qu\'il aille à confesse, mais Walt n\'a rien à avouer, ni personne à qui parler. Hormis sa chienne Daisy, il ne fait confiance qu\'à son M-1, toujours propre, toujours prêt à l\'usage...', NULL, 5),
(11, 'Jeux d\'enfants', 2003, 93, 9, 'Une vie entière pour se dire \"je t\'aime\". 80 ans pour démarrer une histoire d\'amour. Et tout ça à cause d\'un jeu. Ou peut-être grâce à un jeu.\r\nSophie et Julien ont défini les règles du jeu. Ils en sont, pour le restant de leurs vies, les arbitres et souvent les victimes. \"Cap ou pas cap ?\" \"Cap ! Bien sûr ! \" Ils sont cap de tout : du meilleur comme du pire.', NULL, 3),
(12, 'Jurassic World', 2015, 125, 10, 'L\'Indominus Rex, un dinosaure génétiquement modifié, pure création de la scientifique Claire Dearing, sème la terreur dans le fameux parc d\'attraction. Les espoirs de mettre fin à cette menace reptilienne se portent alors sur le dresseur de raptors Owen Grady et sa cool attitude.', NULL, 3),
(13, 'Ali', 2002, 158, 11, 'En faisant preuve de détermination, d\'endurance physique, d\'agressivité et d\'intelligence, Muhammad Ali est devenu une légende vivante de la boxe américaine. Belinda, son épouse, Angelo Dundee, son entraîneur, Drew Brown, son conseiller, Howard Bingham, son photographe et biographe, et Ferdie Pacheco, son docteur, ont été les témoins privilégiés de sa carrière à la fois brillante et mouvementée que ce soit sur ou en dehors du ring.', NULL, 3),
(14, 'Les Gardiens de la Galaxie', 2014, 121, 12, 'Peter Quill est un aventurier traqué par tous les chasseurs de primes pour avoir volé un mystérieux globe convoité par le puissant Ronan, dont les agissements menacent l’univers tout entier. Lorsqu’il découvre le véritable pouvoir de ce globe et la menace qui pèse sur la galaxie, il conclut une alliance fragile avec quatre aliens disparates : Rocket, un raton laveur fin tireur, Groot, un humanoïde semblable à un arbre, l’énigmatique et mortelle Gamora, et Drax le Destructeur, qui ne rêve que de vengeance. En les ralliant à sa cause, il les convainc de livrer un ultime combat aussi désespéré soit-il pour sauver ce qui peut encore l’être … ', NULL, 5),
(15, 'La Ligne Verte', 2000, 189, 14, 'Paul Edgecomb, Gardien-chef du pénitencier de Cold Mountain en 1935, était chargé de veiller au bon déroulement des exécutions capitales. Parmi les prisonniers se trouvait un colosse du nom de John Coffey... ', NULL, 4),
(16, 'Forrest Gump', 1994, 140, 13, 'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.', NULL, 4),
(17, 'Star Wars : Episode IV - Un nouvel espoir', 1977, 121, 15, 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. Accompagné de son fidèle compagnon, le droïde de protocole C-3PO, R2-D2 s\'échoue sur la planète Tatooine et termine sa quête chez le jeune Luke Skywalker. Rêvant de devenir pilote mais confiné aux travaux de la ferme, ce dernier se lance à la recherche de ce mystérieux Obi-Wan Kenobi, devenu ermite au coeur des montagnes désertiques de Tatooine...', NULL, 5),
(18, 'Star Wars : Episode III - La Revanche des Sith', 2005, 140, 15, 'La Guerre des Clones fait rage. Une franche hostilité oppose désormais le Chancelier Palpatine au Conseil Jedi. Anakin Skywalker, jeune Chevalier Jedi pris entre deux feux, hésite sur la conduite à tenir. Séduit par la promesse d\'un pouvoir sans précédent, tenté par le côté obscur de la Force, il prête allégeance au maléfique Darth Sidious et devient Dark Vador.\r\nLes Seigneurs Sith s\'unissent alors pour préparer leur revanche, qui commence par l\'extermination des Jedi. Seuls rescapés du massacre, Yoda et Obi Wan se lancent à la poursuite des Sith. La traque se conclut par un spectaculaire combat au sabre entre Anakin et Obi Wan, qui décidera du sort de la galaxie.', NULL, 5),
(19, 'Star Wars : Episode I - La Menace fantôme', 1999, 133, 15, 'Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l’âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel.\r\nPendant ce temps, l’armée de droïdes de l’insatiable Fédération du Commerce a envahi Naboo, une planète pacifique, dans le cadre d’un plan secret des Sith visant à accroître leur pouvoir. Pour défendre la reine de Naboo, Amidala, les chevaliers Jedi vont devoir affronter le redoutable Seigneur Sith, Dark Maul.', NULL, 4),
(20, 'Star Wars : Episode II - L\'Attaque des clones', 2002, 142, 15, 'Depuis le blocus de la planète Naboo par la Fédération du commerce, la République, gouvernée par le Chancelier Palpatine, connaît une véritable crise. Un groupe de dissidents, mené par le sombre Jedi comte Dooku, manifeste son mécontentement envers le fonctionnement du régime. Le Sénat et la population intergalactique se montrent pour leur part inquiets face à l\'émergence d\'une telle menace.\r\nCertains sénateurs demandent à ce que la République soit dotée d\'une solide armée pour empêcher que la situation ne se détériore davantage. Parallèlement, Padmé Amidala, devenue sénatrice, est menacée par les séparatistes et échappe de justesse à un attentat. Le Padawan Anakin Skywalker est chargé de sa protection. Son maître, Obi-Wan Kenobi, part enquêter sur cette tentative de meurtre et découvre la constitution d\'une mystérieuse armée de clones...', NULL, 4),
(23, 'Retour vers le Futur', 1985, 116, 13, NULL, NULL, 4),
(24, 'Retour vers le Futur II', 1989, 107, 13, NULL, NULL, 4),
(25, 'Retour vers le Futur III', 1990, 119, 13, NULL, NULL, 3),
(26, 'Qui veut la peau de Roger Rabbit', 1988, 103, 13, NULL, NULL, 3),
(27, 'Seul au monde', 2001, 143, 13, NULL, NULL, 3),
(28, 'Beetlejuice', 1988, 92, 22, NULL, NULL, 4),
(29, 'Mars Attacks!', 1996, 106, 22, NULL, NULL, 3),
(30, 'Big Fish', 2004, 125, 22, 'L\'histoire à la fois drôle et poignante d\'Edward Bloom, un père débordant d\'imagination, et de son fils William. Ce dernier retourne au domicile familial après l\'avoir quitté longtemps auparavant, pour être au chevet de son père, atteint d\'un cancer. Il souhaite mieux le connaître et découvrir ses secrets avant qu\'il ne soit trop tard. L\'aventure débutera lorsque William tentera de discerner le vrai du faux dans les propos de son père mourant.', NULL, 4),
(31, 'Gladiator', 2000, 155, 20, 'Le général romain Maximus est le plus fidèle soutien de l\'empereur Marc Aurèle, qu\'il a conduit de victoire en victoire avec une bravoure et un dévouement exemplaires. Jaloux du prestige de Maximus, et plus encore de l\'amour que lui voue l\'empereur, le fils de MarcAurèle, Commode, s\'arroge brutalement le pouvoir, puis ordonne l\'arrestation du général et son exécution. Maximus échappe à ses assassins mais ne peut empêcher le massacre de sa famille. Capturé par un marchand d\'esclaves, il devient gladiateur et prépare sa vengeance.', '/POO-Cinema/public/img/gladiator.jpg', 5),
(32, 'Le Seigneur des anneaux : La Communauté de l\'anneau', 2001, 228, 19, 'Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d\'un anneau. Bien loin d\'être une simple babiole, il s\'agit de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d\'une Compagnie constituée de Hobbits, d\'Hommes, d\'un Magicien, d\'un Nain, et d\'un Elfe, ne parvienne à emporter l\'Anneau à travers la Terre du Milieu jusqu\'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s\'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d\'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l\'influence corruptrice qu\'exerce l\'Anneau lui-même.\r\nL\'issue de l\'histoire à venir est intimement liée au sort de la Compagnie.', '/POO-Cinema/public/img/seigneurdesanneaux1.jpg', 4),
(33, 'Le Seigneur des anneaux : Les Deux Tours', 2002, 235, 19, 'Après la mort de Boromir et la disparition de Gandalf, la Communauté s\'est scindée en trois. Perdus dans les collines d\'Emyn Muil, Frodon et Sam découvrent qu\'ils sont suivis par Gollum, une créature versatile corrompue par l\'Anneau. Celui-ci promet de conduire les Hobbits jusqu\'à la Porte Noire du Mordor. A travers la Terre du Milieu, Aragorn, Legolas et Gimli font route vers le Rohan, le royaume assiégé de Theoden. Cet ancien grand roi, manipulé par l\'espion de Saroumane, le sinistre Langue de Serpent, est désormais tombé sous la coupe du malfaisant Magicien. Eowyn, la nièce du Roi, reconnaît en Aragorn un meneur d\'hommes. Entretemps, les Hobbits Merry et Pippin, prisonniers des Uruk-hai, se sont échappés et ont découvert dans la mystérieuse Forêt de Fangorn un allié inattendu : Sylvebarbe, gardien des arbres, représentant d\'un ancien peuple végétal dont Saroumane a décimé la forêt... ', NULL, 4),
(34, 'Le Seigneur des anneaux : Le Retour du roi', 2003, 201, 19, 'Les armées de Sauron ont attaqué Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonté d\'accomplir sa destinée ?\r\nTandis que Gandalf s\'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Mais malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d\'ennemis qui s\'abattent sur le royaume...\r\nChaque victoire se paye d\'immenses sacrifices. Malgré ses pertes, la Communauté se jette dans la bataille pour la vie, ses membres faisant tout pour détourner l\'attention de Sauron afin de donner à Frodon une chance d\'accomplir sa quête.\r\nVoyageant à travers les terres ennemies, ce dernier doit se reposer sur Sam et Gollum, tandis que l\'Anneau continue de le tenter... ', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `nom_genre`) VALUES
(1, 'Science-Fiction'),
(2, 'Fantasy'),
(3, 'Thriller'),
(4, 'Action'),
(5, 'Western'),
(6, 'Aventure'),
(7, 'Drame'),
(8, 'Biopic'),
(9, 'Romance'),
(10, 'Comédie'),
(11, 'Policier'),
(12, 'Fantastique');

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `id_film` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_genre`),
  KEY `FK_posseder_id_genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posseder`
--

INSERT INTO `posseder` (`id_film`, `id_genre`) VALUES
(4, 1),
(5, 1),
(12, 1),
(14, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(2, 2),
(3, 2),
(4, 2),
(32, 2),
(33, 2),
(34, 2),
(2, 3),
(6, 3),
(7, 3),
(8, 3),
(10, 3),
(3, 4),
(5, 4),
(6, 4),
(12, 4),
(14, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(32, 4),
(33, 4),
(34, 4),
(9, 5),
(9, 6),
(12, 6),
(17, 6),
(18, 6),
(19, 6),
(20, 6),
(7, 7),
(8, 7),
(10, 7),
(11, 7),
(16, 7),
(32, 7),
(33, 7),
(34, 7),
(13, 8),
(11, 9),
(16, 9),
(11, 10),
(16, 10),
(15, 11),
(15, 12);

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_realisateur` varchar(50) NOT NULL,
  `prenom_realisateur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id_realisateur`, `nom_realisateur`, `prenom_realisateur`) VALUES
(1, 'Spielberg', 'Steven'),
(2, 'Uthaug', 'Roar'),
(3, 'Coogler', 'Ryan'),
(4, 'Miller', 'Georges'),
(5, 'Winding Refn', 'Nicolas'),
(6, 'Fincher', 'David'),
(7, 'González Iñárritu', 'Alejandro'),
(8, 'Eastwood', 'Clint'),
(9, 'Samuell', 'Yann'),
(10, 'Trevorrow', 'Colin'),
(11, 'Mann', 'Michael'),
(12, 'Gunn', 'James'),
(13, 'Zemeckis', 'Robert'),
(14, 'Darabont', 'Frank'),
(15, 'Lucas', 'Georges'),
(16, 'Tarantino', 'Quentin'),
(17, 'Ford Coppola', 'Francis'),
(18, 'Nolan', 'Christopher'),
(19, 'Jackson', 'Peter'),
(20, 'Scott', 'Ridley'),
(21, 'Scorsese', 'Martin'),
(22, 'Burton', 'Tim');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `FK_casting_id_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `FK_casting_id_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_FILM_id_realisateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `FK_posseder_id_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `FK_posseder_id_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

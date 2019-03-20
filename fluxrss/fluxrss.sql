-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 mars 2019 à 15:31
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fluxrss`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `daterecuperation` text,
  `titrearticle` varchar(255) DEFAULT NULL,
  `urlarticle` varchar(255) DEFAULT NULL,
  `datepublication` varchar(200) DEFAULT NULL,
  `imagedescription` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM AUTO_INCREMENT=363 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_a`, `daterecuperation`, `titrearticle`, `urlarticle`, `datepublication`, `imagedescription`, `description`, `auteur`, `categorie`) VALUES
(362, '18-03-2019', 'Bernal, le futur â€œgrandâ€, sâ€™impose Ã  son aÃ®nÃ© Quintana', 'https://www.dna.fr/sports/2019/03/18/bernal-le-futur-grand-s-impose-a-son-aine-quintana', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Eddy Merckx lâ€™a dÃ©signÃ© comme futur vainqueur du Tour de France mais, pour lâ€™heure, le jeune colombien Egan Bernal (22 ans) se satisfait de ...\n                \n      ', NULL, 'Cyclisme'),
(360, '18-03-2019', 'Nazon pointe son nez', 'https://www.dna.fr/sports/2019/03/18/nazon-pointe-son-nez', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Le junior spinalien MattÃ©o Nazon sâ€™est imposÃ© hier Ã  lâ€™arrivÃ©e Ã  Erstein, devant un autre junior, le Luxembourgeois Tom Paquet. Deux Alsaciens, ...\n                \n      ', NULL, 'Cyclisme'),
(361, '18-03-2019', 'Mulhouse en finale', 'https://www.dna.fr/sports/2019/03/18/mulhouse-en-finale', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Vainqueur de Cergy-Pontoise au terme dâ€™un match maÃ®trisÃ©, la troupe de Jean-Luc Monschau a oblitÃ©rÃ© son billet pour la finale du TrophÃ©e Coupe de ...\n                \n      ', NULL, 'Basket-ball'),
(359, '18-03-2019', 'La revanche de Bottas', 'https://www.dna.fr/sports/2019/03/18/la-revanche-de-bottas', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                La revanche est un plat qui se mange froidÂ : qui de mieux quâ€™un Finlandais pour le savoirÂ ? PrivÃ© de victoire en 2018, Valtteri Bottas a retrouvÃ© hier ...\n                \n      ', NULL, 'Automobile'),
(358, '18-03-2019', 'Grosdidier pour finir', 'https://www.dna.fr/sports/2019/03/18/grosdidier-pour-finir', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                RÃ©my Grosdidier a remportÃ©, hier au Grand Ballon, son troisiÃ¨me Grand Prix de la saison. Il devance deux autres Alsaciens, ClÃ©ment Christmann et ...\n                \n      ', NULL, 'Ski'),
(357, '18-03-2019', 'Kingersheim en grÃ¨ve, Altkirch en finale', 'https://www.dna.fr/sports/2019/03/18/kingersheim-en-greve-altkirch-en-finale', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Altkirch sâ€™est qualifiÃ© hier pour la finale de la Coupe dâ€™Alsace sans combattre. Les joueuses de Kingersheim ont refusÃ© de se dÃ©placer, suite Ã  un ...\n                \n      ', NULL, 'Handball'),
(356, '18-03-2019', 'Lâ€™ASVS prend sa revanche', 'https://www.dna.fr/sports/2019/03/18/l-asvs-prend-sa-revanche', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Battue au match aller dans le Haut-Rhin par cette Ã©quipe dâ€™Ensisheim, lâ€™AS VallÃ©e de la Sauer a pris sa revanche, hier, en sâ€™imposant (3-1) dans son ...\n                \n      ', NULL, 'Volley-ball'),
(355, '18-03-2019', 'Un dernier espoirÂ ?', 'https://www.dna.fr/sports/2019/03/18/un-dernier-espoir', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Alors que le Red Star Mulhouse a dÃ©finitivement confortÃ© sa 3e Â place dans sa poule du TopÂ 12, lâ€™ASPTT Strasbourg reste encore dans la course aux ...\n                \n      ', NULL, 'Badminton'),
(354, '18-03-2019', 'Ciara ne fait plus de cadeau', 'https://www.dna.fr/sports/2019/03/18/ciara-ne-fait-plus-de-cadeau', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Les joueuses de lâ€™ASPTT Mulhouse, Ã  lâ€™instar de la centrale Ciara Michel, ont fait ce quâ€™il fallait pour faire respecter la hiÃ©rarchie face Ã  France ...\n                \n      ', NULL, 'Volley-ball'),
(353, '18-03-2019', 'Quand le ridicule ne tue pas', 'https://www.dna.fr/sports/2019/03/18/quand-le-ridicule-ne-tue-pas', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Au sortir de ce Tournoi encore manquÃ© et Ã  six mois de la Coupe du monde, le XV de France est au plus bas. Lâ€™Ã©cart avec les autres grandes nations est ...\n                \n      ', NULL, 'Rugby'),
(352, '18-03-2019', 'Ils se sont fait plaisirâ€¦', 'https://www.dna.fr/sports/2019/03/18/ils-se-sont-fait-plaisir', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Alors que SÃ©bastien Andres Ã©tait une nouvelle fois intouchable, hier, Lan Kajtner, deuxiÃ¨me, a signÃ© son meilleur rÃ©sultat de la saison oÃ¹ il lui aura ...\n                \n      ', NULL, 'Ski'),
(351, '18-03-2019', 'Spehler ImpÃ©rial', 'https://www.dna.fr/sports/2019/03/18/spehler-imperial', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Lâ€™entame de saison de SÃ©bastien Spehler (PCA - CSL Neuf-Brisach) ne pouvait mieux commencer. Hier, il sâ€™est imposÃ© en 4h04â€™00â€, devant le Suisse ...\n                \n      ', NULL, 'AthlÃ©tisme'),
(350, '18-03-2019', 'PSG: dÃ©but de rÃ©conciliationÂ avec ses supporters?', 'https://www.dna.fr/sports/2019/03/18/debut-de-reconciliation', 'Mon, 18 Mar 2019 04:00:00 GMT', NULL, '\n        \n                Un premier pas vers le grand pardonÂ ? Le PSG, dans son premier match Ã  domicile post-Manchester, a dominÃ© Marseille (3-1), malgrÃ© la fronde de ses ...\n                \n      ', NULL, 'Football'),
(349, '18-03-2019', 'Quand le Premier ministre bulgare ouvre le score sur coup-franc', 'https://www.dna.fr/actualite/2019/03/18/quand-le-premier-ministre-bulgare-ouvre-le-score-sur-coup-franc', 'Mon, 18 Mar 2019 06:40:00 GMT', NULL, '\n        \n                Ancien cadre du parti communiste devenu chef de file d\'un parti conservateur, le Premier ministre bulgare BoÃ¯ko Borissov a l\'habitude de naviguer ...\n                \n      ', NULL, 'A la Une'),
(348, '18-03-2019', 'La 29e journÃ©e de Ligue 1 en un clic', 'https://www.dna.fr/actualite/2019/03/18/la-29e-journee-de-ligue-1-en-un-clic', 'Mon, 18 Mar 2019 07:30:00 GMT', NULL, '\n        \n                La victoire de l\'espoir pour Guingamp, le but tout en finesse de Vinicius, la folle sÃ©rie du Stade de Reims... Retrouvez l\'essentiel de la 29e journÃ©e de Ligue 1.\n                \n      ', NULL, 'A la Une'),
(347, '18-03-2019', 'Ski alpinÂ : qui dÃ©trÃ´nera Shiffrin et HirscherÂ ?', 'https://www.dna.fr/actualite/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', 'Mon, 18 Mar 2019 08:00:00 GMT', NULL, '\n        \n                Mikaela Shiffrin et Marcel Hirscher ont de nouveau Ã©crasÃ© la saison de ski alpin. Entre Petra Vlhova, Henrik Kristoffersen ou encore Alexis ...\n                \n      ', NULL, 'A la Une'),
(346, '18-03-2019', 'Le week-end sportif en images', 'https://www.dna.fr/actualite/2019/03/18/le-week-end-sportif-en-images', 'Mon, 18 Mar 2019 08:30:00 GMT', NULL, '\n        \n                Le Grand Chelem du Pays de Galles, le chemin de croix de Martin Fourcade, le retour de Zinedine Zidane... Les images qui ont fait l\'actualitÃ© sportive ...\n                \n      ', NULL, 'A la Une'),
(345, '18-03-2019', 'Road Runner: retour en images sur les courses de La Wantzenau', 'https://www.dna.fr/sports/2019/03/18/courses-de-la-wantzenau-dimanche-17-mars-2019', 'Mon, 18 Mar 2019 09:31:00 GMT', NULL, '\n        \n                Plus de 1500 personnes ont pris le dÃ©part des courses de la Wantzenau dimanche.\n                \n      ', NULL, 'Road Runner'),
(344, '18-03-2019', 'Martin Fourcade annonce la fin de sa saison', 'https://www.dna.fr/actualite/2019/03/18/martin-fourcade-decide-de-mettre-fin-a-sa-saison', 'Mon, 18 Mar 2019 11:13:00 GMT', NULL, '\n        \n                A peine rentrÃ© des Mondiaux d\'Ã–stersund dÃ©cevants, le quintuple champion olympique a dÃ©clarÃ© forfait pour la derniÃ¨re manche de la Coupe du Monde Ã  Oslo cette semaine.\n                \n      ', NULL, 'A la Une'),
(343, '18-03-2019', 'Mesut Ã–zil choisit le prÃ©sident Erdogan comme tÃ©moin de mariage', 'https://www.dna.fr/actualite/2019/03/18/mesut-ozil-choisit-le-president-erdogan-comme-temoin-de-mariage', 'Mon, 18 Mar 2019 12:11:00 GMT', NULL, '\n        \n                Selon le quotidien allemand &quot;Bild&quot;, le joueur de football allemand a demandÃ© au prÃ©sident turc Recep Tayyip Erdogan d\'Ãªtre son tÃ©moin de mariage. L\'annonce relance une polÃ©mique qui date dÃ©jÃ  de mai 2018, au moment de leur premiÃ¨re rencontre.\n                \n      ', NULL, 'A la Une');

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nomclub` varchar(255) NOT NULL,
  `titreclub` varchar(255) NOT NULL,
  `urlclub` varchar(255) NOT NULL,
  `logoclub` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `lvl` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `password`, `email`, `nom`, `prenom`, `lvl`) VALUES
(1, 'admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'admin1@admin.com', 'Adminname1', 'adminlastname1', 0),
(2, 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', 'admin', 'admin', 3),
(3, 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'admin2@hotmail.com', 'admin2', 'admin2', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

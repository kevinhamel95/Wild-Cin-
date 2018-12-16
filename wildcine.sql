-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 09 Décembre 2018 à 18:46
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wildcine`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `CodeFilm` int(4) NOT NULL AUTO_INCREMENT,
  `NomFilm` varchar(64) NOT NULL,
  `Synopsis` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `AnnéeSortie` int(4) NOT NULL,
  `CodeGenre` int(4) NOT NULL,
  `CodePaysProd` int(4) NOT NULL,
  `CodeLangueVO` int(4) NOT NULL,
  PRIMARY KEY (`CodeFilm`),
  KEY `GenreFilm` (`CodeGenre`),
  KEY `PaysProduction` (`CodePaysProd`),
  KEY `LangueVO` (`CodeLangueVO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`CodeFilm`, `NomFilm`, `Synopsis`, `AnnéeSortie`, `CodeGenre`, `CodePaysProd`, `CodeLangueVO`) VALUES
(1, 'Forest Gump', 'Quelques décennies d''histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l''étrange odyssée d''un homme simple et pur, Forrest Gump.', 1994, 5, 0, 0),
(2, 'Iron Man', 'Tony Stark, inventeur de génie, vendeur d''armes et playboy milliardaire, est kidnappé en Aghanistan. Forcé par ses ravisseurs de fabriquer une arme redoutable, il construit en secret une armure high-tech révolutionnaire qu''il utilise pour s''échapper. Comprenant la puissance de cette armure, il décide de l''améliorer et de l''utiliser pour faire régner la justice et protéger les innocents', 2008, 15, 0, 0),
(3, 'Bohemian Rhapsody', 'Bohemian Rhapsody retrace le destin extraordinaire du groupe Queen et de leur chanteur emblématique Freddie Mercury, qui a défié les stéréotypes, brisé les conventions et révolutionné la musique. Du succès fulgurant de Freddie Mercury à ses excès, risquant la quasi-implosion du groupe, jusqu’à son retour triomphal sur scène lors du concert Live Aid, alors qu’il était frappé par la maladie, découvrez la vie exceptionnelle d’un homme qui continue d’inspirer les outsiders, les rêveurs et tous ceux qui aiment la musique.', 2018, 3, 0, 0),
(4, 'Qu''est-ce qu''on a fait au Bon Dieu?', 'Claude et Marie Verneuil, issus de la grande bourgeoisie catholique provinciale sont des parents plutôt "vieille France". Mais ils se sont toujours obligés à faire preuve d''ouverture d''esprit...Les pilules furent cependant bien difficiles à avaler quand leur première fille épousa un musulman, leur seconde un juif et leur troisième un chinois.\r\nLeurs espoirs de voir enfin l''une d''elles se marier à l''église se cristallisent donc sur la cadette, qui, alléluia, vient de rencontrer un bon catholique.', 2014, 4, 1, 1),
(5, 'The Last: Naruto the Movie', 'Dans le village de Konoha, deux années après la 4ème grande guerre des ninjas, Naruto s’apprête à célébrer la fête de l’hiver entouré d’Hinata et de ses amis. Soudain, une météorite déchire la nuit de son intense lumière et voilà que la lune se rapproche anormalement de la Terre. Le Conseil des Kage se réunit en urgence  face à cette menace de destruction de la planète ! Pour Naruto, Sakura, Shikamaru, Saï et Hinata le compte à rebours pour sauver la planète a commencé.', 2015, 0, 6, 6),
(6, 'Toy''s Story', 'Quand le jeune Andy quitte sa chambre, ses jouets se mettent à mener leur propre vie sous la houlette de son pantin préféré, Woody le cow-boy. Andy ignore également que chaque anniversaire est une source d''angoisse pour ses jouets qui paniquent à l''idée d''être supplantés par un nouveau venu. Ce qui arrive quand Buzz l''éclair est offert à Andy. Cet intrépide aventurier de l''espace, venu d''une lointaine galaxie, va semer la zizanie dans ce petit monde et vivre avec Woody d''innombrables aventures aussi dangereuses que palpitantes.', 1996, 0, 0, 0),
(7, 'Deux super-flics', 'Deux paumés, Matt at Wilbur, débarquent au port de Miami afin d''y chercher un boulot. Ne trouvant rien, ils décident de cambrioler une banque mais se retrouvent, par erreur, dans un poste de police! Là, deux motards les prennent pour de nouvelles recrues ! Nos deux héros deviennent alors des agents de police qui mettent leur "savoir-faire" de voyous au service de l''ordre public.', 1977, 4, 4, 4),
(8, 'Danse avec les loups\r\n', 'Le jeune lieutenant John Dunbar est envoyé à un poste de reconnaissance dans les immenses plaines du Dakota pendant la guerre de Sécession. Il rencontre au cours de l''une de ses missions de reconnaissance le peuple sioux.\r\nLe lieutenant se lie d''amitié avec la population indienne. Il arrive même à intégrer la tribu, au point d''être surnommé "Danse avec les loups", et de s''éprendre d''une des leurs, une blanche baptisée "Dressée avec le poing".', 1991, 17, 0, 0),
(9, 'Saw', 'Deux hommes se réveillent enchaînés au mur d''une salle de bains. Ils ignorent où ils sont et ne se connaissent pas. Ils savent juste que l''un doit absolument tuer l''autre, sinon dans moins de huit heures, ils seront exécutés tous les deux...\r\nVoici l''une des situations imaginées par un machiavélique maître criminel qui impose à ses victimes des choix auxquels personne ne souhaite jamais être confronté un jour. Un détective est chargé de l''enquête...', 2005, 7, 0, 0),
(10, 'Léon', 'Un tueur à gages répondant au nom de Léon prend sous son aile Mathilda, une petite fille de douze ans, seule rescapée du massacre de sa famille. Bientôt, Léon va faire de Mathilda une "nettoyeuse", comme lui. Et Mathilda pourra venger son petit frère...', 1994, 13, 1, 0),
(11, 'Dikkenek', 'JC et Stef sont des amis d''enfance. Inséparables.\r\nJC est LE dikkenek belge, un donneur de leçon à cinq balles, un moralisateur, un tombeur de minettes, bref une grande gueule intégrale, coiffé comme un peigne.\r\nStef est tout le contraire. Il cherche le Grand Amour, mais vu qu''il ne bouge pas de son lit, il va avoir du mal à trouver.\r\nJC lui explique donc la méthode : faire un sans-faute du point A jusqu''au point G.\r\nEntre ces deux points, JC et Stef vont croiser : Claudy, le directeur des abattoirs d''Anderlecht et photographe amateur (de chair fraîche), Greg, un bébé-manager vissé à son portable, Natacha, une nymphette désoeuvrée, Fabienne, une pauvre petite fille de riches, Nadine, une institutrice qui préfère la schnouf aux tables de multiplication, ainsi que Laurence, une commissaire de police fâchée avec les conjugaisons, qui ponctue ses phrases à coups de gros calibre.', 2006, 4, 5, 1),
(12, 'Titanic', 'Southampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le "Titanic", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.', 1998, 6, 0, 0),
(13, 'La vie est belle', 'En 1938, Guido, jeune homme plein de gaieté, rêve d''ouvrir une librairie, malgré les tracasseries de l''administration fasciste. Il tombe amoureux de Dora, institutrice étouffée par le conformisme familial et l''enlève le jour de ses fiançailles avec un bureaucrate du régime. Cinq ans plus tard, Guido et Dora ont un fils: Giosue. Mais les lois raciales sont entrées en vigueur et Guido est juif. Il est alors déporté avec son fils. Par amour pour eux, Dora monte de son plein gré dans le train qui les emmène aux camps de la mort où Guido veut tout faire pour éviter l''horreur à son fils...', 1998, 6, 4, 4),
(14, '21 grammes', 'On dit que nous perdons tous 21 grammes au moment précis de notre mort...\r\nLe poids de cinq pièces de monnaie.\r\nLe poids d''une barre de chocolat.\r\nLe poids d''un colibri.\r\n21 grammes.\r\nEst-ce le poids de notre âme ?\r\nEst-ce le poids de la vie ?\r\nPaul attend une transplantation cardiaque. Cristina, ex-junkie, est mère de deux petites filles. Jack sort de prison et redécouvre la foi.\r\nA cause d''un accident, ils vont s''affronter, se haïr... et s''aimer.', 2004, 6, 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `CodeGenre` int(4) NOT NULL,
  `NomGenre` varchar(32) NOT NULL,
  PRIMARY KEY (`CodeGenre`),
  KEY `CodeGenre` (`CodeGenre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`CodeGenre`, `NomGenre`) VALUES
(0, 'Animation'),
(1, 'Action'),
(2, 'Aventure'),
(3, 'Biopic'),
(4, 'Comédie'),
(5, 'Comédie Dramatique'),
(6, 'Drame'),
(7, 'Épouvante-Horreur'),
(8, 'Famille'),
(9, 'Fantastique'),
(10, 'Guerre'),
(11, 'Historique'),
(12, 'Musical'),
(13, 'Policier'),
(14, 'Romance'),
(15, 'Science Fiction'),
(16, 'Thriller'),
(17, 'Western');

-- --------------------------------------------------------

--
-- Structure de la table `languevo`
--

CREATE TABLE IF NOT EXISTS `languevo` (
  `CodeLangueVO` int(4) NOT NULL,
  `NomLangueVO` varchar(16) NOT NULL,
  PRIMARY KEY (`CodeLangueVO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `languevo`
--

INSERT INTO `languevo` (`CodeLangueVO`, `NomLangueVO`) VALUES
(0, 'Anglais'),
(1, 'Français'),
(2, 'Espagnol'),
(3, 'Allemand'),
(4, 'Italien'),
(5, 'Mandarin'),
(6, 'Japonais'),
(7, 'Portugais');

-- --------------------------------------------------------

--
-- Structure de la table `paysprod`
--

CREATE TABLE IF NOT EXISTS `paysprod` (
  `CodePaysProd` int(4) NOT NULL,
  `NomPaysProd` varchar(16) NOT NULL,
  PRIMARY KEY (`CodePaysProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `paysprod`
--

INSERT INTO `paysprod` (`CodePaysProd`, `NomPaysProd`) VALUES
(0, 'Etats-Unis'),
(1, 'France'),
(2, 'Royaume-Uni'),
(3, 'Allemagne'),
(4, 'Italie'),
(5, 'Belgique'),
(6, 'Japon'),
(7, 'Inde'),
(8, 'Chine'),
(9, 'Canada'),
(10, 'Espagne'),
(11, 'Portugal'),
(12, 'Australie');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`CodeGenre`) REFERENCES `genre` (`CodeGenre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`CodePaysProd`) REFERENCES `paysprod` (`CodePaysProd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_ibfk_3` FOREIGN KEY (`CodeLangueVO`) REFERENCES `languevo` (`CodeLangueVO`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 21 Novembre 2017 à 11:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `movie`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(44) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `description` varchar(903) DEFAULT NULL,
  `realisateur` varchar(30) DEFAULT NULL,
  `genre` varchar(28) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `annee`, `description`, `realisateur`, `genre`) VALUES
(1, 'Kimi no Na Wa', 2016, 'Mitsuha est une lycéenne qui réside dans une petite ville située dans les montagnes. Elle vit aux côtés de sa petite soeur, sa grand-mère ainsi que son père, bien que ce dernier ne soit jamais à la maison à cause de son travail de maire. En réalité, sa vie ne lui convient pas et souhaite pouvoir vivre à Tokyo. Taki est un lycéen qui habite à Tokyo et qui adore l''architecture et l''art. Il vit une vie normale d''étudiant entouré d''amis et travaille même dans un petit restaurant italien. Mais un jour, il fait un rêve dans lequel il est dans la peau d''une jeune fille qui vit dans une ville en montagne. Mitsuha, quant à elle, fait également un rêve dans lequel elle est dans le corps d''un garçon qui vit a Tokyo. Quel est le secret qui se cache derrière ces étranges rêves qui échangent la vie de ces deux jeunes gens ?', 'Makoto Shinkai', 'Romance'),
(2, 'The Foreigner', 2017, 'A Londres, un modeste propriétaire de restaurant de Chinatown va tenter de retrouver les terroristes irlandais responsables de la mort de sa fille.', 'Martin Campbell', 'Action'),
(3, 'Ip Man', 2008, 'Au début des années 1930, la ville de Foshan est prospère et y fleurissent les écoles d''arts martiaux chinois. Pourtant, le meilleur d''entre eux, Ip Man, expert en wing chun, préfère cacher ses talents et profiter de ses rentes pour passer du temps en famille et s''entraîner', 'Wilson Yip', 'Action'),
(4, 'Forrest Gump', 1994, 'Sur un banc, à Savannah, en Géorgie, Forrest Gump attend le bus. Comme celui-ci tarde à venir, le jeune homme raconte sa vie à ses compagnons d''ennui. A priori, ses capacités intellectuelles plutôt limitées ne le destinaient pas à de grandes choses. Qu''importe ! Forrest Gump, sans jamais rien y comprendre, a participé à tous les grands évènements de l''histoire de son pays. Pas de guerre du Vietnam sans lui, héros médaillé qui organisa dans les cliniques des tournois de ping-pong pour les soldats blessés, encore moins de rock, puisqu''il inspira Elvis Presley et John Lennon, et point de Watergate non plus, car il se fit le dénonciateur du scandale en rencontrant le président Nixon...', 'Robert Zemeckis', 'Comédie Dramatique'),
(5, 'Dirty Dancing', 1987, 'été 1963, Bébé (Baby en VO) de son vrai prénom Frédérique (Frances en VO) fille d''une riche famille americaine, passe ses vacances avec ses parents et sa soeur dans la région des montagnes Catskill dans l''état de New York, à la pension de la famille Kellerman. Elle se trouve mêlée à la vie des employés de la pension et se trouve confrontée à un monde qui lui est complètement étranger, celui de la danse. Malgré le désaccord de son père, Bébé va connaître une histoire d''amour avec Johnny, le professeur de danse de l''établissement, issu d''un milieu social très différent de celui de la jeune femme.', 'Emile Ardolino', 'Drame, Musical, Romantique'),
(6, 'Les visiteurs', 1993, 'Arrivés en 1793, en pleine Révolution française, Godefroy de Montmirail et son écuyer Jacquouille la Fripouille rencontrent Jacquouillet, descendant de Jacquouille et accusateur public, et se retrouvent empêtrés dans la tourmente de la Terreur. Godefroy est confronté à sa descendance de l''époque, qui essaie d''échapper à la Révolution: lui et son écuyer les aident à fuir et tentent de retrouver un descendant de l''Enchanteur pour rentrer à leur époque. Les deux voyageurs temporels subissent en effet des effets secondaires inquiétants dus aux couloirs du temps non refermés', 'Jean-Marie Poir', 'Comédie'),
(7, 'Warcraft : Le commencement ', 2016, 'Le pacifique royaume d''Azeroth est au bord de la guerre alors que sa civilisation doit faire face à une redoutable race d’envahisseurs: des guerriers Orcs fuyant leur monde moribond pour en coloniser un autre. Alors qu’un portail s’ouvre pour connecter les deux mondes, une armée fait face à la destruction et l''autre à l''extinction. De côtés opposés, deux héros vont s’affronter et décider du sort de leur famille, de leur peuple et de leur patrie', 'Duncan Jones ', 'Fantastique, Action, Aventur'),
(8, 'Le Seigneur des anneaux : le retour du roi ', 2003, 'Les armées de Sauron ont attaqué Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n''a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonté d''accomplir sa destinée ? Tandis que Gandalf s''efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Mais malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d''ennemis qui s''abattent sur le royaume… Chaque victoire se paye d''immenses sacrifices. Malgré ses pertes, la Communauté se jette dans la bataille pour la vie, ses membres faisant tout pour détourner l''attention de Sauron afin de donner à Frodon une chance d''accomplir sa quête. Voyageant à travers les terres ennemies, ce dernier doit se reposer sur Sam et Gollum, tandis que l''Anneau continue de le tenter... ', 'Peter Jackson ', 'Fantastique, Action, Aventur'),
(9, 'Hunger Games – L''embrasement', 2013, 'Katniss Everdeen est rentrée chez elle saine et sauve après avoir remporté la 74e édition des Hunger Games avec son partenaire Peeta Mellark. Puisqu’ils ont gagné, ils sont obligés de laisser une fois de plus leur famille et leurs amis pour partir faire la Tournée de la victoire dans tous les districts. Au fil de son voyage, Katniss sent que la révolte gronde, mais le Capitole exerce toujours un contrôle absolu sur les districts tandis que le Président Snow prépare la 75e édition des Hunger Games, les Jeux de l’Expiation – une compétition qui pourrait changer Panem à jamais… ', 'Francis Lawrence ', 'Action, Drame, Science-Ficti'),
(10, 'Forest Gump', 1994, 'Quelques décennies d''histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l''étrange odyssée d''un homme simple et pur, Forest Gump', 'Robert Zemeckis', 'Comédie Dramatique'),
(11, 'L’Armée des 12 singes', 1995, 'Nous sommes en l''an 2035. Les quelques milliers d''habitants qui restent sur notre planète sont contraints de vivre sous terre. La surface du globe est devenue inhabitable à la suite d''un virus ayant décimé 99% de la population. Les survivants mettent tous leurs espoirs dans un voyage à travers le temps pour découvrir les causes de la catastrophe et la prévenir. C''est James Cole, hanté depuis des années par une image incompréhensible, qui est désigné pour cette mission', 'Terry Gilliam', 'Science-Fiction'),
(12, 'Le Péril Jeune', 1994, 'Quelques jeunes hommes se retrouvent plusieurs années après avoir quitté le lycée. Ils assistent pendant son accouchement la compagne de leur meilleur ami, mort une semaine auparavant d''une overdose. C''est pour eux l''occasion de confronter leurs souvenirs', 'Cédric Klapisch', 'Drame Comédie'),
(13, 'Le voyage de chihiro', 2001, 'Le film raconte l''histoire de Chihiro, une fillette de dix ans qui, alors qu''elle se rend en famille dans sa nouvelle maison, entre dans le monde des esprits. Après la transformation de ses parents en porcs par la sorcière Yubaba, Chihiro prend un emploi dans l''établissement de bains de Yubaba pour retrouver ses parents et le monde humain. ', 'Hayao Miyazaki', 'Drame, Fantastique, Aventure'),
(14, 'Pulp fiction', 1994, 'L''odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s''entremêlent.', 'Quentin Tarantino', 'Policier, Thriller'),
(15, 'Le Seigneur des anneaux : Les Deux Tours', 2002, 'L''histoire du film commence après la dissolution de la communauté de l''Anneau. Boromir est mort des mains du chef des Uruk-hai, Lurtz, en essayant de sauver les Hobbits Meriadoc Brandibouc et Peregrin Touc, qui ont été capturés. Aragorn, Gimli et Legolas poursuivent les Uruks afin de libérer leurs compagnons capturés, tandis que Frodon Sacquet et Samsagace Gamegie sont partis seuls pour le Mordor afin de détruire l''Anneau unique, à la Montagne du Destin.', 'Peter Jackson', 'Fantasy'),
(16, 'The Mask', 1994, 'Stanley Ipkiss, modeste employé de banque, passionné par l''univers de Tex Avery, trouve un masque ancien aux pouvoirs surnaturels. Il est néanmoins partagé entre devenir cette créature verte sûre d''elle ou rester le timide Stanley Ipkiss, incapable d''aborder la magnifique chanteuse de cabaret Tina Carlyle', 'Chuck Russel', 'Comédie'),
(17, 'Captain America : Civil War', 2016, 'Steve Rogers est désormais Ã  la tête des Avengers, dont la mission est de protéger l''humanité. à la suite d''une de leurs interventions qui a causé d''importants dégâts collatéraux, le gouvernement décide de mettre en place un organisme de commandement et de supervision.à Cette nouvelle donne provoque une scission au sein de l''équipe : Steve Rogers reste attaché à  sa liberté de s''engager sans ingérence gouvernementale, tandis que d''autres se rangent derrière Tony Stark, qui contre toute attente, décide de se soumettre au gouvernement', 'Joe Russo & Anthony Russo', 'Action, Fantastique '),
(18, 'Thor : Ragnarok', 2017, 'Privé de son puissant marteau, Thor est retenu prisonnier sur une lointaine planète aux confins de l''univers. Pour sauver Asgard, il va devoir lutter contre le temps afin d''empêcher l''impitoyable Helaim d''accomplir le Ragnarök à la destruction de son monde et la fin de la civilisation asgardienne. Mais pour y parvenir, il va d''abord devoir mener un combat titanesque de gladiateurs contre celui qui était autrefois son allié au sein des Avengers : l''incroyable Hulk', 'Taika Waititi', 'Action, Fantastique'),
(19, 'Blade Runner', 1982, 'Dans les dernières années du 20ème siècle, des milliers d''hommes et de femmes partent à la conquête de l''espace, fuyant les mégalopoles devenues insalubres. Sur les colonies, une nouvelle race d''esclaves voit le jour : les répliquants, des androïdes que rien ne peut distinguer de l''être humain. Los Angeles, 2019. Après avoir massacré un équipage et pris le contrôle d''un vaisseau, les répliquants de type Nexus 6, le modèle le plus perfectionné, sont désormais déclarés hors la loi. Quatre d''entre eux parviennent cependant à s''échapper et à s''introduire dans Los Angeles. Un agent d''une unité spéciale, un blade-runner, est chargé de les éliminer. Selon la terminologie officielle, on ne parle pas d''exécution, mais de retrait...', 'Ridley Scott', 'Science-Fiction'),
(20, 'Into the Wild', 2007, 'Tout juste diplômé de l''université, Christopher McCandless, 22 ans, est promis à un brillant avenir. Pourtant, tournant le dos à l''existence confortable et sans surprise qui l''attend, le jeune homme décide de prendre la route en laissant tout derrière lui. Des champs de blé du Dakota aux flots tumultueux du Colorado, en passant par les communautés hippies de Californie, Christopher va rencontrer des personnages hauts en couleur. Chacun, à sa manière, va façonner sa vision de la vie et des autres. Au bout de son voyage, Christopher atteindra son but ultime en s''aventurant seul dans les étendues sauvages de l''Alaska pour vivre en totale communion avec la nature.', 'Sean Penn', 'Road-trip'),
(21, 'New York Melody', 2014, 'Gretta et son petit ami viennent de débarquer à NYC. La ville est d''autant plus magique pour les deux anglais qu''on leur propose de venir y vivre pleinement leur passion : la musique. Le rêve va se briser et l''idylle voler en éclat quand, aveuglé par la gloire naissante, il va la plaquer pour une carrière solo et... une attachée de presse. Ses valises prêtes et son billet de retour pour Londres en poche, elle décide de passer une dernière nuit à New York avec son meilleur pote. Ce dernier l''emmène dans un pub, la pousse sur scène et la force à chanter. Dans la salle un producteur s''adonne à sa plus dangereuse passion : l''alcool. Revenu de tout, du succès et de sa gloire passée, amer, rancunier, il a perdu le fil de sa vie,... Et soudain il entend cette voix, découvre cette grâce, ce talent brut et authentique... Une rencontre enchantée qui pourrait finir en chansons...', 'John Carney', 'Feel-good'),
(22, 'Snatch', 2000, 'Franky vient de voler un énorme diamant quil doit livrer à Avi, un mafieux new-yorkais. En chemin, il fait escale à Londres où il se laisse convaincre par Boris de parier sur un combat de boxe clandestin. Il ignore, bien sûr, quil sagit dun coup monté avec Vinny et Sol, afin de le délester de son magnifique caillou. Turkish et Tommy, eux, ont un problème avec leur boxeur, un gitan complètement fêlé qui refuse de se coucher au quatrième round comme prévu. Cest au tour dAvi de débarquer, bien décidé à récupérer son bien, avec laide de Tony, une légende de la gâchette.', 'Guy Ritchie', 'Policier, Comédie, Thriller'),
(23, 'Matrix', 1999, 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est lun des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par détranges songes et des messages cryptés provenant dun certain Morpheus. Celui-ci lexhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : quest-ce que la Matrice ? Nul ne le sait, et aucun homme nest encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est lElu, le libérateur mythique de lhumanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...', 'Lana Wachowski & Lilly Wachows', 'Action, Science-Fiction'),
(24, 'La ligne verte', 2000, 'Paul Edgecomb, pensionnaire centenaire dune maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des exécutions capitales en s’efforçant dadoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes. Intrigué par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens très forts.', 'Frank Darabont', 'Fantastique, Policier'),
(25, 'Rocky IV', 1986, 'Apollo Creed, ancien adversaire et dorénavant ami de Rocky Balboa, est tué sur le ring par le boxeur russe Ivan Drago. Se reprochant de navoir pu sauver son camarade à temps, Rocky va demander un combat contre Ivan Drago afin de le venger. Une confrontation qui se déroulera sur le sol russe.', 'Sylverster Stallone', 'Action'),
(26, 'Cars 3', 2017, 'Dépassé par une nouvelle génération de bolides ultra-rapides, le célèbre Flash McQueen se retrouve mis sur la touche d’un sport qu’il adore. Pour revenir dans la course et prouver, en souvenir de Doc Hudson, que le n° 95 a toujours sa place dans la Piston Cup, il devra faire preuve d’ingéniosité. L’aide d’une jeune mécanicienne pleine d’enthousiasme, Cruz Ramirez, qui rêve elle aussi de victoire, lui sera d’un précieux secours...', 'Brian Fee', 'Animation'),
(27, 'Rambo 2', 1985, 'John Rambo purge une peine de prison lorsque le Colonel Trautman lui donne la possibilité de sortir pour une mission délicate : avoir la preuve quil reste bel et bien des prisonniers américains au Vietnam. Supposé nêtre quun observateur, Rambo désobéit aux ordres et tente de sauver un prisonnier. Murdock, le responsable de la mission, décide alors de labandonner en territoire ennemi, Rambo, seul, sans armes et face à lennemi, prépare sa vengeance et son retour au pays.', 'George Pan Cosmatos', 'Action'),
(28, 'Limitless', 2011, 'Un produit pharmaceutique révolutionnaire permet dexploiter son potentiel au maximum.', 'Neil Burger', 'Thriller'),
(29, 'Drone', 2017, 'Un pilote de drone de haut niveau partage sa vie entre ses missions et sa vie de famille en banlieue, jusquà ce quune fuite fasse de lui la cible dun homme daffaires pakistanais', 'Jason Bourque', 'Thriller'),
(30, 'Matrix', 1999, 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est lun des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par détranges songes et des messages cryptés provenant dun certain Morpheus.', 'Lana Wachowski', 'Science-Fiction'),
(31, 'La Soupe aux Choux', 1981, 'Le Glaude et le Bombé, deux vieux paysans portés sur la bouteille, vivent très retirés de la vie moderne.Une nuit, un extra-terrestre atterrit en soucoupe volante dans le jardin du Glaude.En gage de bienvenue, ce dernier lui offre un peu de sa fameuse soupe aux choux...', 'Jean Girault', 'Comédie, Science-Fiction'),
(32, 'Big Mamma', 2000, 'Au sein du FBI, lagent Malcolm Turner est réputé pour sa bravoure et son habileté.Passé maître dans lart du déguisement, il sait en quelques minutes se fabriquer un nouveau visage, une voix et un look inédits pour infiltrer nimporte quel milieu.Après lévasion dun dangereux braqueur, Malcolm et son coéquipier se planquent devant le domicile de son ex-petite amie et présumée complice, Sherry.Lorsquelle se réfugie chez sa grand-mère, Big Mama, Malcolm nhésite pas un instant à prendre lapparence de la vieille dame pour recueillir son témoignage.', 'Raja Gosnell', 'Comédie, Action, Policier'),
(33, 'Shaolin Soccer', 2002, 'Fung était une légende vivante du football, jusquà ce quil fasse perdre le championnat à son équipe. Fous de rage, les fans ne le lui ont pas pardonné.Aujourdhui, Fung soccupe du matériel de la Team Evil, léquipe de son ancien partenaire, Hung.Lorsque Fung est renvoyé, il se tourne vers Sing, un moine du célèbre temple Shaolin qui possède des dons extraordinaires en matière darts martiaux.Lorsque Fung voit Sing mettre en déroute une bande de voyous avec un simple ballon de football, il a lingénieuse idée de créer une équipe de foot Shaolin pour vaincre ses adversaires...', 'Stephen Chow', 'Action, Comédie'),
(34, 'Heat', 1995, 'La bande de Neil McCauley à laquelle est venu se greffer Waingro, une nouvelle recrue, attaque un fourgon blindé pour semparer dune somme importante en obligations. Cependant, ce dernier tue froidement lun des convoyeurs et Chris Shiherlis se retrouve obligé de terminer le travail. Neil tente déliminer Waingro, mais celui-ci parvient à séchapper. Parallèlement, le lieutenant Vincent Hanna mène lenquête...', 'Michael Mann', 'Policier, Drame, Action'),
(35, 'West Side Story', 1962, 'Dans le West Side, bas quartier de New York, deux bandes de jeunes saffrontent, les Sharks de Bernardo et les Jets de Riff. Un ex des Jets, Tony, séprend de Maria, la soeur de Bernardo.', 'Robert Wise & Jerome Robbins', 'Comédie Musicale'),
(36, 'Rock Academy', 2004, 'Un musicien se fait virer de son groupe de rock et trouve, dans la foulée, un emploi de prof de musique dans une école privée stricte. Là, devant un parterre de tubas, de clairons, de pianos et de harpes, il décide de revoir l''approche de la musique de ses élèves. Leur filant des Gibson en V, des claviers, des caisses claires et des charleys, il leur enseigne la musique des amplis. Le gros son des rockers. Et leur donne le pouvoir de casser les règles', 'Richard Linklater', 'Comédie Musicale'),
(37, 'Old Boy', 2004, 'A la fin des années 80, Oh Dae-Soo, père de famille sans histoire, est enlevé un jour devant chez lui. Séquestré pendant plusieurs années dans une cellule privée, son seul lien avec l"extérieur est une télévision. Par le biais de cette télévision, il apprend le meurtre de sa femme, meurtre dont il est le principal suspect. Au désespoir d"être séquestré sans raison apparente succède alors chez le héros une rage intérieure vengeresse qui lui permet de survivre. Il est relâché 15 ans plus tard, toujours sans explication. Oh Dae-Soo est alors contacté par celui qui semble être le responsable de ses malheurs, qui lui propose de découvrir qui l"a enlevé et pourquoi. Le cauchemar continue pour le héros.', 'Park Chan-Wook', 'Thriller, Drame'),
(38, 'Casshern', 2005, 'Dans un futur apocalyptique, une expérience scientifique aboutit à la création d"êtres aux pouvoirs extraordinaires, immédiatement massacrés par des unités militaires. Seul un groupe survit. Les créatures humanoïdes décident de se venger de toute l"humanité à l"aide d"une armée de robots. Pour contrer leurs plans de destruction, le responsable de leur création accidentelle plonge le corps de son fils défunt dans la même solution liquide qui aboutit à la naissance de la race des mutants. Revenu d"entre les morts, Tetsuya Azuma est le dernier espoir de l"humanité...', 'Kazuaki Kiriya', 'Science fiction, Animation'),
(39, 'Hidalgo', 2004, 'Chaque année, depuis des siècles, se déroule l"Océan de Feu, une course de survie de 5 000 km à travers le désert arabe. En 1890, pour la première fois de l"histoire, un cheikh richissime invite un Américain et son cheval, Hidalgo, à participer à la course. Frank T. Hopkins, cow-boy et messager de la cavalerie américaine, est considéré comme le plus grand cavalier que n"ait jamais connu l"Ouest américain. Le cheikh désire opposer le cow-boy et son mustang aux plus grands chevaux arabes et aux meilleurs cavaliers bédouins. Certains parmi eux sont bien décidés à empêcher l"étranger de finir la course...', 'Joe Johnston', 'Historique, Action, Aventure');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `nom`) VALUES
(1, 'Action'),
(2, 'Comédie'),
(3, 'Drame'),
(4, 'Science Fiction'),
(5, 'Fantastique'),
(6, 'Animation'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Policier'),
(10, 'Aventure'),
(11, 'Romance'),
(12, 'Feel Good'),
(13, 'Historique'),
(14, 'Thriller'),
(15, 'Road-Trip');

-- --------------------------------------------------------

--
-- Structure de la table `l_film_genre`
--

CREATE TABLE IF NOT EXISTS `l_film_genre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_film` int(10) unsigned NOT NULL,
  `id_genre` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`id_film`,`id_genre`),
  KEY `id_film` (`id_film`),
  KEY `id_genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `mdp` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mdp`) VALUES
(1, 'DELOYE', 'Benoît', NULL),
(2, 'GRIETTE', 'Lucie', NULL),
(3, 'HAAS', 'Magali', NULL),
(4, 'MARCEL', 'Antoine', NULL),
(5, 'MATHIEU', 'Sandrine', NULL),
(6, 'MOREAU', 'Charlie', NULL),
(7, 'SIMMET', 'Floriane', NULL),
(8, 'SIMOES MIRANDA', 'Anthony', NULL),
(9, 'THARRADIN', 'Romain', NULL),
(10, 'THOREZ-DEBRUCQ', 'Yohann', NULL),
(11, 'VILLARD', 'Kévin', NULL),
(12, 'ZOUABI', 'Mourad', NULL),
(13, 'AZERKANE', 'Mohamed', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  ADD CONSTRAINT `l_film_genre_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `l_film_genre_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

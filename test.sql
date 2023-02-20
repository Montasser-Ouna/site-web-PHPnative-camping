-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 jan. 2021 à 01:20
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(8, 'Mohamed aziz jribi', 'azizjribi@hotmail.com', '$2y$10$cK3p/KGPMPtuj/vwfiR8xuRbmnzY40Oy6D8Jp4EXlnXz1A9qFhiV6', '0'),
(9, 'Mohamed aziz jribi', 'azizjribi@hotmail.fr', '$2y$10$p4Y/0mLyQZrbRug7dMdM2uGOsv2Suc2N8iuiiHvRZ0jaT219Ujej2', '0'),
(13, 'ahmed', 'ahmedjribi@outlook.fr', '$2y$10$qA95O7YWPkdzsrrESlP/tuvebbCfnp9Hrcftn4st0AiKCsYTqU35O', '0'),
(14, 'souha', 'souhajribi@outlook.fr', '$2y$10$6IbM2PGUmJeWV6ewIz4tzOQNm3HnCcR516HHC7fzy0ZOK58uFckZi', '0');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'camping '),
(3, 'Glamping Camping');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(33, 4, '::1', 5, 1),
(35, 1, '::1', 5, 1),
(36, 1, '::1', -1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'jribi');

-- --------------------------------------------------------

--
-- Structure de la table `clubcamping`
--

CREATE TABLE `clubcamping` (
  `idClubcamping` int(11) NOT NULL,
  `nomclub` varchar(200) NOT NULL,
  `logoclub` varchar(200) NOT NULL,
  `nomres` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `nbmembres` int(200) NOT NULL,
  `siteclub` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `iduser` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clubcamping`
--

INSERT INTO `clubcamping` (`idClubcamping`, `nomclub`, `logoclub`, `nomres`, `contact`, `nbmembres`, `siteclub`, `description`, `iduser`) VALUES
(7, 'Campwithus', 'Capture4.PNG', 'Farah braiki', '12345678', 17, 'https://www.clubcampings.com/', ' camp with us', 0),
(8, 'Campwithus', 'Capture4.PNG', 'Farah braiki', '12345678', 14, 'https://www.clubcampings.com/', ' camp with us ', 0),
(9, 'Campwithusn', 'Capture4.PNG', 'Farah braiki', '12345679', 13, 'https://www.clubcampings.com/', ' kkkkk', 0),
(10, 'Endcitylife', 'Capture4.png', 'vvv', '12345678', 15, 'www.google.com', 'ffhfhfh', 0),
(11, 'aaa', 'Capture4.png', 'bbbb', '12345678', 50, 'www.camp.com', 'ddd', 0),
(16, 'gocamp', 'Capture4.PNG', 'Farah braiki', '12345678', 12, 'https://www.clubcampings.com/', 'nnnnn ', 72),
(17, 'AAA', 'Capture4.PNG', 'AA', 'AA', 10, 'AAA', ' AAAAAAA', 81),
(18, 'All of one', 'event.jpg', 'Gary_White', '2454454524', 24, 'http://localhost/projet_web/projet_site-web_group3/alpins/views/showEvents-front.php', 'no one knows, but everyone knows', 88);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `thread` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_comment` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`ID`, `thread`, `user`, `content`, `date_comment`) VALUES
(1, 1, 'AA', 'AA', '2020-12-13'),
(2, 1, 'XX', 'XX', '2020-12-13'),
(3, 1, 'F', 'FF', '2020-12-13'),
(4, 1, 'D', 'D', '2020-12-13'),
(6, 1, 'AA', 'AA', '2020-12-14'),
(7, 1, 'ee', 'ee', '2020-12-14'),
(9, 1, 'AA', 'AA', '2021-01-02'),
(10, 1, 'XX', 'XX', '2021-01-02'),
(11, 1, 'CC', 'CC', '2021-01-02'),
(12, 28, 'A', 'A', '2021-01-02'),
(13, 1, 'sfqsfsd@gmail.com', 'merci', '2021-01-03');

-- --------------------------------------------------------

--
-- Structure de la table `dislikes_comment`
--

CREATE TABLE `dislikes_comment` (
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dislikes_thread`
--

CREATE TABLE `dislikes_thread` (
  `id` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventPlace` varchar(255) NOT NULL,
  `eventContent` text NOT NULL,
  `eventPhoto` varchar(255) NOT NULL,
  `eventAuthor` varchar(30) NOT NULL,
  `addEventDate` datetime NOT NULL DEFAULT current_timestamp(),
  `setEventDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventDate`, `eventPlace`, `eventContent`, `eventPhoto`, `eventAuthor`, `addEventDate`, `setEventDate`) VALUES
(1, 'Rock Campground', '2019-10-01', 'Tunis', 'Lorem ipsum dolor sitamet consectetur adipisicing elito sed do ctetur adipis or sitamet consecelito sed ing elitsed do eiusmod eiusmod tempore.', '../views/media/event-flyer-2.png', 'Camping Merge', '2020-12-10 05:53:37', '2020-12-19 06:08:59'),
(2, 'Old School Camping', '2020-01-11', 'Kélibi - Douz - Camp Mars', 'Lorem ipsum dolor sitamet consectetur adipisicing elito sed do ctetur adipis or sitamet consecelito sed ing elitsed do eiusmod eiusmod tempore.', '../views/media/event-flyer-1.png', 'Camp Traditionnal', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(3, 'Chapeau Chinois', '2020-01-20', 'Bizerte - Cap Angela', 'Lorem ipsum dolor sitamet consectetur adipisicing elito sed doctetrud exercitation ullamco laborisur adipiscing elitsed do eiusmod eiusmod tempore.', '../views/media/event-flyer-3.jpeg', 'All for Camp', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(4, 'Camping Opémiska', '2020-09-17', 'Kélibi - Douz - Camp Abdelmoula', 'Lorem ipsum dolor sitamet consectetur adipisicing elito sed drun ullamco laboriso eiusmod tempore boriso eiusmod tctetur adipiscing elitsed eiusmod.', '../views/media/event-flyer-4.png', 'clubOpémiska', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(5, 'Redbull Race', '2020-10-31', 'Gallad', 'Lorem ipsum dolor sitamet consectetur adipisicing elito sed do ctetur adipis or sitamet consecelito sed ing elitsed do eiusmod eiusmod tempore.', '../views/media/event-flyer-5.jpg', 'Action Camp', '2020-12-11 05:53:37', '2020-12-19 06:09:06'),
(6, 'Under The Start', '2009-05-31', 'Gafsa - Metlaoui', 'ach moment of this unique journey will be emphasized with Amália Rodrigues, Fernando Lopes Graça, Luis Freitas Branco, Madredeus, Salvador Sobral and Zeca Afonso’s notes.', '../views/media/underthestart.jpg', 'OniCamp', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(11, 'Crispy Sky', '2020-12-04', 'Gafsa - Metlaoui - marseille', 'sdfgdfgds', '../views/media/crispysky.jpg', 'TheClub', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(12, 'Master Camp', '2020-12-16', 'kélibi - Douz', 'In this direction, one of the outdoor recreational activities that people, especially in the West have taken to is camping. It is an activity that emerged only recently, in the 20th century.', '../views/media/mastercamp.jpg', 'The club of Camping', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(13, 'Master Camp', '2020-12-07', 'kélibi - Douz', 'ergdsfgdsfg', '../views/media/mastercamp.jpg', 'The club of Camping', '2020-12-11 05:53:37', '2020-12-11 06:14:13'),
(14, 'Camping All', '2021-01-06', 'kélibi - Douz', 'Come with the whole family to take part in the great campsite for all.', '../views/media/campingall.jpg', 'All of one', '2021-01-03 08:00:46', '2021-01-03 08:24:38');

-- --------------------------------------------------------

--
-- Structure de la table `eventsmembers`
--

CREATE TABLE `eventsmembers` (
  `eventsMembersID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eventsmembers`
--

INSERT INTO `eventsmembers` (`eventsMembersID`, `eventID`, `userID`) VALUES
(1, 2, 75),
(2, 5, 75),
(12, 4, 88);

-- --------------------------------------------------------

--
-- Structure de la table `likes_comment`
--

CREATE TABLE `likes_comment` (
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes_comment`
--

INSERT INTO `likes_comment` (`id`, `id_comment`, `id_user`) VALUES
(3, 12, 'aa@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `likes_thread`
--

CREATE TABLE `likes_thread` (
  `id` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes_thread`
--

INSERT INTO `likes_thread` (`id`, `id_thread`, `id_user`) VALUES
(24, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `idn` int(11) NOT NULL,
  `iduser` int(200) NOT NULL,
  `id` int(200) NOT NULL,
  `note` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noter`
--

INSERT INTO `noter` (`idn`, `iduser`, `id`, `note`) VALUES
(25, 88, 1, 3),
(26, 88, 2, 2),
(30, 75, 1, 3),
(44, 75, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed'),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed'),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 2, '\r\n camping,Tours, excursions and Packages in tozeur\r\nSahara Desert Safari', 120, 50, 'Its a good offre ', '123.png ', 'camping,tours,desert '),
(2, 2, 3, 'caming ,tours,excurtions and packages in cap hmem bizerte ', 130, 50, 'good trip ', '1234.png\r\n', 'camping,tours,swimming'),
(4, 2, 2, 'good trip with camping , tours , excurtions and packages in djem ', 150, 100, 'a good trip with a good price ', '12345.png\r\n', 'camping,tours,summer ');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `localisation` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL,
  `prixact` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `localisation`, `image`, `description`, `dateD`, `dateF`, `prixact`, `prix`, `iduser`) VALUES
(1, 'al haouaria', 'image-5.jpg', 'nabeul', '2020-12-03', '2020-12-09', 200, 150, 75),
(2, 'cap hmem', 'long-2.jpg', 'Bizerte', '2020-12-16', '2020-12-26', 250, 160, 75),
(3, 'korbous', 'image-3.jpg', 'nabeul', '2020-12-12', '2020-12-17', 90, 40, 75);

-- --------------------------------------------------------

--
-- Structure de la table `threads`
--

CREATE TABLE `threads` (
  `utilisateur` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `ID` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `threads`
--

INSERT INTO `threads` (`utilisateur`, `titre`, `contenu`, `ID`, `date`) VALUES
('user', 'titre', 'content', 1, '2020-11-29'),
('QQ', 'QQ', 'QQ', 21, '2020-12-06'),
('EE', 'EE', 'EE', 25, '2020-12-06'),
('XX', 'SS', 'SS', 26, '2020-12-28'),
('XX', 'AA', 'AA', 27, '2021-01-02'),
('XX', 'DD', 'DD', 28, '2021-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Rizwan', 'Khan', 'rizwankhan.august16@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8389080183', 'Rahmat Nagar Burnpur Asansol', 'Asansol'),
(2, 'Rizwan', 'Khan', 'rizwankhan.august16@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '8389080183', 'Rahmat Nagar Burnpur Asansol', 'Asa'),
(3, 'malek', 'ayadi', 'azizjribi@hotmail.com', '2e30266b16e235e5888561d4cb7ab874', '1234567891', '1234567891', 'XCV'),
(5, 'ali', 'jribi', 'alijribi@outlook.fr', '181fbb2cdecf43380027868775fcf360', '1234567890', 'HBHKN', 'JNJLNL'),
(6, 'hama', 'hgu', 'fekkanifyi@desoz.com', '14a763d42467fe05d2e368aa178c1452', '1234567897', 'ZDCVGR ', 'CDCDVAEFBV');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `prenom` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `datedenais` date NOT NULL,
  `motdepasse` varchar(200) NOT NULL,
  `cmotdepasse` varchar(200) NOT NULL,
  `ville` varchar(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `accesstype` varchar(200) NOT NULL,
  `keyconfirmation` varchar(255) NOT NULL,
  `active` varchar(200) DEFAULT '0',
  `timee` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `pdp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `prenom`, `email`, `datedenais`, `motdepasse`, `cmotdepasse`, `ville`, `tel`, `accesstype`, `keyconfirmation`, `active`, `timee`, `pdp`) VALUES
(75, 'farah', ' braiki', 'farahbk@gmail.com', '2020-12-15', '00000', '00000', 'Gabes', 12345678, 'respensable du club', '', '1', '2021-01-03 23:54:54', 'Capture4.PNG'),
(87, 'XX', 'XX', 'aa@gmail.com', '2021-01-14', 'aa@gmail.com', 'aa@gmail.com', 'sfax', 88888888, 'User', '31206454966938', '1', '2021-01-03 06:32:45', ''),
(88, 'Guimdo', 'Lioguy', 'lioguy@gmail.com', '2020-12-28', '22222', '22222', 'tunis', 52484759, 'respensable du club', '65330104927409', '1', '2021-01-03 23:17:54', 'leroilion.jpg'),
(89, 'loft', 'ompt', 'vianel.lioguy@gmail.com', '2021-01-05', '1555', '1555', 'bizerte', 5245484, 'respensable du club', '', '1', 'current_timestamp()', 'leroilion.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `clubcamping`
--
ALTER TABLE `clubcamping`
  ADD PRIMARY KEY (`idClubcamping`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `thread` (`thread`);

--
-- Index pour la table `dislikes_comment`
--
ALTER TABLE `dislikes_comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dislikes_thread`
--
ALTER TABLE `dislikes_thread`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Index pour la table `eventsmembers`
--
ALTER TABLE `eventsmembers`
  ADD PRIMARY KEY (`eventsMembersID`),
  ADD KEY `fk_eventID` (`eventID`),
  ADD KEY `fk_userID` (`userID`);

--
-- Index pour la table `likes_comment`
--
ALTER TABLE `likes_comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes_thread`
--
ALTER TABLE `likes_thread`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD PRIMARY KEY (`idn`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iduser2_` (`iduser`);

--
-- Index pour la table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clubcamping`
--
ALTER TABLE `clubcamping`
  MODIFY `idClubcamping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `dislikes_comment`
--
ALTER TABLE `dislikes_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `dislikes_thread`
--
ALTER TABLE `dislikes_thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `eventsmembers`
--
ALTER TABLE `eventsmembers`
  MODIFY `eventsMembersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `likes_comment`
--
ALTER TABLE `likes_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `likes_thread`
--
ALTER TABLE `likes_thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `noter`
--
ALTER TABLE `noter`
  MODIFY `idn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `threads`
--
ALTER TABLE `threads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eventsmembers`
--
ALTER TABLE `eventsmembers`
  ADD CONSTRAINT `fk_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`),
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userID`) REFERENCES `utilisateur` (`idutilisateur`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `fk_iduser2_` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`idutilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

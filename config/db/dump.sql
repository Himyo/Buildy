-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: buildydb
-- Generation Time: Jul 11, 2019 at 12:31 PM
-- Server version: 10.3.14-MariaDB-1:10.3.14+maria~bionic
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT current_timestamp(),
  `content` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `categories_id` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Cards`
--

CREATE TABLE `Cards` (
  `id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL DEFAULT 'none',
  `name` varchar(45) DEFAULT NULL,
  `toughness` int(11) DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `text` varchar(520) DEFAULT NULL,
  `lore` varchar(250) DEFAULT NULL,
  `ruling` varchar(520) DEFAULT NULL,
  `multiverse_id` int(11) NOT NULL DEFAULT -1,
  `releases_id` int(11) NOT NULL,
  `mana_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `legalities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `name`) VALUES
(1, 'dump'),
(2, 'test'),
(3, 'editable');

-- --------------------------------------------------------

--
-- Table structure for table `Commentaires`
--

CREATE TABLE `Commentaires` (
  `id` int(11) NOT NULL,
  `content` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `commentaires_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Decks`
--

CREATE TABLE `Decks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Decks_cards`
--

CREATE TABLE `Decks_cards` (
  `decks_id` int(11) NOT NULL,
  `cards_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Favoris`
--

CREATE TABLE `Favoris` (
  `users_id` int(11) NOT NULL,
  `cards_id` int(11) DEFAULT NULL,
  `articles_id` int(11) DEFAULT NULL,
  `decks_id` int(11) DEFAULT NULL,
  `tournaments_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Legalities`
--

CREATE TABLE `Legalities` (
  `standard` tinyint(1) NOT NULL DEFAULT 0,
  `modern` tinyint(1) NOT NULL DEFAULT 0,
  `legacy` tinyint(1) NOT NULL DEFAULT 0,
  `vintage` tinyint(1) NOT NULL DEFAULT 0,
  `pauper` tinyint(1) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Mana`
--

CREATE TABLE `Mana` (
  `id` int(11) NOT NULL,
  `white` int(11) NOT NULL DEFAULT 0,
  `black` int(11) NOT NULL DEFAULT 0,
  `blue` int(11) NOT NULL DEFAULT 0,
  `green` int(11) NOT NULL DEFAULT 0,
  `red` int(11) NOT NULL DEFAULT 0,
  `colorless` int(11) NOT NULL DEFAULT 0,
  `x` int(11) NOT NULL DEFAULT 0,
  `void` int(11) NOT NULL DEFAULT 0,
  `cmc` int(11) NOT NULL DEFAULT 0,
  `mana_cost` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Photo`
--

CREATE TABLE `Photo` (
  `id` int(11) NOT NULL,
  `path` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Releases`
--

CREATE TABLE `Releases` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `release_date` varchar(25) DEFAULT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tournaments`
--

CREATE TABLE `Tournaments` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `nb_contenders` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Tournaments_members`
--

CREATE TABLE `Tournaments_members` (
  `users_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `id` int(11) NOT NULL,
  `supertype` varchar(75) DEFAULT NULL,
  `type` varchar(75) DEFAULT NULL,
  `subtype` varchar(75) DEFAULT NULL,
  `layout` varchar(75) DEFAULT NULL,
  `rarity` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `role` int(11) NOT NULL DEFAULT 0,
  `token` varchar(60) DEFAULT NULL,
  `photo_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users_cards`
--

CREATE TABLE `Users_cards` (
  `users_id` int(11) NOT NULL,
  `cards_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_categories1_idx` (`categories_id`);

--
-- Indexes for table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cards_release1_idx` (`releases_id`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaires_members1_idx` (`users_id`),
  ADD KEY `fk_commentaires_commentaires1_idx` (`commentaires_id`),
  ADD KEY `fk_commentaires_article1_idx` (`articles_id`);

--
-- Indexes for table `Decks`
--
ALTER TABLE `Decks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Favoris`
--
ALTER TABLE `Favoris`
  ADD KEY `fk_favoris_members1_idx` (`users_id`),
  ADD KEY `fk_favoris_cards1_idx` (`cards_id`),
  ADD KEY `fk_favoris_articles1_idx` (`articles_id`),
  ADD KEY `fk_favoris_decks1` (`decks_id`),
  ADD KEY `fk_favoris_tournaments1_idx` (`tournaments_id`);

--
-- Indexes for table `Legalities`
--
ALTER TABLE `Legalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Mana`
--
ALTER TABLE `Mana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Photo`
--
ALTER TABLE `Photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Releases`
--
ALTER TABLE `Releases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tournaments`
--
ALTER TABLE `Tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tournaments_members`
--
ALTER TABLE `Tournaments_members`
  ADD KEY `fk_tournament_member_members1_idx` (`users_id`),
  ADD KEY `fk_tournament_member_tournaments1_idx` (`tournaments_id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Cards`
--
ALTER TABLE `Cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Commentaires`
--
ALTER TABLE `Commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Decks`
--
ALTER TABLE `Decks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Legalities`
--
ALTER TABLE `Legalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Mana`
--
ALTER TABLE `Mana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Photo`
--
ALTER TABLE `Photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Releases`
--
ALTER TABLE `Releases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tournaments`
--
ALTER TABLE `Tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cards`
--
ALTER TABLE `Cards`
  ADD CONSTRAINT `fk_cards_release1` FOREIGN KEY (`releases_id`) REFERENCES `Releases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

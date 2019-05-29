-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: buildydb
-- Generation Time: May 28, 2019 at 07:59 PM
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
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Articles_games`
--

CREATE TABLE `Articles_games` (
  `games_id` int(11) NOT NULL DEFAULT 1,
  `articles_id` int(11) NOT NULL
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
  `game_id` int(11) NOT NULL DEFAULT 1,
  `mana_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `legalities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `cards_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL DEFAULT 1,
  `decks_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Games`
--

CREATE TABLE `Games` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
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
  `game_id` int(11) NOT NULL DEFAULT 1,
  `name` varchar(45) DEFAULT NULL,
  `release_date` varchar(25) DEFAULT NULL,
  `code` varchar(20) NOT NULL
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
-- Table structure for table `Tournaments`
--

CREATE TABLE `Tournaments` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `nb_contenders` int(11) DEFAULT NULL,
  `games_id` int(11) NOT NULL DEFAULT 1
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
  `rarity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `owner` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Articles_games`
--
ALTER TABLE `Articles_games`
  ADD KEY `fk_articles_games_games1_idx` (`games_id`),
  ADD KEY `fk_articles_games_articles1_idx` (`articles_id`);

--
-- Indexes for table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cards_release1_idx` (`releases_id`),
  ADD KEY `fk_cards_games1_idx` (`game_id`);

--
-- Indexes for table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaires_members1_idx` (`users_id`),
  ADD KEY `fk_commentaires_commentaires1_idx` (`commentaires_id`),
  ADD KEY `fk_commentaires_article1_idx` (`articles_id`);

--
-- Indexes for table `Favoris`
--
ALTER TABLE `Favoris`
  ADD KEY `fk_favoris_members1_idx` (`users_id`),
  ADD KEY `fk_favoris_cards1_idx` (`cards_id`),
  ADD KEY `fk_favoris_articles1_idx` (`articles_id`),
  ADD KEY `fk_favoris_games1_idx` (`games_id`),
  ADD KEY `fk_favoris_decks1_idx` (`decks_id`),
  ADD KEY `fk_favoris_tournaments1_idx` (`tournaments_id`);

--
-- Indexes for table `Games`
--
ALTER TABLE `Games`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_release_games1_idx` (`game_id`);

--
-- Indexes for table `Tournaments_members`
--
ALTER TABLE `Tournaments_members`
  ADD KEY `fk_tournament_member_members1_idx` (`users_id`),
  ADD KEY `fk_tournament_member_tournaments1_idx` (`tournaments_id`);

--
-- Indexes for table `Tournaments`
--
ALTER TABLE `Tournaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tournaments_games1_idx` (`games_id`);

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
-- AUTO_INCREMENT for table `Commentaires`
--
ALTER TABLE `Commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Games`
--
ALTER TABLE `Games`
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
  ADD CONSTRAINT `fk_cards_games1` FOREIGN KEY (`game_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cards_release1` FOREIGN KEY (`releases_id`) REFERENCES `Releases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Releases`
--
ALTER TABLE `Releases`
  ADD CONSTRAINT `fk_release_games1` FOREIGN KEY (`game_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Tournaments`
--
ALTER TABLE `Tournaments`
  ADD CONSTRAINT `fk_tournaments_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

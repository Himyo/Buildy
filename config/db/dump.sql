-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: buildydb
-- Generation Time: May 16, 2019 at 10:22 AM
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
CREATE SCHEMA IF NOT EXISTS `buildy` DEFAULT CHARACTER SET utf8;
USE `buildy`
-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Articles_games`
--

CREATE TABLE `Articles_games` (
  `games_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Ban_list`
--

CREATE TABLE `Ban_list` (
  `cards_id` int(11) NOT NULL,
  `releases_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Cards`
--

CREATE TABLE `Cards` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `flavor` varchar(45) DEFAULT NULL,
  `releases_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `mana_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `legalities_id` int(11) NOT NULL
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
  `cmc` int(11) NOT NULL DEFAULT 0,
  `mana_cost` varchar(40) NOT NULL
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
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
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
  `games_id` int(11) NOT NULL,
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

--
-- Dumping data for table `Games`
--

INSERT INTO `Games` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MAGIC: THE GATHERING', NULL, NULL);

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
  `game_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `release_date` varchar(25) DEFAULT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Releases`
--

INSERT INTO `Releases` (`id`, `game_id`, `name`, `release_date`, `code`) VALUES
(4018, 1, 'Tenth Edition', '2007-07-13', '10E'),
(4019, 1, 'Unlimited Edition', '1993-12-01', '2ED'),
(4020, 1, 'Revised Edition', '1994-04-01', '3ED'),
(4021, 1, 'Fourth Edition', '1995-04-01', '4ED'),
(4022, 1, 'Fifth Dawn', '2004-06-04', '5DN'),
(4023, 1, 'Fifth Edition', '1997-03-24', '5ED'),
(4024, 1, 'Classic Sixth Edition', '1999-04-21', '6ED'),
(4025, 1, 'Seventh Edition', '2001-04-11', '7ED'),
(4026, 1, 'Eighth Edition', '2003-07-28', '8ED'),
(4027, 1, 'Ninth Edition', '2005-07-29', '9ED'),
(4028, 1, 'Masters 25', '2018-03-16', 'A25'),
(4029, 1, 'Aether Revolt', '2017-01-20', 'AER'),
(4030, 1, 'Amonkhet', '2017-04-28', 'AKH'),
(4031, 1, 'Shards of Alara', '2008-10-03', 'ALA'),
(4032, 1, 'Alliances', '1996-06-10', 'ALL'),
(4033, 1, 'Arena New Player Experience', '2018-07-14', 'ANA'),
(4034, 1, 'Apocalypse', '2001-06-04', 'APC'),
(4035, 1, 'Alara Reborn', '2009-04-30', 'ARB'),
(4036, 1, 'Archenemy', '2010-06-18', 'ARC'),
(4037, 1, 'Arabian Nights', '1993-12-17', 'ARN'),
(4038, 1, 'Anthologies', '1998-11-01', 'ATH'),
(4039, 1, 'Antiquities', '1994-03-04', 'ATQ'),
(4040, 1, 'Avacyn Restored', '2012-05-04', 'AVR'),
(4041, 1, 'Duel Decks: Divine vs. Demonic', '2009-04-10', 'DDC'),
(4042, 1, 'Battlebond', '2018-06-08', 'BBD'),
(4043, 1, 'Battle for Zendikar', '2015-10-02', 'BFZ'),
(4044, 1, 'Born of the Gods', '2014-02-07', 'BNG'),
(4045, 1, 'Betrayers of Kamigawa', '2005-02-04', 'BOK'),
(4046, 1, 'Battle Royale Box Set', '1999-11-12', 'BRB'),
(4047, 1, 'Beatdown Box Set', '2000-10-01', 'BTD'),
(4048, 1, 'Commander 2013', '2013-11-01', 'C13'),
(4049, 1, 'Commander 2014', '2014-11-07', 'C14'),
(4050, 1, 'Commander 2015', '2015-11-13', 'C15'),
(4051, 1, 'Commander 2016', '2016-11-11', 'C16'),
(4052, 1, 'Commander 2017', '2017-08-25', 'C17'),
(4053, 1, 'Commander 2018', '2018-08-09', 'C18'),
(4054, 1, 'Collectorsâ€™ Edition', '1993-12-10', 'CED'),
(4055, 1, 'Intl. Collectorsâ€™ Edition', '1993-12-10', 'CEI'),
(4056, 1, 'Champions of Kamigawa', '2004-10-01', 'CHK'),
(4057, 1, 'Chronicles', '1995-07-01', 'CHR'),
(4058, 1, 'Commander\'s Arsenal', '2012-11-02', 'CM1'),
(4059, 1, 'Commander Anthology Volume II', '2018-06-08', 'CM2'),
(4060, 1, 'Commander Anthology', '2017-06-06', 'CMA'),
(4061, 1, 'Commander 2011', '2011-06-17', 'CMD'),
(4062, 1, 'Conspiracy: Take the Crown', '2016-08-26', 'CN2'),
(4063, 1, 'Conspiracy', '2014-06-06', 'CNS'),
(4064, 1, 'Conflux', '2009-02-06', 'CON'),
(4065, 1, 'Magic 2015 Clash Pack', '2014-07-18', 'CP1'),
(4066, 1, 'Fate Reforged Clash Pack', '2015-01-24', 'CP2'),
(4067, 1, 'Magic Origins Clash Pack', '2015-07-17', 'CP3'),
(4068, 1, 'Coldsnap', '2006-07-21', 'CSP'),
(4069, 1, 'Coldsnap Theme Decks', '2006-07-21', 'CST'),
(4070, 1, 'Duel Decks: Elves vs. Goblins', '2007-11-16', 'DD1'),
(4071, 1, 'Duel Decks: Jace vs. Chandra', '2008-11-07', 'DD2'),
(4072, 1, 'Duel Decks: Garruk vs. Liliana', '2009-10-30', 'DDD'),
(4073, 1, 'Duel Decks: Phyrexia vs. the Coalition', '2010-03-19', 'DDE'),
(4074, 1, 'Duel Decks: Elspeth vs. Tezzeret', '2010-09-03', 'DDF'),
(4075, 1, 'Duel Decks: Knights vs. Dragons', '2011-04-01', 'DDG'),
(4076, 1, 'Duel Decks: Ajani vs. Nicol Bolas', '2011-09-02', 'DDH'),
(4077, 1, 'Duel Decks: Venser vs. Koth', '2012-03-30', 'DDI'),
(4078, 1, 'Duel Decks: Izzet vs. Golgari', '2012-09-07', 'DDJ'),
(4079, 1, 'Duel Decks: Sorin vs. Tibalt', '2013-03-15', 'DDK'),
(4080, 1, 'Duel Decks: Heroes vs. Monsters', '2013-09-06', 'DDL'),
(4081, 1, 'Duel Decks: Jace vs. Vraska', '2014-03-14', 'DDM'),
(4082, 1, 'Duel Decks: Speed vs. Cunning', '2014-09-05', 'DDN'),
(4083, 1, 'Duel Decks: Elspeth vs. Kiora', '2015-02-27', 'DDO'),
(4084, 1, 'Duel Decks: Zendikar vs. Eldrazi', '2015-08-28', 'DDP'),
(4085, 1, 'Duel Decks: Blessed vs. Cursed', '2016-02-26', 'DDQ'),
(4086, 1, 'Duel Decks: Nissa vs. Ob Nixilis', '2016-09-02', 'DDR'),
(4087, 1, 'Duel Decks: Mind vs. Might', '2017-03-31', 'DDS'),
(4088, 1, 'Duel Decks: Merfolk vs. Goblins', '2017-10-24', 'DDT'),
(4089, 1, 'Duel Decks: Elves vs. Inventors', '2018-04-06', 'DDU'),
(4090, 1, 'Dragon\'s Maze', '2013-05-03', 'DGM'),
(4091, 1, 'Dissension', '2006-05-05', 'DIS'),
(4092, 1, 'Dark Ascension', '2012-02-03', 'DKA'),
(4093, 1, 'Deckmasters', '2001-12-01', 'DKM'),
(4094, 1, 'Dominaria', '2018-04-27', 'DOM'),
(4095, 1, 'Duels of the Planeswalkers', '2010-06-04', 'DPA'),
(4096, 1, 'From the Vault: Dragons', '2008-08-29', 'DRB'),
(4097, 1, 'The Dark', '1994-08-01', 'DRK'),
(4098, 1, 'Darksteel', '2004-02-06', 'DST'),
(4099, 1, 'Dragons of Tarkir', '2015-03-27', 'DTK'),
(4100, 1, 'Duel Decks Anthology: Divine vs. Demonic', '2014-12-05', 'DVD'),
(4101, 1, 'Archenemy: Nicol Bolas', '2017-06-16', 'E01'),
(4102, 1, 'Explorers of Ixalan', '2017-11-24', 'E02'),
(4103, 1, 'Eternal Masters', '2016-06-10', 'EMA'),
(4104, 1, 'Eldritch Moon', '2016-07-22', 'EMN'),
(4105, 1, 'Eventide', '2008-07-25', 'EVE'),
(4106, 1, 'Duel Decks Anthology: Elves vs. Goblins', '2014-12-05', 'EVG'),
(4107, 1, 'Exodus', '1998-06-15', 'EXO'),
(4108, 1, 'Zendikar Expeditions', '2015-10-02', 'EXP'),
(4109, 1, 'Friday Night Magic 2001', '2001-01-01', 'F01'),
(4110, 1, 'Friday Night Magic 2002', '2002-01-01', 'F02'),
(4111, 1, 'Friday Night Magic 2003', '2003-01-01', 'F03'),
(4112, 1, 'Friday Night Magic 2004', '2004-01-01', 'F04'),
(4113, 1, 'Friday Night Magic 2005', '2005-01-01', 'F05'),
(4114, 1, 'Friday Night Magic 2006', '2006-01-01', 'F06'),
(4115, 1, 'Friday Night Magic 2007', '2007-01-01', 'F07'),
(4116, 1, 'Friday Night Magic 2008', '2008-01-01', 'F08'),
(4117, 1, 'Friday Night Magic 2009', '2009-01-01', 'F09'),
(4118, 1, 'Friday Night Magic 2010', '2010-01-01', 'F10'),
(4119, 1, 'Friday Night Magic 2011', '2011-01-01', 'F11'),
(4120, 1, 'Friday Night Magic 2012', '2012-01-01', 'F12'),
(4121, 1, 'Friday Night Magic 2013', '2013-01-01', 'F13'),
(4122, 1, 'Friday Night Magic 2014', '2014-01-01', 'F14'),
(4123, 1, 'Friday Night Magic 2015', '2015-01-01', 'F15'),
(4124, 1, 'Friday Night Magic 2016', '2016-01-01', 'F16'),
(4125, 1, 'Friday Night Magic 2017', '2017-01-01', 'F17'),
(4126, 1, 'Friday Night Magic 2018', '2017-12-27', 'F18'),
(4127, 1, 'Foreign Black Border', '1995-04-01', 'FBB'),
(4128, 1, 'Fallen Empires', '1994-11-01', 'FEM'),
(4129, 1, 'Friday Night Magic 2000', '2000-01-01', 'FNM'),
(4130, 1, 'Fate Reforged', '2015-01-23', 'FRF'),
(4131, 1, 'Future Sight', '2007-05-04', 'FUT'),
(4132, 1, 'Judge Gift Cards 2000', '2000-01-01', 'G00'),
(4133, 1, 'Judge Gift Cards 2001', '2001-01-01', 'G01'),
(4134, 1, 'Judge Gift Cards 2002', '2002-01-01', 'G02'),
(4135, 1, 'Judge Gift Cards 2003', '2003-01-01', 'G03'),
(4136, 1, 'Judge Gift Cards 2004', '2004-01-01', 'G04'),
(4137, 1, 'Judge Gift Cards 2005', '2005-01-01', 'G05'),
(4138, 1, 'Judge Gift Cards 2006', '2006-01-01', 'G06'),
(4139, 1, 'Judge Gift Cards 2007', '2007-01-01', 'G07'),
(4140, 1, 'Judge Gift Cards 2008', '2008-01-01', 'G08'),
(4141, 1, 'Judge Gift Cards 2009', '2009-01-01', 'G09'),
(4142, 1, 'Judge Gift Cards 2010', '2010-01-01', 'G10'),
(4143, 1, 'Judge Gift Cards 2011', '2011-01-01', 'G11'),
(4144, 1, '2017 Gift Pack', '2017-10-20', 'G17'),
(4145, 1, 'M19 Gift Pack', '2018-11-16', 'G18'),
(4146, 1, 'Judge Gift Cards 1999', '1999-01-01', 'G99'),
(4147, 1, 'GRN Guild Kit', '2018-11-02', 'GK1'),
(4148, 1, 'RNA Guild Kit', '2019-02-15', 'GK2'),
(4149, 1, 'Game Night', '2018-11-16', 'GNT'),
(4150, 1, 'Guildpact', '2006-02-03', 'GPT'),
(4151, 1, 'Guilds of Ravnica', '2018-10-05', 'GRN'),
(4152, 1, 'Global Series Jiang Yanggu & Mu Yanling', '2018-06-22', 'GS1'),
(4153, 1, 'Gatecrash', '2013-02-01', 'GTC'),
(4154, 1, 'Duel Decks Anthology: Garruk vs. Liliana', '2014-12-05', 'GVL'),
(4155, 1, 'Premium Deck Series: Slivers', '2009-11-20', 'H09'),
(4156, 1, 'HasCon 2017', '2017-09-20', 'H17'),
(4157, 1, 'Happy Holidays', '2006-12-31', 'HHO'),
(4158, 1, 'Homelands', '1995-10-01', 'HML'),
(4159, 1, 'Planechase', '2009-09-04', 'HOP'),
(4160, 1, 'Hour of Devastation', '2017-07-14', 'HOU'),
(4161, 1, '2016 Heroes of the Realm', '2017-09-20', 'HTR'),
(4162, 1, '2017 Heroes of the Realm', '2018-08-01', 'HTR17'),
(4163, 1, 'Ice Age', '1995-06-01', 'ICE'),
(4164, 1, 'Iconic Masters', '2017-11-17', 'IMA'),
(4165, 1, 'Invasion', '2000-10-02', 'INV'),
(4166, 1, 'Nemesis', '2000-02-14', 'NEM'),
(4167, 1, 'Innistrad', '2011-09-30', 'ISD'),
(4168, 1, 'Introductory Two-Player Set', '1996-12-31', 'ITP'),
(4169, 1, 'Judge Gift Cards 2012', '2012-01-01', 'J12'),
(4170, 1, 'Judge Gift Cards 2013', '2013-01-01', 'J13'),
(4171, 1, 'Judge Gift Cards 2014', '2014-01-01', 'J14'),
(4172, 1, 'Judge Gift Cards 2015', '2015-01-01', 'J15'),
(4173, 1, 'Judge Gift Cards 2016', '2016-01-01', 'J16'),
(4174, 1, 'Judge Gift Cards 2017', '2017-01-01', 'J17'),
(4175, 1, 'Judge Gift Cards 2018', '2018-01-01', 'J18'),
(4176, 1, 'Judge Gift Cards 1998', '1998-01-01', 'JGP'),
(4177, 1, 'Journey into Nyx', '2014-05-02', 'JOU'),
(4178, 1, 'Judgment', '2002-05-27', 'JUD'),
(4179, 1, 'Duel Decks Anthology: Jace vs. Chandra', '2014-12-05', 'JVC'),
(4180, 1, 'Kaladesh', '2016-09-30', 'KLD'),
(4181, 1, 'Khans of Tarkir', '2014-09-26', 'KTK'),
(4182, 1, 'League Tokens 2012', '2012-01-01', 'L12'),
(4183, 1, 'League Tokens 2013', '2013-01-01', 'L13'),
(4184, 1, 'League Tokens 2014', '2014-01-01', 'L14'),
(4185, 1, 'League Tokens 2015', '2015-01-01', 'L15'),
(4186, 1, 'League Tokens 2016', '2016-01-01', 'L16'),
(4187, 1, 'League Tokens 2017', '2017-01-01', 'L17'),
(4188, 1, 'Limited Edition Alpha', '1993-08-05', 'LEA'),
(4189, 1, 'Limited Edition Beta', '1993-10-04', 'LEB'),
(4190, 1, 'Legends', '1994-06-01', 'LEG'),
(4191, 1, 'Legions', '2003-02-03', 'LGN'),
(4192, 1, 'Lorwyn', '2007-10-12', 'LRW'),
(4193, 1, 'Magic 2010', '2009-07-17', 'M10'),
(4194, 1, 'Magic 2011', '2010-07-16', 'M11'),
(4195, 1, 'Amonkhet Promos', '2017-04-28', 'PAKH'),
(4196, 1, 'Magic 2012', '2011-07-15', 'M12'),
(4197, 1, 'Magic 2013', '2012-07-13', 'M13'),
(4198, 1, 'Magic 2014', '2013-07-19', 'M14'),
(4199, 1, 'Magic 2015', '2014-07-18', 'M15'),
(4200, 1, 'Core Set 2019', '2018-07-13', 'M19'),
(4201, 1, 'Mirrodin Besieged', '2011-02-04', 'MBS'),
(4202, 1, 'Modern Event Deck 2014', '2014-05-30', 'MD1'),
(4203, 1, 'Masters Edition', '2007-09-10', 'ME1'),
(4204, 1, 'Masters Edition II', '2008-09-22', 'ME2'),
(4205, 1, 'Masters Edition III', '2009-09-07', 'ME3'),
(4206, 1, 'Masters Edition IV', '2011-01-10', 'ME4'),
(4207, 1, 'Mythic Edition', '2018-10-05', 'MED'),
(4208, 1, 'Multiverse Gift Box', '1996-11-01', 'MGB'),
(4209, 1, 'Modern Horizons', '2019-06-14', 'MH1'),
(4210, 1, 'Mirage', '1996-10-08', 'MIR'),
(4211, 1, 'Modern Masters 2015', '2015-05-22', 'MM2'),
(4212, 1, 'Modern Masters 2017', '2017-03-17', 'MM3'),
(4213, 1, 'Modern Masters', '2013-06-07', 'MMA'),
(4214, 1, 'Mercadian Masques', '1999-10-04', 'MMQ'),
(4215, 1, 'Morningtide', '2008-02-01', 'MOR'),
(4216, 1, 'Amonkhet Invocations', '2017-04-28', 'MP2'),
(4217, 1, 'Magic Player Rewards 2001', '2001-01-01', 'MPR'),
(4218, 1, 'Kaladesh Inventions', '2016-09-30', 'MPS'),
(4219, 1, 'Mirrodin', '2003-10-02', 'MRD'),
(4220, 1, 'New Phyrexia', '2011-05-13', 'NPH'),
(4221, 1, 'Archenemy Schemes', '2010-06-18', 'OARC'),
(4222, 1, 'Commander 2013 Oversized', '2013-11-01', 'OC13'),
(4223, 1, 'Commander 2014 Oversized', '2014-11-07', 'OC14'),
(4224, 1, 'Commander 2015 Oversized', '2015-11-13', 'OC15'),
(4225, 1, 'Commander 2016 Oversized', '2016-11-11', 'OC16'),
(4226, 1, 'Commander 2017 Oversized', '2017-08-25', 'OC17'),
(4227, 1, 'Commander 2018 Oversized', '2018-08-09', 'OC18'),
(4228, 1, 'Commander\'s Arsenal Oversized', '2012-11-02', 'OCM1'),
(4229, 1, 'Commander 2011 Oversized', '2011-06-17', 'OCMD'),
(4230, 1, 'Odyssey', '2001-10-01', 'ODY'),
(4231, 1, 'Archenemy: Nicol Bolas Schemes', '2018-12-25', 'OE01'),
(4232, 1, 'Oath of the Gatewatch', '2016-01-22', 'OGW'),
(4233, 1, 'Planechase Planes', '2009-09-04', 'OHOP'),
(4234, 1, 'Legacy Championship', '2011-01-01', 'OLGC'),
(4235, 1, 'Onslaught', '2002-10-07', 'ONS'),
(4236, 1, 'Planechase 2012 Planes', '2012-06-01', 'OPC2'),
(4237, 1, 'Planechase Anthology Planes', '2018-12-25', 'OPCA'),
(4238, 1, 'Magic Origins', '2015-07-17', 'ORI'),
(4239, 1, 'Vintage Championship', '2003-01-01', 'OVNT'),
(4240, 1, 'Portal Second Age', '1998-06-01', 'P02'),
(4241, 1, 'Magic Player Rewards 2003', '2003-01-01', 'P03'),
(4242, 1, 'Magic Player Rewards 2004', '2004-01-01', 'P04'),
(4243, 1, 'Magic Player Rewards 2005', '2005-01-01', 'P05'),
(4244, 1, 'Magic Player Rewards 2006', '2006-01-01', 'P06'),
(4245, 1, 'Magic Player Rewards 2007', '2007-01-01', 'P07'),
(4246, 1, 'Magic Player Rewards 2008', '2008-01-01', 'P08'),
(4247, 1, 'Magic Player Rewards 2009', '2009-01-01', 'P09'),
(4248, 1, 'Magic Player Rewards 2010', '2010-01-01', 'P10'),
(4249, 1, 'Tenth Edition Promos', '2007-07-13', 'P10E'),
(4250, 1, 'Magic Player Rewards 2011', '2011-01-01', 'P11'),
(4251, 1, '15th Anniversary Cards', '2008-04-01', 'P15A'),
(4252, 1, 'Two-Headed Giant Tournament', '2005-12-09', 'P2HG'),
(4253, 1, 'Aether Revolt Promos', '2017-01-19', 'PAER'),
(4254, 1, 'Arena League 2000', '2000-01-01', 'PAL00'),
(4255, 1, 'Arena League 2001', '2001-01-01', 'PAL01'),
(4256, 1, 'Arena League 2002', '2002-01-01', 'PAL02'),
(4257, 1, 'Arena League 2003', '2003-01-01', 'PAL03'),
(4258, 1, 'Arena League 2004', '2004-01-01', 'PAL04'),
(4259, 1, 'Arena League 2005', '2005-01-01', 'PAL05'),
(4260, 1, 'Arena League 2006', '2006-01-01', 'PAL06'),
(4261, 1, 'Arena League 1999', '1999-01-01', 'PAL99'),
(4262, 1, 'Asia Pacific Land Program', '1998-09-01', 'PALP'),
(4263, 1, 'MTG Arena Promos', '2018-07-14', 'PANA'),
(4264, 1, 'Promotional Schemes', '2010-06-18', 'PARC'),
(4265, 1, 'Arena League 1996', '1996-08-02', 'PARL'),
(4266, 1, 'Avacyn Restored Promos', '2012-04-28', 'PAVR'),
(4267, 1, 'Battlebond Promos', '2018-06-09', 'PBBD'),
(4268, 1, 'Battle for Zendikar Promos', '2015-10-02', 'PBFZ'),
(4269, 1, 'Born of the Gods Promos', '2014-02-01', 'PBNG'),
(4270, 1, 'Miscellaneous Book Promos', '2009-01-27', 'PBOK'),
(4271, 1, 'Planechase 2012', '2012-06-01', 'PC2'),
(4272, 1, 'Planechase Anthology', '2016-11-25', 'PCA'),
(4273, 1, 'Celebration Cards', '1996-08-14', 'PCEL'),
(4274, 1, 'Commander 2011 Launch Party', '2011-06-17', 'PCMD'),
(4275, 1, 'Champs and States', '2006-03-18', 'PCMP'),
(4276, 1, 'Prophecy', '2000-06-05', 'PCY'),
(4277, 1, 'Premium Deck Series: Fire and Lightning', '2010-11-19', 'PD2'),
(4278, 1, 'Premium Deck Series: Graveborn', '2011-11-18', 'PD3'),
(4279, 1, 'Duel Decks: Jace vs. Chandra Japanese Promos', '2010-12-03', 'PDD2'),
(4280, 1, 'Dragon\'s Maze Promos', '2013-04-27', 'PDGM'),
(4281, 1, 'Dark Ascension Promos', '2012-01-28', 'PDKA'),
(4282, 1, 'Dominaria Promos', '2018-04-27', 'PDOM'),
(4283, 1, 'Duels of the Planeswalkers Promos 2010', '2010-01-01', 'PDP10'),
(4284, 1, 'Duels of the Planeswalkers Promos 2011', '2011-01-01', 'PDP11'),
(4285, 1, 'Duels of the Planeswalkers Promos 2012', '2012-01-01', 'PDP12'),
(4286, 1, 'Duels of the Planeswalkers Promos 2013', '2013-01-01', 'PDP13'),
(4287, 1, 'Duels of the Planeswalkers Promos 2014', '2014-01-01', 'PDP14'),
(4288, 1, 'Dragon Con', '1994-01-01', 'PDRC'),
(4289, 1, 'Dragons of Tarkir Promos', '2015-03-26', 'PDTK'),
(4290, 1, 'Duels of the Planeswalkers Promos 2009', '2009-01-01', 'PDTP'),
(4291, 1, 'European Land Program', '2000-02-05', 'PELP'),
(4292, 1, 'Eldritch Moon Promos', '2016-07-22', 'PEMN'),
(4293, 1, 'MagicFest 2019', '2019-01-01', 'PF19'),
(4294, 1, 'Fate Reforged Promos', '2015-01-22', 'PFRF'),
(4295, 1, 'Gateway 2007', '2007-01-01', 'PG07'),
(4296, 1, 'Gateway 2008', '2008-01-01', 'PG08'),
(4297, 1, 'Grand Prix Promos', '2007-02-24', 'PGPX'),
(4298, 1, 'Guilds of Ravnica Promos', '2018-10-05', 'PGRN'),
(4299, 1, 'Guru', '1999-07-12', 'PGRU'),
(4300, 1, 'Gatecrash Promos', '2013-01-26', 'PGTC'),
(4301, 1, 'Gateway 2006', '2006-01-01', 'PGTW'),
(4302, 1, 'Open the Helvault', '2012-04-28', 'PHEL'),
(4303, 1, 'Promotional Planes', '2009-09-04', 'PHOP'),
(4304, 1, 'Hour of Devastation Promos', '2017-07-14', 'PHOU'),
(4305, 1, 'HarperPrism Book Promos', '1994-01-01', 'PHPR'),
(4306, 1, 'Hachette UK', '2006-01-01', 'PHUK'),
(4307, 1, 'IDW Comics 2013', '2013-01-01', 'PI13'),
(4308, 1, 'IDW Comics 2014', '2014-01-01', 'PI14'),
(4309, 1, 'IDW Comics 2012', '2012-01-01', 'PIDW'),
(4310, 1, 'Innistrad Promos', '2011-09-24', 'PISD'),
(4311, 1, 'Junior APAC Series', '2006-01-01', 'PJAS'),
(4312, 1, 'Japan Junior Tournament', '2003-01-01', 'PJJT'),
(4313, 1, 'Journey into Nyx Promos', '2014-04-26', 'PJOU'),
(4314, 1, 'Junior Series Europe', '2005-01-01', 'PJSE'),
(4315, 1, 'Kaladesh Promos', '2016-09-30', 'PKLD'),
(4316, 1, 'Khans of Tarkir Promos', '2014-09-20', 'PKTK'),
(4317, 1, 'Planar Chaos', '2007-02-02', 'PLC'),
(4318, 1, 'DCI Legend Membership', '1995-01-01', 'PLGM'),
(4319, 1, '2018 Lunar New Year', '2018-02-16', 'PLNY'),
(4320, 1, 'Launch Parties', '2008-02-01', 'PLPA'),
(4321, 1, 'Planeshift', '2001-02-05', 'PLS'),
(4322, 1, 'Magic 2010 Promos', '2009-07-16', 'PM10'),
(4323, 1, 'Magic 2011 Promos', '2010-07-15', 'PM11'),
(4324, 1, 'Magic 2012 Promos', '2011-07-14', 'PM12'),
(4325, 1, 'Magic 2013 Promos', '2012-07-12', 'PM13'),
(4326, 1, 'Magic 2014 Promos', '2013-07-18', 'PM14'),
(4327, 1, 'Magic 2015 Promos', '2014-07-17', 'PM15'),
(4328, 1, 'Core Set 2019 Promos', '2018-07-13', 'PM19'),
(4329, 1, 'Mirrodin Besieged Promos', '2011-02-03', 'PMBS'),
(4330, 1, 'Magazine Inserts', '1995-01-01', 'PMEI'),
(4331, 1, 'Magic Online Avatars', '2003-01-01', 'PMOA'),
(4332, 1, 'Magic Premiere Shop 2005', '2005-01-01', 'PMPS'),
(4333, 1, 'Magic Premiere Shop 2006', '2006-01-01', 'PMPS06'),
(4334, 1, 'Magic Premiere Shop 2007', '2007-01-01', 'PMPS07'),
(4335, 1, 'Magic Premiere Shop 2008', '2008-01-01', 'PMPS08'),
(4336, 1, 'Magic Premiere Shop 2009', '2009-01-01', 'PMPS09'),
(4337, 1, 'Magic Premiere Shop 2010', '2010-01-01', 'PMPS10'),
(4338, 1, 'Magic Premiere Shop 2011', '2011-01-01', 'PMPS11'),
(4339, 1, 'Nationals Promos', '2018-01-25', 'PNAT'),
(4340, 1, 'New Phyrexia Promos', '2011-05-12', 'PNPH'),
(4341, 1, 'Oath of the Gatewatch Promos', '2016-01-22', 'POGW'),
(4342, 1, 'Portal', '1997-05-01', 'POR'),
(4343, 1, 'Magic Origins Promos', '2015-07-17', 'PORI'),
(4344, 1, 'M15 Prerelease Challenge', '2014-07-12', 'PPC1'),
(4345, 1, 'Portal Demo Game', '1997-05-01', 'PPOD'),
(4346, 1, 'Prerelease Events', '1997-10-04', 'PPRE'),
(4347, 1, 'Pro Tour Promos', '2007-02-09', 'PPRO'),
(4348, 1, 'Magic Player Rewards 2002', '2002-01-01', 'PR2'),
(4349, 1, 'Redemption Program', '1996-10-01', 'PRED'),
(4350, 1, 'Release Events', '2003-07-26', 'PREL'),
(4351, 1, 'Resale Promos', '2007-01-01', 'PRES'),
(4352, 1, 'Rivals of Ixalan Promos', '2018-01-19', 'PRIX'),
(4353, 1, 'Magic Online Promos', '2002-06-24', 'PRM'),
(4354, 1, 'Ravnica Allegiance Promos', '2019-01-25', 'PRNA'),
(4355, 1, 'Rise of the Eldrazi Promos', '2010-04-23', 'PROE'),
(4356, 1, 'Return to Ravnica Promos', '2012-10-05', 'PRTR'),
(4357, 1, 'RNA Ravnica Weekend', '2019-02-16', 'PRW2'),
(4358, 1, 'GRN Ravnica Weekend', '2018-10-05', 'PRWK'),
(4359, 1, 'Salvat 2011', '2011-01-01', 'PS11'),
(4360, 1, 'San Diego Comic-Con 2014', '2014-07-08', 'PS14'),
(4361, 1, 'San Diego Comic-Con 2015', '2015-07-09', 'PS15'),
(4362, 1, 'San Diego Comic-Con 2016', '2016-10-01', 'PS16'),
(4363, 1, 'San Diego Comic-Con 2017', '2017-07-20', 'PS17'),
(4364, 1, 'San Diego Comic-Con 2018', '2018-07-19', 'PS18'),
(4365, 1, 'Salvat 2005', '2005-08-22', 'PSAL'),
(4366, 1, 'San Diego Comic-Con 2013', '2013-07-18', 'PSDC'),
(4367, 1, 'Shadows over Innistrad Promos', '2016-04-08', 'PSOI'),
(4368, 1, 'Scars of Mirrodin Promos', '2010-09-30', 'PSOM'),
(4369, 1, 'BFZ Standard Series', '2015-10-02', 'PSS1'),
(4370, 1, 'XLN Standard Showdown', '2017-09-29', 'PSS2'),
(4371, 1, 'M19 Standard Showdown', '2018-07-13', 'PSS3'),
(4372, 1, 'Summer of Magic', '2007-07-21', 'PSUM'),
(4373, 1, 'Junior Super Series', '1999-12-01', 'PSUS'),
(4374, 1, 'Pro Tour Collector Set', '1996-05-01', 'PTC'),
(4375, 1, 'Theros Promos', '2013-09-21', 'PTHS'),
(4376, 1, 'Portal Three Kingdoms', '1999-05-01', 'PTK'),
(4377, 1, 'Tarkir Dragonfury', '2015-04-03', 'PTKDF'),
(4378, 1, 'Ultimate Box Topper', '2018-12-07', 'PUMA'),
(4379, 1, 'URL/Convention Promos', '2009-02-08', 'PURL'),
(4380, 1, 'Unstable Promos', '2017-11-13', 'PUST'),
(4381, 1, 'Vanguard Series', '1997-05-01', 'PVAN'),
(4382, 1, 'War of the Spark Promos', '2019-03-31', 'PWAR'),
(4383, 1, 'World Magic Cup Qualifiers', '2013-04-06', 'PWCQ'),
(4384, 1, 'Worlds', '1999-08-04', 'PWOR'),
(4385, 1, 'Wizards of the Coast Online Store', '1999-09-04', 'PWOS'),
(4386, 1, 'Wizards Play Network 2009', '2009-01-01', 'PWP09'),
(4387, 1, 'Wizards Play Network 2010', '2010-01-01', 'PWP10'),
(4388, 1, 'Wizards Play Network 2011', '2011-01-01', 'PWP11'),
(4389, 1, 'Wizards Play Network 2012', '2012-01-01', 'PWP12'),
(4390, 1, 'Wizards Play Network 2008', '2008-10-01', 'PWPN'),
(4391, 1, 'Worldwake Promos', '2010-02-05', 'PWWK'),
(4392, 1, 'Ixalan Promos', '2017-09-29', 'PXLN'),
(4393, 1, 'XLN Treasure Chest', '2017-11-24', 'PXTC'),
(4394, 1, 'Legendary Cube', '2015-11-18', 'PZ1'),
(4395, 1, 'You Make the Cube', '2016-11-16', 'PZ2'),
(4396, 1, 'Zendikar Promos', '2009-10-02', 'PZEN'),
(4397, 1, 'Ravnica: City of Guilds', '2005-10-07', 'RAV'),
(4398, 1, 'Renaissance', '1995-08-01', 'REN'),
(4399, 1, 'Rinascimento', '1995-08-01', 'RIN'),
(4400, 1, 'Rivals of Ixalan', '2018-01-19', 'RIX'),
(4401, 1, 'Ravnica Allegiance', '2019-01-25', 'RNA'),
(4402, 1, 'Rise of the Eldrazi', '2010-04-23', 'ROE'),
(4403, 1, 'Rivals Quick Start Set', '1996-07-01', 'RQS'),
(4404, 1, 'Return to Ravnica', '2012-10-05', 'RTR'),
(4405, 1, 'Starter 2000', '2000-04-01', 'S00'),
(4406, 1, 'Starter 1999', '1999-07-01', 'S99'),
(4407, 1, 'Scourge', '2003-05-26', 'SCG'),
(4408, 1, 'Shadowmoor', '2008-05-02', 'SHM'),
(4409, 1, 'Shadows over Innistrad', '2016-04-08', 'SOI'),
(4410, 1, 'Saviors of Kamigawa', '2005-06-03', 'SOK'),
(4411, 1, 'Scars of Mirrodin', '2010-10-01', 'SOM'),
(4412, 1, 'Signature Spellbook: Jace', '2018-06-15', 'SS1'),
(4413, 1, 'Signature Spellbook: Gideon', '2019-06-28', 'SS2'),
(4414, 1, 'Stronghold', '1998-03-02', 'STH'),
(4415, 1, 'Summer Magic / Edgar', '1994-06-21', 'SUM'),
(4416, 1, 'Battle the Horde', '2014-03-01', 'TBTH'),
(4417, 1, 'Magic Online Theme Decks', '2010-11-08', 'TD0'),
(4418, 1, 'Duel Decks: Mirrodin Pure vs. New Phyrexia', '2011-05-14', 'TD2'),
(4419, 1, 'Defeat a God', '2014-05-25', 'TDAG'),
(4420, 1, 'Face the Hydra', '2013-10-19', 'TFTH'),
(4421, 1, 'Theros Hero\'s Path', '2013-09-27', 'THP1'),
(4422, 1, 'Born of the Gods Hero\'s Path', '2014-02-07', 'THP2'),
(4423, 1, 'Journey into Nyx Hero\'s Path', '2014-05-02', 'THP3'),
(4424, 1, 'Theros', '2013-09-27', 'THS'),
(4425, 1, 'Tempest', '1997-10-14', 'TMP'),
(4426, 1, 'Torment', '2002-02-04', 'TOR'),
(4427, 1, 'Tempest Remastered', '2015-05-06', 'TPR'),
(4428, 1, 'Time Spiral Timeshifted', '2006-10-06', 'TSB'),
(4429, 1, 'Time Spiral', '2006-10-06', 'TSP'),
(4430, 1, 'Urza\'s Destiny', '1999-06-07', 'UDS'),
(4431, 1, 'Ugin\'s Fate', '2015-01-17', 'UGIN'),
(4432, 1, 'Unglued', '1998-08-11', 'UGL'),
(4433, 1, 'Urza\'s Legacy', '1999-02-15', 'ULG'),
(4434, 1, 'Ultimate Masters', '2018-12-07', 'UMA'),
(4435, 1, 'Unhinged', '2004-11-19', 'UNH'),
(4436, 1, 'Urza\'s Saga', '1998-10-12', 'USG'),
(4437, 1, 'Unstable', '2017-12-08', 'UST'),
(4438, 1, 'From the Vault: Exiled', '2009-08-28', 'V09'),
(4439, 1, 'From the Vault: Relics', '2010-08-27', 'V10'),
(4440, 1, 'From the Vault: Legends', '2011-08-26', 'V11'),
(4441, 1, 'From the Vault: Realms', '2012-08-31', 'V12'),
(4442, 1, 'From the Vault: Twenty', '2013-08-23', 'V13'),
(4443, 1, 'From the Vault: Annihilation', '2014-08-22', 'V14'),
(4444, 1, 'From the Vault: Angels', '2015-08-21', 'V15'),
(4445, 1, 'From the Vault: Lore', '2016-08-19', 'V16'),
(4446, 1, 'From the Vault: Transform', '2017-11-24', 'V17'),
(4447, 1, 'Visions', '1997-02-03', 'VIS'),
(4448, 1, 'Vintage Masters', '2014-06-16', 'VMA'),
(4449, 1, 'Welcome Deck 2016', '2016-04-08', 'W16'),
(4450, 1, 'Welcome Deck 2017', '2017-04-15', 'W17'),
(4451, 1, 'War of the Spark', '2019-05-03', 'WAR'),
(4452, 1, 'World Championship Decks 2000', '2000-08-02', 'WC00'),
(4453, 1, 'World Championship Decks 2001', '2001-08-08', 'WC01'),
(4454, 1, 'World Championship Decks 2002', '2002-08-14', 'WC02'),
(4455, 1, 'World Championship Decks 2003', '2003-08-06', 'WC03'),
(4456, 1, 'World Championship Decks 2004', '2004-09-01', 'WC04'),
(4457, 1, 'World Championship Decks 1997', '1997-08-13', 'WC97'),
(4458, 1, 'World Championship Decks 1998', '1998-08-12', 'WC98'),
(4459, 1, 'World Championship Decks 1999', '1999-08-04', 'WC99'),
(4460, 1, 'Weatherlight', '1997-06-09', 'WTH'),
(4461, 1, 'Worldwake', '2010-02-05', 'WWK'),
(4462, 1, 'Ixalan', '2017-09-29', 'XLN'),
(4463, 1, 'Zendikar', '2009-10-02', 'ZEN');

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
-- Table structure for table `Tournements`
--

CREATE TABLE `Tournements` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `nb_contenders` int(11) DEFAULT NULL,
  `games_id` int(11) NOT NULL
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

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `lastname`, `firstname`, `owner`, `email`, `password`, `status`, `role`, `token`, `photo_id`) VALUES
(1, 'YY', 'Y', NULL, 'y@g.fr', '$2y$10$Uk5wGHzmRBmCUngmbQJ2IenZMQg5GVqs9CuRMIp0jqeXydd8iqiWq', 0, 1, '$2y$10$ip17SpkIfHeBi69IN5AI8uWcuh7dQx8lfN6HZrI93e8n9LIukkDNG', NULL),
(2, 'YY', 'Y', NULL, 'y@g.fr', '$2y$10$YzeKCmBMhzcKNHxlVGlTdOFpQ24vcsM/63DbWbehbIiyGQZqyzepS', 0, 1, '$2y$10$xlaCzGprl.En8he.BeC0..eP6sOUJoPBgGH8462JxzHI0WYUsu8fG', NULL),
(3, 'TTT', 'Ttt', NULL, 't@g.com', '$2y$10$6X/VOWuLZVIzIJePO7CANufNHq.rTW5aaeIXYRn8K4mzI20UUyTBa', 0, 1, '$2y$10$Aw/lp.gEsFvZP0fIMKYKMeKdamLK8Ljqws7qBNhVeoK9JhRpKiqq6', NULL),
(4, 'TTT', 'Ttt', NULL, 't@g.com', '$2y$10$92oo.oTa7lE3tJ.BRkluhudxrrL7S1H/Jh0OrQNuZU4kZsO.TwerC', 0, 1, '$2y$10$bXtRn9LRmcehscbzyzDlyepFy8mBaUyn4sEVXr2tNkgdEqzkbnfni', NULL),
(5, 'TTT', 'Ttt', NULL, 't@g.com', '$2y$10$zeLboTlQbKmx3fuKCft91OJ9CzQ7MqkzV5nCQ1sDXB19Jt7K1fl4C', 0, 1, '$2y$10$725s8rwdUlqsInBDRJIWTuGKxHvWK107WBh2SguttmKzlAaJAEXBu', NULL);

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
  ADD KEY `fk_articles_photo1_idx` (`photo_id`),
  ADD KEY `fk_articles_members1_idx` (`users_id`);

--
-- Indexes for table `Articles_games`
--
ALTER TABLE `Articles_games`
  ADD KEY `fk_articles_games_games1_idx` (`games_id`),
  ADD KEY `fk_articles_games_articles1_idx` (`articles_id`);

--
-- Indexes for table `Ban_list`
--
ALTER TABLE `Ban_list`
  ADD KEY `fk_ban_list_cards1_idx` (`cards_id`),
  ADD KEY `fk_ban_list_releases1_idx` (`releases_id`);

--
-- Indexes for table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cards_release1_idx` (`releases_id`),
  ADD KEY `fk_cards_games1_idx` (`game_id`);

--
-- Indexes for table `Mana`
--
ALTER TABLE `Mana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_decks_members1_idx` (`users_id`),
  ADD KEY `fk_decks_games1_idx` (`games_id`),

--
-- Indexes for table `Decks_cards`
--
ALTER TABLE `Decks_cards`
  ADD KEY `fk_decks_card_decks1_idx` (`decks_id`),
  ADD KEY `fk_decks_card_cards1_idx` (`cards_id`);

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
-- Indexes for table `Tournements`
--
ALTER TABLE `Tournements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tournaments_games1_idx` (`games_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),

--
-- Indexes for table `Users_cards`
--
ALTER TABLE `Users_cards`
  ADD KEY `fk_member_card_members_idx` (`users_id`),
  ADD KEY `fk_member_card_cards1_idx` (`cards_id`);

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
-- AUTO_INCREMENT for table `Mana`
--
ALTER TABLE `Mana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `Games`
--
ALTER TABLE `Games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Legalities`
--
ALTER TABLE `Legalities`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4464;

--
-- AUTO_INCREMENT for table `Tournements`
--
ALTER TABLE `Tournements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Articles`
--
ALTER TABLE `Articles`
  ADD CONSTRAINT `fk_articles_members1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,

--
-- Constraints for table `Articles_games`
--
ALTER TABLE `Articles_games`
  ADD CONSTRAINT `fk_articles_games_articles1` FOREIGN KEY (`articles_id`) REFERENCES `Articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_games_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Ban_list`
--
ALTER TABLE `Ban_list`
  ADD CONSTRAINT `fk_ban_list_cards1` FOREIGN KEY (`cards_id`) REFERENCES `Cards` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ban_list_releases1` FOREIGN KEY (`releases_id`) REFERENCES `Releases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Cards`
--
ALTER TABLE `Cards`
  ADD CONSTRAINT `fk_cards_games1` FOREIGN KEY (`game_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cards_release1` FOREIGN KEY (`releases_id`) REFERENCES `Releases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD CONSTRAINT `fk_commentaires_article1` FOREIGN KEY (`articles_id`) REFERENCES `Articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaires_commentaires1` FOREIGN KEY (`commentaires_id`) REFERENCES `Commentaires` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaires_members1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Decks`
--
ALTER TABLE `Decks`
  ADD CONSTRAINT `fk_decks_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_decks_members1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,

--
-- Constraints for table `Decks_cards`
--
ALTER TABLE `Decks_cards`
  ADD CONSTRAINT `fk_decks_card_cards1` FOREIGN KEY (`cards_id`) REFERENCES `Cards` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_decks_card_decks1` FOREIGN KEY (`decks_id`) REFERENCES `Decks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Favoris`
--
ALTER TABLE `Favoris`
  ADD CONSTRAINT `fk_favoris_articles1` FOREIGN KEY (`articles_id`) REFERENCES `Articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_cards1` FOREIGN KEY (`cards_id`) REFERENCES `Cards` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_decks1` FOREIGN KEY (`decks_id`) REFERENCES `Decks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_members1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `Tournements` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Releases`
--
ALTER TABLE `Releases`
  ADD CONSTRAINT `fk_release_games1` FOREIGN KEY (`game_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Tournaments_members`
--
ALTER TABLE `Tournaments_members`
  ADD CONSTRAINT `fk_tournament_member_members1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tournament_member_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `Tournements` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Tournements`
--
ALTER TABLE `Tournements`
  ADD CONSTRAINT `fk_tournaments_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Users_cards`
--
ALTER TABLE `Users_cards`
  ADD CONSTRAINT `fk_member_card_cards1` FOREIGN KEY (`cards_id`) REFERENCES `Cards` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_card_members` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

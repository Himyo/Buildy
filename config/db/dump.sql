-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : buildydb
-- Généré le :  Dim 25 août 2019 à 22:59
-- Version du serveur :  10.3.17-MariaDB-1:10.3.17+maria~bionic
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `buildy`
--

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `content` longtext DEFAULT NULL,
  `image` varchar(45) NOT NULL DEFAULT 'default-article.jpg',
  `users_id` int(11) NOT NULL,
  `categories` varchar(50) DEFAULT 'GENERAL',
  `state` varchar(50) DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Articles`
--

INSERT INTO `Articles` (`id`, `title`, `created_at`, `content`, `image`, `users_id`, `categories`, `state`) VALUES
(15, 'Articles uno', '2019-08-01 00:00:00', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong>Paris</strong> <span style=\'white-space: nowrap; font-family: \"Segoe UI\", \"DejaVu Sans\", \"Lucida Grande\", \"Lucida Sans Unicode\", \"Arial Unicode MS\", \"Hiragino Kaku Gothic Pro\", sans-serif;\' title=\"Alphabet phonÃ©tique international\">[<a href=\"https://fr.wikipedia.org/wiki/API_p\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"API p\"><span title=\"[p] Â« p Â» dans Â« papa Â».\">p</span></a><a href=\"https://fr.wikipedia.org/wiki/API_a\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"API a\"><span title=\"[a] Â« a Â» dans Â« patte Â».\">a</span></a><a href=\"https://fr.wikipedia.org/wiki/API_.\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"API .\"><span title=\"[.] indique la sÃ©paration entre deux syllabes.\">.</span></a><a href=\"https://fr.wikipedia.org/wiki/API_%CA%81\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"API Ê\"><span title=\"[Ê] Â« r Â» dans Â« roue Â».\">Ê</span></a><a href=\"https://fr.wikipedia.org/wiki/API_i\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"API i\"><span title=\"[i] Â« i Â» dans Â« si Â».\">i</span></a>]</span><sup style=\"line-height: 1; vertical-align: text-top; position: relative; font-size: 0.8em; top: -5px; padding-left: 1px; unicode-bidi: isolate; white-space: nowrap; font-weight: normal; font-style: normal;\"><a href=\"https://fr.wikipedia.org/wiki/Paris#cite_note-1\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">a</a></sup> <sup style=\"line-height: 1;\"><a href=\"https://fr.wikipedia.org/wiki/Fichier:Paris1.ogg\" style=\'text-decoration: none; color: rgb(11, 0, 128); background: url(\"//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png\") left center no-repeat; padding-left: 15px; font-size: smaller;\' title=\"Fichier:Paris1.ogg\">&Eacute;couter</a></sup>, la ville la plus peupl&eacute;e de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"France\">France</a> et l&#39;actuelle&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Capitale_de_la_France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Capitale de la France\">capitale du pays</a>,&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Paris#Organisation_administrative\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">constitue</a> depuis le&nbsp;<time data-sort-value=\"2019-01-01\" datetime=\"2019-01-01\" style=\"white-space: nowrap;\"><a href=\"https://fr.wikipedia.org/wiki/1er_janvier\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"1er janvier\">1<sup style=\"line-height: 1;\">er</sup></a> <a href=\"https://fr.wikipedia.org/wiki/Janvier_2019\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Janvier 2019\">janvier</a> <a href=\"https://fr.wikipedia.org/wiki/2019\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"2019\">2019</a></time> une&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Collectivit%C3%A9_territoriale_en_France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"CollectivitÃ© territoriale en France\">collectivit&eacute; &agrave; statut particulier</a> nomm&eacute;e&nbsp;<strong><a href=\"https://fr.wikipedia.org/wiki/Mairie_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Mairie de Paris\">Ville de Paris</a></strong> (auparavant, elle &eacute;tait &agrave; la fois une&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Commune_(France)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Commune (France)\">commune</a>, la commune de Paris, et un&nbsp;<a href=\"https://fr.wikipedia.org/wiki/D%C3%A9partement_fran%C3%A7ais\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"DÃ©partement franÃ§ais\">d&eacute;partement</a>, le d&eacute;partement de Paris). Elle se situe au c&oelig;ur d&#39;un vaste bassin&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Roche_s%C3%A9dimentaire\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Roche sÃ©dimentaire\">s&eacute;dimentaire</a> aux sols fertiles et au climat temp&eacute;r&eacute;, le&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Bassin_parisien\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Bassin parisien\">bassin parisien</a>, sur une boucle de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Seine\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Seine\">Seine</a>, entre les confluents de celle-ci avec la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Marne_(rivi%C3%A8re)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Marne (riviÃ¨re)\">Marne</a> et l&#39;<a href=\"https://fr.wikipedia.org/wiki/Oise_(rivi%C3%A8re)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Oise (riviÃ¨re)\">Oise</a>. Ses habitants s&rsquo;appellent les Parisiens. Paris est &eacute;galement le&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Chef-lieu\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Chef-lieu\">chef-lieu</a> de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/R%C3%A9gion_fran%C3%A7aise\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"RÃ©gion franÃ§aise\">r&eacute;gion</a> <a href=\"https://fr.wikipedia.org/wiki/%C3%8Ele-de-France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"ÃŽle-de-France\">&Icirc;le-de-France</a> et le centre de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/M%C3%A9tropole_du_Grand_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"MÃ©tropole du Grand Paris\">m&eacute;tropole du Grand Paris</a>, cr&eacute;&eacute;e en 2016. Elle est divis&eacute;e en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Arrondissement\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Arrondissement\">arrondissements</a>, comme les villes de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Lyon\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Lyon\">Lyon</a> et de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Marseille\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Marseille\">Marseille</a>,&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Arrondissements_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Arrondissements de Paris\">au nombre de vingt</a>. L&rsquo;&Eacute;tat y dispose de pr&eacute;rogatives particuli&egrave;res exerc&eacute;es par le&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Pr%C3%A9fecture_de_police_(Paris)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"PrÃ©fecture de police (Paris)\">pr&eacute;fet de police de Paris</a>. La ville a connu de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Transformations_de_Paris_sous_le_Second_Empire\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Transformations de Paris sous le Second Empire\">profondes transformations dans les d&eacute;cennies 1850 &agrave; 1860</a> &agrave; travers d&#39;importants travaux consistant notamment au percement de larges avenues, places et jardins et la construction de nombreux &eacute;difices, dirig&eacute;s par le&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Baron_Haussmann\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Baron Haussmann\">baron Haussmann</a>.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ville la plus peupl&eacute;e de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"France\">France</a>, elle est la premi&egrave;re parmi les&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Liste_des_aires_urbaines_d%27Europe#Liste_des_aires_urbaines_de_l\'Union_europ%C3%A9enne\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Liste des aires urbaines d\'Europe\">aires urbaines de l&#39;Union europ&eacute;enne</a> devant&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Londres\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Londres\">Londres</a> et la&nbsp;<abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"Vingt-neuviÃ¨me\">29<sup style=\"line-height: 1;\">e</sup></abbr> plus peupl&eacute;e du monde. Paris compte 2,19 millions d&#39;habitants au&nbsp;<time data-sort-value=\"2016-01-01\" datetime=\"2016-01-01\" style=\"white-space: nowrap;\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"premier\">1<sup style=\"line-height: 1;\">er</sup></abbr> janvier 2016</time>. L&#39;<a href=\"https://fr.wikipedia.org/wiki/Unit%C3%A9_urbaine_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"UnitÃ© urbaine de Paris\">agglom&eacute;ration parisienne</a> s&rsquo;est largement d&eacute;velopp&eacute;e au cours du&nbsp;<abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"20áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xx</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle, rassemblant 10,73 millions d&#39;habitants au&nbsp;<time data-sort-value=\"2016-01-01\" datetime=\"2016-01-01\" style=\"white-space: nowrap;\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"premier\">1<sup style=\"line-height: 1;\">er</sup></abbr> janvier 2016</time>, et son&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Aire_urbaine_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Aire urbaine de Paris\">aire urbaine</a> (l&#39;<a href=\"https://fr.wikipedia.org/wiki/Agglom%C3%A9ration\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"AgglomÃ©ration\">agglom&eacute;ration</a> et la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Couronne_p%C3%A9riurbaine\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Couronne pÃ©riurbaine\">couronne p&eacute;riurbaine</a>) comptait 12,57&nbsp;millions d&#39;habitants.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">La position de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Lut%C3%A8ce\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"LutÃ¨ce\">Lut&egrave;ce</a>, sur l&#39;&icirc;le aujourd&#39;hui nomm&eacute;e l&#39;<a href=\"https://fr.wikipedia.org/wiki/%C3%8Ele_de_la_Cit%C3%A9\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"ÃŽle de la CitÃ©\">&icirc;le de la Cit&eacute;</a>, permettant le franchissement du grand fleuve navigable qu&#39;est la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Seine\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Seine\">Seine</a> par une voie reliant le Nord et le Sud des&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Gaule\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Gaule\">Gaules</a>, en fait d&egrave;s l&#39;Antiquit&eacute; une cit&eacute; importante, capitale des&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Parisii\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Parisii\">Parisii</a>, puis lieu de s&eacute;jour d&#39;un empereur romain. Sa position au centre du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Territoire\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Territoire\">territoire</a> contr&ocirc;l&eacute; par les&nbsp;<a href=\"https://fr.wikipedia.org/wiki/M%C3%A9rovingiens\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"MÃ©rovingiens\">rois francs</a> la fait choisir comme&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Capitale_de_la_France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Capitale de la France\">capitale de la France</a> &agrave; la place de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Tournai\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Tournai\">Tournai</a>. Situ&eacute;e au c&oelig;ur d&#39;un territoire agricole fertile avec un climat humide et doux, Paris devient une des principales villes de France au cours du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Xe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Xe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"10áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">x</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, avec&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Cat%C3%A9gorie:Palais_%C3%A0_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"CatÃ©gorie:Palais Ã  Paris\">des palais</a>royaux, de riches&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Abbaye\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Abbaye\">abbayes</a> et&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Cath%C3%A9drale_Notre-Dame_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"CathÃ©drale Notre-Dame de Paris\">une cath&eacute;drale</a>. Au cours du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XIIe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XIIe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"12áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xii</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, avec l&#39;<a href=\"https://fr.wikipedia.org/wiki/Ancienne_universit%C3%A9_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Ancienne universitÃ© de Paris\">Universit&eacute; de Paris</a>, la cit&eacute; devient un des premiers foyers en Europe pour l&rsquo;enseignement et les arts. Le pouvoir royal se fixant dans cette ville, son importance &eacute;conomique et politique ne cesse de cro&icirc;tre. Ainsi, au d&eacute;but du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XIVe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XIVe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"14áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xiv</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, Paris est l&#39;une des villes les plus importantes du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Occident_chr%C3%A9tien\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Occident chrÃ©tien\">monde chr&eacute;tien</a>. Au&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XVIIe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XVIIe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"17áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xvii</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, elle est la capitale de la principale puissance politique europ&eacute;enne&nbsp;; au&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XVIIIe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XVIIIe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"18áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xviii</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, l&#39;un des plus grands centres culturels de l&rsquo;Europe&nbsp;; et au&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XIXe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XIXe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"19áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xix</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a>, la capitale des arts et des plaisirs. Du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XVIe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XVIe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"16áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xvi</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a> au&nbsp;<a href=\"https://fr.wikipedia.org/wiki/XXe_si%C3%A8cle\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"XXe siÃ¨cle\"><abbr style=\"border-bottom: 0px; cursor: help; text-decoration: none;\" title=\"20áµ‰ siÃ¨cle\"><span style=\"text-transform: lowercase; font-variant: small-caps;\">xx</span><sup style=\"line-height: 1; font-size: 10.08px;\">e</sup></abbr> si&egrave;cle</a> Paris a &eacute;t&eacute; la capitale de l&#39;<a href=\"https://fr.wikipedia.org/wiki/Empire_colonial_fran%C3%A7ais\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Empire colonial franÃ§ais\">Empire colonial fran&ccedil;ais</a>. Paris joue donc un r&ocirc;le de tout premier plan dans l&rsquo;<a href=\"https://fr.wikipedia.org/wiki/Histoire_de_l%27Europe\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Histoire de l\'Europe\">histoire de l&#39;Europe</a>et du monde depuis des si&egrave;cles.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Symbole de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Culture_fran%C3%A7aise\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Culture franÃ§aise\">culture fran&ccedil;aise</a>, connue dans le monde entier pour sa beaut&eacute; et son &eacute;l&eacute;gance, abritant de nombreux monuments, la ville, surnomm&eacute;e la&nbsp;<em>Ville Lumi&egrave;re</em>, attire en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/2017\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"2017\">2017</a> pr&egrave;s de 34&nbsp;millions de visiteurs, ce qui en fait une des capitales les plus visit&eacute;es au monde. Paris occupe &eacute;galement, au niveau mondial, une place unique dans les secteurs du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Luxe\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Luxe\">luxe</a>, de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Mode_(habillement)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Mode (habillement)\">mode</a>, de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Grande_cuisine\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Grande cuisine\">haute gastronomie</a>, et dans le monde de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Culture\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Culture\">culture</a>. La capitale fran&ccedil;aise n&#39;est&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Jumelage\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Jumelage\">jumel&eacute;e</a> qu&#39;avec une seule autre ville,&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Rome\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Rome\">Rome</a>, ce qui est aussi valable dans l&#39;autre sens, avec ce slogan&nbsp;: &laquo;&nbsp;Seul Paris est digne de Rome, seule Rome est digne de Paris&nbsp;&raquo;.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">La ville est, avec&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Unit%C3%A9_urbaine_de_Paris\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"UnitÃ© urbaine de Paris\">sa banlieue</a>, la capitale &eacute;conomique et commerciale de la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"France\">France</a>, ainsi que sa premi&egrave;re place financi&egrave;re et boursi&egrave;re. Elle a accueilli en 2019 l&#39;<a href=\"https://fr.wikipedia.org/wiki/Autorit%C3%A9_bancaire_europ%C3%A9enne\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"AutoritÃ© bancaire europÃ©enne\">Autorit&eacute; bancaire europ&eacute;enne</a>. Paris est le si&egrave;ge de plusieurs organisations internationales comme l&#39;<a href=\"https://fr.wikipedia.org/wiki/Organisation_des_Nations_unies_pour_l%27%C3%A9ducation,_la_science_et_la_culture\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Organisation des Nations unies pour l\'Ã©ducation, la science et la culture\">UNESCO</a>, l&#39;<a href=\"https://fr.wikipedia.org/wiki/Organisation_de_coop%C3%A9ration_et_de_d%C3%A9veloppement_%C3%A9conomiques\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Organisation de coopÃ©ration et de dÃ©veloppement Ã©conomiques\">OCDE</a>, l&#39;<a href=\"https://fr.wikipedia.org/wiki/Chambre_de_commerce_internationale\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Chambre de commerce internationale\">ICC</a>.&nbsp;<a href=\"https://fr.wikipedia.org/wiki/%C3%8Ele-de-France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"ÃŽle-de-France\">La r&eacute;gion parisienne</a> est l&#39;une des plus riches r&eacute;gions d&#39;<a href=\"https://fr.wikipedia.org/wiki/Europe\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Europe\">Europe</a>.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">La densit&eacute; de ses r&eacute;seaux ferroviaire, autoroutier et de ses structures a&eacute;roportuaires en font un point de convergence pour les transports nationaux et internationaux. Cette situation r&eacute;sulte d&#39;une longue &eacute;volution, en particulier des conceptions&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Centralisme\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Centralisme\">centralisatrices</a> des monarchies et des r&eacute;publiques, qui donnent un r&ocirc;le consid&eacute;rable &agrave; la capitale dans le pays et tendent &agrave; y concentrer les institutions. Depuis les&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Ann%C3%A9es_1960\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"AnnÃ©es 1960\">ann&eacute;es 1960</a>, les politiques gouvernementales oscillent toutefois entre&nbsp;<a href=\"https://fr.wikipedia.org/wiki/D%C3%A9concentration\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"DÃ©concentration\">d&eacute;concentration</a> et&nbsp;<a href=\"https://fr.wikipedia.org/wiki/D%C3%A9centralisation\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"DÃ©centralisation\">d&eacute;centralisation</a>. La&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Macroc%C3%A9phalie_urbaine\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"MacrocÃ©phalie urbaine\">macroc&eacute;phalie</a> dont est atteinte la ville se concr&eacute;tise par la convergence de la plupart des r&eacute;seaux routiers et ferroviaires du pays en son centre et des &eacute;carts d&eacute;mographiques et &eacute;conomiques disproportionn&eacute;s entre la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Capitale\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Capitale\">capitale</a> et la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Province\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Province\">province</a> : pr&egrave;s de 19 % de la population fran&ccedil;aise vit dans l&#39;aire urbaine de Paris.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Le club de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Football\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Football\">football</a> du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Paris_Saint-Germain_Football_Club\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Paris Saint-Germain Football Club\">Paris Saint-Germain</a> et celui de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Rugby_%C3%A0_XV\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Rugby Ã  XV\">rugby &agrave; XV</a> du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Stade_fran%C3%A7ais_Paris_rugby\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Stade franÃ§ais Paris rugby\">Stade fran&ccedil;ais</a> sont bas&eacute;s &agrave; Paris. Le&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Stade_de_France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Stade de France\">Stade de France</a>, enceinte de 80&nbsp;000&nbsp;places construite pour la&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Coupe_du_monde_de_football_de_1998\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Coupe du monde de football de 1998\">Coupe du monde de football de 1998</a>, est situ&eacute; au nord de la capitale, dans la commune voisine de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Saint-Denis_(Seine-Saint-Denis)\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Saint-Denis (Seine-Saint-Denis)\">Saint-Denis</a>. Paris, qui accueille chaque ann&eacute;e le tournoi du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Grand_Chelem_de_tennis\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Grand Chelem de tennis\">Grand Chelem de tennis</a> de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Internationaux_de_France_de_tennis\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Internationaux de France de tennis\">Roland Garros</a>, a organis&eacute; les Jeux olympiques&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Jeux_olympiques_de_1900\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Jeux olympiques de 1900\">en 1900</a> puis&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Jeux_olympiques_d%27%C3%A9t%C3%A9_de_1924\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Jeux olympiques d\'Ã©tÃ© de 1924\">en 1924</a>et deviendra&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Jeux_olympiques_d%27%C3%A9t%C3%A9_de_2024\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Jeux olympiques d\'Ã©tÃ© de 2024\">en 2024</a> la deuxi&egrave;me ville avec&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Londres\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Londres\">Londres</a> &agrave; les avoir accueillis trois fois. Paris accueille &eacute;galement de nombreuses comp&eacute;titions internationales et tous les ans l&#39;arriv&eacute;e du&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Tour_de_France\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\" title=\"Tour de France\">Tour de France</a>.</p>', 'default-article.jpg', 20, '2', 'PENDING'),
(16, 'Articles dos', '2019-08-01 00:00:00', 'Contentcontent', 'default-article.jpg', 20, '1', 'PENDING'),
(17, 'Articles tres', '2019-08-01 00:00:00', 'Contentcontent', 'default-article.jpg', 20, '3', 'PENDING'),
(18, 'Articles quatro', '2019-08-01 00:00:00', 'Contentcontent', 'default-article.jpg', 20, '1', 'PENDING'),
(20, 'MAGIC', '2019-08-25 00:00:00', '<p>zfzefzdfzd</p>', 'default-article.jpg', 21, '2', 'PENDING'),
(21, 'Trumuche', '2019-08-25 00:00:00', '<p>Un trucmuche d&#39;&quot;article</p>', 'default-article.jpg', 21, '2', 'PENDING'),
(22, 'Test', '2019-08-25 00:00:00', '<p>Un test</p>', 'default-article.jpg', 21, '3', 'PENDING');

-- --------------------------------------------------------

--
-- Structure de la table `Cards`
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

--
-- Déchargement des données de la table `Cards`
--

INSERT INTO `Cards` (`id`, `image_url`, `name`, `toughness`, `power`, `text`, `lore`, `ruling`, `multiverse_id`, `releases_id`, `mana_id`, `type_id`, `legalities_id`) VALUES
(1, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130483&type=card', 'Abundance', 0, 0, 'If you would draw a card, you may instead choose land or nonland and reveal cards from the top of your library until you reveal a card of the chosen kind. Put that card into your hand and put all other cards revealed this way on the bottom of your library in any order.', '', 'This replacement effect replaces the draw, so nothing that triggers on a draw will trigger.', 130483, 1, 1, 1, 1),
(2, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132072&type=card', 'Academy Researchers', 2, 2, 'When Academy Researchers enters the battlefield, you may put an Aura card from your hand onto the battlefield attached to Academy Researchers.', 'They brandish their latest theories as warriors would wield weapons.', 'You canâ€™t put an Aura card from your hand onto the battlefield this way if that Aura canâ€™t legally enchant Academy Researchers. For example, you canâ€™t put an Aura with â€œenchant landâ€ or â€œenchant green creatureâ€ onto the battlefield attached to Academy Researchers (unless Academy Researchers somehow turned into a land or a green creature before the ability resolved).', 132072, 1, 2, 2, 1),
(3, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129458&type=card', 'Adarkar Wastes', 0, 0, '{T}: Add {C}.\n{T}: Add {W} or {U}. Adarkar Wastes deals 1 damage to you.', '', 'none', 129458, 1, 3, 3, 1),
(4, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135206&type=card', 'Afflict', 0, 0, 'Target creature gets -1/-1 until end of turn.\nDraw a card.', 'One rarely notices a heartbeat, save when it is stolen.', 'none', 135206, 1, 4, 4, 2),
(5, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130525&type=card', 'Aggressive Urge', 0, 0, 'Target creature gets +1/+1 until end of turn.\nDraw a card.', 'The power of the wild, concentrated in a single charge.', 'If the target creature is an illegal target by the time Aggressive Urge tries to resolve, the spell doesnâ€™t resolve. You wonâ€™t draw a card.', 130525, 1, 5, 4, 3),
(6, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135228&type=card', 'Agonizing Memories', 0, 0, 'Look at target player\'s hand and choose two cards from it. Put them on top of that player\'s library in any order.', 'In the aftermath of war, when the slaying is long done, the greatest miseries come home to roost.', 'none', 135228, 1, 6, 5, 1),
(7, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129459&type=card', 'Air Elemental', 4, 4, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)', '\"The East Wind, an interloper in the dominions of Westerly Weather, is an impassive-faced tyrant with a sharp poniard held behind his back for a treacherous stab.\" â€”Joseph Conrad, The Mirror of the Sea', 'none', 129459, 1, 7, 6, 3),
(8, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129913&type=card', 'Ambassador Laquatus', 3, 1, '{3}: Target player puts the top three cards of their library into their graveyard.', '\"Life is a game. The only thing that matters is whether you\'re a pawn or a player.\"', 'none', 129913, 1, 2, 7, 1),
(9, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134753&type=card', 'Anaba Bodyguard', 3, 2, 'First strike (This creature deals combat damage before creatures without first strike.)', '\"They who challenge a minotaur enjoy the taste of their own blood.\" â€”Mirri of the Weatherlight', 'none', 134753, 1, 8, 8, 2),
(10, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130550&type=card', 'Ancestor\'s Chosen', 4, 4, 'First strike (This creature deals combat damage before creatures without first strike.)\nWhen Ancestor\'s Chosen enters the battlefield, you gain 1 life for each card in your graveyard.', '', 'none', 130550, 1, 9, 9, 1),
(11, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129465&type=card', 'Angel of Mercy', 3, 3, 'Flying\nWhen Angel of Mercy enters the battlefield, you gain 3 life.', 'Every tear shed is a drop of immortality.', 'none', 129465, 1, 10, 10, 2),
(12, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129466&type=card', 'Angel\'s Feather', 0, 0, 'Whenever a player casts a white spell, you may gain 1 life.', 'If taken, it cuts the hand that clutches it. If given, it heals the hand that holds it.', 'The ability triggers whenever any player, not just you, casts a white spell.', 129466, 1, 11, 11, 1),
(13, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129711&type=card', 'Angelic Blessing', 0, 0, 'Target creature gets +3/+3 and gains flying until end of turn. (It can\'t be blocked except by creatures with flying or reach.)', 'Only the warrior who can admit mortal weakness will be bolstered by immortal strength.', 'none', 129711, 1, 12, 12, 2),
(14, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129710&type=card', 'Angelic Chorus', 0, 0, 'Whenever a creature enters the battlefield under your control, you gain life equal to its toughness.', 'The harmony of the glorious is a dirge to the wicked.', 'This does not trigger on a permanent being turned into a creature. That is just a permanent changing type, not something entering the battlefield.', 129710, 1, 13, 1, 1),
(15, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129671&type=card', 'Angelic Wall', 4, 0, 'Defender (This creature can\'t attack.)\nFlying', '\"The Ancestor protects us in ways we can\'t begin to comprehend.\" â€”Mystic elder', 'none', 129671, 1, 14, 13, 2),
(16, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130530&type=card', 'Arcane Teachings', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nEnchanted creature gets +2/+2 and has \"{T}: This creature deals 1 damage to any target.\"', '', 'none', 130530, 1, 15, 14, 2),
(17, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=106426&type=card', 'Arcanis the Omnipotent', 4, 3, '{T}: Draw three cards.\n{2}{U}{U}: Return Arcanis the Omnipotent to its owner\'s hand.', '\"Do not concern yourself with my origin, my race, or my ancestry. Seek my record in the pits, and then make your wager.\"', 'Arcanisâ€™s last ability can only be activated while itâ€™s on the battlefield.', 106426, 1, 16, 15, 1),
(18, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=106525&type=card', 'Ascendant Evincar', 3, 3, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nOther black creatures get +1/+1.\nNonblack creatures get -1/-1.', 'His soul snared by an angel\'s curse, Crovax twisted heroism into its purest shadow.', 'If Ascendant Evincar stops being black, it gives itself -1/-1.', 106525, 1, 17, 16, 1),
(19, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135194&type=card', 'Assassinate', 0, 0, 'Destroy target tapped creature.', '\"This is how wars are wonâ€”not with armies of soldiers but with a single knife blade, artfully placed.\" â€”Yurin, royal assassin', 'none', 135194, 1, 4, 12, 2),
(20, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130976&type=card', 'Aura Graft', 0, 0, 'Gain control of target Aura that\'s attached to a permanent. Attach it to another permanent it can enchant.', '\"It\'s not really stealing. It\'s more like extended borrowing.\"', 'If there is no legal place to move the enchantment, then it doesnâ€™t move but you still control it.', 130976, 1, 18, 17, 1),
(21, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132127&type=card', 'Aura of Silence', 0, 0, 'Artifact and enchantment spells your opponents cast cost {2} more to cast.\nSacrifice Aura of Silence: Destroy target artifact or enchantment.', 'Not all silences are easily broken.', 'Aura of Silence affects all opponents in a multiplayer game.', 132127, 1, 19, 18, 1),
(22, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135249&type=card', 'Avatar of Might', 8, 8, 'If an opponent controls at least four more creatures than you, this spell costs {6} less to cast.\nTrample (This creature can deal excess combat damage to the player or planeswalker it\'s attacking.)', '', 'The converted mana cost of this card is still 8, even if you only pay {G}{G} to cast it.', 135249, 1, 20, 19, 1),
(23, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129470&type=card', 'Aven Cloudchaser', 2, 2, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nWhen Aven Cloudchaser enters the battlefield, destroy target enchantment.', '', 'none', 129470, 1, 21, 20, 2),
(24, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130985&type=card', 'Aven Fisher', 2, 2, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nWhen Aven Fisher dies, you may draw a card.', 'The same spears that catch their food today will defend their homes tomorrow.', 'none', 130985, 1, 22, 20, 2),
(25, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129473&type=card', 'Aven Windreader', 3, 3, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\n{1}{U}: Target player reveals the top card of their library.', '\"The tiniest ripple tells a story ten fathoms deep.\"', 'none', 129473, 1, 7, 21, 2),
(26, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129477&type=card', 'Ballista Squad', 2, 2, '{X}{W}, {T}: Ballista Squad deals X damage to target attacking or blocking creature.', 'The perfect antidote for a tightly packed formation.', 'none', 129477, 1, 21, 22, 1),
(27, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132106&type=card', 'Bandage', 0, 0, 'Prevent the next 1 damage that would be dealt to any target this turn.\nDraw a card.', 'Life is measured in inches. To a healer, every one of those inches is precious.', 'You draw the card when Bandage resolves, not when the damage is actually prevented.', 132106, 1, 23, 4, 2),
(28, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129479&type=card', 'Battlefield Forge', 0, 0, '{T}: Add {C}.\n{T}: Add {R} or {W}. Battlefield Forge deals 1 damage to you.', '', 'The damage dealt to you is part of the second mana ability. It doesnâ€™t use the stack and canâ€™t be responded to.', 129479, 1, 3, 3, 1),
(29, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135262&type=card', 'Beacon of Destruction', 0, 0, 'Beacon of Destruction deals 5 damage to any target. Shuffle Beacon of Destruction into its owner\'s library.', 'The Great Furnace\'s blessing is a spectacular sight, but the best view comes at a high cost.', 'If a Beacon is countered or doesnâ€™t resolve, itâ€™s put into its ownerâ€™s graveyard, not shuffled into the library.', 135262, 1, 24, 23, 1),
(30, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130553&type=card', 'Beacon of Immortality', 0, 0, 'Double target player\'s life total. Shuffle Beacon of Immortality into its owner\'s library.', 'The cave floods with light. A thousand rays shine forth and meld into one.', 'If you double a negative life total, you do the real math. A life total of -10 becomes -20.', 130553, 1, 25, 23, 1),
(31, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135270&type=card', 'Beacon of Unrest', 0, 0, 'Put target artifact or creature card from a graveyard onto the battlefield under your control. Shuffle Beacon of Unrest into its owner\'s library.', 'A vertical scream pierces the night air and echoes doom through the clouds.', 'If a Beacon is countered or doesnâ€™t resolve, itâ€™s put into its ownerâ€™s graveyard, not shuffled into the library.', 135270, 1, 26, 24, 1),
(32, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=136279&type=card', 'Benalish Knight', 2, 2, 'Flash (You may cast this spell any time you could cast an instant.)\nFirst strike (This creature deals combat damage before creatures without first strike.)', '\"We called them \'armored lightning.\'\" â€”Gerrard of the Weatherlight', 'none', 136279, 1, 12, 25, 2),
(33, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129906&type=card', 'Birds of Paradise', 1, 0, 'Flying\n{T}: Add one mana of any color.', '', 'none', 129906, 1, 27, 26, 1),
(34, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135267&type=card', 'Blanchwood Armor', 0, 0, 'Enchant creature\nEnchanted creature gets +1/+1 for each Forest you control.', '', 'none', 135267, 1, 28, 14, 3),
(35, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129484&type=card', 'Blaze', 0, 0, 'Blaze deals X damage to any target.', '', 'none', 129484, 1, 29, 5, 1),
(36, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129709&type=card', 'Bloodfire Colossus', 6, 6, '{R}, Sacrifice Bloodfire Colossus: Bloodfire Colossus deals 6 damage to each creature and each player.', 'It took all its strength to contain the fire within.', 'none', 129709, 1, 30, 27, 1),
(37, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130384&type=card', 'Bloodrock Cyclops', 3, 3, 'Bloodrock Cyclops attacks each combat if able.', '\"There are only fifty words in the cyclops language, and ten of them mean \'kill.\'\" â€”Ertai', 'There is no penalty if it canâ€™t attack.', 130384, 1, 15, 28, 2),
(38, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129491&type=card', 'Bog Wraith', 3, 3, 'Swampwalk (This creature can\'t be blocked as long as defending player controls a Swamp.)', 'Knowing Takenuma Swamp to be dangerous, Hisata set wards to warn him of predators. He never imagined that his murderer would pass through them unhindered.', 'none', 129491, 1, 31, 29, 1),
(39, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130534&type=card', 'Bogardan Firefiend', 1, 2, 'When Bogardan Firefiend dies, it deals 2 damage to target creature.', '\"The next one who tells me to relax and curl up by a fire is dead.\" â€”Mirri of the Weatherlight', 'You must pick a target creature, even if you are the only player with creatures on the battlefield.', 130534, 1, 15, 30, 2),
(40, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129494&type=card', 'Boomerang', 0, 0, 'Return target permanent to its owner\'s hand.', 'Early Jamuraan hunters devised a weapon that would return to its source. Tolarian Aethermancers developed a spell that skipped the weapon entirely.', 'none', 129494, 1, 32, 4, 2),
(41, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129495&type=card', 'Bottle Gnomes', 3, 1, 'Sacrifice Bottle Gnomes: You gain 3 life.', 'Reinforcements . . . or refreshments?', 'none', 129495, 1, 33, 31, 2),
(42, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129496&type=card', 'Brushland', 0, 0, '{T}: Add {C}.\n{T}: Add {G} or {W}. Brushland deals 1 damage to you.', '', 'none', 129496, 1, 3, 3, 1),
(43, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129882&type=card', 'Cancel', 0, 0, 'Counter target spell.', '', 'none', 129882, 1, 2, 4, 3),
(44, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135185&type=card', 'Canopy Spider', 3, 1, 'Reach (This creature can block creatures with flying.)', 'It keeps the upper reaches of the forest free of every menace . . . except for the spider itself.', 'This card now uses the Reach keyword ability to enable the blocking of flying creatures. This works because a creature with flying can only be blocked by creatures with flying or reach.', 135185, 1, 5, 32, 2),
(45, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129497&type=card', 'Caves of Koilos', 0, 0, '{T}: Add {C}.\n{T}: Add {W} or {B}. Caves of Koilos deals 1 damage to you.', '', 'The damage dealt to you is part of the second mana ability. It doesnâ€™t use the stack and canâ€™t be responded to.', 129497, 1, 3, 3, 1),
(46, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135261&type=card', 'Cephalid Constable', 1, 1, 'Whenever Cephalid Constable deals combat damage to a player, return up to that many target permanents that player controls to their owner\'s hand.', 'Cephalids don\'t police people. They police loyalties.', 'none', 135261, 1, 2, 33, 1),
(47, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135254&type=card', 'Chimeric Staff', 0, 0, '{X}: Chimeric Staff becomes an X/X Construct artifact creature until end of turn.', 'The staff unraveled in a chaotic chorus of clanging, becoming an improbable beast of hissing blades.', 'A noncreature permanent that turns into a creature can attack, and its {T} abilities can be activated, only if its controller has continuously controlled that permanent since the beginning of their most recent turn. It doesnâ€™t matter how long the permanent has been a creature.', 135254, 1, 34, 34, 1),
(48, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130554&type=card', 'Cho-Manno, Revolutionary', 2, 2, 'Prevent all damage that would be dealt to Cho-Manno, Revolutionary.', '\"Mercadia\'s masks can no longer hide the truth. Our day has come at last.\"', 'none', 130554, 1, 35, 35, 1),
(49, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135279&type=card', 'Chromatic Star', 0, 0, '{1}, {T}, Sacrifice Chromatic Star: Add one mana of any color.\nWhen Chromatic Star is put into a graveyard from the battlefield, draw a card.', '', 'none', 135279, 1, 36, 11, 2),
(50, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135244&type=card', 'Citanul Flute', 0, 0, '{X}, {T}: Search your library for a creature card with converted mana cost X or less, reveal it, and put it into your hand. Then shuffle your library.', 'Each note of the flute mimics the call of a different beast.', 'X can be zero if you want.', 135244, 1, 37, 34, 1),
(51, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130522&type=card', 'Civic Wayfinder', 2, 2, 'When Civic Wayfinder enters the battlefield, you may search your library for a basic land card, reveal it, and put it into your hand. If you do, shuffle your library.', '\"These alleys are not safe. Come, I can guide you back to the market square.\"', 'none', 130522, 1, 28, 36, 2),
(52, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129501&type=card', 'Clone', 0, 0, 'You may have Clone enter the battlefield as a copy of any creature on the battlefield.', '', 'If the chosen creature is copying something else (for example, if the chosen creature is another Clone), then your Clone enters the battlefield as whatever the chosen creature copied.', 129501, 1, 22, 37, 1),
(53, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129804&type=card', 'Cloud Elemental', 3, 2, 'Flying\nCloud Elemental can block only creatures with flying.', 'The soratami surround their sky-castles with living clouds that serve as both sword and shield.', 'none', 129804, 1, 38, 38, 2),
(54, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132069&type=card', 'Cloud Sprite', 1, 1, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nCloud Sprite can block only creatures with flying.', 'The delicate sprites carry messages for Saprazzans, but they refuse to land in Mercadia City\'s filthy markets.', 'none', 132069, 1, 39, 39, 2),
(55, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129502&type=card', 'Coat of Arms', 0, 0, 'Each creature gets +1/+1 for each other creature on the battlefield that shares at least one creature type with it. (For example, if two Goblin Warriors and a Goblin Shaman are on the battlefield, each gets +2/+2.)', '\"Hup, two, three, four, Dunno how to count no more.\"', 'If a creature has more than one creature type, and one of those types matches the creature you are calculating for, then count that creature. Only one type needs to match in order to get counted.', 129502, 1, 37, 34, 1),
(56, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135268&type=card', 'Colossus of Sardia', 9, 9, 'Trample (This creature can deal excess combat damage to the player or planeswalker it\'s attacking.)\nColossus of Sardia doesn\'t untap during your untap step.\n{9}: Untap Colossus of Sardia. Activate this ability only during your upkeep.', '', 'The ability that untaps it during your upkeep has been returned to an activated ability. There is no restriction on how many times it can be untapped during your upkeep with this ability.', 135268, 1, 40, 40, 1),
(57, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130521&type=card', 'Commune with Nature', 0, 0, 'Look at the top five cards of your library. You may reveal a creature card from among them and put it into your hand. Put the rest on the bottom of your library in any order.', '', 'If you donâ€™t reveal a creature card, put all the revealed cards on the bottom of your library in any order.', 130521, 1, 27, 12, 2),
(58, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135275&type=card', 'Composite Golem', 4, 4, 'Sacrifice Composite Golem: Add {W}{U}{B}{R}{G}.', 'An artificer\'s experiment in cross-material engineering found its own purpose as an interpreter between cultures.', 'none', 135275, 1, 41, 41, 1),
(59, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130528&type=card', 'Condemn', 0, 0, 'Put target attacking creature on the bottom of its owner\'s library. Its controller gains life equal to its toughness.', '\"No doubt the arbiters would put you away, after all the documents are signed. But I will have justice now!\" â€”Alovnek, Boros guildmage', 'The affected creatureâ€™s last known existence on the battlefield is checked to determine its toughness.', 130528, 1, 23, 17, 1),
(60, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130535&type=card', 'Cone of Flame', 0, 0, 'Cone of Flame deals 1 damage to any target, 2 damage to another target, and 3 damage to a third target.', '', 'Each of the three targets must be different. If there arenâ€™t three different legal targets available, you canâ€™t cast the spell.', 130535, 1, 24, 5, 1),
(61, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129505&type=card', 'Consume Spirit', 0, 0, 'Spend only black mana on X.\nConsume Spirit deals X damage to any target and you gain X life.', '\"Your blood, your marrow, your spiritâ€”all are mine.\" â€”Mayvar, minion of Geth', 'The amount of life you gain is equal to the number chosen for X, not the amount of damage Consume Spirit deals (in case some of it is prevented).', 129505, 1, 42, 5, 2),
(62, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129590&type=card', 'Contaminated Bond', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nWhenever enchanted creature attacks or blocks, its controller loses 3 life.', '', 'none', 129590, 1, 43, 42, 2),
(63, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134757&type=card', 'Counsel of the Soratami', 0, 0, 'Draw two cards.', '\"Wisdom is not the counting of all the drops in a waterfall. Wisdom is learning why the water seeks the earth.\"', 'none', 134757, 1, 38, 12, 2),
(64, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134758&type=card', 'Crafty Pathmage', 1, 1, '{T}: Target creature with power 2 or less can\'t be blocked this turn.', 'Follow the pathmage â€”Otarian expression meaning \"escape quickly\"', 'If you increase the power of the targeted creature after the ability resolves, it still canâ€™t be blocked that turn.', 134758, 1, 38, 43, 2),
(65, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130527&type=card', 'Craw Wurm', 4, 6, '', 'The most terrifying thing about the craw wurm is probably the horrible crashing sound it makes as it speeds through the forest. This noise is so loud it echoes through the trees and seems to come from all directions at once.', 'none', 130527, 1, 44, 44, 2),
(66, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129512&type=card', 'Creeping Mold', 0, 0, 'Destroy target artifact, enchantment, or land.', 'Mold crept over the walls and into every crevice until the gleaming white stone strained and burst.', 'none', 129512, 1, 1, 5, 1),
(67, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129480&type=card', 'Crucible of Worlds', 0, 0, 'You may play land cards from your graveyard.', 'Amidst the darkest ashes grow the strongest seeds.', 'Crucible of Worlds doesnâ€™t change the times when you can play those land cards. You can still play only one land per turn, and only during your main phase when you have priority and the stack is empty.', 129480, 1, 33, 34, 3),
(68, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129514&type=card', 'Cruel Edict', 0, 0, 'Target opponent sacrifices a creature.', '\"Choose your next words carefully. They will be your last.\" â€”Phage the Untouchable', 'none', 129514, 1, 43, 5, 1),
(69, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129909&type=card', 'Cryoclasm', 0, 0, 'Destroy target Plains or Island. Cryoclasm deals 3 damage to that land\'s controller.', 'The people of Terisiare had come to live on frozen fields as though on solid ground. Nothing reminded them of the difference more clearly than the rifts brought on by the Thaw.', 'none', 129909, 1, 15, 5, 1),
(70, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129910&type=card', 'Deathmark', 0, 0, 'Destroy target green or white creature.', '\"I hope it\'s true that every snowflake is unique, because I never want to see one like this again. Now clean up that body.\" â€”Thangbrand Gyrdsson, Kjeldoran patrol', 'none', 129910, 1, 45, 5, 1),
(71, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129521&type=card', 'Dehydration', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nEnchanted creature doesn\'t untap during its controller\'s untap step.', '', 'none', 129521, 1, 22, 42, 2),
(72, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135223&type=card', 'Deluge', 0, 0, 'Tap all creatures without flying.', '\"From the sea came all life, and to the sea it will return. The sooner the better.\" â€”Emperor Aboshan', 'none', 135223, 1, 38, 17, 1),
(73, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129522&type=card', 'Demolish', 0, 0, 'Destroy target artifact or land.', '\"Pound the steel until it fits. Doesn\'t work? Bash to bits.\" â€”Dwarven forging song', 'none', 129522, 1, 8, 12, 3),
(74, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129523&type=card', 'Demon\'s Horn', 0, 0, 'Whenever a player casts a black spell, you may gain 1 life.', 'Its curve mimics the twists of life and death.', 'The ability triggers whenever any player, not just you, casts a black spell.', 129523, 1, 11, 11, 1),
(75, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129524&type=card', 'Demystify', 0, 0, 'Destroy target enchantment.', '\"Illusion is a crutch for those with no grounding in reality.\" â€”Cho-Manno', 'none', 129524, 1, 23, 4, 3),
(76, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135250&type=card', 'Denizen of the Deep', 11, 11, 'When Denizen of the Deep enters the battlefield, return each other creature you control to its owner\'s hand.', 'According to merfolk legend, a denizen of the deep swallows the horizon at the end of each day, bringing on the cold blanket of night.', 'none', 135250, 1, 46, 45, 1),
(77, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129525&type=card', 'Diabolic Tutor', 0, 0, 'Search your library for a card and put that card into your hand. Then shuffle your library.', 'The best ideas often come from the worst minds.', 'none', 129525, 1, 6, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(11) NOT NULL,
  `content` longtext DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `comments_id` int(11) DEFAULT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `Comments`
--

INSERT INTO `Comments` (`id`, `content`, `users_id`, `comments_id`, `articles_id`) VALUES
(1, 'WOA TROP BIEN L\'ARTICLE DE FOU lol', 21, NULL, 15),
(2, '<p>Test d&#39;un commentaire</p>', 21, NULL, 15),
(3, '<p>LE GRAND TEST</p>', 21, NULL, 16);

-- --------------------------------------------------------

--
-- Structure de la table `Decks`
--

CREATE TABLE `Decks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Decks`
--

INSERT INTO `Decks` (`id`, `name`, `users_id`, `upvotes`, `downvotes`) VALUES
(1, 'Deck feu', 1, 0, 0),
(3, 'Deck eau', 1, 0, 0),
(4, 'SUPER DECK FEU', 21, 0, 0),
(5, 'Deck eau', 21, 0, 0),
(6, 'Nouveau deck', 21, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Decks_cards`
--

CREATE TABLE `Decks_cards` (
  `decks_id` int(11) NOT NULL,
  `cards_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Decks_cards`
--

INSERT INTO `Decks_cards` (`decks_id`, `cards_id`) VALUES
(4, 3),
(4, 2),
(4, 6),
(4, 7),
(4, 2),
(4, 6),
(5, 7),
(5, 8),
(5, 17),
(5, 25),
(6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Favoris`
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
-- Structure de la table `Legalities`
--

CREATE TABLE `Legalities` (
  `standard` tinyint(1) NOT NULL DEFAULT 0,
  `modern` tinyint(1) NOT NULL DEFAULT 0,
  `legacy` tinyint(1) NOT NULL DEFAULT 0,
  `vintage` tinyint(1) NOT NULL DEFAULT 0,
  `pauper` tinyint(1) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Legalities`
--

INSERT INTO `Legalities` (`standard`, `modern`, `legacy`, `vintage`, `pauper`, `id`) VALUES
(0, 1, 1, 1, 0, 1),
(0, 1, 1, 1, 1, 2),
(1, 1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Mana`
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

--
-- Déchargement des données de la table `Mana`
--

INSERT INTO `Mana` (`id`, `white`, `black`, `blue`, `green`, `red`, `colorless`, `x`, `void`, `cmc`, `mana_cost`) VALUES
(1, 0, 0, 0, 2, 0, 2, 0, 0, 4, '{2}{G}{G}'),
(2, 0, 0, 2, 0, 0, 1, 0, 0, 3, '{1}{U}{U}'),
(3, 0, 0, 0, 0, 0, 0, 0, 1, 0, ''),
(4, 0, 1, 0, 0, 0, 2, 0, 0, 3, '{2}{B}'),
(5, 0, 0, 0, 1, 0, 1, 0, 0, 2, '{1}{G}'),
(6, 0, 2, 0, 0, 0, 2, 0, 0, 4, '{2}{B}{B}'),
(7, 0, 0, 2, 0, 0, 3, 0, 0, 5, '{3}{U}{U}'),
(8, 0, 0, 0, 0, 1, 3, 0, 0, 4, '{3}{R}'),
(9, 2, 0, 0, 0, 0, 5, 0, 0, 7, '{5}{W}{W}'),
(10, 1, 0, 0, 0, 0, 4, 0, 0, 5, '{4}{W}'),
(11, 0, 0, 0, 0, 0, 2, 0, 0, 2, '{2}'),
(12, 1, 0, 0, 0, 0, 2, 0, 0, 3, '{2}{W}'),
(13, 2, 0, 0, 0, 0, 3, 0, 0, 5, '{3}{W}{W}'),
(14, 1, 0, 0, 0, 0, 1, 0, 0, 2, '{1}{W}'),
(15, 0, 0, 0, 0, 1, 2, 0, 0, 3, '{2}{R}'),
(16, 0, 0, 3, 0, 0, 3, 0, 0, 6, '{3}{U}{U}{U}'),
(17, 0, 2, 0, 0, 0, 4, 0, 0, 6, '{4}{B}{B}'),
(18, 0, 0, 1, 0, 0, 1, 0, 0, 2, '{1}{U}'),
(19, 2, 0, 0, 0, 0, 1, 0, 0, 3, '{1}{W}{W}'),
(20, 0, 0, 0, 2, 0, 6, 0, 0, 8, '{6}{G}{G}'),
(21, 1, 0, 0, 0, 0, 3, 0, 0, 4, '{3}{W}'),
(22, 0, 0, 1, 0, 0, 3, 0, 0, 4, '{3}{U}'),
(23, 1, 0, 0, 0, 0, 0, 0, 0, 1, '{W}'),
(24, 0, 0, 0, 0, 2, 3, 0, 0, 5, '{3}{R}{R}'),
(25, 1, 0, 0, 0, 0, 5, 0, 0, 6, '{5}{W}'),
(26, 0, 2, 0, 0, 0, 3, 0, 0, 5, '{3}{B}{B}'),
(27, 0, 0, 0, 1, 0, 0, 0, 0, 1, '{G}'),
(28, 0, 0, 0, 1, 0, 2, 0, 0, 3, '{2}{G}'),
(29, 0, 0, 0, 0, 1, 0, 1, 0, 1, '{X}{R}'),
(30, 0, 0, 0, 0, 2, 6, 0, 0, 8, '{6}{R}{R}'),
(31, 0, 1, 0, 0, 0, 3, 0, 0, 4, '{3}{B}'),
(32, 0, 0, 2, 0, 0, 0, 0, 0, 2, '{U}{U}'),
(33, 0, 0, 0, 0, 0, 3, 0, 0, 3, '{3}'),
(34, 0, 0, 0, 0, 0, 4, 0, 0, 4, '{4}'),
(35, 2, 0, 0, 0, 0, 2, 0, 0, 4, '{2}{W}{W}'),
(36, 0, 0, 0, 0, 0, 1, 0, 0, 1, '{1}'),
(37, 0, 0, 0, 0, 0, 5, 0, 0, 5, '{5}'),
(38, 0, 0, 1, 0, 0, 2, 0, 0, 3, '{2}{U}'),
(39, 0, 0, 1, 0, 0, 0, 0, 0, 1, '{U}'),
(40, 0, 0, 0, 0, 0, 9, 0, 0, 9, '{9}'),
(41, 0, 0, 0, 0, 0, 6, 0, 0, 6, '{6}'),
(42, 0, 1, 0, 0, 0, 1, 1, 0, 2, '{X}{1}{B}'),
(43, 0, 1, 0, 0, 0, 1, 0, 0, 2, '{1}{B}'),
(44, 0, 0, 0, 2, 0, 4, 0, 0, 6, '{4}{G}{G}'),
(45, 0, 1, 0, 0, 0, 0, 0, 0, 1, '{B}'),
(46, 0, 0, 2, 0, 0, 6, 0, 0, 8, '{6}{U}{U}');

-- --------------------------------------------------------

--
-- Structure de la table `Pages`
--

CREATE TABLE `Pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` mediumtext DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Pages`
--

INSERT INTO `Pages` (`id`, `slug`, `content`, `title`, `created_at`, `updated_at`) VALUES
(12, '/site/Pages', 'alalal', 'Pages', '2019-08-18 00:00:00', '2019-08-18 11:11:03'),
(13, '/site/mapage', '<p>Une petite page viteuf</p><p><br></p><p><br></p><table style=\"width: 100%;\"><tbody><tr><td style=\"width: 33.3333%;\">1</td><td style=\"width: 33.3333%;\">2</td><td style=\"width: 33.3333%;\">3</td></tr><tr><td style=\"width: 33.3333%;\">4</td><td style=\"width: 33.3333%;\">5</td><td style=\"width: 33.3333%;\">6</td></tr><tr><td style=\"width: 33.3333%;\">7</td><td style=\"width: 33.3333%;\">8</td><td style=\"width: 33.3333%;\">9</td></tr></tbody></table>', 'Une page', '2019-08-25 00:00:00', '2019-08-25 14:07:42'),
(14, '/site/yugi', '<p>yugiohnaziuazndazodozad,pzoadlezbluielneqzjlfbnqez$f</p><p>f&ugrave;azfezf</p><p>eazfkeazfkeaz</p><p>fjk</p><p>eaz,</p><p>azefczldc</p><p>,zqo,c</p><p>zofcqzofz</p><p>qfncz</p><p>qednc</p><p>zdnzsdnz</p><p>nd</p><p>zdf</p>', 'YUGI', '2019-08-25 00:00:00', '2019-08-25 14:11:33');

-- --------------------------------------------------------

--
-- Structure de la table `Photo`
--

CREATE TABLE `Photo` (
  `id` int(11) NOT NULL,
  `path` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Photo`
--

INSERT INTO `Photo` (`id`, `path`, `name`) VALUES
(0, 'default-profile.jpg', 'default');

-- --------------------------------------------------------

--
-- Structure de la table `Releases`
--

CREATE TABLE `Releases` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `release_date` varchar(25) DEFAULT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Releases`
--

INSERT INTO `Releases` (`id`, `name`, `release_date`, `code`) VALUES
(1, 'Tenth Edition', NULL, '10E');

-- --------------------------------------------------------

--
-- Structure de la table `Tournaments`
--

CREATE TABLE `Tournaments` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `ended_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(45) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `nb_contenders` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Tournaments`
--

INSERT INTO `Tournaments` (`id`, `created_at`, `ended_at`, `name`, `description`, `nb_contenders`) VALUES
(5, '2019-08-25 00:00:00', '0000-00-00 00:00:00', 'Tournois Magic', '<p>Mon super tournois sur le jeu magic, 10 joueurs.</p>', 10);

-- --------------------------------------------------------

--
-- Structure de la table `Tournaments_members`
--

CREATE TABLE `Tournaments_members` (
  `users_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Tournaments_members`
--

INSERT INTO `Tournaments_members` (`users_id`, `tournaments_id`, `status`, `updated_at`) VALUES
(21, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

CREATE TABLE `Type` (
  `id` int(11) NOT NULL,
  `supertype` varchar(75) DEFAULT NULL,
  `type` varchar(75) DEFAULT NULL,
  `subtype` varchar(75) DEFAULT NULL,
  `layout` varchar(75) DEFAULT NULL,
  `rarity` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Type`
--

INSERT INTO `Type` (`id`, `supertype`, `type`, `subtype`, `layout`, `rarity`) VALUES
(1, '', 'Enchantment', '', 'normal', 'Rare'),
(2, '', 'Creature', 'Human Wizard', 'normal', 'Uncommon'),
(3, '', 'Land', '', 'normal', 'Rare'),
(4, '', 'Instant', '', 'normal', 'Common'),
(5, '', 'Sorcery', '', 'normal', 'Uncommon'),
(6, '', 'Creature', 'Elemental', 'normal', 'Uncommon'),
(7, 'Legendary', 'Creature', 'Merfolk Wizard', 'normal', 'Rare'),
(8, '', 'Creature', 'Minotaur', 'normal', 'Common'),
(9, '', 'Creature', 'Human Cleric', 'normal', 'Uncommon'),
(10, '', 'Creature', 'Angel', 'normal', 'Uncommon'),
(11, '', 'Artifact', '', 'normal', 'Uncommon'),
(12, '', 'Sorcery', '', 'normal', 'Common'),
(13, '', 'Creature', 'Wall', 'normal', 'Common'),
(14, '', 'Enchantment', 'Aura', 'normal', 'Uncommon'),
(15, 'Legendary', 'Creature', 'Wizard', 'normal', 'Rare'),
(16, 'Legendary', 'Creature', 'Vampire', 'normal', 'Rare'),
(17, '', 'Instant', '', 'normal', 'Uncommon'),
(18, '', 'Enchantment', '', 'normal', 'Uncommon'),
(19, '', 'Creature', 'Avatar', 'normal', 'Rare'),
(20, '', 'Creature', 'Bird Soldier', 'normal', 'Common'),
(21, '', 'Creature', 'Bird Soldier Wizard', 'normal', 'Common'),
(22, '', 'Creature', 'Human Rebel', 'normal', 'Uncommon'),
(23, '', 'Instant', '', 'normal', 'Rare'),
(24, '', 'Sorcery', '', 'normal', 'Rare'),
(25, '', 'Creature', 'Human Knight', 'normal', 'Common'),
(26, '', 'Creature', 'Bird', 'normal', 'Rare'),
(27, '', 'Creature', 'Giant', 'normal', 'Rare'),
(28, '', 'Creature', 'Cyclops', 'normal', 'Common'),
(29, '', 'Creature', 'Wraith', 'normal', 'Uncommon'),
(30, '', 'Creature', 'Elemental Spirit', 'normal', 'Common'),
(31, '', 'Artifact Creature', 'Gnome', 'normal', 'Uncommon'),
(32, '', 'Creature', 'Spider', 'normal', 'Common'),
(33, '', 'Creature', 'Cephalid Wizard', 'normal', 'Rare'),
(34, '', 'Artifact', '', 'normal', 'Rare'),
(35, 'Legendary', 'Creature', 'Human Rebel', 'normal', 'Rare'),
(36, '', 'Creature', 'Elf Warrior Druid', 'normal', 'Common'),
(37, '', 'Creature', 'Shapeshifter', 'normal', 'Rare'),
(38, '', 'Creature', 'Elemental', 'normal', 'Common'),
(39, '', 'Creature', 'Faerie', 'normal', 'Common'),
(40, '', 'Artifact Creature', 'Golem', 'normal', 'Rare'),
(41, '', 'Artifact Creature', 'Golem', 'normal', 'Uncommon'),
(42, '', 'Enchantment', 'Aura', 'normal', 'Common'),
(43, '', 'Creature', 'Human Wizard', 'normal', 'Common'),
(44, '', 'Creature', 'Wurm', 'normal', 'Common'),
(45, '', 'Creature', 'Serpent', 'normal', 'Rare');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACCEPTED',
  `role` varchar(15) NOT NULL DEFAULT 'USER',
  `token` varchar(60) DEFAULT NULL,
  `photo_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `lastname`, `firstname`, `email`, `password`, `status`, `role`, `token`, `photo_id`) VALUES
(12, 'admin', 'admin', 'admin@gmail.com', 'testtest', 'ACCEPTED', 'ADMIN', NULL, 0),
(13, 'u', 'p', 'u@u.com', '$2y$10$it248g04drfmifcyRT8f5eTd5DAyWZBEiVm9hd4KDXRJFvsYWyDfS', 'ACCEPTED', 'USER', NULL, 0),
(14, 'Mod', 'Moderator', 'gay@mod.com', '$2y$10$j7hG//HUlnMyID9.z4BAsuKSlz1xoIX/18PlOvAaPvQPaSS81baui', 'ACCEPTED', 'MODERATOR', NULL, 0),
(15, 'ddd', 'bad', 'dabdab@gmail.com', '$2y$10$B3nZj84w8N03vnY33XYyXe4jSxbk3nZ9KBEoiIrNi7xAeY6X2W8IG', 'ACCEPTED', 'USER', NULL, 0),
(16, 'o', 'ba', 'gay@mod.com', '$2y$10$L4L2AaRqq9XEfMrC5egj7uTVw40qC8pumuDrxD4tgF9OYa0Y2eGAe', 'ACCEPTED', 'USER', NULL, 0),
(20, 'Mod', 'Moderator', 'Mododo@g.com', '$2y$10$AYHf7ufgTlvqbeJiG3gUle2jLr6qd3oPkMZCaqLummmeDJ0pgbSR2', 'ACCEPTED', 'ADMIN', NULL, 0),
(21, 'marinier', 'anthony', 'eldera@gmail.com', '$2y$10$kohsjOeDd5KSa1uc.518quhM1WpKYYgWf3EHR9jadK1iD25qbgeBK', 'ACCEPTED', 'ADMIN', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Users_cards`
--

CREATE TABLE `Users_cards` (
  `users_id` int(11) NOT NULL,
  `cards_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_categories1_idx` (`categories`);

--
-- Index pour la table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cards_release1_idx` (`releases_id`);

--
-- Index pour la table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaires_members1_idx` (`users_id`),
  ADD KEY `fk_commentaires_commentaires1_idx` (`comments_id`),
  ADD KEY `fk_commentaires_article1_idx` (`articles_id`);

--
-- Index pour la table `Decks`
--
ALTER TABLE `Decks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Favoris`
--
ALTER TABLE `Favoris`
  ADD KEY `fk_favoris_members1_idx` (`users_id`),
  ADD KEY `fk_favoris_cards1_idx` (`cards_id`),
  ADD KEY `fk_favoris_articles1_idx` (`articles_id`),
  ADD KEY `fk_favoris_decks1` (`decks_id`),
  ADD KEY `fk_favoris_tournaments1_idx` (`tournaments_id`);

--
-- Index pour la table `Legalities`
--
ALTER TABLE `Legalities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Mana`
--
ALTER TABLE `Mana`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pages`
--
ALTER TABLE `Pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Photo`
--
ALTER TABLE `Photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Releases`
--
ALTER TABLE `Releases`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tournaments`
--
ALTER TABLE `Tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tournaments_members`
--
ALTER TABLE `Tournaments_members`
  ADD KEY `fk_tournament_member_members1_idx` (`users_id`),
  ADD KEY `fk_tournament_member_tournaments1_idx` (`tournaments_id`);

--
-- Index pour la table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `Cards`
--
ALTER TABLE `Cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Decks`
--
ALTER TABLE `Decks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Legalities`
--
ALTER TABLE `Legalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Mana`
--
ALTER TABLE `Mana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `Pages`
--
ALTER TABLE `Pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `Photo`
--
ALTER TABLE `Photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pour la table `Releases`
--
ALTER TABLE `Releases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Tournaments`
--
ALTER TABLE `Tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Cards`
--
ALTER TABLE `Cards`
  ADD CONSTRAINT `fk_cards_release1` FOREIGN KEY (`releases_id`) REFERENCES `Releases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : buildydb
-- Généré le :  lun. 15 juil. 2019 à 09:42
-- Version du serveur :  10.3.14-MariaDB-1:10.3.14+maria~bionic
-- Version de PHP :  7.2.8

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
  `created_at` varchar(45) DEFAULT current_timestamp(),
  `content` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `categories_id` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Articles`
--

INSERT INTO `Articles` (`id`, `title`, `created_at`, `content`, `users_id`, `categories_id`, `state`) VALUES
(13, 'Article1', 'current_timestamp()', 'Mon Article 1', 1, '1', 'Pending'),
(14, 'Article2', 'current_timestamp()', 'Mon Article 2', 1, '2', 'Pending');

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
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Categories`
--

INSERT INTO `Categories` (`id`, `name`) VALUES
(1, 'Tournament'),
(2, 'General'),
(3, 'Deck');

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(11) NOT NULL,
  `content` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `comments_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Decks`
--

INSERT INTO `Decks` (`id`, `name`, `users_id`, `upvotes`, `downvotes`) VALUES
(1, 'Deck feu', 1, 0, 0),
(3, 'Deck eau', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Decks_cards`
--

CREATE TABLE `Decks_cards` (
  `decks_id` int(11) NOT NULL,
  `cards_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `content` text DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Photo`
--

CREATE TABLE `Photo` (
  `id` int(11) NOT NULL,
  `path` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Structure de la table `Roles`
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Tournaments`
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
-- Structure de la table `Tournaments_members`
--

CREATE TABLE `Tournaments_members` (
  `users_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `role` int(11) NOT NULL DEFAULT 0,
  `token` varchar(60) DEFAULT NULL,
  `photo_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `lastname`, `firstname`, `email`, `password`, `status`, `role`, `token`, `photo_id`) VALUES
(12, 'admin', 'admin', 'admin@gmail.com', '$2y$10$70QjRRbrZdl6hJMtuj15qOHqJM2mMt1mD6rxv/Fu2TwbxCx8L/VzW', 'Pending', 2, NULL, 1);

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
  ADD KEY `fk_articles_categories1_idx` (`categories_id`);

--
-- Index pour la table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cards_release1_idx` (`releases_id`);

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `Cards`
--
ALTER TABLE `Cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Decks`
--
ALTER TABLE `Decks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `Photo`
--
ALTER TABLE `Photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Releases`
--
ALTER TABLE `Releases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Tournaments`
--
ALTER TABLE `Tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

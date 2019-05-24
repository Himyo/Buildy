-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: buildydb
-- Generation Time: May 24, 2019 at 03:56 PM
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

--
-- Dumping data for table `Cards`
--

INSERT INTO `Cards` (`id`, `image_url`, `name`, `toughness`, `power`, `text`, `lore`, `ruling`, `multiverse_id`, `releases_id`, `game_id`, `mana_id`, `type_id`, `legalities_id`) VALUES
(771, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130483&type=card', 'Abundance', 0, 0, 'If you would draw a card, you may instead choose land or nonland and reveal cards from the top of your library until you reveal a card of the chosen kind. Put that card into your hand and put all other cards revealed this way on the bottom of your library in any order.', '', 'This replacement effect replaces the draw, so nothing that triggers on a draw will trigger.', 130483, 4018, 1, 1, 1, 1),
(772, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132072&type=card', 'Academy Researchers', 2, 2, 'When Academy Researchers enters the battlefield, you may put an Aura card from your hand onto the battlefield attached to Academy Researchers.', 'They brandish their latest theories as warriors would wield weapons.', 'You canâ€™t put an Aura card from your hand onto the battlefield this way if that Aura canâ€™t legally enchant Academy Researchers. For example, you canâ€™t put an Aura with â€œenchant landâ€ or â€œenchant green creatureâ€ onto the battlefield attached to Academy Researchers (unless Academy Researchers somehow turned into a land or a green creature before the ability resolved).', 132072, 4018, 1, 2, 4, 1),
(773, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129458&type=card', 'Adarkar Wastes', 0, 0, '{T}: Add {C}.\n{T}: Add {W} or {U}. Adarkar Wastes deals 1 damage to you.', '', 'none', 129458, 4018, 1, 3, 7, 1),
(774, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135206&type=card', 'Afflict', 0, 0, 'Target creature gets -1/-1 until end of turn.\nDraw a card.', 'One rarely notices a heartbeat, save when it is stolen.', 'none', 135206, 4018, 1, 4, 8, 4),
(775, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130525&type=card', 'Aggressive Urge', 0, 0, 'Target creature gets +1/+1 until end of turn.\nDraw a card.', 'The power of the wild, concentrated in a single charge.', 'If the target creature is an illegal target by the time Aggressive Urge tries to resolve, the spell doesnâ€™t resolve. You wonâ€™t draw a card.', 130525, 4018, 1, 5, 8, 5),
(776, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135228&type=card', 'Agonizing Memories', 0, 0, 'Look at target player\'s hand and choose two cards from it. Put them on top of that player\'s library in any order.', 'In the aftermath of war, when the slaying is long done, the greatest miseries come home to roost.', 'none', 135228, 4018, 1, 6, 10, 1),
(777, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129459&type=card', 'Air Elemental', 4, 4, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)', '\"The East Wind, an interloper in the dominions of Westerly Weather, is an impassive-faced tyrant with a sharp poniard held behind his back for a treacherous stab.\" â€”Joseph Conrad, The Mirror of the Sea', 'none', 129459, 4018, 1, 7, 11, 5),
(778, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129913&type=card', 'Ambassador Laquatus', 3, 1, '{3}: Target player puts the top three cards of their library into their graveyard.', '\"Life is a game. The only thing that matters is whether you\'re a pawn or a player.\"', 'none', 129913, 4018, 1, 2, 13, 1),
(779, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134753&type=card', 'Anaba Bodyguard', 3, 2, 'First strike (This creature deals combat damage before creatures without first strike.)', '\"They who challenge a minotaur enjoy the taste of their own blood.\" â€”Mirri of the Weatherlight', 'none', 134753, 4018, 1, 9, 14, 4),
(780, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130550&type=card', 'Ancestor\'s Chosen', 4, 4, 'First strike (This creature deals combat damage before creatures without first strike.)\nWhen Ancestor\'s Chosen enters the battlefield, you gain 1 life for each card in your graveyard.', '', 'none', 130550, 4018, 1, 10, 16, 1),
(781, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129465&type=card', 'Angel of Mercy', 3, 3, 'Flying\nWhen Angel of Mercy enters the battlefield, you gain 3 life.', 'Every tear shed is a drop of immortality.', 'none', 129465, 4018, 1, 11, 18, 4),
(782, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129466&type=card', 'Angel\'s Feather', 0, 0, 'Whenever a player casts a white spell, you may gain 1 life.', 'If taken, it cuts the hand that clutches it. If given, it heals the hand that holds it.', 'The ability triggers whenever any player, not just you, casts a white spell.', 129466, 4018, 1, 12, 20, 1),
(783, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129711&type=card', 'Angelic Blessing', 0, 0, 'Target creature gets +3/+3 and gains flying until end of turn. (It can\'t be blocked except by creatures with flying or reach.)', 'Only the warrior who can admit mortal weakness will be bolstered by immortal strength.', 'none', 129711, 4018, 1, 13, 21, 4),
(784, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129710&type=card', 'Angelic Chorus', 0, 0, 'Whenever a creature enters the battlefield under your control, you gain life equal to its toughness.', 'The harmony of the glorious is a dirge to the wicked.', 'This does not trigger on a permanent being turned into a creature. That is just a permanent changing type, not something entering the battlefield.', 129710, 4018, 1, 14, 1, 1),
(785, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129671&type=card', 'Angelic Wall', 4, 0, 'Defender (This creature can\'t attack.)\nFlying', '\"The Ancestor protects us in ways we can\'t begin to comprehend.\" â€”Mystic elder', 'none', 129671, 4018, 1, 15, 24, 4),
(786, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130530&type=card', 'Arcane Teachings', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nEnchanted creature gets +2/+2 and has \"{T}: This creature deals 1 damage to any target.\"', '', 'none', 130530, 4018, 1, 16, 26, 4),
(787, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=106426&type=card', 'Arcanis the Omnipotent', 4, 3, '{T}: Draw three cards.\n{2}{U}{U}: Return Arcanis the Omnipotent to its owner\'s hand.', '\"Do not concern yourself with my origin, my race, or my ancestry. Seek my record in the pits, and then make your wager.\"', 'Arcanisâ€™s last ability can only be activated while itâ€™s on the battlefield.', 106426, 4018, 1, 17, 28, 1),
(788, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=106525&type=card', 'Ascendant Evincar', 3, 3, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nOther black creatures get +1/+1.\nNonblack creatures get -1/-1.', 'His soul snared by an angel\'s curse, Crovax twisted heroism into its purest shadow.', 'If Ascendant Evincar stops being black, it gives itself -1/-1.', 106525, 4018, 1, 18, 29, 1),
(789, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135194&type=card', 'Assassinate', 0, 0, 'Destroy target tapped creature.', '\"This is how wars are wonâ€”not with armies of soldiers but with a single knife blade, artfully placed.\" â€”Yurin, royal assassin', 'none', 135194, 4018, 1, 4, 21, 4),
(790, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130976&type=card', 'Aura Graft', 0, 0, 'Gain control of target Aura that\'s attached to a permanent. Attach it to another permanent it can enchant.', '\"It\'s not really stealing. It\'s more like extended borrowing.\"', 'If there is no legal place to move the enchantment, then it doesnâ€™t move but you still control it.', 130976, 4018, 1, 20, 32, 1),
(791, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132127&type=card', 'Aura of Silence', 0, 0, 'Artifact and enchantment spells your opponents cast cost {2} more to cast.\nSacrifice Aura of Silence: Destroy target artifact or enchantment.', 'Not all silences are easily broken.', 'Aura of Silence affects all opponents in a multiplayer game.', 132127, 4018, 1, 21, 33, 1),
(792, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135249&type=card', 'Avatar of Might', 8, 8, 'If an opponent controls at least four more creatures than you, this spell costs {6} less to cast.\nTrample (This creature can deal excess combat damage to the player or planeswalker it\'s attacking.)', '', 'The converted mana cost of this card is still 8, even if you only pay {G}{G} to cast it.', 135249, 4018, 1, 22, 34, 1),
(793, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129470&type=card', 'Aven Cloudchaser', 2, 2, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nWhen Aven Cloudchaser enters the battlefield, destroy target enchantment.', '', 'none', 129470, 4018, 1, 23, 36, 4),
(794, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130985&type=card', 'Aven Fisher', 2, 2, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nWhen Aven Fisher dies, you may draw a card.', 'The same spears that catch their food today will defend their homes tomorrow.', 'none', 130985, 4018, 1, 24, 36, 4),
(795, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129473&type=card', 'Aven Windreader', 3, 3, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\n{1}{U}: Target player reveals the top card of their library.', '\"The tiniest ripple tells a story ten fathoms deep.\"', 'none', 129473, 4018, 1, 7, 40, 4),
(796, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129477&type=card', 'Ballista Squad', 2, 2, '{X}{W}, {T}: Ballista Squad deals X damage to target attacking or blocking creature.', 'The perfect antidote for a tightly packed formation.', 'none', 129477, 4018, 1, 23, 42, 1),
(797, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132106&type=card', 'Bandage', 0, 0, 'Prevent the next 1 damage that would be dealt to any target this turn.\nDraw a card.', 'Life is measured in inches. To a healer, every one of those inches is precious.', 'You draw the card when Bandage resolves, not when the damage is actually prevented.', 132106, 4018, 1, 27, 8, 4),
(798, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129479&type=card', 'Battlefield Forge', 0, 0, '{T}: Add {C}.\n{T}: Add {R} or {W}. Battlefield Forge deals 1 damage to you.', '', 'The damage dealt to you is part of the second mana ability. It doesnâ€™t use the stack and canâ€™t be responded to.', 129479, 4018, 1, 3, 7, 1),
(799, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135262&type=card', 'Beacon of Destruction', 0, 0, 'Beacon of Destruction deals 5 damage to any target. Shuffle Beacon of Destruction into its owner\'s library.', 'The Great Furnace\'s blessing is a spectacular sight, but the best view comes at a high cost.', 'If a Beacon is countered or doesnâ€™t resolve, itâ€™s put into its ownerâ€™s graveyard, not shuffled into the library.', 135262, 4018, 1, 29, 45, 1),
(800, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130553&type=card', 'Beacon of Immortality', 0, 0, 'Double target player\'s life total. Shuffle Beacon of Immortality into its owner\'s library.', 'The cave floods with light. A thousand rays shine forth and meld into one.', 'If you double a negative life total, you do the real math. A life total of -10 becomes -20.', 130553, 4018, 1, 30, 45, 1),
(801, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135270&type=card', 'Beacon of Unrest', 0, 0, 'Put target artifact or creature card from a graveyard onto the battlefield under your control. Shuffle Beacon of Unrest into its owner\'s library.', 'A vertical scream pierces the night air and echoes doom through the clouds.', 'If a Beacon is countered or doesnâ€™t resolve, itâ€™s put into its ownerâ€™s graveyard, not shuffled into the library.', 135270, 4018, 1, 31, 47, 1),
(802, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=136279&type=card', 'Benalish Knight', 2, 2, 'Flash (You may cast this spell any time you could cast an instant.)\nFirst strike (This creature deals combat damage before creatures without first strike.)', '\"We called them \'armored lightning.\'\" â€”Gerrard of the Weatherlight', 'none', 136279, 4018, 1, 13, 48, 4),
(803, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129906&type=card', 'Birds of Paradise', 1, 0, 'Flying\n{T}: Add one mana of any color.', '', 'none', 129906, 4018, 1, 33, 50, 1),
(804, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135267&type=card', 'Blanchwood Armor', 0, 0, 'Enchant creature\nEnchanted creature gets +1/+1 for each Forest you control.', '', 'none', 135267, 4018, 1, 34, 26, 5),
(805, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129484&type=card', 'Blaze', 0, 0, 'Blaze deals X damage to any target.', '', 'none', 129484, 4018, 1, 35, 10, 1),
(806, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129709&type=card', 'Bloodfire Colossus', 6, 6, '{R}, Sacrifice Bloodfire Colossus: Bloodfire Colossus deals 6 damage to each creature and each player.', 'It took all its strength to contain the fire within.', 'none', 129709, 4018, 1, 36, 55, 1),
(807, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130384&type=card', 'Bloodrock Cyclops', 3, 3, 'Bloodrock Cyclops attacks each combat if able.', '\"There are only fifty words in the cyclops language, and ten of them mean \'kill.\'\" â€”Ertai', 'There is no penalty if it canâ€™t attack.', 130384, 4018, 1, 16, 56, 4),
(808, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129491&type=card', 'Bog Wraith', 3, 3, 'Swampwalk (This creature can\'t be blocked as long as defending player controls a Swamp.)', 'Knowing Takenuma Swamp to be dangerous, Hisata set wards to warn him of predators. He never imagined that his murderer would pass through them unhindered.', 'none', 129491, 4018, 1, 38, 57, 1),
(809, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130534&type=card', 'Bogardan Firefiend', 1, 2, 'When Bogardan Firefiend dies, it deals 2 damage to target creature.', '\"The next one who tells me to relax and curl up by a fire is dead.\" â€”Mirri of the Weatherlight', 'You must pick a target creature, even if you are the only player with creatures on the battlefield.', 130534, 4018, 1, 16, 59, 4),
(810, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129494&type=card', 'Boomerang', 0, 0, 'Return target permanent to its owner\'s hand.', 'Early Jamuraan hunters devised a weapon that would return to its source. Tolarian Aethermancers developed a spell that skipped the weapon entirely.', 'none', 129494, 4018, 1, 40, 8, 4),
(811, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129495&type=card', 'Bottle Gnomes', 3, 1, 'Sacrifice Bottle Gnomes: You gain 3 life.', 'Reinforcements . . . or refreshments?', 'none', 129495, 4018, 1, 41, 61, 4),
(812, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129496&type=card', 'Brushland', 0, 0, '{T}: Add {C}.\n{T}: Add {G} or {W}. Brushland deals 1 damage to you.', '', 'none', 129496, 4018, 1, 3, 7, 1),
(813, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129882&type=card', 'Cancel', 0, 0, 'Counter target spell.', '', 'none', 129882, 4018, 1, 2, 8, 5),
(814, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135185&type=card', 'Canopy Spider', 3, 1, 'Reach (This creature can block creatures with flying.)', 'It keeps the upper reaches of the forest free of every menace . . . except for the spider itself.', 'This card now uses the Reach keyword ability to enable the blocking of flying creatures. This works because a creature with flying can only be blocked by creatures with flying or reach.', 135185, 4018, 1, 5, 64, 4),
(815, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129497&type=card', 'Caves of Koilos', 0, 0, '{T}: Add {C}.\n{T}: Add {W} or {B}. Caves of Koilos deals 1 damage to you.', '', 'The damage dealt to you is part of the second mana ability. It doesnâ€™t use the stack and canâ€™t be responded to.', 129497, 4018, 1, 3, 7, 1),
(816, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135261&type=card', 'Cephalid Constable', 1, 1, 'Whenever Cephalid Constable deals combat damage to a player, return up to that many target permanents that player controls to their owner\'s hand.', 'Cephalids don\'t police people. They police loyalties.', 'none', 135261, 4018, 1, 2, 67, 1),
(817, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135254&type=card', 'Chimeric Staff', 0, 0, '{X}: Chimeric Staff becomes an X/X Construct artifact creature until end of turn.', 'The staff unraveled in a chaotic chorus of clanging, becoming an improbable beast of hissing blades.', 'A noncreature permanent that turns into a creature can attack, and its {T} abilities can be activated, only if its controller has continuously controlled that permanent since the beginning of their most recent turn. It doesnâ€™t matter how long the permanent has been a creature.', 135254, 4018, 1, 47, 68, 1),
(818, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130554&type=card', 'Cho-Manno, Revolutionary', 2, 2, 'Prevent all damage that would be dealt to Cho-Manno, Revolutionary.', '\"Mercadia\'s masks can no longer hide the truth. Our day has come at last.\"', 'none', 130554, 4018, 1, 48, 69, 1),
(819, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135279&type=card', 'Chromatic Star', 0, 0, '{1}, {T}, Sacrifice Chromatic Star: Add one mana of any color.\nWhen Chromatic Star is put into a graveyard from the battlefield, draw a card.', '', 'none', 135279, 4018, 1, 49, 20, 4),
(820, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135244&type=card', 'Citanul Flute', 0, 0, '{X}, {T}: Search your library for a creature card with converted mana cost X or less, reveal it, and put it into your hand. Then shuffle your library.', 'Each note of the flute mimics the call of a different beast.', 'X can be zero if you want.', 135244, 4018, 1, 50, 68, 1),
(821, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130522&type=card', 'Civic Wayfinder', 2, 2, 'When Civic Wayfinder enters the battlefield, you may search your library for a basic land card, reveal it, and put it into your hand. If you do, shuffle your library.', '\"These alleys are not safe. Come, I can guide you back to the market square.\"', 'none', 130522, 4018, 1, 34, 72, 4),
(822, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129501&type=card', 'Clone', 0, 0, 'You may have Clone enter the battlefield as a copy of any creature on the battlefield.', '', 'If the chosen creature is copying something else (for example, if the chosen creature is another Clone), then your Clone enters the battlefield as whatever the chosen creature copied.', 129501, 4018, 1, 24, 73, 1),
(823, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129804&type=card', 'Cloud Elemental', 3, 2, 'Flying\nCloud Elemental can block only creatures with flying.', 'The soratami surround their sky-castles with living clouds that serve as both sword and shield.', 'none', 129804, 4018, 1, 53, 74, 4),
(824, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=132069&type=card', 'Cloud Sprite', 1, 1, 'Flying (This creature can\'t be blocked except by creatures with flying or reach.)\nCloud Sprite can block only creatures with flying.', 'The delicate sprites carry messages for Saprazzans, but they refuse to land in Mercadia City\'s filthy markets.', 'none', 132069, 4018, 1, 54, 76, 4),
(825, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129502&type=card', 'Coat of Arms', 0, 0, 'Each creature gets +1/+1 for each other creature on the battlefield that shares at least one creature type with it. (For example, if two Goblin Warriors and a Goblin Shaman are on the battlefield, each gets +2/+2.)', '\"Hup, two, three, four, Dunno how to count no more.\"', 'If a creature has more than one creature type, and one of those types matches the creature you are calculating for, then count that creature. Only one type needs to match in order to get counted.', 129502, 4018, 1, 50, 68, 1),
(826, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135268&type=card', 'Colossus of Sardia', 9, 9, 'Trample (This creature can deal excess combat damage to the player or planeswalker it\'s attacking.)\nColossus of Sardia doesn\'t untap during your untap step.\n{9}: Untap Colossus of Sardia. Activate this ability only during your upkeep.', '', 'The ability that untaps it during your upkeep has been returned to an activated ability. There is no restriction on how many times it can be untapped during your upkeep with this ability.', 135268, 4018, 1, 56, 80, 1),
(827, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130521&type=card', 'Commune with Nature', 0, 0, 'Look at the top five cards of your library. You may reveal a creature card from among them and put it into your hand. Put the rest on the bottom of your library in any order.', '', 'If you donâ€™t reveal a creature card, put all the revealed cards on the bottom of your library in any order.', 130521, 4018, 1, 33, 21, 4),
(828, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135275&type=card', 'Composite Golem', 4, 4, 'Sacrifice Composite Golem: Add {W}{U}{B}{R}{G}.', 'An artificer\'s experiment in cross-material engineering found its own purpose as an interpreter between cultures.', 'none', 135275, 4018, 1, 58, 83, 1),
(829, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130528&type=card', 'Condemn', 0, 0, 'Put target attacking creature on the bottom of its owner\'s library. Its controller gains life equal to its toughness.', '\"No doubt the arbiters would put you away, after all the documents are signed. But I will have justice now!\" â€”Alovnek, Boros guildmage', 'The affected creatureâ€™s last known existence on the battlefield is checked to determine its toughness.', 130528, 4018, 1, 27, 32, 1),
(830, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130535&type=card', 'Cone of Flame', 0, 0, 'Cone of Flame deals 1 damage to any target, 2 damage to another target, and 3 damage to a third target.', '', 'Each of the three targets must be different. If there arenâ€™t three different legal targets available, you canâ€™t cast the spell.', 130535, 4018, 1, 29, 10, 1),
(831, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129505&type=card', 'Consume Spirit', 0, 0, 'Spend only black mana on X.\nConsume Spirit deals X damage to any target and you gain X life.', '\"Your blood, your marrow, your spiritâ€”all are mine.\" â€”Mayvar, minion of Geth', 'The amount of life you gain is equal to the number chosen for X, not the amount of damage Consume Spirit deals (in case some of it is prevented).', 129505, 4018, 1, 61, 10, 4),
(832, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129590&type=card', 'Contaminated Bond', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nWhenever enchanted creature attacks or blocks, its controller loses 3 life.', '', 'none', 129590, 4018, 1, 62, 87, 4),
(833, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134757&type=card', 'Counsel of the Soratami', 0, 0, 'Draw two cards.', '\"Wisdom is not the counting of all the drops in a waterfall. Wisdom is learning why the water seeks the earth.\"', 'none', 134757, 4018, 1, 53, 21, 4),
(834, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=134758&type=card', 'Crafty Pathmage', 1, 1, '{T}: Target creature with power 2 or less can\'t be blocked this turn.', 'Follow the pathmage â€”Otarian expression meaning \"escape quickly\"', 'If you increase the power of the targeted creature after the ability resolves, it still canâ€™t be blocked that turn.', 134758, 4018, 1, 53, 90, 4),
(835, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130527&type=card', 'Craw Wurm', 4, 6, '', 'The most terrifying thing about the craw wurm is probably the horrible crashing sound it makes as it speeds through the forest. This noise is so loud it echoes through the trees and seems to come from all directions at once.', 'none', 130527, 4018, 1, 65, 91, 4),
(836, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129512&type=card', 'Creeping Mold', 0, 0, 'Destroy target artifact, enchantment, or land.', 'Mold crept over the walls and into every crevice until the gleaming white stone strained and burst.', 'none', 129512, 4018, 1, 1, 10, 1),
(837, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129480&type=card', 'Crucible of Worlds', 0, 0, 'You may play land cards from your graveyard.', 'Amidst the darkest ashes grow the strongest seeds.', 'Crucible of Worlds doesnâ€™t change the times when you can play those land cards. You can still play only one land per turn, and only during your main phase when you have priority and the stack is empty.', 129480, 4018, 1, 41, 68, 5),
(838, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129514&type=card', 'Cruel Edict', 0, 0, 'Target opponent sacrifices a creature.', '\"Choose your next words carefully. They will be your last.\" â€”Phage the Untouchable', 'none', 129514, 4018, 1, 62, 10, 1),
(839, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129909&type=card', 'Cryoclasm', 0, 0, 'Destroy target Plains or Island. Cryoclasm deals 3 damage to that land\'s controller.', 'The people of Terisiare had come to live on frozen fields as though on solid ground. Nothing reminded them of the difference more clearly than the rifts brought on by the Thaw.', 'none', 129909, 4018, 1, 16, 10, 1),
(840, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129910&type=card', 'Deathmark', 0, 0, 'Destroy target green or white creature.', '\"I hope it\'s true that every snowflake is unique, because I never want to see one like this again. Now clean up that body.\" â€”Thangbrand Gyrdsson, Kjeldoran patrol', 'none', 129910, 4018, 1, 70, 10, 1),
(841, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129521&type=card', 'Dehydration', 0, 0, 'Enchant creature (Target a creature as you cast this. This card enters the battlefield attached to that creature.)\nEnchanted creature doesn\'t untap during its controller\'s untap step.', '', 'none', 129521, 4018, 1, 24, 87, 4),
(842, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135223&type=card', 'Deluge', 0, 0, 'Tap all creatures without flying.', '\"From the sea came all life, and to the sea it will return. The sooner the better.\" â€”Emperor Aboshan', 'none', 135223, 4018, 1, 53, 32, 1),
(843, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129522&type=card', 'Demolish', 0, 0, 'Destroy target artifact or land.', '\"Pound the steel until it fits. Doesn\'t work? Bash to bits.\" â€”Dwarven forging song', 'none', 129522, 4018, 1, 9, 21, 5),
(844, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129523&type=card', 'Demon\'s Horn', 0, 0, 'Whenever a player casts a black spell, you may gain 1 life.', 'Its curve mimics the twists of life and death.', 'The ability triggers whenever any player, not just you, casts a black spell.', 129523, 4018, 1, 12, 20, 1),
(845, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129524&type=card', 'Demystify', 0, 0, 'Destroy target enchantment.', '\"Illusion is a crutch for those with no grounding in reality.\" â€”Cho-Manno', 'none', 129524, 4018, 1, 27, 8, 5),
(846, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=135250&type=card', 'Denizen of the Deep', 11, 11, 'When Denizen of the Deep enters the battlefield, return each other creature you control to its owner\'s hand.', 'According to merfolk legend, a denizen of the deep swallows the horizon at the end of each day, bringing on the cold blanket of night.', 'none', 135250, 4018, 1, 76, 103, 1),
(847, 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129525&type=card', 'Diabolic Tutor', 0, 0, 'Search your library for a card and put that card into your hand. Then shuffle your library.', 'The best ideas often come from the worst minds.', 'none', 129525, 4018, 1, 6, 10, 1);

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

--
-- Dumping data for table `Legalities`
--

INSERT INTO `Legalities` (`standard`, `modern`, `legacy`, `vintage`, `pauper`, `id`) VALUES
(0, 1, 1, 1, 0, 1),
(0, 1, 1, 1, 0, 2),
(0, 1, 1, 1, 0, 3),
(0, 1, 1, 1, 1, 4),
(1, 1, 1, 1, 1, 5),
(0, 1, 1, 1, 0, 6),
(1, 1, 1, 1, 0, 7),
(0, 1, 1, 1, 0, 8),
(0, 1, 1, 1, 1, 9),
(0, 1, 1, 1, 0, 10),
(0, 1, 1, 1, 1, 11),
(0, 1, 1, 1, 0, 12),
(0, 1, 1, 1, 1, 13),
(0, 1, 1, 1, 0, 14),
(0, 1, 1, 1, 1, 15),
(0, 1, 1, 1, 1, 16),
(0, 1, 1, 1, 0, 17),
(0, 1, 1, 1, 0, 18),
(0, 1, 1, 1, 1, 19),
(0, 1, 1, 1, 0, 20),
(0, 1, 1, 1, 0, 21),
(0, 1, 1, 1, 0, 22),
(0, 1, 1, 1, 1, 23),
(0, 1, 1, 1, 1, 24),
(0, 1, 1, 1, 1, 25),
(0, 1, 1, 1, 0, 26),
(0, 1, 1, 1, 1, 27),
(0, 1, 1, 1, 0, 28),
(0, 1, 1, 1, 0, 29),
(0, 1, 1, 1, 0, 30),
(0, 1, 1, 1, 0, 31),
(0, 1, 1, 1, 1, 32),
(0, 1, 1, 1, 0, 33),
(1, 1, 1, 1, 0, 34),
(0, 1, 1, 1, 0, 35),
(0, 1, 1, 1, 0, 36),
(0, 1, 1, 1, 1, 37),
(0, 1, 1, 1, 0, 38),
(0, 1, 1, 1, 1, 39),
(0, 1, 1, 1, 1, 40),
(0, 1, 1, 1, 1, 41),
(0, 1, 1, 1, 0, 42),
(1, 1, 1, 1, 1, 43),
(0, 1, 1, 1, 1, 44),
(0, 1, 1, 1, 0, 45),
(0, 1, 1, 1, 0, 46),
(0, 1, 1, 1, 0, 47),
(0, 1, 1, 1, 0, 48),
(0, 1, 1, 1, 1, 49),
(0, 1, 1, 1, 0, 50),
(0, 1, 1, 1, 1, 51),
(0, 1, 1, 1, 0, 52),
(0, 1, 1, 1, 1, 53),
(0, 1, 1, 1, 1, 54),
(0, 1, 1, 1, 0, 55),
(0, 1, 1, 1, 0, 56),
(0, 1, 1, 1, 1, 57),
(0, 1, 1, 1, 0, 58),
(0, 1, 1, 1, 0, 59),
(0, 1, 1, 1, 0, 60),
(0, 1, 1, 1, 1, 61),
(0, 1, 1, 1, 1, 62),
(0, 1, 1, 1, 1, 63),
(0, 1, 1, 1, 1, 64),
(0, 1, 1, 1, 1, 65),
(0, 1, 1, 1, 0, 66),
(1, 1, 1, 1, 0, 67),
(0, 1, 1, 1, 0, 68),
(0, 1, 1, 1, 0, 69),
(0, 1, 1, 1, 0, 70),
(0, 1, 1, 1, 1, 71),
(0, 1, 1, 1, 0, 72),
(1, 1, 1, 1, 1, 73),
(0, 1, 1, 1, 0, 74),
(1, 1, 1, 1, 1, 75),
(0, 1, 1, 1, 0, 76),
(0, 1, 1, 1, 0, 77);

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

--
-- Dumping data for table `Mana`
--

INSERT INTO `Mana` (`id`, `white`, `black`, `blue`, `green`, `red`, `colorless`, `x`, `void`, `cmc`, `mana_cost`) VALUES
(1, 0, 0, 0, 2, 0, 2, 0, 0, 4, '{2}{G}{G}'),
(2, 0, 0, 2, 0, 0, 1, 0, 0, 3, '{1}{U}{U}'),
(3, 0, 0, 0, 0, 0, 0, 0, 1, 0, ''),
(4, 0, 1, 0, 0, 0, 2, 0, 0, 3, '{2}{B}'),
(5, 0, 0, 0, 1, 0, 1, 0, 0, 2, '{1}{G}'),
(6, 0, 2, 0, 0, 0, 2, 0, 0, 4, '{2}{B}{B}'),
(7, 0, 0, 2, 0, 0, 3, 0, 0, 5, '{3}{U}{U}'),
(8, 0, 0, 2, 0, 0, 1, 0, 0, 3, '{1}{U}{U}'),
(9, 0, 0, 0, 0, 1, 3, 0, 0, 4, '{3}{R}'),
(10, 2, 0, 0, 0, 0, 5, 0, 0, 7, '{5}{W}{W}'),
(11, 1, 0, 0, 0, 0, 4, 0, 0, 5, '{4}{W}'),
(12, 0, 0, 0, 0, 0, 2, 0, 0, 2, '{2}'),
(13, 1, 0, 0, 0, 0, 2, 0, 0, 3, '{2}{W}'),
(14, 2, 0, 0, 0, 0, 3, 0, 0, 5, '{3}{W}{W}'),
(15, 1, 0, 0, 0, 0, 1, 0, 0, 2, '{1}{W}'),
(16, 0, 0, 0, 0, 1, 2, 0, 0, 3, '{2}{R}'),
(17, 0, 0, 3, 0, 0, 3, 0, 0, 6, '{3}{U}{U}{U}'),
(18, 0, 2, 0, 0, 0, 4, 0, 0, 6, '{4}{B}{B}'),
(19, 0, 1, 0, 0, 0, 2, 0, 0, 3, '{2}{B}'),
(20, 0, 0, 1, 0, 0, 1, 0, 0, 2, '{1}{U}'),
(21, 2, 0, 0, 0, 0, 1, 0, 0, 3, '{1}{W}{W}'),
(22, 0, 0, 0, 2, 0, 6, 0, 0, 8, '{6}{G}{G}'),
(23, 1, 0, 0, 0, 0, 3, 0, 0, 4, '{3}{W}'),
(24, 0, 0, 1, 0, 0, 3, 0, 0, 4, '{3}{U}'),
(25, 0, 0, 2, 0, 0, 3, 0, 0, 5, '{3}{U}{U}'),
(26, 1, 0, 0, 0, 0, 3, 0, 0, 4, '{3}{W}'),
(27, 1, 0, 0, 0, 0, 0, 0, 0, 1, '{W}'),
(28, 0, 0, 0, 0, 0, 0, 0, 1, 0, ''),
(29, 0, 0, 0, 0, 2, 3, 0, 0, 5, '{3}{R}{R}'),
(30, 1, 0, 0, 0, 0, 5, 0, 0, 6, '{5}{W}'),
(31, 0, 2, 0, 0, 0, 3, 0, 0, 5, '{3}{B}{B}'),
(32, 1, 0, 0, 0, 0, 2, 0, 0, 3, '{2}{W}'),
(33, 0, 0, 0, 1, 0, 0, 0, 0, 1, '{G}'),
(34, 0, 0, 0, 1, 0, 2, 0, 0, 3, '{2}{G}'),
(35, 0, 0, 0, 0, 1, 0, 1, 0, 1, '{X}{R}'),
(36, 0, 0, 0, 0, 2, 6, 0, 0, 8, '{6}{R}{R}'),
(37, 0, 0, 0, 0, 1, 2, 0, 0, 3, '{2}{R}'),
(38, 0, 1, 0, 0, 0, 3, 0, 0, 4, '{3}{B}'),
(39, 0, 0, 0, 0, 1, 2, 0, 0, 3, '{2}{R}'),
(40, 0, 0, 2, 0, 0, 0, 0, 0, 2, '{U}{U}'),
(41, 0, 0, 0, 0, 0, 3, 0, 0, 3, '{3}'),
(42, 0, 0, 0, 0, 0, 0, 0, 1, 0, ''),
(43, 0, 0, 2, 0, 0, 1, 0, 0, 3, '{1}{U}{U}'),
(44, 0, 0, 0, 1, 0, 1, 0, 0, 2, '{1}{G}'),
(45, 0, 0, 0, 0, 0, 0, 0, 1, 0, ''),
(46, 0, 0, 2, 0, 0, 1, 0, 0, 3, '{1}{U}{U}'),
(47, 0, 0, 0, 0, 0, 4, 0, 0, 4, '{4}'),
(48, 2, 0, 0, 0, 0, 2, 0, 0, 4, '{2}{W}{W}'),
(49, 0, 0, 0, 0, 0, 1, 0, 0, 1, '{1}'),
(50, 0, 0, 0, 0, 0, 5, 0, 0, 5, '{5}'),
(51, 0, 0, 0, 1, 0, 2, 0, 0, 3, '{2}{G}'),
(52, 0, 0, 1, 0, 0, 3, 0, 0, 4, '{3}{U}'),
(53, 0, 0, 1, 0, 0, 2, 0, 0, 3, '{2}{U}'),
(54, 0, 0, 1, 0, 0, 0, 0, 0, 1, '{U}'),
(55, 0, 0, 0, 0, 0, 5, 0, 0, 5, '{5}'),
(56, 0, 0, 0, 0, 0, 9, 0, 0, 9, '{9}'),
(57, 0, 0, 0, 1, 0, 0, 0, 0, 1, '{G}'),
(58, 0, 0, 0, 0, 0, 6, 0, 0, 6, '{6}'),
(59, 1, 0, 0, 0, 0, 0, 0, 0, 1, '{W}'),
(60, 0, 0, 0, 0, 2, 3, 0, 0, 5, '{3}{R}{R}'),
(61, 0, 1, 0, 0, 0, 1, 1, 0, 2, '{X}{1}{B}'),
(62, 0, 1, 0, 0, 0, 1, 0, 0, 2, '{1}{B}'),
(63, 0, 0, 1, 0, 0, 2, 0, 0, 3, '{2}{U}'),
(64, 0, 0, 1, 0, 0, 2, 0, 0, 3, '{2}{U}'),
(65, 0, 0, 0, 2, 0, 4, 0, 0, 6, '{4}{G}{G}'),
(66, 0, 0, 0, 2, 0, 2, 0, 0, 4, '{2}{G}{G}'),
(67, 0, 0, 0, 0, 0, 3, 0, 0, 3, '{3}'),
(68, 0, 1, 0, 0, 0, 1, 0, 0, 2, '{1}{B}'),
(69, 0, 0, 0, 0, 1, 2, 0, 0, 3, '{2}{R}'),
(70, 0, 1, 0, 0, 0, 0, 0, 0, 1, '{B}'),
(71, 0, 0, 1, 0, 0, 3, 0, 0, 4, '{3}{U}'),
(72, 0, 0, 1, 0, 0, 2, 0, 0, 3, '{2}{U}'),
(73, 0, 0, 0, 0, 1, 3, 0, 0, 4, '{3}{R}'),
(74, 0, 0, 0, 0, 0, 2, 0, 0, 2, '{2}'),
(75, 1, 0, 0, 0, 0, 0, 0, 0, 1, '{W}'),
(76, 0, 0, 2, 0, 0, 6, 0, 0, 8, '{6}{U}{U}'),
(77, 0, 2, 0, 0, 0, 2, 0, 0, 4, '{2}{B}{B}');

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

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`id`, `supertype`, `type`, `subtype`, `layout`, `rarity`) VALUES
(1, '', 'Enchantment', '', 'normal', 'Rare'),
(2, '', 'Enchantment', '', 'normal', 'Rare'),
(3, '', 'Enchantment', '', 'normal', 'Rare'),
(4, '', 'Creature', 'Human Wizard', 'normal', 'Uncommon'),
(5, '', 'Enchantment', '', 'normal', 'Rare'),
(6, '', 'Creature', 'Human Wizard', 'normal', 'Uncommon'),
(7, '', 'Land', '', 'normal', 'Rare'),
(8, '', 'Instant', '', 'normal', 'Common'),
(9, '', 'Instant', '', 'normal', 'Common'),
(10, '', 'Sorcery', '', 'normal', 'Uncommon'),
(11, '', 'Creature', 'Elemental', 'normal', 'Uncommon'),
(12, '', 'Creature', 'Elemental', 'normal', 'Uncommon'),
(13, 'Legendary', 'Creature', 'Merfolk Wizard', 'normal', 'Rare'),
(14, '', 'Creature', 'Minotaur', 'normal', 'Common'),
(15, '', 'Creature', 'Minotaur', 'normal', 'Common'),
(16, '', 'Creature', 'Human Cleric', 'normal', 'Uncommon'),
(17, '', 'Creature', 'Human Cleric', 'normal', 'Uncommon'),
(18, '', 'Creature', 'Angel', 'normal', 'Uncommon'),
(19, '', 'Creature', 'Angel', 'normal', 'Uncommon'),
(20, '', 'Artifact', '', 'normal', 'Uncommon'),
(21, '', 'Sorcery', '', 'normal', 'Common'),
(22, '', 'Sorcery', '', 'normal', 'Common'),
(23, '', 'Enchantment', '', 'normal', 'Rare'),
(24, '', 'Creature', 'Wall', 'normal', 'Common'),
(25, '', 'Creature', 'Wall', 'normal', 'Common'),
(26, '', 'Enchantment', 'Aura', 'normal', 'Uncommon'),
(27, '', 'Enchantment', 'Aura', 'normal', 'Uncommon'),
(28, 'Legendary', 'Creature', 'Wizard', 'normal', 'Rare'),
(29, 'Legendary', 'Creature', 'Vampire', 'normal', 'Rare'),
(30, 'Legendary', 'Creature', 'Vampire', 'normal', 'Rare'),
(31, '', 'Sorcery', '', 'normal', 'Common'),
(32, '', 'Instant', '', 'normal', 'Uncommon'),
(33, '', 'Enchantment', '', 'normal', 'Uncommon'),
(34, '', 'Creature', 'Avatar', 'normal', 'Rare'),
(35, '', 'Creature', 'Avatar', 'normal', 'Rare'),
(36, '', 'Creature', 'Bird Soldier', 'normal', 'Common'),
(37, '', 'Creature', 'Bird Soldier', 'normal', 'Common'),
(38, '', 'Creature', 'Bird Soldier', 'normal', 'Common'),
(39, '', 'Creature', 'Bird Soldier', 'normal', 'Common'),
(40, '', 'Creature', 'Bird Soldier Wizard', 'normal', 'Common'),
(41, '', 'Creature', 'Bird Soldier Wizard', 'normal', 'Common'),
(42, '', 'Creature', 'Human Rebel', 'normal', 'Uncommon'),
(43, '', 'Instant', '', 'normal', 'Common'),
(44, '', 'Land', '', 'normal', 'Rare'),
(45, '', 'Instant', '', 'normal', 'Rare'),
(46, '', 'Instant', '', 'normal', 'Rare'),
(47, '', 'Sorcery', '', 'normal', 'Rare'),
(48, '', 'Creature', 'Human Knight', 'normal', 'Common'),
(49, '', 'Creature', 'Human Knight', 'normal', 'Common'),
(50, '', 'Creature', 'Bird', 'normal', 'Rare'),
(51, '', 'Creature', 'Bird', 'normal', 'Rare'),
(52, '', 'Enchantment', 'Aura', 'normal', 'Uncommon'),
(53, '', 'Enchantment', 'Aura', 'normal', 'Uncommon'),
(54, '', 'Sorcery', '', 'normal', 'Uncommon'),
(55, '', 'Creature', 'Giant', 'normal', 'Rare'),
(56, '', 'Creature', 'Cyclops', 'normal', 'Common'),
(57, '', 'Creature', 'Wraith', 'normal', 'Uncommon'),
(58, '', 'Creature', 'Wraith', 'normal', 'Uncommon'),
(59, '', 'Creature', 'Elemental Spirit', 'normal', 'Common'),
(60, '', 'Instant', '', 'normal', 'Common'),
(61, '', 'Artifact Creature', 'Gnome', 'normal', 'Uncommon'),
(62, '', 'Land', '', 'normal', 'Rare'),
(63, '', 'Instant', '', 'normal', 'Common'),
(64, '', 'Creature', 'Spider', 'normal', 'Common'),
(65, '', 'Creature', 'Spider', 'normal', 'Common'),
(66, '', 'Land', '', 'normal', 'Rare'),
(67, '', 'Creature', 'Cephalid Wizard', 'normal', 'Rare'),
(68, '', 'Artifact', '', 'normal', 'Rare'),
(69, 'Legendary', 'Creature', 'Human Rebel', 'normal', 'Rare'),
(70, '', 'Artifact', '', 'normal', 'Uncommon'),
(71, '', 'Artifact', '', 'normal', 'Rare'),
(72, '', 'Creature', 'Elf Warrior Druid', 'normal', 'Common'),
(73, '', 'Creature', 'Shapeshifter', 'normal', 'Rare'),
(74, '', 'Creature', 'Elemental', 'normal', 'Common'),
(75, '', 'Creature', 'Elemental', 'normal', 'Common'),
(76, '', 'Creature', 'Faerie', 'normal', 'Common'),
(77, '', 'Creature', 'Faerie', 'normal', 'Common'),
(78, '', 'Artifact', '', 'normal', 'Rare'),
(79, '', 'Artifact', '', 'normal', 'Rare'),
(80, '', 'Artifact Creature', 'Golem', 'normal', 'Rare'),
(81, '', 'Artifact Creature', 'Golem', 'normal', 'Rare'),
(82, '', 'Sorcery', '', 'normal', 'Common'),
(83, '', 'Artifact Creature', 'Golem', 'normal', 'Uncommon'),
(84, '', 'Instant', '', 'normal', 'Uncommon'),
(85, '', 'Sorcery', '', 'normal', 'Uncommon'),
(86, '', 'Sorcery', '', 'normal', 'Uncommon'),
(87, '', 'Enchantment', 'Aura', 'normal', 'Common'),
(88, '', 'Enchantment', 'Aura', 'normal', 'Common'),
(89, '', 'Sorcery', '', 'normal', 'Common'),
(90, '', 'Creature', 'Human Wizard', 'normal', 'Common'),
(91, '', 'Creature', 'Wurm', 'normal', 'Common'),
(92, '', 'Sorcery', '', 'normal', 'Uncommon'),
(93, '', 'Artifact', '', 'normal', 'Rare'),
(94, '', 'Sorcery', '', 'normal', 'Uncommon'),
(95, '', 'Sorcery', '', 'normal', 'Uncommon'),
(96, '', 'Sorcery', '', 'normal', 'Uncommon'),
(97, '', 'Enchantment', 'Aura', 'normal', 'Common'),
(98, '', 'Enchantment', 'Aura', 'normal', 'Common'),
(99, '', 'Instant', '', 'normal', 'Uncommon'),
(100, '', 'Sorcery', '', 'normal', 'Common'),
(101, '', 'Artifact', '', 'normal', 'Uncommon'),
(102, '', 'Instant', '', 'normal', 'Common'),
(103, '', 'Creature', 'Serpent', 'normal', 'Rare'),
(104, '', 'Sorcery', '', 'normal', 'Uncommon');

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
-- Indexes for table `Tournements`
--
ALTER TABLE `Tournements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tournaments_games1_idx` (`games_id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cards`
--
ALTER TABLE `Cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=848;

--
-- AUTO_INCREMENT for table `Commentaires`
--
ALTER TABLE `Commentaires`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `Mana`
--
ALTER TABLE `Mana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `Releases`
--
ALTER TABLE `Releases`
  ADD CONSTRAINT `fk_release_games1` FOREIGN KEY (`game_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Tournements`
--
ALTER TABLE `Tournements`
  ADD CONSTRAINT `fk_tournaments_games1` FOREIGN KEY (`games_id`) REFERENCES `Games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

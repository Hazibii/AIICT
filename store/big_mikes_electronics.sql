-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2014 at 05:53 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `big_mikes_electronics`
--
CREATE DATABASE IF NOT EXISTS `big_mikes_electronics` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `big_mikes_electronics`;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menulabel` varchar(50) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(50) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `image`, `price`, `category`, `description`) VALUES
(8, 'TOSHIBA SATELLITE L50-B010 15" NOTEBOOK', 'toshiba-satellite-l50-b010-15-inch-notebook-sku-546906-large.gif', 598, 'computers', 'Windows 8.1\r\nDVD +/- & CD Recorder\r\n3 USB Ports\r\nUSB Version 3.0\r\nMedia Card Reader\r\nWebcam\r\nBluetooth\r\nWIFI\r\nIntel HD Graphics 4000\r\n500 GB HDD\r\n4 GB RAM\r\n15.6 Inch Screen\r\n1 HDMI Ports\r\n1366 x 768 Screen Resolution\r\n4 Cell Battery\r\n2 USB 2.0 Ports\r\n1 US'),
(9, 'ASUS F451 14" NOTEBOOK', 'asus-f451-14-inch-notebook-sku-491792-large.gif', 398, 'computers', 'Windows 8\r\n2 USB Ports\r\nUSB Version 2.0\r\nSD Card Reader\r\nWebcam\r\nWIFI\r\nShared\r\n500 GB HDD\r\n2 GB RAM\r\n14 Inch Screen\r\n1 HDMI Ports\r\n1366 x 768 Screen Resolution\r\n2 Cell Battery\r\n1 USB 2.0 Ports\r\n1 USB 3.0 Ports'),
(10, 'SAMSUNG 60" FULL HD QUAD CORE 3D SMART LCD LED TV', 'samsung-60-full-hd-quad-core-3d-smart-lcd-led-tv-sku-552563-large.gif', 2196, 'tvs', '152cm / 60 Inch LED LCD Screen\r\n1920 x 1080 Resolution\r\n3D Built-In\r\nUSB Recording\r\nUSB Movie Playback\r\nUSB Picture View\r\nUSB Music Playback\r\nBuilt in HD Tuner\r\n100Hz Screen Refresh Rate\r\n7 Day EPG (Electronic Program guide)\r\nPicture in Picture\r\n400:1 Dyn'),
(11, 'LG 32" HD LED LCD 50HZ TV', 'lg-32-hd-led-lcd-50hz-tv-sku-541856-large.gif', 398, 'tvs', '81cm / 32 Inch LED LCD Screen\r\n1366 x 768 Resolution\r\nUSB Recording\r\nUSB Movie Playback\r\nUSB Picture View\r\nUSB Music Playback\r\nBuilt in HD Tuner\r\n50Hz Screen Refresh Rate\r\n7 Day EPG (Electronic Program guide)\r\n2 HDMI Inputs'),
(12, 'APPLE IPHONE 5S 32GB SPACE GREY', '456469_learnmore.gif', 940, 'phones', 'A7 Chip 64-bit Processor\r\nTouch Id Securely Unlock iPhone With The Touch Of A Finger\r\n8-megapixel iSight Camera With True Tone Flash\r\n4G Lte\r\n\r\nBluetooth Connectivity\r\nWifi Connectivity\r\nGPS\r\nMP3 Player Built-In\r\nVideo Calls\r\n32 GB Internal Memory\r\n8 Mega'),
(13, 'SAMSUNG SAMSUNG GALAXY Y DUOS BLACK', '85333_learnmore.gif', 147, 'phones', 'Dual Sim Support - Use 2 Simcards At Once\r\nPowered By Android 2.3\r\n3G Enabled Handset\r\n\r\nBluetooth Connectivity\r\nWifi Connectivity\r\nGPS\r\nMP3 Player Built-In\r\n3.14 Inch Screen\r\n109 Grams'),
(14, 'Game Of Thrones - Season 3 (Limited Edition) ', '4478394.jpg', 57, 'dvds', 'The epic drama continues in the continent of Westeros, where ambitious men and women of both honor and ill-repute live in a land where summers and winters can last years.\n\nWhile the Houses of Lannister, Baratheon and Stark continue to fight for the control of Kings Landing, in the far north, the enigmatic Mance Rayder has united the Wildlings into the largest army that Westeros has ever seen. The only thing that stands between him and the seven kingdoms is the Nights Watch but nobody has heard from their Lord Commander or the force that he led north of the wall. And across the narrow sea, another army and another claimant to the Iron Throne, Daenerys Targaryen, is making preparations to return and with her come dragons. In the words of Ramsey Snow: “If you think this has a happy ending, you haven’t been paying attention”.\n\nSpecial Features\nAudio Commentaries - 12 commentaries with cast and crew including David Benioff, D.B. Weiss, George R.R. Martin, Lena Headey, Emilia Clarke, Michelle Fairley, Kit Harington, Richard Madden and more.\nDeleted/Extended Scenes\n''A Gathering Storm'' Featurette - Look back at the stormy events of Season 2 in this 14-minute recap with cast and crew.\n''The Politics of Marriage'' Featurette - The concept of matrimony in Westeros is all about making power plays and political alliances. Cast and crew examine this ancient institution and its place in Game of Thrones.\n''Inside the Wildlings'' Featurette - Go beyond the Wall with this introduction to the wildlings to gain a better understanding of their back story.\nNew Characters of Season 3 - Meet the new faces in Season 3: Olenna Tyrell, Missandei, Mance Rayder, Tormund Giantsbane, Orell, Jojen & Meera Reed, Blackfish & Edmure Tully, Thoros of Myr and Beric Dondarrion.'),
(15, 'Game Of Thrones - Season 1 ', '4433081.jpg', 57, 'dvds', 'In a land where summers span decades and winters can last a lifetime, trouble is brewing. From the scheming south and the savage eastern lands, to the frozen north and the ancient Wall that protects the realm from the darkness beyond, powerful families are engaged in a deadly cat-and-mouse game for control of the Seven Kingdoms of Westeros. As betrayal, lust, intrigue and supernatural forces shake the four corners of the Kingdoms, their bloody struggle for the Iron Throne will have unforeseen and far-reaching consequences. Winter is coming. Let the Game of Thrones begin.\n\nSpecial Features\nSeven audio commentaries with cast and crew including David Benioff, D.B. Weiss, George R.R. Martin, Emilia Clarke and more \nCharacter profiles of 15 major characters as described by the actors portraying them \nFive behind-the-scenes featurettes: \n-Making Game of Thrones\n-Creating the Dothraki Language\n-The Night''s Watch\n-From the Book to the Screen\n-Creating the Show Open'),
(16, 'Wildstar', '4485226.jpg', 60, 'games', 'Ongoing subscription (sold separately) and persistent internet connection required. See your internet provider terms & conditions for all applicable fees and download restrictions.\r\n\r\n\r\nOverview\r\n\r\nWildStar infuses amazing stylized art with the latest technology to create a stunning visual experience. Set on a wondrous alien world, WildStar delivers a wild and mysterious adventure among the ruins of an advanced civilization â€” allowing you to play the way you want to play while experiencing an unprecedented level of exploration and discovery!\r\n\r\nKey Features\r\n\r\nâ€¢ Prepare to enter the world of Nexus, a wild and mysterious land full of adventure, as your explore the ruins of an advanced civilization.\r\n\r\nâ€¢ Create your own personal character and choose the path, class and alliance that best suits your playing style.\r\n\r\nâ€¢ Hunt down and fight all manner of enemies, including cybernetically-enhanced monstrosities, frightening beasts and hostile alien races!\r\n\r\nâ€¢ Take on deep, multi-layered quests full of fun and excitement, all in the hunt for a good haul of loot!\r\n\r\nâ€¢ Claim part of Nexus for yourself and build your own home as a stronghold to fend off your opponents.'),
(17, 'Diablo 3: Reaper of Souls', '4473080.jpg', 47, 'games', 'Overview\r\n\r\nMalthael, the fallen Archangel of Wisdom, vanished after the events depicted at the end of Diablo II: Lord of DestructionÂ®. In Reaper of Souls, he returns as the Angel of Death and seizes the Black Soulstone, which contains the essence of the Prime Evil. It now falls to the players to track down Malthael and stop him before he unleashes irreversible havoc on the world.\r\n\r\nFortunately, a new hero is ready to join the cause and bring Malthael to justiceâ€”the Crusader. Driven by a centuries-long quest to cleanse the corruption blighting their beloved Zakarum faith, Crusaders are warriors of righteousness who have been hardened through relentless, brutal combat with the foul evils plaguing eastern Sanctuary. In addition to wearing immensely heavy armor and wielding a wide range of cruel and punishing weapons, this new playable class in Reaper of Souls uses battle magic to strengthen allies and weaken foes. A natural walking tank, the Crusader adds power and versatility to any party of adventurers.\r\n\r\nKey Features\r\n\r\nâ€¢ In addition to taking the story of Diablo III from the legendary city of Westmarch to the unhallowed halls of the Pandemonium Fortress in Act V and introducing the incorruptible Crusader class, Diablo III: Reaper of Souls increases the gameâ€™s level cap to 70. Players continuing on with their existing Barbarian, Witch Doctor, Demon Hunter, Wizard, and Monk characters will benefit from an array of fearsome new spells and abilities as they advance in level.\r\n\r\nâ€¢ The expansion also accentuates the key features of the Diablo franchise, with a greater emphasis on randomized environments to explore; epic new quests; horrific new monsters to defeat; and substantial updates to the loot experience, enabling players to further customize their characters with new and improved multilevel Legendary items, new Blacksmith and Jeweler item-crafting options, and more.\r\n\r\nâ€¢ Diablo IIIâ€™s Paragon progression system is also being majorly upgraded for the expansion, adding even more end-game character advancement and replayability. Two new game modesâ€”Loot Runs and Nephalem Trialsâ€”are being added as well, providing fun and rewarding challenges for players to tackle when theyâ€™re not busy saving the world.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
(2, 'user', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Table structure for table `users_in_roles`
--

CREATE TABLE IF NOT EXISTS `users_in_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_in_roles`
--

INSERT INTO `users_in_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
  ADD CONSTRAINT `users_in_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_in_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

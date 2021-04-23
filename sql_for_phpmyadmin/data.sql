-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 03:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--
CREATE DATABASE IF NOT EXISTS `data` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `data`;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`email`, `password`, `name`, `gender`, `type`) VALUES
('charlton@gmail.com', 'admin123', 'Mackenzie Charlton', 'M', 'Admin'),
('eldon@gmail.com', 'eldon333', 'Rocky Eldon', 'M', 'Member'),
('james@gmail.com', 'riley444', 'James Riley', 'M', 'Member'),
('kaylee@gmail.com', 'kaylee111', 'Jenna Kaylee', 'F', 'Member'),
('lesia@gmail.com', 'lesia222', 'Natalie Lesia', 'F', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_data`
--

CREATE TABLE `shoes_data` (
  `id` varchar(4) NOT NULL,
  `category` varchar(10) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` int(4) NOT NULL,
  `promotion_rate` float(5,5) NOT NULL,
  `color_description` varchar(500) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `imgid` varchar(15) NOT NULL,
  `year` year(4) NOT NULL,
  `shown` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoes_data`
--

INSERT INTO `shoes_data` (`id`, `category`, `sub_category`, `name`, `price`, `promotion_rate`, `color_description`, `product_description`, `imgid`, `year`, `shown`) VALUES
('S001', 'Men', 'Lifestyle', 'Nike Air VaporMax Evo', 200, 0.99999, 'Colour Shown: Wolf Grey/Anthracite/Dark Grey/White', 'The Nike Air VaporMax Evo puts Air Max DNA under the microscope, showcasing the distinguishing features of 7 Nike icons. It puts the must-haves from the pantheon of Air into one shoe, letting you step into a new world rooted in history, innovation and everything Max.', 'men_1', 2020, 0x31),
('S002', 'Men', 'Lifestyle', 'Nike Air Max 97 EOI', 180, 0.99999, 'Color Shown: Light Graphite/Black/Persian Violet/Obsidian', 'Featuring the original ripple design inspired by Japanese bullet trains, the Nike Air Max 97 EOI lets you push your style full speed ahead. Blending design cues, materials and colors from other \'90s classics with its revolutionary full-length Nike Air unit, it lets you ride in first-class comfort while celebrating the Air Max journey.', 'men_2', 2019, 0x31),
('S003', 'Men', 'Jordan', 'Air Jordan XXXV', 180, 0.80000, ' Color Shown: Black/Reflect Silver/Fire Red', 'The lighter the shoe, the less weight to carry. Evolving last year\'s release, the Air Jordan XXXV features a stabilizing Eclipse plate 2.0, visible cushioning and new Flightwire cables. Lightweight and responsive, it\'s designed to help players get the most from their power and athleticism.', 'men_3', 2020, 0x31),
('S004', 'Men', 'Jordan', 'Jordan One Take II', 100, 0.99999, 'Color Shown: White/Black/Wolf Grey/Black', 'Russell Westbrook backs up his brashness with a fast, aggressive playing style and numbers that place him among the league\'s best. His all-new Jordan One Take II embodies his edginess and speed. Colors, textures and design lines speak to Russ\' persona both on and off the court.', 'men_4', 2019, 0x31),
('S005', 'Men', 'Running', 'Nike React Infinity Run Flyknit 2', 160, 0.99999, 'Color Shown: White/Black/Racer Blue/Cyber', 'The Nike React Infinity Run Flyknit 2 continues to help keep you running. A refreshed upper uses Flywire technology that combines with Flyknit for support and breathability where you need it. The high foam heights provide soft responsiveness and long-lasting comfort. It\'s still one of our most tested shoes, designed to help you feel the potential when your foot hits the pavement.', 'men_5', 2020, 0x31),
('S006', 'Men', 'Running', 'Nike Air Zoom Pegasus 37 Eliud Kipchoge', 130, 0.85000, 'Color Shown: White/Chile Red/Lucky Green/Black', 'Reinvigorate your stride and find your wings with the Nike Air Zoom Pegasus 37. Delivering the secure fit and feel that runners love, the shoe has forefoot cushioning and foam for responsiveness. The result is a durable, lightweight trainer designed for everyday running. Graphics and colors nod to world-record holder Eliud Kipchoge\'s unprecedented run to 1:59.', 'men_6', 2019, 0x31),
('S007', 'Men', 'Basketball ', 'Zoom Freak 2 \'Letter Bro\'', 120, 0.99999, 'Color Shown: Desert Sand/Sail/Camellia/Gym Red', 'The Greek Freak\' is Giannis\' best-known nickname—but it\'s not his only moniker. In China, he\'s called \'Letter Bro\' because there are so many letters in his last name. The Zoom Freak 2 \'Letter Bro\' riffs on his hard-to-spell last name with an alphabetic jumble printed along the heel, collar and tongue. The style\'s wide range of colors include neutral sail and warm desert sand, with hits of camellia blue, dark sulfur yellow and dark red.', 'men_7', 2020, 0x31),
('S008', 'Men', 'Basketball ', 'Kyrie 7 \"Samurai Ky\"', 130, 0.99999, 'Color Shown: Midnight Navy/Lagoon Pulse/Bright Mango/Midnight Navy', 'Kyrie Irving is a creative force on and off the court. He needs his shoes to keep up with his playmaking, but also sync with his boundary-pushing style and ethos. Tuned for the next generation of energy return, control and speed, the Kyrie 7 \"Samurai Ky\" helps players at all levels take advantage of their quick first step by optimizing the shoe\'s fit, court feel and banking ability.', 'men_8', 2019, 0x31),
('S009', 'Men', 'Football', 'Nike Vapor Edge Speed 360', 85, 0.90000, 'Color Shown: White/Flash Crimson/Bright Mango/Black', 'Engineered for speed, the Nike Vapor Edge Speed 360 offers a new degree of agility. Its internal full-foot plate offers flexible support, while wide stud placements let you cut like never before. Fabric on the upper covered with a NikeSkin overlay for durable comfort.', 'men_9', 2019, 0x31),
('S010', 'Men', 'Football', 'Nike Vapor Edge Elite 360 Flyknit', 200, 0.99999, 'Color Shown: White', 'Engineered for speed, the Nike Vapor Edge Elite 360 Flyknit offers a new degree of agility. Its internal full-foot plate creates flexible support, while wide stud placements let you cut fast. 360 degrees of Flyknit construction around your foot combines with a NikeSkin overlay to create a lightweight, fast feel with a sock-like fit.', 'men_10', 2019, 0x31),
('S011', 'Women', 'Skate', 'Nike SB Zoom Stefan Janoski Canvas RM', 329, 0.99999, 'Colour Shown: Black/Thunder Grey/Gum Light Brown/White', 'The Nike SB Zoom Stefan Janoski Canvas RM pairs a minimal look with a modern fit. It has been updated with a new, plush sockliner and a flexible midsole for better boardfeel right out of the box.', 'women_1', 2018, 0x31),
('S012', 'Women', 'Skate', 'Nike SB Zoom Blazer Mid Pro GT', 395, 0.99999, 'Colour Shown: Trails End Brown/Prism Violet/Total Orange/Black', 'The Nike SB Zoom Blazer Mid Pro GT is built to last thanks to premium, buttery-soft leather and durable canvas. The bold accents and earthy colours are influenced by Nike ACG. It even comes with 2 sets of laces so you can customise your look.', 'women_2', 2018, 0x31),
('S013', 'Women', 'Skate', 'Nike SB Zoom Blazer Low Pro GT', 315, 0.99999, 'Colour Shown: Black/Black/Gum Light Brown/White', 'Rebuilt using insights from Grant Taylor, the Nike SB Zoom Blazer Low Pro GT is a fresh take on a favourite skate shoe. The updated design has higher taping to give you more durability.', 'women_3', 2020, 0x31),
('S014', 'Women', 'Lifestyle', 'Nike Air Max Viva', 589, 0.85000, 'Colour Shown: Black/Dark Citron/Green Abyss/Plum Dust', 'Designed with every woman in mind, the mixed material upper of the Nike Air Max Viva features a plush collar, detailed patterning and intricate stitching. The new lacing system uses 2 separate laces constructed from heavy-duty tech chord, letting you find the perfect fit. Mixing comfort with style, it combines Nike Air with a lifted foam heel for and unbelievable ride that looks as good as it feels.', 'women_4', 2019, 0x31),
('S015', 'Women', 'Lifestyle', 'Nike Blazer Mid \'77 SE', 465, 0.99999, 'Colour Shown: White', 'The Nike Blazer Mid \'77 SE harnesses the old-school look of Nike Basketball and infuses it with the perfect amount of wild with its animal print Swoosh design. Its exposed needle work, padded collar and suede accents make it a modern staple that will complete any outfit.', 'women_5', 2020, 0x31),
('S016', 'Women', 'Lifestyle', 'Nike Air Max 95', 749, 0.99999, 'Colour Shown: Multi-Colour', 'Celebrate workwear\'s wide appeal with a new take on the Nike Air Max 95 By You. Utilitarian materials like polished twill and leather are rugged and durable with an undeniable nod to runway style. Perfectly understated details like contrast stitching and gradient layers add a new level of depth to this long-time favourite.', 'women_6', 2019, 0x31),
('S017', 'Women', 'Running', 'Nike Zoom Fly 3', 649, 0.80000, 'Colour Shown: White/Racer Blue/Cyber/Metallic Silver', 'Inspired by the Vaporfly, the Nike Zoom Fly 3 gives distance runners race-day comfort and durability. The power of a carbon-fibre plate and responsive cushioning keeps you in the running mile after mile.', 'women_7', 2020, 0x31),
('S018', 'Women', 'Running', 'Nike Air Zoom Pegasus 37', 495, 0.99999, 'Colour Shown: Black/Dark Raisin/White/Anthracite', 'Take your training runs to the next level, with the Nike Air Zoom Pegasus 37. With unbelievable React cushioning, and a new forefoot Air unit tuned specifically to a woman\'s foot, they\'re like a caffeine boost for your legs. The lightweight upper provides incredible breathability. Pared-down, perfectly placed padding helps reduce hotspots. And the super-grippy outsole? Well, let\'s just say you gotta stay upright to run. Here\'s to letting mud fly and streets vanish behind you.', 'women_8', 2019, 0x31),
('S019', 'Women', 'Running', 'Nike React Infinity Run Flyknit 2', 659, 0.99999, 'Colour Shown: White/Platinum Tint/Light Citron/White', 'The Nike React Infinity Run Flyknit 2 continues to help keep you running. A refreshed upper uses Flywire technology that combines with Flyknit for support and breathability where you need it. The high foam heights provide soft responsiveness and long-lasting comfort. It\'s still one of our most-tested shoes, designed to help you feel the potential when your foot hits the pavement.', 'women_9', 2019, 0x31),
('S020', 'Women', 'Running', 'Nike Air Max Up', 545, 0.99999, 'Colour Shown: Black/Sunset Pulse/White/Cyber', 'Designed specifically for a woman\'s foot, the Nike Air Max Up takes the lifted aesthetic of the Dia and adds a larger, more dynamic Air unit that\'s framed with TPU accents. The slim proportion and extended heel combine with flashes of bold colours for a revolutionary look and feel. Go ahead. Break boundaries.', 'women_10', 2018, 0x31),
('S021', 'Kids', 'Lifestyle', 'Nike Air Force 1 LV8', 255, 0.99999, 'Colour shown: Black/White/Multi-Colour', 'The Nike Force 1 just got hacked! (In a good way.) This \'82 hoops classic gets gamified with a pixelated and iridescent Swoosh, plus all the details you know and love. Who wants to play?', 'kid_1', 2018, 0x31),
('S022', 'Kids', 'Lifestyle', 'Nike Revolution 5 SE', 175, 0.99999, 'Colour shown: Black/Bright Crimson/White', 'The Nike Revolution 5 SE is made for little ones who like to be on their feet. Soft foam and lightweight materials give little feet plenty of cushion for all-day play—so who\'s ready to race?', 'kid_2', 2020, 0x31),
('S023', 'Kids', 'Lifestyle', 'Jordan MA2', 299, 0.99999, 'Colour Shown: University Gold/Black/University Blue/Gym Red', 'The Jordan MA2 makes plays on the playground with bold details and a fun mix of materials. With a foam sole, Max Air in the heel and a lightweight upper, it\'s comfortable from top to bottom.', 'kid_3', 2021, 0x31),
('S024', 'Kids', 'Running', 'Nike Huarache Run LE', 299, 0.90000, 'Colour Shown: Dark Olive/White/Pale Ivory/Varsity Maize', 'Unmistakable for its look and feel, the Nike Huarache Run LE is back! Originally released in \'91, this iconic shoe is all about the bootie fit that feels like an all-day hug on little feet. The famous Huarache strap means stability for playtime, while updated colours give a fresh look to a classic.', 'kid_4', 2021, 0x31),
('S025', 'Kids', 'Running', 'Nike Novice', 235, 0.99999, 'Colour Shown: Blue Void/Black/Signal Blue/White', 'The Nike Novice is lightweight and comfortable—perfect for growing feet. The slip-on design is easy to take on and off and stretches to give a snug and secure fit for everyday play.', 'kid_5', 2020, 0x31),
('S026', 'Kids', 'Running', 'Nike Star Runner 2 Power', 195, 0.99999, 'Colour Shown: Pure Platinum/Barely Volt/Red Plum/Multi-Colour', 'Fun fact: The more kids move, the more fun they\'ll have in the Nike Star Runner 2 Power. Watch the iridescent Swoosh logo shift colours at every step. Plus, with comfy cushioning and a star-studded sole, they may never take these off.', 'kid_6', 2019, 0x31),
('S027', 'Kids', 'Basketball', 'Kyrie 7', 299, 0.70000, 'Colour Shown: Black/University Red/White/Black', 'Quick, fast and light—the Kyrie 7 lets your little one dress up like one of the game\'s best players. These hoops-inspired kicks are cushioned right for future ballers, plus with a secure strap, they\'ll be ready to play all day.', 'kid_7', 2020, 0x31),
('S028', 'Kids', 'Basketball', 'Kyrie Flytrap 3 SE', 215, 0.99999, 'Colour Shown: Black/Light Smoke Grey/Bright Crimson/White', 'Cushy, comfy and all about the baller life—the Kyrie Flytrap 3 SE goes next level. These kicks have mesh for breathability, traction to stop on a dime and tons of Kyrie swag.', 'kid_8', 2018, 0x31),
('S029', 'Kids', 'Basketball', 'Kyrie Flytrap 4', 245, 0.60000, 'Colour Shown: Black/Metallic Silver/White', 'For future ballers ready to play, the Kyrie Flytrap 4 is all about feeling fast like one of the game\'s best. Lightweight, breathable and cushioned, these hoops-inspired kicks for kiddos are super comfy and an easy win.', 'kid_9', 2020, 0x31),
('S030', 'Kids', 'Basketball', 'Nike Team Hustle D 9', 195, 0.99999, 'Colour Shown: Black/Game Royal/White', 'The Nike Team Hustle D 9 captures style from the basketball court in a durable design. Lightweight fabric around the forefoot is breathable, and leather around the sides creates structure. Soft foam cushions little feet for comfort that lasts all day.', 'kid_10', 2019, 0x31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `shoes_data`
--
ALTER TABLE `shoes_data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

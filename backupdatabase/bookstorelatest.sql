-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 28, 2020 at 09:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookspurchased`
--

CREATE TABLE `bookspurchased` (
  `id` int(10) NOT NULL,
  `book_id` text NOT NULL,
  `subtotal` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `pin_code` int(10) NOT NULL,
  `dop` date NOT NULL DEFAULT current_timestamp(),
  `address` text NOT NULL,
  `landmark` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `status` text NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookspurchased`
--

INSERT INTO `bookspurchased` (`id`, `book_id`, `subtotal`, `user_id`, `user_name`, `pin_code`, `dop`, `address`, `landmark`, `city`, `state`, `status`, `qty`) VALUES
(94, '14', 15, 21, 'ashish3', 0, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'klsdsd', 'pend', 1),
(95, '2', 82, 21, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 5),
(101, '2', 16, 21, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 5),
(122, '6', 17, 2, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'mumbai', 'maharashtra', 'pend', 1),
(123, '2', 63, 22, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 4),
(124, '13', 63, 22, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 4),
(125, '19', 63, 22, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 4),
(126, '20', 63, 22, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 4),
(127, '11', 20, 22, 'ashish raj', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 1),
(128, '18', 56, 22, 'ashish231', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'sucess', 2),
(129, '16', 56, 22, 'ashish231', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'sucess', 2),
(130, '15', 10, 22, 'ashish', 400703, '2020-09-28', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`) VALUES
(91, 1, 5),
(201, 22, 2),
(202, 22, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `book_id` int(11) NOT NULL,
  `publication` text NOT NULL,
  `genres` text NOT NULL,
  `book_name` text NOT NULL,
  `Author` text NOT NULL,
  `book_price` text NOT NULL,
  `book_img` text NOT NULL,
  `entry_date` date NOT NULL DEFAULT current_timestamp(),
  `bookdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`book_id`, `publication`, `genres`, `book_name`, `Author`, `book_price`, `book_img`, `entry_date`, `bookdesc`) VALUES
(1, 'King Comics Hong Kong', 'comic', 'One Piece', 'Eiichiro Oda', '10', './Assets/products/comic1.png', '2020-06-01', 'One Piece is a steampunk manga and anime series created by artist Eiichiro Oda. It revolves around a crew of pirates led by captain Monkey D. Luffy, whose dream is to obtain the ultimate treasure One Piece that was left behind by the King of the Pirates, Gold Roger.'),
(2, 'King Comics Hong Kong', 'comic', 'Record of Ragnarok', 'Takumi Fukui', '15', './Assets/products/comic2.png', '2020-07-06', 'Ragnarok is mankind\'s final struggle against the gods. The event was described and explained in paragraph 15 of article No. 62 in the Super Special Clause of the Valhalla Constitution. It is a one-on-one showdown between the gods and mankind.'),
(3, 'King Comics Hong Kong', 'comic', 'Dragon Ball Super', 'Akira Toriyama', '20', './Assets/products/comic3.png', '2020-08-11', 'Dragon Ball Super is a Japanese manga series written by Akira Toriyama and illustrated by Toyotarou. It is a sequel to Toriyama\'s original Dragon Ball and follows Son Goku as he faces even more powerful foes after attaining the power of a god himself.'),
(4, 'King Comics Hong Kong', 'comic', 'Bleach', 'Tike Kubo', '20', './Assets/products/comic4.png', '2020-08-11', 'Bleach follows the adventures of the hotheaded teenager Ichigo Kurosaki, who inherits his parents\' destiny after he obtains the powers of a Soul Reaper (死神, Shinigami, literally \'Death God\')—a death personification similar to the Grim Reaper—from another Soul Reaper, Rukia Kuchiki.'),
(5, 'King Comics Hong Kong', 'comic', 'Naruto', 'Masashi Kishimoto', '30', './Assets/products/comic5.png', '2020-08-19', ' Naruto (Japanese) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.'),
(6, 'Penguin Random House', 'crime', 'Mind Hunter', 'John Douglas', '17', './Assets/products/crime1.png', '2020-09-18', 'Discover the classic, behind-the-scenes chronicle of John, Using his uncanny ability to become both predator and prey, Douglas examines each crime scene, reliving both the killer\'s and the victim\'s actions in his mind, creating their profiles, describing their habits, and predicting their next move'),
(7, 'Penguin Random House', 'crime', 'You', 'Caroline Kepnes', '15', './Assets/products/crime2.png', '2020-09-24', 'A terrifying exploration of how vulnerable we all are to stalking and manipulation, debut author Caroline Kepnes delivers a razor-sharp novel for our hyper-connected digital age. You is a compulsively readable page-turner that\'s being compared to Gone Girl, American Psycho, and Stephen King\'s Misery.'),
(8, 'Penguin Random House', 'crime', 'English Crimes', 'Roger Harrington', '20', './Assets/products/crime3.png', '2020-09-17', ' ENGLISH CRIME: True Crime Stories There is no place in the world with a richer history of crime than Great Britain. From the brutal legacy left by Jack the Ripper in the 1800s, to 1960s East End gangsters, to modern day monsters such as Harold Shipman and Steve Wright, England\'s criminal lore cannot be understated.'),
(9, 'Penguin Random House', 'crime', 'Helter Sketier', 'Vincent Buglosi', '20', './Assets/products/crime4.png', '2020-09-24', ' Helter Skelter: The True Story of The Manson Murders is a 1974 book by Vincent Bugliosi and Curt Gentry. Bugliosi had served as the prosecutor in the 1970 trial of Charles Manson.'),
(10, 'Penguin Random House', 'crime', 'In Cold Blood', 'Turam Capote', '10', './Assets/products/crime5.png', '2020-09-23', ' In Cold Blood is a non-fiction novel by American author Truman Capote, first published in 1966; it details the 1959 murders of four members of the Herbert Clutter family in the small farming community of Holcomb, Kansas.'),
(11, 'Macmillan Publishers', 'sci-fi', 'Games Of Thrones', 'George R R Martin', '20', './Assets/products/fic1.png', '2020-09-17', 'Overview. Game of Thrones is based roughly on the storylines of A Song of Ice and Fire by George R. R. Martin, set in the fictional Seven Kingdoms of Westeros and the continent of Essos. The series utilizes several simultaneous plot lines.'),
(12, 'Macmillan Publishers', 'sci-fi', 'Harry Potter', 'J K Rowling', '13', './Assets/products/fic2.png', '2020-09-24', 'Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.'),
(13, 'Macmillan Publishers', 'sci-fi', 'Hobbit', 'J R R Tolkieh', '20', './Assets/products/fic3.png', '2020-09-24', ' The Hobbit is set within Tolkien\'s fictional universe and follows the quest of home-loving Bilbo Baggins, the titular hobbit, to win a share of the treasure guarded by Smaug the dragon. Bilbo\'s journey takes him from light-hearted, rural surroundings into more sinister territory.  '),
(14, 'Macmillan Publishers', 'sci-fi', 'Dracula', 'Bram Stoker', '15', './Assets/products/fic4.png', '2020-09-16', ' Dracula is an 1897 Gothic horror novel by Irish author Bram Stoker. It introduced the character of Count Dracula and established many conventions of subsequent vampire fantasy..'),
(15, 'Macmillan Publishers', 'sci-fi', 'Life Of Pi\r\n', 'Yann Martel', '10', './Assets/products/fic5.png', '2020-09-20', 'Book Summary. Yann Martel\'s Life of Pi is the story of a young man who survives a harrowing shipwreck and months in a lifeboat with a large Bengal tiger named Richard Parker. To illustrate how true and real the threat is, he forces the children to watch the tiger kill and eat a goat.'),
(16, 'Hachettle livre', 'pop', 'Tale Of Two Cities', 'Charles Dickes', '30', './Assets/products/pop1.png', '2020-09-02', ' The novel tells the story of the French Doctor Manette, his 18-year-long imprisonment in the Bastille in Paris and his release to live in London with his daughter Lucie, whom he had never met. The story is set against the conditions that led up to the French Revolution and the Reign of Terror.'),
(17, 'Hachettle livre', 'pop', 'Four Tragedies', 'William Shakespeare', '10', './Assets/products/pop2.png', '2020-09-01', 'One of the most famous plays of all time, the compelling tragedy of the young prince of Denmark who must reconcile his longing for oblivion with his duty to avenge his father\'s murder is one of Shakespeare\'s greatest works.'),
(18, 'Hachettle livre', 'pop', 'Graveyard Book', 'Neil Gaiman', '26', './Assets/products/pop3.png', '2020-09-16', 'The Graveyard Book is a young adult fantasy novel by the English author Neil Gaiman, simultaneously published in Britain and America in 2008. The Graveyard Book traces the story of the boy Nobody \"Bod\" Owens who is adopted and reared by the supernatural occupants of a graveyard after his family is brutally murdered.'),
(19, 'Hachettle livre', 'pop', 'Great Expectations', 'Charles Dickens', '12', './Assets/products/pop4.png', '2020-08-04', 'Great Expectations follows the childhood and young adult years of Pip a blacksmith\'s apprentice in a country village. He suddenly comes into a large fortune (his great expectations) from a mysterious benefactor and moves to London where he enters high society.'),
(20, 'Hachettle livre', 'pop', 'Romeo and Juliet', 'William Shakespeare', '16', './Assets/products/pop5.png', '2020-09-08', 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare\'s most popular plays during his lifetime and along with Hamlet, is one of his most frequently performed plays');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `number` int(10) NOT NULL,
  `delivery_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `number`, `delivery_address`) VALUES
(1, 'ricky', 'raitricky', 973812732, 'nerul'),
(2, 'ashish', '$2y$10$YWoyEkkyZxiJITRbANzgRO6lXcOB8KNHahvx3qKLDJj3S7w5wyoL6', 938128319, 'vashi'),
(3, 'Bhuran', '1234qwe', 712438132, 'Kalyan'),
(4, 'AshishRait', '12345', 123456789, 'Nerul'),
(5, 'RickyRait', '12345bgh', 923456789, 'Nerul'),
(6, 'BhuranRait', 'Rait', 123456789, 'Nerul'),
(7, 'prashant', '1234', 12938278, 'Nerul'),
(8, 'sunita', 'sunita', 2147483647, 'vashi'),
(9, 'raj', 'raj', 98200, 'vashi'),
(10, 'aman', 'aman123', 702198278, 'vashi'),
(17, 'ashishhash', '$2y$10$fRs7hGc8j4HouoQZh4fst.pu99xXrVsEmgknaHrVbU6blbJHi/gba', 1233123, 'vashi'),
(18, 'ashishhash1', '$2y$10$oqk6AEy2wKSk3XD1LUDTMu9joVHMz1KLbLmDioqo74irRGL3pTPBO', 321313, 'vashi'),
(19, 'AshishRaitHash', '$2y$10$cV2nUDmmH7.bu8lyp7MGnOho/KW8cPf050AfvlTi/xgdjZGY/MwGK', 89743984, 'vashi'),
(21, 'rickyc', '$2y$10$3eGtGTItku7rP7seW.RTP.F9du.bGzUwwdpkivGjBm.vo8Dd1EgeG', 2147483647, 'nerul'),
(22, 'test', '$2y$10$jdcX0akmj.AtI5KU37cCr.BHD20tlJxPF0h525XmuCNMTXzk.ENSS', 765756577, 'Nerul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookspurchased`
--
ALTER TABLE `bookspurchased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookspurchased`
--
ALTER TABLE `bookspurchased`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

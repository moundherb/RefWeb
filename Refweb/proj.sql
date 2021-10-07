-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 10:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_creators`
--

CREATE TABLE `content_creators` (
  `id` int(255) NOT NULL,
  `sect` text NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `skills` text NOT NULL,
  `yt` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_creators`
--

INSERT INTO `content_creators` (`id`, `sect`, `name`, `img`, `skills`, `yt`, `mail`) VALUES
(1, 'frontend', 'Dev Ed', 'img-1.jpg', 'Html & css', 'https://www.youtube.com/c/DevEd/about', 'https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNrcxHJxCSnhHXmmZXLblGwcJxvgHnVFrbrsBwKsXfDfBwZLQjTHkBPnthtGPKMCTSpqsq'),
(2, 'backend', 'Program With Gio', 'gio.png', 'php', 'https://www.youtube.com/playlist?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-', 'https://twitter.com/giodev8'),
(3, 'backend', 'Nour Homsi', 'nour.png', 'php', 'https://www.youtube.com/watch?v=pszZMzI9a7A', 'https://web.facebook.com/drnourhomsi?_rdc=1&_rdr'),
(4, 'backend', 'code with dray', 'dray.png', 'php', 'https://www.youtube.com/watch?v=cGwSm8xDSwI', 'https://twitter.com/codewithdary'),
(5, 'frontend', 'CoderLipi', 'coder.png', 'js', 'https://www.youtube.com/playlist?list=PLqkLaKB2GJhWXV9rcarwvn06ISlL_9mPQ', ''),
(6, 'frontend', 'Abdelrahman Gamal', 'prog.png', 'js', 'https://www.youtube.com/watch?v=4UOPfAwwvow&list=PLknwEmKsW8OsnUAj3ThlerzPeMKk9GXXR&index=1', 'https://web.facebook.com/groups/1810581845642171/?ref=share&_rdc=1&_rdr'),
(7, 'backend', 'Techno U', 'u.png', 'Ruby', 'https://www.youtube.com/playlist?list=PLhiFu-f80eo9cXpAh2Kv0m6Aq0eSWT8MC', 'https://www.facebook.com/TecnoUir/?_rdc=2&_rdr'),
(9, 'backend', 'Barmij', 'barmij.png', 'python', 'https://www.youtube.com/watch?v=Mk9_J4rgCnM&list=PLkIliLHi5M4IOMRr-VunZlxiRmix0vIvY&index=1', 'https://www.barmej.com/'),
(10, 'backend', 'Steve Griffith', 'steve.png', 'Mysql', 'https://www.youtube.com/watch?v=a9W7OpS4LfI&list=PLyuRouwmQCjlXvBkTfGeDTq79r9_GoMt9&index=1', ''),
(11, 'design', 'Matt Borchert', 'f3.jpg', 'design', 'https://www.youtube.com/channel/UC34_SxzRr7FOYdKfjLpVBzw', 'https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvqrnmglLbkkThCBCBRwPvLDQSClWHFKsHKSZPXdTfXhqKnmfwfwkVMdTfNbMKwtLVtBsV'),
(12, 'design', 'Sharon Onyinye', 'f8.jpg', 'ui/ux designe', 'https://www.youtube.com/channel/UCBgJ7yrU2sdhl4JWUNhnj2w', 'https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDZqnbZvGwwWzXKVkzknWbcbPJsHDMLqXXTwJHbxnnWWDmRNxKRBLggRlppqJvwFHSCMRxF'),
(13, 'design', 'DesignCourse', 'f9.jpg', 'web designe', 'https://www.youtube.com/channel/UCVyRiMvfUNMA1UPlDPzG5Ow', 'https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRlQQPWRDSrDwXlNTTVqbWNlkmWKpPqXxtXZkCQjjzrSRLCHSxjglNxKlDKgFVCBCrSZvPv');

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `id` int(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `writerid` int(255) NOT NULL,
  `opmsg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`id`, `rating`, `writerid`, `opmsg`) VALUES
(13, 5, 2, 'Oh! i had website devlopment project and i was very afraid to complete it, but thanks to your site i was able to do that.Thank you very mach\r\n\r\n'),
(14, 3, 3, 'I am very happy that i used your site, which saved me a lot of effort and time</br>good luck\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(255) NOT NULL,
  `sect` text NOT NULL,
  `name` text NOT NULL,
  `Categ` text NOT NULL,
  `img` text NOT NULL,
  `desceng` text NOT NULL,
  `descar` text NOT NULL,
  `descfr` text NOT NULL,
  `link` text NOT NULL,
  `vid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `sect`, `name`, `Categ`, `img`, `desceng`, `descar`, `descfr`, `link`, `vid`) VALUES
(1, 'frontend', 'w3schools', 'html Css', 'w3schools.jpg', 'provide content professionnel that helps you to learn the HTML and write promotional code..', 'يوفر محتوى ذو جودة احترافية يساعدك على تعلم HTML', 'quelque chose quelque chose quelque chose quelque chose quelque chose quelque chose ', 'https://www.w3schools.com/', 'vid-1.mp4'),
(2, 'frontend', 'Codeacademy', 'Js', 'codeacademy.png', 'the javascript tutorial here provides a very interactive way of teaching important principles', 'يوفر البرنامج التعليمي جافا سكريبت هنا طريقة تفاعلية للغاية لتدريس المبادئ المهمة', 'le tutoriel javascript ici fournit une manière très interactive d\'enseigner des principes importants', 'https://www.codecademy.com/catalog/all', ''),
(6, 'frontend', 'Learn javascript', 'Css', 'learn-js.png', 'learn js tutorial website was created by one of google\'s devlopers, offers your free 40 courses as you start', 'تم إنشاء هذا الموقع التعليمي بواسطة أحد مطوري google ، ويقدم 40 دورة مجانية عند البدء', 'Ce site tutoriel a été créé par un développeur google, les 40 premiers cours gratuits lors de la prise en main', 'https://learnjavascript.online/', ''),
(7, 'backend', 'Udemy', 'php data-base python js', 'js-udemy.png', 'there are tons of tutorials you can find about javascript her', 'هناك الكثير من البرامج التعليمية التي يمكنك أن تجدها على JavaScript', 'il y a des tonnes de tutoriels que vous pouvez trouver sur javascript', 'https://www.udemy.com/', ''),
(8, 'design', 'Manypixels', 'illustrations', 'web-1.png', 'ManyPixels is another fantastic resource which is very similar to unDraw... ', 'ManyPixels هو مورد رائع آخر مشابه جدًا لـ unDraw ...', 'ManyPixels est une autre ressource fantastique qui est très similaire à unDraw...', 'https://www.manypixels.co/gallery', ''),
(19, 'backend', 'Real Python', 'python', '8real-python.png', 'if you want to learn python for free without having to read boring book modules real Python offers best one stop resource online', 'ذا كنت ترغب في تعلم Python مجانًا دون الحاجة إلى قراءة وحدات الكتب المملة ، فإن Python الحقيقية تقدم أفضل مورد واحد على الإنترنت', 'si vous voulez apprendre python gratuitement sans avoir à lire des modules de livres ennuyeux, le vrai Python offre la meilleure ressource unique en ligne', 'https://realpython.com/', ''),
(20, 'design', 'GRAPHIC BURGER', 'icons', '8web-2.png', 'Free vector icons for any number of personal and commercial projects...', 'أيقونات مجانية للمشاريع الشخصية والتجارية ...', 'Icônes vectorielles gratuites pour un certain nombre de projets personnels et commerciaux...', 'https://graphicburger.com/icons-set/', ''),
(21, 'design', 'Google Fonts', 'font', '8web-11.png', 'Google Fonts is an invaluable resource for digital designers...', 'تعد Google Fonts مصدرًا لا يقدر بثمن للمصممين الرقميين ...', 'Google Fonts est une ressource inestimable pour les concepteurs numériques...', 'https://fonts.google.com/', ''),
(22, 'design', 'Manypixels', 'color', '8web-1.png', 'ManyPixels is another fantastic resource which is very similar to unDraw...', 'ManyPixels هو مورد رائع آخر مشابه جدًا لـ unDraw ...', 'ManyPixels est une autre ressource fantastique qui est très similaire à unDraw...', 'https://www.manypixels.co/gallery', ''),
(23, 'backend', 'Javascript.info', 'js', '8js-info.png', 'as the name speaks for itself, this tutorial focused on js only', 'نظرًا لأن الاسم يتحدث عن نفسه ، فقد ركز هذا البرنامج التعليمي على js فقط', 'comme le nom parle de lui-même, ce tutoriel s\'est concentré sur js uniquement', 'https://javascript.info/', ''),
(24, 'backend', 'Try Ruby', 'ruby', '8try-ruby.jpg', 'one of best introductory resources, it\'s incredibly through, easy to follow, with inline coding environment', 'حد أفضل الموارد التمهيدية ، من السهل متابعته بشكل لا يصدق مع بيئة الترميز المضمنة', 'l\'une des meilleures ressources d\'introduction, c\'est incroyablement complet, facile à suivre, avec un environnement de codage en ligne', 'https://www.pluralsight.com/search?q=ruby', ''),
(25, 'backend', 'SQLCourse', 'data-base', '8sqlcourse.png', 'offers you the opportunity of your own tables through an online sql interpreter', 'يوفر لك فرصة الجداول الخاصة بك من خلال الإنترنت', 'vous offre la possibilité de vos propres tables via un interpréteur sql en ligne', 'https://www.analyticssteps.com/blogs/5-top-sites-learning-sql#google_vignette', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `img` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `username`, `password`, `fullname`, `role`) VALUES
(1, 'usermale.jpg', 'admin', 'admin', 'admin', 'admin'),
(2, 'userfemale.jpg', 'test', 'test', 'SomeOne Test', 'user'),
(3, '21.jpg', 'asd', 'asd', 'Moundher Bensalmi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_creators`
--
ALTER TABLE `content_creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_creators`
--
ALTER TABLE `content_creators`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

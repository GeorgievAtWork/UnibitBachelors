-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 08:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expansio`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(250) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `image_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `tutor_id`, `image_path`) VALUES
(1, 'Лайфстайл', 1, 'assets/images/courses-lifestyle.png'),
(2, 'Фотография', 1, 'assets/images/courses-photography.png'),
(3, 'Информационни технологии', 2, 'assets/images/courses-it.png'),
(4, 'Финанси', 2, 'assets/images/courses-finances.png'),
(5, 'Фитнес и тренировки', 3, 'assets/images/courses-fitness.png'),
(6, 'Науки', 3, 'assets/images/courses-sciences.png');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `tutor_id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `avatar_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tutor_id`, `first_name`, `last_name`, `age`, `location`, `description`, `avatar_path`) VALUES
(1, 'Мария', 'Георгиева', 27, 'София', 'Мария е ентусиаст що се отнася до лайфстайл и фотография, като друга нейна страст е преподаването. Тя е мотивирана и обича да преподава на други хора, като не пести сили и ресурси в това отношение. Нейните курсове се фокусират върху конкретни задачи и примери от реалния живот.', 'assets/images/tutor-1.png'),
(2, 'Петър', 'Стоянов', 35, 'Бургас', 'Петър е компютърен ентусиаст и се старае винаги да изучава новите технологии. Друг интерес за Петър представляват финансите и инвестициите. Неговите курсове се фокусират над идентифицирането на нужди, проектирането на решения, както и тяхната реализация.', 'assets/images/tutor-2.png'),
(3, 'Гергана', 'Господинова', 24, 'Пловдив', 'Гергана е гуру на тема фитнес и тренировки, но освен това има огромни познания в сферата на природните науки като химия, биология и физика. Нейните курсове се позовават на чести проверки на знания, като постепенно надграждат темпото и количеството подадена информация.', 'assets/images/tutor-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(250) NOT NULL,
  `video_desc` text DEFAULT NULL,
  `video_path` text NOT NULL,
  `thumb_path` varchar(250) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_title`, `video_desc`, `video_path`, `thumb_path`, `subject_id`) VALUES
(1, 'Въведение в програмирането с Python - част 1', 'Този курс има за цел да запознае курсистите с основните елементи на програмирането, а именно променливи, условия и цикли в езика Python', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 3),
(2, 'Въведение в програмирането с Python - част 2', 'Този курс има за цел да запознае курсистите с функции, обекти и принципи на обектно-ориентираното програмиране с Python.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 3),
(3, 'Въведение в програмирането с Python - част 3', 'Този курс има за цел да даде носоки на курсистите за разработване на примерен мини проект в помощта на езика за програмиране Python.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 3),
(4, 'Основи на интернет програмирането и специфики', 'Този курс има за цел да запознае курсистите с основите на интернет програмирането, както и специфики свързани с него.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 3),
(5, 'Основи на oбектно ориентираното програмиране', 'Този курс има за цел да запознае курсистите с основите обектно-ориентираното програмиране.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 3),
(6, 'Основи на фотографията - част 1', 'Този курс има за цел да запознае курсистите с основните елементи на фотографията като типове апарати, експозиция и други.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 2),
(7, 'Основи на фотографията - част 2', 'Този курс има за цел да навлезе в подробности относно фотографията, както и нейните специфики и практически съвети.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 2),
(8, 'Как да медитираме пълноценно', 'Този курс има за цел да даде насоки на курсистите как да медитират пълноценно.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 1),
(9, 'Как медитацията ни помага', 'Този курс има за цел да запознае курсистите с медитацията като практика, както и как тя може да бъде полезна за тях.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 1),
(10, 'Как да управляваме правилно времето си?', 'Този курс има за цел да даде на курсистите насоки за по-успешно управление на своето време.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 1),
(11, 'Управление на финанси - част 1', 'Този курс има за цел да даде на курсистите добри практики за това как да управляват своите финанси и да им даде базови познания.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 4),
(12, 'Управление на финанси - част 2', 'Този курс има за цел да даде на курсистите добри практики за това как да управляват своите финанси и да им даде по-дълбоки познания.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 4),
(13, 'Търгуване на фондовата борса', 'Този курс има за цел да даде на курсистите информация относно фондовата борса, как се движат акциите и как да се анализират те.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 4),
(14, 'Основи на фитнеса - част 1', 'Този курс има за цел да запознае курсистите с основните понятия във фитнеса, както и добри практики.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 5),
(15, 'Основи на фитнеса - част 2', 'Този курс има за цел да запознае курсистите с различните хранителни добавки и различни упражнения, както и да покажат правилна форма на упражнението.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 5),
(16, 'Как да тренираме пълноценно', 'Този курс има за цел да помогне на курсистите да увеличат своите кардио възможности, като им даде добри практики на дишане и упражнения.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 5),
(17, 'Основни положения на Химията', 'Този курс има за цел да запознае с основни термини в Химията.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 6),
(18, 'Основни положения на Физиката', 'Този курс има за цел да запознае с основни термини във Физиката.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 6),
(19, 'Основни положения на Биологията', 'Този курс има за цел да запознае с основни термини в Биологията.', 'assets/videos/dummy.mp4', 'assets/images/thumbnail.png', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_id` (`subject_id`),
  ADD KEY `fg_key_tutors` (`tutor_id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`tutor_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fg_key_tutors` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_id`) ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fg_key_sunject` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

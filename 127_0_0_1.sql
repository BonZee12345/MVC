-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 09 jan 2026 om 08:55
-- Serverversie: 8.0.37
-- PHP-versie: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2025_library_app`
--
CREATE DATABASE IF NOT EXISTS `2025_library_app` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `2025_library_app`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `publication_year` int DEFAULT NULL,
  `book_status` int DEFAULT NULL,
  `book_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author`, `publication_year`, `book_status`, `book_img`) VALUES
(1, 'The Midnight Library', 'Matt Haig', 2020, 1, 'midnight_library.jpg'),
(2, 'Educated', 'Tara Westover', 2018, 0, 'educated.jpg'),
(3, 'Where the Crawdads Sing', 'Delia Owens', 2018, 1, 'where_the_crawdads_sing.jpg'),
(4, 'Becoming', 'Michelle Obama', 2018, 0, 'becoming.jpg'),
(5, 'Project Hail Mary', 'Andy Weir', 2021, 1, 'project_hail_mary.jpg'),
(6, 'The Vanishing Half', 'Brit Bennett', 2020, 1, 'the_vanishing_half.jpg'),
(7, 'Atomic Habits', 'James Clear', 2018, 0, 'atomic_habits.jpg'),
(8, 'Normal People', 'Sally Rooney', 2018, 0, 'normal_people.jpg'),
(9, 'The Midnight Library', 'Matt Haig', 2020, 1, 'midnight_library.jpg'),
(10, 'Educated', 'Tara Westover', 2018, 0, 'educated.jpg'),
(11, 'Where the Crawdads Sing', 'Delia Owens', 2018, 1, 'where_the_crawdads_sing.jpg'),
(12, 'Becoming', 'Michelle Obama', 2018, 0, 'becoming.jpg'),
(13, 'Project Hail Mary', 'Andy Weir', 2021, 1, 'project_hail_mary.jpg'),
(14, 'The Vanishing Half', 'Brit Bennett', 2020, 1, 'the_vanishing_half.jpg'),
(15, 'Atomic Habits', 'James Clear', 2018, 0, 'atomic_habits.jpg'),
(16, 'Normal People', 'Sally Rooney', 2018, 0, 'normal_people.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `release_year` int DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `stock_total` int DEFAULT '0',
  `stock_available` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `movie_img` varchar(255) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Database: `2025_programming_languages`
--
CREATE DATABASE IF NOT EXISTS `2025_programming_languages` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `2025_programming_languages`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `difficulty` enum('easy','medium','hard') NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `year_created` int NOT NULL,
  `creator` varchar(100) NOT NULL,
  `typing` varchar(50) NOT NULL,
  `paradigm` varchar(100) NOT NULL,
  `notes` text,
  `learning_time` int NOT NULL,
  `learning_time_master` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `languages`
--

INSERT INTO `languages` (`id`, `name`, `difficulty`, `purpose`, `year_created`, `creator`, `typing`, `paradigm`, `notes`, `learning_time`, `learning_time_master`) VALUES
(1, 'Python', 'easy', 'Web development, Data Science, Automation', 1991, 'Guido van Rossum', 'Dynamic, Strong', 'OOP, Functional, Procedural', 'Known for readability and huge standard library.', 3000, 25000),
(2, 'C', 'hard', 'System programming, Embedded systems', 1972, 'Dennis Ritchie', 'Static, Weak', 'Procedural', 'The backbone of modern operating systems and many languages.', 7200, 50000),
(3, 'Java', 'medium', 'Enterprise apps, Android development', 1995, 'James Gosling', 'Static, Strong', 'OOP, Concurrent', 'Runs on JVM allowing cross-platform compatibility.', 4800, 35000),
(4, 'JavaScript', 'medium', 'Web development, Frontend & Backend', 1995, 'Brendan Eich', 'Dynamic, Weak', 'Event-driven, Functional, OOP', 'Originally created in 10 days; now everywhere on the web.', 2400, 30000),
(5, 'Haskell', 'hard', 'Academic, Functional programming', 1990, 'Simon Peyton Jones', 'Static, Strong', 'Functional', 'Purely functional and lazy evaluation language.', 9000, 60000),
(6, 'Rust', 'hard', 'Systems programming, Safety-critical apps', 2010, 'Graydon Hoare', 'Static, Strong', 'OOP, Functional, Procedural', 'Memory safety without garbage collection.', 6600, 55000),
(7, 'Ruby', 'easy', 'Web apps, Prototyping', 1995, 'Yukihiro Matsumoto', 'Dynamic, Strong', 'OOP, Functional', 'Focuses on developer happiness; famous for Rails framework.', 2700, 20000),
(8, 'Php', 'medium', 'Web development, Server-side scripting', 1995, 'Rasmus Lerdorf', 'Dynamic, Weak', 'Procedural, OOP', 'Originally stood for Personal Home Page; powers WordPress.', 2100, 18000),
(9, 'Kotlin', 'medium', 'Android apps, Server-side', 2011, 'JetBrains', 'Static, Strong', 'OOP, Functional', 'Fully interoperable with Java and concise syntax.', 3600, 30000),
(10, 'Html', 'easy', 'Web page structure, Markup', 1993, 'Tim Berners-Lee', 'N/A', 'Declarative, Markup', 'Not a programming language per se, but the backbone of the web.', 600, 3000);
--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Database: `students`
--
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `students`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour learnning_db
CREATE DATABASE IF NOT EXISTS `learnning_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `learnning_db`;

-- Listage de la structure de table learnning_db. etudiants
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `niveau_id` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `etudiants_niveau_id_foreign` (`niveau_id`),
  CONSTRAINT `etudiants_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table learnning_db.etudiants : ~0 rows (environ)
INSERT INTO `etudiants` (`id`, `nom`, `niveau_id`, `email`, `password`) VALUES
	(32, 'jeff', 2, 'jelfnguimdo@gmail.com', '$2y$10$RzHyv8JqJQE/a1KejiJkte5K6EC0lIF8Jn0557mdseFS1N1igSEJW'),
	(33, 'test', 1, 'test@gmail.com', '$2y$10$clzr.Y00zrYydThj29vNtONjZfCWA2MvTeDR9R3LnFixCKplAs/3W');

-- Listage de la structure de table learnning_db. matieres
CREATE TABLE IF NOT EXISTS `matieres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `niveau_id` int DEFAULT NULL,
  `cour` text,
  `video` text,
  `encien_sujet` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libellle` (`libelle`) USING BTREE,
  KEY `niveau_id` (`niveau_id`),
  CONSTRAINT `matieres_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table learnning_db.matieres : ~0 rows (environ)
INSERT INTO `matieres` (`id`, `libelle`, `niveau_id`, `cour`, `video`, `encien_sujet`) VALUES
	(1, 'programmation c', 1, 'cours_langageC.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/JsUSp4cf_2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'cours_langageC.pdf'),
	(2, 'programmation c++', 1, 'C++Polycop1.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/f3UVQPbw32w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'corr norm C++ 2020.pdf'),
	(3, 'introduction aux réseaux', 1, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(4, 'systèmes d\'exploitation', 1, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(5, 'analyse I', 1, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(6, 'algebre I', 1, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(7, 'architecture des ordinateurs', 1, NULL, NULL, NULL),
	(8, 'programmation fonctionnel', 1, 'Correction Haskell.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'Correction Haskell.pdf'),
	(9, 'introduction a l\'algoritmique', 1, NULL, NULL, NULL),
	(10, 'electronique numerique I', 1, NULL, NULL, NULL),
	(11, 'anglais I', 1, NULL, NULL, NULL),
	(12, 'mecanique', 1, NULL, NULL, NULL),
	(13, 'algebre II', 2, 'algebre.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/JZ55-HmYLCI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(14, 'Programmation web', 2, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'FastPHP.pdf'),
	(15, 'Genie Logiciel', 2, 'Correction GenieLogiciel.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', 'Correction GenieLogiciel.pdf'),
	(16, 'anglais II', 2, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', NULL),
	(17, 'theorie des comportement', 2, 'FastPHP.pdf', '<iframe width="560" height="315" src="https://www.youtube.com/embed/_WprUvG1mbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', NULL),
	(18, 'base de données', 2, NULL, NULL, NULL),
	(19, 'structure de données', 2, NULL, NULL, NULL),
	(20, 'système d\'information', 2, NULL, NULL, NULL),
	(21, 'theorie des marches', 2, NULL, NULL, NULL),
	(22, 'electronique numerique II', 2, NULL, NULL, NULL),
	(23, ' programmation java', 2, NULL, NULL, NULL),
	(24, 'analyse II', 2, NULL, NULL, NULL);

-- Listage de la structure de table learnning_db. niveau
CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int NOT NULL AUTO_INCREMENT,
  `niv` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `niv` (`niv`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table learnning_db.niveau : ~0 rows (environ)
INSERT INTO `niveau` (`id`, `niv`) VALUES
	(1, 'L1'),
	(2, 'L2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

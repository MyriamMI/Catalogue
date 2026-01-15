CREATE DATABASE IF NOT EXISTS catalogue
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE catalogue;

CREATE TABLE `type` (
    `idType` INT AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(50) NOT NULL
);

CREATE TABLE `cours` (
    `idCours` INT AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `image` VARCHAR(100),
    `idType` INT NOT NULL,
        FOREIGN KEY (`idType`) REFERENCES `type`(`idType`)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);

INSERT INTO `type` (`idType`, `libelle`) VALUES
(1, 'JavaScript'),
(2, 'PHP'),
(3, 'SQL'),
(4, 'Jeux web');

INSERT INTO `cours` (`idCours`, `libelle`, `description`, `image`, `idType`) VALUES
(1, 'Les fondamentaux du Javascript et de Node.JS', 'Réaliser une application web complète avec les technologies HTML, CSS, JAVASCRIPT, Node JS, et une archi. client/serveur', 'JS.png', 1),
(2, '35 Exercices JavaScript', '30exercices JavaScript corrigés en vidéo (20 faciles, 7 moyens, 3 complexes) pour réviser variables, tableaux, objets...', 'JS2.png', 1),
(3, 'Le PHP', '9 heures de pratique de PHP avec PHP Data Objects (PDO), Bootstrap, MySQL, et la Programmation Orientée Objets (POO)', 'PHP.png', 2),
(4, 'La refonte d\'un site web déjà en ligne', 'D\'un site statique à un site dynamique. MVC, HTML/CSS/Bootstrap, PHP, JS/JQuery, MySQL/PDO, sécurité, MCD/MPD (MERISE)..', 'PHP2.png', 2),
(5, '100 requêtes pour maîtriser pour SQL', 'Le cours complet pour apprendre le langage SQL par la pratique au travers de 100 requêtes différentes, sur MySQL', 'SQL.png', 3),
(6, 'Créer des jeux web avec Phaser', 'Créer des jeux javaScript grâce à Phaser (version 3), piloté avec un serveur node.js ou avec Apache', 'JEUX.png', 4),
(7, 'Créer des jeux web en JS Natif', 'Réaliser puissance 4, la bataille navale et une application de labyrinthe en JavaScript, HTML et CSS sans framework (JS)', 'JEUX2.png', 4);

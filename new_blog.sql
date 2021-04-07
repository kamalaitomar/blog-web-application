-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 10:44
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `new_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` varchar(500) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment_content`, `comment_date`) VALUES
(16, 6, 9, 'said comment\r\n', '2021-03-29 01:04:46'),
(17, 12, 9, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:35:42'),
(18, 12, 15, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:35:49'),
(19, 12, 14, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:35:55'),
(20, 12, 13, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:36:02'),
(21, 12, 12, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:36:12'),
(22, 12, 11, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '2021-03-30 09:36:20'),
(23, 9, 15, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:36:33'),
(24, 9, 14, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:36:42'),
(25, 9, 13, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n\r\n', '2021-03-30 09:36:52'),
(26, 9, 12, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:36:59'),
(27, 9, 12, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:37:10'),
(28, 9, 11, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:37:22'),
(29, 9, 9, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:37:33'),
(30, 11, 15, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:37:51'),
(31, 11, 14, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '2021-03-30 09:38:01'),
(32, 11, 12, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:38:10'),
(33, 11, 9, 'Lorem Ipsum is  like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:38:19');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(128) NOT NULL,
  `post_content` varchar(1000) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_title`, `post_content`, `post_date`) VALUES
(9, 6, 'said post', 'said postsaid postsaid post ', '2021-03-29 01:01:14'),
(11, 9, 'ADUI vs BMW', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:33:03'),
(12, 10, 'HTML5 and CSS3 is the best', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:34:21'),
(13, 11, 'the latest one piece ep', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:34:42'),
(14, 11, 'hassan post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:34:54'),
(15, 12, 'One Direction - Steal My Girl ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-30 09:35:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usernam` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rule` tinytext NOT NULL,
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `usernam`, `password`, `rule`, `date_inscription`) VALUES
(1, 'kurama', 'the9kurama', 'admin', '2021-03-28 12:48:01'),
(6, 'said', 'sidoos', 'user', '2021-03-29 00:25:30'),
(9, 'kamal', '12345', 'user', '2021-03-30 09:28:15'),
(10, 'trafalgarD', 'medo', 'user', '2021-03-30 09:28:44'),
(11, 'hassan', 'hassan', 'user', '2021-03-30 09:28:56'),
(12, 'ayoub', 'ayoub', 'user', '2021-03-30 09:32:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

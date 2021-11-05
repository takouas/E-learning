-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 sep. 2021 à 20:20
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elearning`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`) VALUES
(2);

-- --------------------------------------------------------

--
-- Structure de la table `classe_de_cours`
--

CREATE TABLE `classe_de_cours` (
  `id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `enseignant_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classe_de_cours`
--

INSERT INTO `classe_de_cours` (`id`, `formation_id`, `enseignant_id`, `titre`, `description`, `date_creation`, `date_modification`) VALUES
(1, 1, 1, 'Symfony', NULL, '2021-09-23 21:08:13', '2021-09-23 21:08:13'),
(3, 1, 5, 'Symfony 2', NULL, '2021-09-23 22:39:59', '2021-09-23 22:39:59');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `user_id`, `cours_id`, `contenu`, `date_creation`, `date_modification`) VALUES
(1, 1, 1, '????????????', '2021-09-23 21:08:54', '2021-09-23 21:08:54'),
(2, 3, 1, 'Bien', '2021-09-23 22:22:38', '2021-09-23 22:22:38'),
(3, 5, 8, 'salut!', '2021-09-23 22:41:12', '2021-09-23 22:41:12');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `classe_de_cours_id` int(11) NOT NULL,
  `enseignant_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_fichier_cours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `classe_de_cours_id`, `enseignant_id`, `titre`, `description`, `nom_fichier_cours`, `date_creation`, `date_modification`) VALUES
(1, 1, 1, 'TP1', 'Symfony TP1', 'symfony-5-atelier-1-creation-d-un-projet-614cd0bbb502b209731688.pdf', '2021-09-23 21:08:43', '2021-09-23 21:10:50'),
(4, 1, 1, 'TP2', NULL, 'symfony-5-atelier-2-creation-de-routing-controleur-1-614cd21c08c7d087763707.pdf', '2021-09-23 21:14:36', '2021-09-23 21:14:36'),
(5, 1, 1, 'Chapitre 1', NULL, 'symfony-5-chap1-introduction-symfony-1-614cd283d96d5712187138.pdf', '2021-09-23 21:14:58', '2021-09-23 21:16:19'),
(6, 1, 1, 'Chapitre 2', NULL, 'symfony-5-chap-2-routing-1-614cd2a758b75149933942.pdf', '2021-09-23 21:16:55', '2021-09-23 21:16:55'),
(7, 1, 1, 'Chapitre 3', NULL, 'symfony-5-chap-3-les-controleurs-614cd2c7651bb441772021.pdf', '2021-09-23 21:17:27', '2021-09-23 21:17:27'),
(8, 3, 5, 'tp1', NULL, 'tp1-614e120865ef1364164724.pdf', '2021-09-23 22:40:57', '2021-09-24 19:59:36');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210923183144', '2021-09-23 20:32:08', 15356);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`) VALUES
(1),
(5),
(33);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `formation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `formation_id`) VALUES
(3, 1),
(32, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `titre`) VALUES
(1, 'Symfony'),
(2, 'Angular');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `photo_de_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_compte` tinyint(1) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `roles`, `photo_de_profil`, `activation_compte`, `date_creation`, `date_modification`, `type`) VALUES
(1, 'maha', 'maha', 'maha@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$aWtGWlhPQmtWaVJiS3FHNg$nREwNnh+Srph6qricXcLWsg0We9gvjve5qbKyTbMxx4', '[\"ROLE_ENSEIGNANT\"]', '22195335-1651168881602430-4086804405935773007-n-614cd0e0c6925901536144.jpg', 1, '2021-09-23 20:55:48', '2021-09-23 21:09:20', 'enseignant'),
(2, 'Houda', 'Houda', 'Houda@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$aWtGWlhPQmtWaVJiS3FHNg$nREwNnh+Srph6qricXcLWsg0We9gvjve5qbKyTbMxx4', '[\"ROLE_ADMIN\"]', NULL, 1, '2021-09-23 19:58:23', '2021-09-23 19:58:23', 'admin'),
(3, 'Takwa', 'Takwa', 'Takwa@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$a21Yc1k3d1dNNHVmR2VReA$5bsZ4MLnygrdmFiTcbMuWQJI09T55ot/ubQzDr4amSM', '[\"ROLE_ETUDIANT\"]', NULL, 1, '2021-09-23 21:26:29', '2021-09-23 21:26:29', 'etudiant'),
(5, 'ikram', 'ikram', 'ikram@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dlFrZ29SeUNzZ2VGVG9KeA$8nzzHa4uFhLFIkQ29aRoqYJ6vcLixaGPdD+i2Y9Q37M', '[\"ROLE_ENSEIGNANT\"]', NULL, 1, '2021-09-23 22:38:58', '2021-09-23 22:38:58', 'enseignant'),
(32, 'emna', 'emna', 'emna@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dWlwTE50WFZWeVdZSXFSNw$qfasl+AJbc77ki/hCY7Kw4QES+wCyu04atNwUF6UwN4', '[\"ROLE_ETUDIANT\"]', NULL, 1, '2021-09-24 19:40:40', '2021-09-24 19:41:01', 'etudiant'),
(33, 'salma', 'salma', 'salma@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$R1pDUG9xc2oxbTZlMlhaSg$m1/EiQUjd2O2ytglkUJoQiKq/YFUCdocVedzEvN4oDA', '[\"ROLE_ENSEIGNANT\"]', NULL, 0, '2021-09-24 20:09:50', '2021-09-24 20:09:50', 'enseignant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classe_de_cours`
--
ALTER TABLE `classe_de_cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_14F31B675200282E` (`formation_id`),
  ADD KEY `IDX_14F31B67E455FCC0` (`enseignant_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_67F068BCA76ED395` (`user_id`),
  ADD KEY `IDX_67F068BC7ECF78B0` (`cours_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FDCA8C9CA65B70BD` (`classe_de_cours_id`),
  ADD KEY `IDX_FDCA8C9CE455FCC0` (`enseignant_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_717E22E399863F80` (`formation_id`) USING BTREE;

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe_de_cours`
--
ALTER TABLE `classe_de_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_880E0D76BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `classe_de_cours`
--
ALTER TABLE `classe_de_cours`
  ADD CONSTRAINT `FK_14F31B675200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_14F31B67E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC7ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_67F068BCA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_FDCA8C9CA65B70BD` FOREIGN KEY (`classe_de_cours_id`) REFERENCES `classe_de_cours` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CE455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `FK_81A72FA1BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_717E22E399863F80` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_717E22E3BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

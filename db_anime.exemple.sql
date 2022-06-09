-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2022 at 02:41 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `animes`
--

CREATE TABLE `animes` (
  `anim_id` int NOT NULL COMMENT 'Identificador do Anime',
  `anim_nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Nome do Anime',
  `anim_dt_lancamento` date NOT NULL COMMENT 'Data de Lancamento do Anime',
  `anim_classificacao_indicativa` int NOT NULL COMMENT 'Classificacao Indicativa por Idade',
  `anim_id_genero` int NOT NULL COMMENT 'Genero do Anime',
  `anim_autor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Nome do Autor do Anime',
  `anim_quantidade_episodios` int NOT NULL COMMENT 'Quantidade de Episodios',
  `anim_quantidade_temporadas` int NOT NULL COMMENT 'Quantidade de Temporadas',
  `anim_id_usuario` int NOT NULL COMMENT 'Identificador do Usuario que cadastrou o anime',
  `anim_yt_id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Identificador do Video do Youtube de Opening do Anime'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `animes`
--

INSERT INTO `animes` (`anim_id`, `anim_nome`, `anim_dt_lancamento`, `anim_classificacao_indicativa`, `anim_id_genero`, `anim_autor`, `anim_quantidade_episodios`, `anim_quantidade_temporadas`, `anim_id_usuario`, `anim_yt_id`) VALUES
(1, '86 Eighty-Six', '2021-04-11', 16, 1, 'Asato Asato', 24, 2, 1, 'tA0EEJj4hU0'),
(2, 'Kaguya-sama Love is War', '2019-01-12', 12, 2, 'Aka Akasaka', 36, 3, 1, 'IEb4CQ7DBrs'),
(3, 'Ishuzoku Reviewers', '2020-01-11', 18, 3, 'Amahara', 12, 1, 1, 'QLO4tg0ubXc'),
(4, 'Demon Slayer', '2014-04-06', 17, 1, 'Koyoharu Gotōge', 26, 2, 2, 'XjvaJH8aRc0'),
(5, 'Bleach', '2004-10-05', 16, 7, 'Tite Kubo', 366, 15, 1, 'ofvaakyqiF4'),
(6, 'Naruto', '2002-10-03', 14, 8, 'Masashi Kishimoto', 220, 9, 2, 'lilv4MvBY6E'),
(7, 'One Piece', '1999-10-09', 14, 8, 'Eiichiro Oda', 1019, 15, 1, '-nPwqO30ZOQ'),
(8, 'Black Clover', '2017-10-03', 13, 1, 'Yūki Tabata', 170, 1, 1, 'z17rrRyMxEc'),
(9, 'One Punch Man', '2009-07-03', 14, 1, 'Yusuke Murata', 24, 2, 2, 'sfFv3MTPdkw');

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `genr_id` int NOT NULL COMMENT 'Chave primaria do Genero do Anime',
  `genr_nome` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Nome do Genero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`genr_id`, `genr_nome`) VALUES
(1, 'Ação'),
(2, 'Comédia Romântica'),
(3, 'Ecchi'),
(5, 'Histórico'),
(6, 'Mistério'),
(7, 'Shounen'),
(8, 'Aventura'),
(9, 'Idols'),
(10, 'Pós-Apocalíptico'),
(11, 'Slice-of-Life'),
(12, 'Comédia'),
(13, 'Isekai'),
(14, 'Romance'),
(15, 'Esportes'),
(16, 'Drama'),
(17, 'Garotas Mágicas'),
(18, 'Sci-Fi'),
(19, 'Sobrenatural'),
(20, 'Hentai'),
(21, 'Fantasia'),
(22, 'Mecha'),
(23, 'Seinen'),
(24, 'Suspense'),
(25, 'Harém'),
(26, 'Música'),
(27, 'Shoujo');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int NOT NULL COMMENT 'Identificador do Usuario',
  `usu_login` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Valor do Login para Autenticacao',
  `usu_senha` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Hash da Senha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_login`, `usu_senha`) VALUES
(1, 'gsbenevides', 'Barrissa1'),
(2, 'lucasH', 'lucas123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`anim_id`),
  ADD KEY `genero_fk` (`anim_id_genero`),
  ADD KEY `usuario_fk` (`anim_id_usuario`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`genr_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `anim_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador do Anime', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `genr_id` int NOT NULL AUTO_INCREMENT COMMENT 'Chave primaria do Genero do Anime', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador do Usuario', AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animes`
--
ALTER TABLE `animes`
  ADD CONSTRAINT `genero_fk` FOREIGN KEY (`anim_id_genero`) REFERENCES `generos` (`genr_id`),
  ADD CONSTRAINT `usuario_fk` FOREIGN KEY (`anim_id_usuario`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

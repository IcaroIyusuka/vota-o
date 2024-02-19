-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/02/2024 às 17:09
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `feaps`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `controle`
--

DROP TABLE IF EXISTS `controle`;
CREATE TABLE IF NOT EXISTS `controle` (
  `IDcon` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` int NOT NULL,
  PRIMARY KEY (`IDcon`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `controle`
--

INSERT INTO `controle` (`IDcon`, `usuario`, `senha`) VALUES
(1, 'gere', 123);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gerenciar`
--

DROP TABLE IF EXISTS `gerenciar`;
CREATE TABLE IF NOT EXISTS `gerenciar` (
  `IDassis` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(89) NOT NULL,
  `senha` int NOT NULL,
  PRIMARY KEY (`IDassis`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `gerenciar`
--

INSERT INTO `gerenciar` (`IDassis`, `usuario`, `senha`) VALUES
(1, 'Admin', 1511);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jurados`
--

DROP TABLE IF EXISTS `jurados`;
CREATE TABLE IF NOT EXISTS `jurados` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(105) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `jurados`
--

INSERT INTO `jurados` (`ID`, `usuario`, `senha`) VALUES
(1, 'Angelica', 3725),
(2, 'Lilli', 7596),
(3, 'Nando', 6595),
(4, 'Lucas Mister', 2382),
(5, 'Vitoria', 8143),
(10, 'icaro', 123),
(11, 'teste', 123),
(12, 'carlos', 123),
(13, 'pedro', 123),
(14, 'sergio', 123);

-- --------------------------------------------------------

--
-- Estrutura para tabela `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `IDPAR` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  PRIMARY KEY (`IDPAR`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `party`
--

INSERT INTO `party` (`IDPAR`, `nome`) VALUES
(1, 'Yasmin'),
(2, 'Isadora'),
(3, 'Melissa'),
(4, 'Paola'),
(5, 'Larissa'),
(6, 'Isabelly'),
(7, 'Camilly'),
(8, 'Luana'),
(9, 'Kaiane'),
(10, 'Nicolly');

-- --------------------------------------------------------

--
-- Estrutura para tabela `voto`
--

DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `IDvoto` int NOT NULL AUTO_INCREMENT,
  `ntjeans` int DEFAULT NULL,
  `ntsocial` int DEFAULT NULL,
  `nttipica` int DEFAULT NULL,
  `ntsimpatia` int DEFAULT NULL,
  `id_jure` int NOT NULL,
  `id_part` int NOT NULL,
  `qnd` time NOT NULL,
  PRIMARY KEY (`IDvoto`),
  KEY `id_jure` (`id_jure`),
  KEY `id_part` (`id_part`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `voto`
--

INSERT INTO `voto` (`IDvoto`, `ntjeans`, `ntsocial`, `nttipica`, `ntsimpatia`, `id_jure`, `id_part`, `qnd`) VALUES
(63, 7, 8, 9, 10, 11, 1, '13:41:12'),
(64, 7, 8, 9, 10, 11, 2, '13:41:12'),
(65, 7, 8, 9, 10, 11, 3, '13:41:13'),
(66, 7, 8, 9, 10, 11, 4, '13:41:13'),
(67, 7, 8, 9, 10, 11, 5, '13:41:13'),
(68, 7, 8, 9, 10, 11, 6, '13:41:13'),
(69, 7, 8, 9, 9, 11, 7, '13:41:13'),
(70, 7, 8, 9, 10, 11, 8, '13:41:13'),
(71, 7, 8, 9, 10, 11, 9, '13:41:13'),
(72, 7, 8, 9, 10, 11, 10, '13:41:14'),
(73, 8, 7, 9, 8, 10, 1, '13:41:41'),
(74, 8, 7, 9, 7, 10, 2, '13:41:41'),
(75, 8, 7, 9, 8, 10, 3, '13:41:41'),
(76, 8, 7, 9, 9, 10, 4, '13:41:41'),
(77, 8, 7, 9, 9, 10, 5, '13:41:41'),
(78, 8, 7, 9, 7, 10, 6, '13:41:42'),
(79, 8, 7, 9, 8, 10, 7, '13:41:42'),
(80, 8, 7, 9, 7, 10, 8, '13:41:42'),
(81, 8, 7, 9, 6, 10, 9, '13:41:42'),
(82, 8, 7, 9, 6, 10, 10, '13:41:42');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`id_jure`) REFERENCES `jurados` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voto_ibfk_2` FOREIGN KEY (`id_part`) REFERENCES `party` (`IDPAR`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

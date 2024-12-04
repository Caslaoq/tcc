-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Dez-2024 às 20:45
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_syntax`
--
CREATE DATABASE IF NOT EXISTS `bd_syntax` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_syntax`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`cod`, `nome`, `sobrenome`, `email`, `telefone`, `sexo`, `foto`, `senha`) VALUES
(1, '', '', '', '', '', 'foto/03e7db81533c371404e2443a8bae8ace.jpg', ''),
(2, '', '', '', '', '', 'foto/660b368197ac7216e72d8c80a36d014e.jpg', ''),
(3, '', '', '', '', '', 'foto/f39dce74c789e95fdb9f1ed736c6f762.jpg', ''),
(4, '', '', '', '', '', 'foto/6e0cbe3b02012d45d63863f1d7b9ab6a.jpg', ''),
(5, '', '', '', '', '', 'foto/6e0cbe3b02012d45d63863f1d7b9ab6a.jpg', ''),
(6, 'a', 'a', 'a', 'a', 'a', 'foto/0de3eee09d3e6983ab24eba4824e0217.jpg', ''),
(7, 'b', 'b', 'b', 'b', 'b', 'foto/f14b965382afcc7e81bdd041c786014d.jpg', ''),
(8, 'm', 'm', 'm', 'm', 'm', 'foto/6aed41b1a89e5672533ed4c01b7ede2f.jpg', ''),
(9, 'l', 'l', 'l', 'l', 'l', 'foto/1b55dd70d4a7c296e59bcce9587f5a56.jpg', '$2y$10$x944UiCk4HKdoVf7RDsEo.5oEDAoEAl8RFh7Ap4lF9Z72IO/MM6vC'),
(10, '', '', '', '', '', 'foto/43662668acb1d65970ea93a34cc4ef59.jpg', '$2y$10$MOf.fRJ7fK9z3BkfRMI/bO7GJmSDFJGgSBg1QJZZP/ZhyfiTWcNNS'),
(11, '', '', '', '', '', '', '$2y$10$Kov8rbaa6zDl16POlK5spOapPd8FRDdWapy2g.y5.xQirghm75oLu'),
(12, '', '', '', '', '', '', '$2y$10$Qp2KJJ7xopPQbGEKGplMaecPGQqdxDarxyrXNG0FriedBFkvkBnuG'),
(13, '', '', '', '', '', '', '$2y$10$8BV7aPKlNaP9Z.ImZ9sGbu7vHe2qzLZTX1DItWlKn8j8FGassLFZy'),
(14, '', '', '', '', '', '', '$2y$10$.Z3/YaDEySLKRxR2frgEiuMlE0qYHsgwVQWs78AjiZuovWjvubjhS'),
(15, 'm', 'm', 'm@m', '1', 'on', '', '$2y$10$Z3DxUyNs3ZgWGsR.lTxG8uT37AYFGwqLi64IzqBO/j2/2kE7VV.3m'),
(16, 'n', 'n', 'n@n', '6', 'fem', '', '$2y$10$JOijf68MfUIVWQFByzvuiu3ilJDhPgovn0/1.m51jtpd5jSU2OkUC'),
(17, '', '', '', '', '', '', '$2y$10$ZxXO/ReBc1qT6L7n5o3DTu7IeurXd2ZkWeVXkZT0y2aTH51DO0/fe'),
(18, '', '', '', '', '', '', '$2y$10$L6.OXQ3b1qOPFn.j1iPCJOIwQw.aV8evosw5Pa.FB2NU.6B/FtSkS'),
(19, 'dsad', 'saddssd', 'sdasdsa@gmail.com', '32321', 'masc', '', '$2y$10$eSRNyoaBxXOrT2mZZkJC5u5rZOx18lG5uPpL3tVFBElrd8ZkiivtK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

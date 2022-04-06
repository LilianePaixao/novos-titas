-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: dbMysql
-- Tempo de geração: 06/04/2022 às 18:24
-- Versão do servidor: 8.0.28
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Exercicio15`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cientistas`
--

CREATE TABLE `Cientistas` (
  `id` int NOT NULL,
  `massa` varchar(255) NOT NULL,
  `perda` varchar(255) NOT NULL,
  `tempo_perda` varchar(255) NOT NULL,
  `resultado_calculo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `Cientistas`
--

INSERT INTO `Cientistas` (`id`, `massa`, `perda`, `tempo_perda`, `resultado_calculo`) VALUES
(12, '', '', '', ''),
(13, '0.1', '40', '60', ''),
(14, '0.1', '40', '60', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Cientistas`
--
ALTER TABLE `Cientistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Cientistas`
--
ALTER TABLE `Cientistas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

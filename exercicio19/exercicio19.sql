-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: dbMysql
-- Tempo de geração: 29/04/2022 às 15:53
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
-- Banco de dados: `exercicios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicio19`
--

CREATE TABLE `exercicio19` (
  `id` int NOT NULL,
  `array` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thirdPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourthPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fifthPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sixthPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `exercicio19`
--
ALTER TABLE `exercicio19`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `exercicio19`
--
ALTER TABLE `exercicio19`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: dbMysql
-- Tempo de geração: 30/03/2022 às 17:53
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
-- Banco de dados: `Exercicio17`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Numeros`
--

CREATE TABLE `Numeros` (
  `id` int NOT NULL,
  `numerosDigitados` varchar(255) COLLATE ucs2_unicode_ci NOT NULL,
  `menorNumero` varchar(255) COLLATE ucs2_unicode_ci NOT NULL,
  `maiorNumero` varchar(255) COLLATE ucs2_unicode_ci NOT NULL,
  `media` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `porcentagem` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Numeros`
--
ALTER TABLE `Numeros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Numeros`
--
ALTER TABLE `Numeros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

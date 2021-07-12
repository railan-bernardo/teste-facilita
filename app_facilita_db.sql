-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Jul-2021 às 20:55
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app_facilita_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--
-- Criação: 09-Jul-2021 às 17:17
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` VALUES(1, 'Dom Quixote', '2021-07-09 17:18:58');
INSERT INTO `books` VALUES(2, 'Guerra e Paz', '2021-07-09 17:18:58');
INSERT INTO `books` VALUES(3, 'A Montanha Mágica', '2021-07-09 17:20:30');
INSERT INTO `books` VALUES(4, 'Cem Anos de Solidão', '2021-07-09 17:20:30');
INSERT INTO `books` VALUES(5, 'Ulisses, James Joyce', '2021-07-09 17:21:12');
INSERT INTO `books` VALUES(6, 'Em Busca do Tempo Perdido', '2021-07-09 17:21:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `type_users`
--
-- Criação: 09-Jul-2021 às 17:15
--

CREATE TABLE `type_users` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `type_users`
--

INSERT INTO `type_users` VALUES(1, 1, '2021-07-09 17:22:01');
INSERT INTO `type_users` VALUES(2, 2, '2021-07-09 17:22:01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata para tabela books
--

--
-- Metadata para tabela type_users
--

--
-- Metadata para o banco de dados app_facilita_db
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

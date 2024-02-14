-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/11/2023 às 01:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque-online`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `IdFabricante` int(11) NOT NULL,
  `NomeFabricante` varchar(75) NOT NULL,
  `CNPJFabricante` varchar(75) NOT NULL,
  `EmailFabricante` varchar(75) NOT NULL,
  `TelefoneFabricante` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens`
--

CREATE TABLE `itens` (
  `iditem` int(11) NOT NULL,
  `nomeitem` varchar(45) NOT NULL,
  `quantitens` int(11) NOT NULL,
  `valcompraitens` int(11) NOT NULL,
  `valorvendaitens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `itens`
--

INSERT INTO `itens` (`iditem`, `nomeitem`, `quantitens`, `valcompraitens`, `valorvendaitens`) VALUES
(2, 'Blusa', 25, 40, 60),
(4, 'short', 5, 30, 60),
(5, 'celular', 30, 2500, 2800);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `CodRefProduto` int(11) NOT NULL,
  `NomeProduto` varchar(45) NOT NULL,
  `Usuario_idUser` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cnpj` varchar(75) NOT NULL,
  `nomeloja` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `telefone`, `senha`, `cnpj`, `nomeloja`) VALUES
(1, 'maria eduarda', 'maria@gmail.com', '11223344', 'teste2', '223366', 'duda modas'),
(4, 'testando', 'teste@gmail.com', '112233', 'teste', '', ''),
(5, 'teste2', 'teste333@gmail.com', '88996633', 'teste333', '889966', 'easy estoques');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`iditem`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

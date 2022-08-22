-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 19:13
-- Versão do servidor: 5.7.20-log
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vagalume`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`) VALUES
(2, 'Edi', 'sssssssssssss', '123'),
(4, 'Yan', 'email', '123'),
(5, 'nome', 'email', '123546589'),
(6, 'nome', 'email', 'senha'),
(7, 'nome', 'email@gmail.com', 'senha'),
(8, 'Yan', 'yan@gmail.com', '123'),
(9, 'administrador', 'admin@admin.com', '123'),
(10, 'nome', 'email1@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doado`
--

CREATE TABLE `doado` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `colaborado` varchar(255) NOT NULL,
  `numeroPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `doado`
--

INSERT INTO `doado` (`id`, `nome`, `email`, `cidade`, `senha`, `colaborado`, `numeroPedido`) VALUES
(1, 'nome', 'email', 'cidade', '123', 'money', 1),
(3, 'eu', 'emailTOP', 'Sidade', 'senha', 'cólabori aí', 123),
(4, 'testando123', 'sssss', 'ddddfff', '123', 'col', 321),
(5, 'yan', 'yan@gmail.com', 'campina', '123', 'dinheiro', 27),
(6, 'testando123', 'email', 'cidade', '123', 'money', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `pedido` text NOT NULL,
  `senha` varchar(255) NOT NULL,
  `atendido` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nome`, `email`, `cidade`, `pedido`, `senha`, `atendido`) VALUES
(24, 'nome editado', 'aaaaaa', 'aaaaa', 'a321321', '212321', 'sim'),
(25, 'dsa', 'aaaaaa', 'dsa', 'dsa', 'dsa', ''),
(26, 'nome', 'email', 'cidade', 'pedido', 'senha', ''),
(27, 'renato', 'renato@gmail.com', 'campina grande', 'Dinheiro', '123', ''),
(28, 'testando123', 'email1', 'cidade', 'dinheiro', '123', ''),
(29, 'nomea', 'aaa', 'cidadea', 'pedido1a', 'asd', 'não'),
(30, 'edi', 'email', 'campina', 'emprego', '321', 'sim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doado`
--
ALTER TABLE `doado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doado`
--
ALTER TABLE `doado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

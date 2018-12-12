-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2018 às 20:09
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `telefone`, `email`, `senha`, `tipo`, `endereco`, `foto`) VALUES
(1, 'Geraldo Alves', '222', 'geraldo@mail.com', '1234', 0, 'Rua 1230', 0x6568206d6f6c652e6a7067),
(2, 'Christopher', '12345', 'cfr@mail.com', '1010', 1, 'Rua 10', NULL),
(3, 'Gildo Soares', '32323232', 'gildo@mail.com', '1234', 0, 'Rua 2', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `forma_pagamento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entrega` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `data`, `forma_pagamento`, `entrega`, `valor`, `cliente_idcliente`) VALUES
(11, '2018-12-12 06:49:46', 'dinheiro', 'nao', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_produto`
--

CREATE TABLE `pedido_produto` (
  `idpedido_produto` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `tamanho_idtamanho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sabor`
--

CREATE TABLE `sabor` (
  `idsabor` int(11) NOT NULL,
  `ingredientes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sabor`
--

INSERT INTO `sabor` (`idsabor`, `ingredientes`, `status`, `nome`) VALUES
(1, 'linguiça calabresa, molho espacial, queijo parmesão, massa fina', 'n', 'Pizza Calabresa'),
(2, 'queijos mussarela, provolone, cheddar e parmesão, molho espacial, massa fina', 'n', 'Pizza 4 Queijos'),
(3, 'queijo mussarela, suculentos pedaÃ§os de cebola, molho espacial, massa fina', 'n', 'Pizza Mussarela'),
(4, 'strogonoff de carne, molho espacial, massa fina', 'n', 'Pizza Strogonoff'),
(5, 'frango com catupiry, molho espacial, massa fina', 'n', 'Pizza Frango'),
(6, 'calda crocante de chocolate, pedaÃ§os de morango, massa fina', 'n', 'Pizza SensaÃ§Ã£o'),
(7, 'borda', 'b', 'Catupiry'),
(8, 'borda', 'b', 'Cheddar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sabor_has_pedido_produto`
--

CREATE TABLE `sabor_has_pedido_produto` (
  `sabor_idsabor` int(11) NOT NULL,
  `pedido_produto_idpedido_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `idtamanho` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tamanho`
--

INSERT INTO `tamanho` (`idtamanho`, `descricao`, `qtde`, `valor`) VALUES
(1, 'Broto', 1, 25),
(2, 'Media', 2, 27),
(3, 'Grande', 3, 35),
(4, 'Familia', 4, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_pedido_cliente1` (`cliente_idcliente`);

--
-- Indexes for table `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD PRIMARY KEY (`idpedido_produto`),
  ADD KEY `fk_pedido_produto` (`produto_idproduto`),
  ADD KEY `fk_pedido_produto_tamanho1` (`tamanho_idtamanho`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `sabor`
--
ALTER TABLE `sabor`
  ADD PRIMARY KEY (`idsabor`);

--
-- Indexes for table `sabor_has_pedido_produto`
--
ALTER TABLE `sabor_has_pedido_produto`
  ADD PRIMARY KEY (`sabor_idsabor`,`pedido_produto_idpedido_produto`),
  ADD KEY `fk_sabor_has_pedido_produto_pedido_produto1` (`pedido_produto_idpedido_produto`);

--
-- Indexes for table `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`idtamanho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pedido_produto`
--
ALTER TABLE `pedido_produto`
  MODIFY `idpedido_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sabor`
--
ALTER TABLE `sabor`
  MODIFY `idsabor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `idtamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD CONSTRAINT `fk_pedido_produto` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_produto_tamanho1` FOREIGN KEY (`tamanho_idtamanho`) REFERENCES `tamanho` (`idtamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sabor_has_pedido_produto`
--
ALTER TABLE `sabor_has_pedido_produto`
  ADD CONSTRAINT `fk_sabor_has_pedido_produto_pedido_produto1` FOREIGN KEY (`pedido_produto_idpedido_produto`) REFERENCES `pedido_produto` (`idpedido_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sabor_has_pedido_produto_sabor1` FOREIGN KEY (`sabor_idsabor`) REFERENCES `sabor` (`idsabor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 06/12/2018 às 11:00
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_jeff_logico`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `caminhao`
--

CREATE TABLE `caminhao` (
  `cod_caminhao` int(11) NOT NULL,
  `ano_modelo` year(4) DEFAULT NULL,
  `ano_fabricacao` year(4) DEFAULT NULL,
  `capacidade` int(11) DEFAULT NULL,
  `cod_modelo` int(11) DEFAULT NULL,
  `cod_tipo` int(11) DEFAULT NULL,
  `cod_caminhoneiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `caminhao`
--

INSERT INTO `caminhao` (`cod_caminhao`, `ano_modelo`, `ano_fabricacao`, `capacidade`, `cod_modelo`, `cod_tipo`, `cod_caminhoneiro`) VALUES
(1, 2001, 2001, 123, 10, 14, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `caminhoneiro`
--

CREATE TABLE `caminhoneiro` (
  `cod_caminhoneiro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `rg` varchar(7) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `num_antt` varchar(45) NOT NULL,
  `num_cnh` varchar(11) NOT NULL,
  `categoria_cnh` varchar(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `caminhoneiro`
--

INSERT INTO `caminhoneiro` (`cod_caminhoneiro`, `nome`, `email`, `telefone`, `senha`, `rg`, `cpf`, `num_antt`, `num_cnh`, `categoria_cnh`, `cod_cidade`) VALUES
(1, 'Bino', 'bino@gmail.com', '123', '123', '123', '123', '123', '123', 'D', 1),
(2, 'Pedro', 'pedro@gmail.com', '123', '123', '123', '123', '123', '123', 'D', 1),
(5, 'medicina', 'felipepassig@hotmail.com', '4799999886', '123', '123', '123', '123', '123', 'a', 1),
(10, 'dsad', 'as@gcf', '12311231223', '13', '213', '231', '1213', '1231', 'e', 1),
(11, 'dsad', 'as@gcf', '12311231223', '13', '213', '231', '1213', '1231', 'e', 1),
(12, 'dsad', 'as@gcf', '12311231223', '13', '213', '231', '1213', '1231', 'e', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carreta`
--

CREATE TABLE `carreta` (
  `cod_carreta` int(11) NOT NULL,
  `ano_fabricacao` year(4) DEFAULT NULL,
  `ano_modelo` year(4) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `carreta`
--

INSERT INTO `carreta` (`cod_carreta`, `ano_fabricacao`, `ano_modelo`, `cod_produto`) VALUES
(1, 2002, 2002, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `cod_cidade` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cod_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nome`, `cod_estado`) VALUES
(1, 'Joinville', 1),
(2, 'Campinas', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `cod_estado` int(11) NOT NULL,
  `siglauf` char(2) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `estado`
--

INSERT INTO `estado` (`cod_estado`, `siglauf`, `nome`) VALUES
(1, 'MG', 'Minas Gerais'),
(2, 'SC', 'Santa Catarina'),
(3, 'SP', 'São Paulo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `cod_servico` int(11) DEFAULT NULL,
  `data_insc` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `inscricao`
--

INSERT INTO `inscricao` (`cod_servico`, `data_insc`, `status`) VALUES
(NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `cod_modelo` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cod_montadora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `modelo`
--

INSERT INTO `modelo` (`cod_modelo`, `nome`, `cod_montadora`) VALUES
(10, 'Cummins ISB6.7 226 P7', 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `montadora`
--

CREATE TABLE `montadora` (
  `cod_montadora` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `montadora`
--

INSERT INTO `montadora` (`cod_montadora`, `nome`) VALUES
(0, 'Ford'),
(4, 'Belo Horizonte'),
(12, 'Ford');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servico`
--

CREATE TABLE `servico` (
  `numero_seguro` int(11) DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `cod_servico` int(11) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_retirada` date DEFAULT NULL,
  `data_retirada_prev` date DEFAULT NULL,
  `data_entrega_prev` date DEFAULT NULL,
  `cod_status` int(11) DEFAULT NULL,
  `cod_cidade` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `status_servico`
--

CREATE TABLE `status_servico` (
  `cod_status` int(11) NOT NULL,
  `desc_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_caminhao`
--

CREATE TABLE `tipo_caminhao` (
  `cod_tipo` int(11) NOT NULL,
  `descricao` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_caminhao`
--

INSERT INTO `tipo_caminhao` (`cod_tipo`, `descricao`) VALUES
(14, 'Caminhão pesado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `cod_produto` int(11) NOT NULL,
  `descricao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`cod_produto`, `descricao`) VALUES
(1, 'Perecíveis'),
(2, 'Granel sólido');

-- --------------------------------------------------------

--
-- Estrutura para tabela `transportadora`
--

CREATE TABLE `transportadora` (
  `cod_transportadora` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `razao_social` varchar(180) NOT NULL,
  `cnpj` int(11) NOT NULL,
  `cidade_cod_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `transportadora`
--

INSERT INTO `transportadora` (`cod_transportadora`, `nome`, `email`, `telefone`, `senha`, `razao_social`, `cnpj`, `cidade_cod_cidade`) VALUES
(1, 'Silvio Santos', 'silvio@gmail.com', '4796647979', '123', '123', 123, 1),
(2, 'Ostel Cargas', 'ostel.cargas@gmail.com', '02161-170 ', '123', 'Ostel Transportes Ltda.', 1312312323, 2),
(3, 'mario', 'mario@gmail.com', '12312312312', '123', '', 123, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `caminhao`
--
ALTER TABLE `caminhao`
  ADD PRIMARY KEY (`cod_caminhao`,`cod_caminhoneiro`),
  ADD KEY `cod_tipo` (`cod_tipo`),
  ADD KEY `cod_modelo` (`cod_modelo`),
  ADD KEY `fk_caminhao_caminhoneiro1_idx` (`cod_caminhoneiro`);

--
-- Índices de tabela `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD PRIMARY KEY (`cod_caminhoneiro`),
  ADD KEY `fk_caminhoneiro1_cidade1_idx` (`cod_cidade`);

--
-- Índices de tabela `carreta`
--
ALTER TABLE `carreta`
  ADD PRIMARY KEY (`cod_carreta`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`cod_cidade`),
  ADD KEY `cod_estado` (`cod_estado`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Índices de tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD KEY `cod_servico` (`cod_servico`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`cod_modelo`),
  ADD KEY `cod_montadora` (`cod_montadora`);

--
-- Índices de tabela `montadora`
--
ALTER TABLE `montadora`
  ADD PRIMARY KEY (`cod_montadora`);

--
-- Índices de tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`),
  ADD KEY `cod_status` (`cod_status`),
  ADD KEY `cod_cidade` (`cod_cidade`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Índices de tabela `status_servico`
--
ALTER TABLE `status_servico`
  ADD PRIMARY KEY (`cod_status`);

--
-- Índices de tabela `tipo_caminhao`
--
ALTER TABLE `tipo_caminhao`
  ADD PRIMARY KEY (`cod_tipo`);

--
-- Índices de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Índices de tabela `transportadora`
--
ALTER TABLE `transportadora`
  ADD PRIMARY KEY (`cod_transportadora`),
  ADD KEY `fk_transportadora_cidade1_idx` (`cidade_cod_cidade`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  MODIFY `cod_caminhoneiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `cod_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `transportadora`
--
ALTER TABLE `transportadora`
  MODIFY `cod_transportadora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `caminhao`
--
ALTER TABLE `caminhao`
  ADD CONSTRAINT `caminhao_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_caminhao` (`cod_tipo`),
  ADD CONSTRAINT `caminhao_ibfk_2` FOREIGN KEY (`cod_modelo`) REFERENCES `modelo` (`cod_modelo`),
  ADD CONSTRAINT `fk_caminhao_caminhoneiro1` FOREIGN KEY (`cod_caminhoneiro`) REFERENCES `caminhoneiro` (`cod_caminhoneiro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD CONSTRAINT `fk_caminhoneiro1_cidade1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `carreta`
--
ALTER TABLE `carreta`
  ADD CONSTRAINT `carreta_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `tipo_produto` (`cod_produto`);

--
-- Restrições para tabelas `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`);

--
-- Restrições para tabelas `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `inscricao_ibfk_1` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`cod_montadora`) REFERENCES `montadora` (`cod_montadora`);

--
-- Restrições para tabelas `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`cod_status`) REFERENCES `status_servico` (`cod_status`),
  ADD CONSTRAINT `servico_ibfk_2` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`),
  ADD CONSTRAINT `servico_ibfk_3` FOREIGN KEY (`cod_produto`) REFERENCES `tipo_produto` (`cod_produto`);

--
-- Restrições para tabelas `transportadora`
--
ALTER TABLE `transportadora`
  ADD CONSTRAINT `fk_transportadora_cidade1` FOREIGN KEY (`cidade_cod_cidade`) REFERENCES `cidade` (`cod_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

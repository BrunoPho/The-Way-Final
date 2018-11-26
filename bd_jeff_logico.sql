-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2018 às 17:33
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
-- Database: `bd_jeff_logico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhao`
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
-- Extraindo dados da tabela `caminhao`
--

INSERT INTO `caminhao` (`cod_caminhao`, `ano_modelo`, `ano_fabricacao`, `capacidade`, `cod_modelo`, `cod_tipo`, `cod_caminhoneiro`) VALUES
(1, 2001, 2001, 123, 10, 14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhoneiro`
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
-- Extraindo dados da tabela `caminhoneiro`
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
-- Estrutura da tabela `carreta`
--

CREATE TABLE `carreta` (
  `cod_carreta` int(11) NOT NULL,
  `ano_fabricacao` year(4) DEFAULT NULL,
  `ano_modelo` year(4) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carreta`
--

INSERT INTO `carreta` (`cod_carreta`, `ano_fabricacao`, `ano_modelo`, `cod_produto`) VALUES
(1, 2002, 2002, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `cod_cidade` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cod_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nome`, `cod_estado`) VALUES
(1, 'Joinville', 1),
(2, 'Campinas', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `cod_estado` int(11) NOT NULL,
  `siglauf` char(2) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`cod_estado`, `siglauf`, `nome`) VALUES
(1, 'MG', 'Minas Gerais'),
(2, 'SC', 'Santa Catarina'),
(3, 'SP', 'São Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `cod_servico` int(11) DEFAULT NULL,
  `data_insc` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`cod_servico`, `data_insc`, `status`) VALUES
(NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `cod_modelo` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cod_montadora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`cod_modelo`, `nome`, `cod_montadora`) VALUES
(10, 'Cummins ISB6.7 226 P7', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `montadora`
--

CREATE TABLE `montadora` (
  `cod_montadora` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `montadora`
--

INSERT INTO `montadora` (`cod_montadora`, `nome`) VALUES
(0, 'Ford'),
(4, 'Belo Horizonte'),
(12, 'Ford');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
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
-- Estrutura da tabela `status_servico`
--

CREATE TABLE `status_servico` (
  `cod_status` int(11) NOT NULL,
  `desc_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_caminhao`
--

CREATE TABLE `tipo_caminhao` (
  `cod_tipo` int(11) NOT NULL,
  `descricao` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_caminhao`
--

INSERT INTO `tipo_caminhao` (`cod_tipo`, `descricao`) VALUES
(14, 'Caminhão pesado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `cod_produto` int(11) NOT NULL,
  `descricao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`cod_produto`, `descricao`) VALUES
(1, 'Perecíveis'),
(2, 'Granel sólido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transportadora`
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
-- Extraindo dados da tabela `transportadora`
--

INSERT INTO `transportadora` (`cod_transportadora`, `nome`, `email`, `telefone`, `senha`, `razao_social`, `cnpj`, `cidade_cod_cidade`) VALUES
(1, 'Silvio Santos', 'silvio@gmail.com', '4796647979', '123', '123', 123, 1),
(2, 'Ostel Cargas', 'ostel.cargas@gmail.com', '02161-170 ', '123', 'Ostel Transportes Ltda.', 1312312323, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caminhao`
--
ALTER TABLE `caminhao`
  ADD PRIMARY KEY (`cod_caminhao`,`cod_caminhoneiro`),
  ADD KEY `cod_tipo` (`cod_tipo`),
  ADD KEY `cod_modelo` (`cod_modelo`),
  ADD KEY `fk_caminhao_caminhoneiro1_idx` (`cod_caminhoneiro`);

--
-- Indexes for table `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD PRIMARY KEY (`cod_caminhoneiro`),
  ADD KEY `fk_caminhoneiro1_cidade1_idx` (`cod_cidade`);

--
-- Indexes for table `carreta`
--
ALTER TABLE `carreta`
  ADD PRIMARY KEY (`cod_carreta`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`cod_cidade`),
  ADD KEY `cod_estado` (`cod_estado`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Indexes for table `inscricao`
--
ALTER TABLE `inscricao`
  ADD KEY `cod_servico` (`cod_servico`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`cod_modelo`),
  ADD KEY `cod_montadora` (`cod_montadora`);

--
-- Indexes for table `montadora`
--
ALTER TABLE `montadora`
  ADD PRIMARY KEY (`cod_montadora`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`),
  ADD KEY `cod_status` (`cod_status`),
  ADD KEY `cod_cidade` (`cod_cidade`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Indexes for table `status_servico`
--
ALTER TABLE `status_servico`
  ADD PRIMARY KEY (`cod_status`);

--
-- Indexes for table `tipo_caminhao`
--
ALTER TABLE `tipo_caminhao`
  ADD PRIMARY KEY (`cod_tipo`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Indexes for table `transportadora`
--
ALTER TABLE `transportadora`
  ADD PRIMARY KEY (`cod_transportadora`),
  ADD KEY `fk_transportadora_cidade1_idx` (`cidade_cod_cidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  MODIFY `cod_caminhoneiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `cod_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `caminhao`
--
ALTER TABLE `caminhao`
  ADD CONSTRAINT `caminhao_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_caminhao` (`cod_tipo`),
  ADD CONSTRAINT `caminhao_ibfk_2` FOREIGN KEY (`cod_modelo`) REFERENCES `modelo` (`cod_modelo`),
  ADD CONSTRAINT `fk_caminhao_caminhoneiro1` FOREIGN KEY (`cod_caminhoneiro`) REFERENCES `caminhoneiro` (`cod_caminhoneiro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD CONSTRAINT `fk_caminhoneiro1_cidade1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `carreta`
--
ALTER TABLE `carreta`
  ADD CONSTRAINT `carreta_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `tipo_produto` (`cod_produto`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`);

--
-- Limitadores para a tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `inscricao_ibfk_1` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);

--
-- Limitadores para a tabela `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`cod_montadora`) REFERENCES `montadora` (`cod_montadora`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`cod_status`) REFERENCES `status_servico` (`cod_status`),
  ADD CONSTRAINT `servico_ibfk_2` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`),
  ADD CONSTRAINT `servico_ibfk_3` FOREIGN KEY (`cod_produto`) REFERENCES `tipo_produto` (`cod_produto`);

--
-- Limitadores para a tabela `transportadora`
--
ALTER TABLE `transportadora`
  ADD CONSTRAINT `fk_transportadora_cidade1` FOREIGN KEY (`cidade_cod_cidade`) REFERENCES `cidade` (`cod_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2015 at 06:08 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatec-aracatuba`
--
CREATE DATABASE IF NOT EXISTS `fatec-aracatuba` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `fatec-aracatuba`;

-- --------------------------------------------------------

--
-- Table structure for table `acessos`
--

DROP TABLE IF EXISTS `acessos`;
CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `acessos`
--

TRUNCATE TABLE `acessos`;
-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_inscricao` date NOT NULL,
  `tg_pdf` varchar(300) COLLATE utf8_bin NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `alunos`
--

TRUNCATE TABLE `alunos`;
--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `data_inscricao`, `tg_pdf`, `id_turma`) VALUES
(3, 'Teste da Silva A', '2015-10-27', '', 2),
(4, 'Teste da Silva 2', '2015-10-27', '', 3),
(5, 'Teste da Silva 3.0', '2015-10-27', '', 1),
(6, 'Lala 1', '2015-10-27', '', 3),
(7, 'Raios', '2015-10-27', 'C:xampp	mpphpAC34.tmp', 1),
(8, 'Lala Raios', '2015-10-27', '', 1),
(9, 'Raios Lala', '2015-10-27', 'Armazenando dados com Redis - Casa do Codigo.pdf', 1),
(10, 'Teste santos', '2015-10-27', '', 1),
(11, 'Teste link pdf', '2015-10-27', 'TGs/Curso_Lua.pdf', 1),
(12, 'Marcelo Loboto', '2015-11-14', 'TGs/Boneco TG .pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `cursos`
--

TRUNCATE TABLE `cursos`;
--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `nome`) VALUES
(1, 'Biocombustíveis'),
(2, 'Análise e Desenvolvimento de Sistemas');

-- --------------------------------------------------------

--
-- Table structure for table `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `semestre` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `turmas`
--

TRUNCATE TABLE `turmas`;
--
-- Dumping data for table `turmas`
--

INSERT INTO `turmas` (`id`, `descricao`, `semestre`, `data_inicio`, `data_termino`, `curso`) VALUES
(1, 'Turma do 1º Semestre do Curso de Análise e Desen. de Sistemas', 1, '2012-01-22', '2014-11-22', 2),
(2, 'Turma do 2º Bimestre do Curso de Biocombustíveis', 2, '2013-08-02', '2016-08-02', 1),
(3, 'Turma do 1Âº Semestre do curso de BiocombustÃ­veis de 2011', 1, '2011-02-02', '2013-12-02', 1),
(4, 'Turma do 2º Semestre do curso de Análise e Desen. de Sistemas de 2012', 2, '2012-08-02', '2015-08-02', 2),
(5, 'Turma do 2º Semestre do curso de 2 de 2015', 2, '2015-11-13', '2015-11-07', 2),
(6, 'Turma do 1º Semestre do curso de 1 de 2015', 1, '2015-11-25', '2015-11-27', 1),
(7, 'Turma do 1º Semestre do curso de 2 de 2017', 1, '2017-06-08', '2019-01-21', 2),
(8, 'Turma do 2º Semestre do curso de 2 de 2015', 2, '2015-11-27', '2015-11-20', 2),
(9, 'Turma do 2º Semestre do curso de Biocombustíveis de 2022', 2, '2022-02-22', '2025-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(30) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `tipo`) VALUES
(1, 'administrador', 'adm', 'administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso` (`curso`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `turmas` (`id`);

--
-- Constraints for table `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `cursos_fk` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2015 às 01:45
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fatec-aracatuba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_inscricao` date NOT NULL,
  `tg_pdf` varchar(300) COLLATE utf8_bin NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `data_inscricao`, `tg_pdf`, `id_turma`) VALUES
(2, 'Teste da Silva', '2015-10-27', '', 2),
(3, 'Teste da Silva', '2015-10-27', '', 2),
(4, 'Teste da Silva 2', '2015-10-27', '', 3),
(5, 'Teste da Silva 3.0', '2015-10-27', '', 1),
(6, 'Lala 1', '2015-10-27', '', 3),
(7, 'Raios', '2015-10-27', 'C:xampp	mpphpAC34.tmp', 1),
(8, 'Lala Raios', '2015-10-27', '', 1),
(9, 'Raios Lala', '2015-10-27', 'Armazenando dados com Redis - Casa do Codigo.pdf', 1),
(10, 'Teste santos', '2015-10-27', '', 1),
(11, 'Teste link pdf', '2015-10-27', 'TGs/Curso_Lua.pdf', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `semestre` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL,
  `curso` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `descricao`, `semestre`, `data_inicio`, `data_termino`, `curso`) VALUES
(1, 'Turma do 1º Semestre do Curso de Análise e Desen. de Sistemas', 1, '2012-01-22', '2014-11-22', 'Análise e Desen. de Sistemas'),
(2, 'Turma do 2º Bimestre do Curso de Biocombustíveis', 2, '2013-08-02', '2016-08-02', 'Biocombustíveis'),
(3, 'Turma do 1Âº Semestre do curso de BiocombustÃ­veis de 2011', 1, '2011-02-02', '2013-12-02', 'Biocombustíveis'),
(4, 'Turma do 2º Semestre do curso de Análise e Desen. de Sistemas de 2012', 2, '2012-08-02', '2015-08-02', 'Análise e Desen. de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(30) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
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
  ADD PRIMARY KEY (`id`), ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `turmas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

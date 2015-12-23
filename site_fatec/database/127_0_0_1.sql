-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2015 às 20:00
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

--
-- RELATIONS FOR TABLE `acessos`:
--

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `alunos`:
--   `id_turma`
--       `turmas` -> `id`
--

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `data_inscricao`, `tg_pdf`, `id_turma`) VALUES
(12, 'Lissandro Silva Santos', '2015-11-14', 'TGs/Curso_Lua.pdf', 5),
(13, 'Teste da Silva', '2015-11-30', 'TGs/DFD NÍVEL 0.pdf', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `conteudo` text COLLATE utf8_bin NOT NULL,
  `data_envio` datetime NOT NULL,
  `data_alteracao` datetime NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `avisos`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `data_envio` datetime NOT NULL,
  `banner_img` varchar(100) COLLATE utf8_bin NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `banners`:
--

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `data_envio`, `banner_img`, `ativo`) VALUES
(12, '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `cursos`:
--

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`) VALUES
(1, 'Biocombustíveis'),
(2, 'Análise e Desen. de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL,
  `data_envio` date NOT NULL,
  `horario_pdf` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `horarios`:
--   `id_curso`
--       `cursos` -> `id`
--

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `data_envio`, `horario_pdf`, `id_curso`, `ativo`) VALUES
(1, '0000-00-00', '', 2, 0),
(2, '0000-00-00', '', 2, 0),
(3, '0000-00-00', '', 1, 0),
(4, '0000-00-00', '', 1, 0),
(5, '0000-00-00', '', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `mail`:
--

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `turmas`:
--

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `descricao`, `semestre`, `data_inicio`, `data_termino`, `curso`) VALUES
(5, 'Turma do 1º Semestre do curso de Análise e Desen. de Sistemas de 2012', 1, '2012-08-01', '2015-08-01', '2');

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
-- RELATIONS FOR TABLE `usuarios`:
--

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
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`), ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

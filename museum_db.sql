-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 01:39
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `museum_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acervo`
--

CREATE TABLE `acervo` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `DESCRICAO` varchar(500) NOT NULL,
  `FOTO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `acervo`
--

INSERT INTO `acervo` (`ID`, `NOME`, `DESCRICAO`, `FOTO`) VALUES
(2, 'Concha de batismo feita de prata', 'Este objeto foi utilizado para o batismo de Paulo Agostinho na igreja que havia sido recém criada na cidade', 'img648e1f4ace5ce2.61276118.png'),
(23, 'Naveta de Prata', 'Uma naveta é um objeto litúrgico, em forma de barco, utilizada para o transporte do incenso destinado a ser queimado no turíbulo em cerimónias religiosas de igrejas cristãs. As navetas são, em regra, construídas em prata.', 'img648e7f7a8809d4.98912662.jpg'),
(26, 'O Pensador', 'Essa obra se tornou um símbolo duradouro da busca pelo conhecimento, conquistando um lugar especial no coração da arte e no imaginário coletivo.', 'img655a6eb5c31990.50139484.jpg'),
(27, 'A Noite Estrelada', 'Esta é sem dúvida uma das pinturas mais famosas de Vincent van Gogh, artista holandês pós-impressionista. Ao contrário de suas outras obras, A Noite Estrelada é uma das poucas que foi pintada sem a existência de uma paisagem real como modelo. No entanto, o artista alega ter se inspirado nas paisagens de Provence.\r\n\r\nA Noite Estrelada foi um dos 150 quadros que Van Gogh pintou enquanto esteve no asilo em Saint-Rémy-de-Provence, na França. O artista esteve internado por muitos anos na tentativa de', 'img655a72bfde3c20.23200624.jpg'),
(28, 'Os Girassóis (1888)', 'Os Girassóis, do pintor holandês Vincent Van Gogh (1853-1890), são uma série de pinturas icônicas que transmitem a paixão e a visão de mundo do artista. Com cores vibrantes e pinceladas enérgicas, Van Gogh busca capturar a essência da vida na beleza efêmera de seus girassóis.\r\n\r\nSuas obras revelam a ligação do pintor com a natureza, sua constante luta interna e a busca por significado através da arte, convidando o espectador a contemplar a riqueza da experiência humana.\r\n\r\nAté hoje, essas pintur', 'img655a7320445fd9.07280079.jpg'),
(29, 'O Grito', 'Uma das obras mais famosas do artista norueguês Edvard Munch e de toda a história da arte moderna!\r\n\r\nO Grito se transformou num ícone cultural ao longo dos anos, sendo considerado como uma das obras que melhor define o movimento expressionista da época.\r\n\r\nPoucas obras artísticas foram capazes de transmitir com tanta clareza o sentimento de angústia e desespero do ser humano como O Grito.', 'img655a73d8b2e7f9.65391961.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` int(11) NOT NULL,
  `COMENTARIO` varchar(500) NOT NULL,
  `ID_ACERVO` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `NOME_USUARIO` varchar(50) NOT NULL,
  `FOTO_USUARIO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comentarios`
--

INSERT INTO `comentarios` (`ID`, `COMENTARIO`, `ID_ACERVO`, `ID_USUARIO`, `NOME_USUARIO`, `FOTO_USUARIO`) VALUES
(1, 'mensagem\r\n', 2, 1, 'admin_Mestre', 'admMestre.png'),
(2, 'teste', 23, 1, 'admin_Mestre', 'admMestre.png'),
(3, 'teste', 26, 1, 'admin_Mestre', 'admMestre.png'),
(4, 'teste', 27, 1, 'admin_Mestre', 'admMestre.png'),
(7, 'teste 6', 2, 35, 'Antonio oliveira', 'img6562a4ad929334.79195926.png'),
(9, 'teste 1', 28, 35, 'Antonio oliveira', 'img6562a4ad929334.79195926.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `NICK` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `CIDADE` varchar(50) NOT NULL,
  `FOTO` varchar(220) NOT NULL,
  `DATA_CRIACAO` date NOT NULL DEFAULT current_timestamp(),
  `TIPO_USUARIO` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME`, `NICK`, `EMAIL`, `SENHA`, `TELEFONE`, `DATA_NASCIMENTO`, `CIDADE`, `FOTO`, `DATA_CRIACAO`, `TIPO_USUARIO`) VALUES
(1, 'admin_Mestre', 'adm1234567', 'adm_Mestre@email.com', '12345678', '00 00000-0001', '2000-01-01', 'São Paulo', 'admMestre.png', '2023-06-08', 0),
(2, 'Fernando Souza', 'Fernando090', 'fernando28.souza@gmail.com', 'fernando@123', '17 63790-4778', '1991-06-08', 'Alvares Florence 320', 'img649754cf62db86.69445586.png', '2023-06-24', 2),
(35, 'Antonio oliveira', 'Antonio12345', 'antonio.o@email.com', 'AntonioOliveira#@1020', '19 37729-3867', '2000-01-29', 'SP', 'img6562a4ad929334.79195926.png', '2023-11-25', 2),
(36, 'antonio souza', 'AntAdm346', 'antonio.s@email.com', 'antonio@123', '17 63790-4795', '1988-05-17', 'SP', 'adm.png', '2023-11-27', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acervo`
--
ALTER TABLE `acervo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acervo`
--
ALTER TABLE `acervo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Sistema de login PHP + MYSQL:
20/10/2022 - Sistema de Login em PHP + MYSQL: 
Desenvolvedor: Emerson P. Silva
E-mail: emerson.pereira@gmail.com
Site: https://www.php4you.com.br


```html
Raiz do Projeto:
|
├── BD/
|    └── wsphp_login.sql
|           └── Arquivo SQL com o esquema para criação da tabela no MYSQL/MARIADB
|
├── Includes/
|    └── config.php
|           └── Arquivo que faz conexão com o Banco de Dados
|
|
├── .htaccess
|
├── desloga.php
|
├── formulario.php
|
├── home.php
|
├── LICENSE
|
├── login.php
|
├── README.md
|
├── sistema.php
|
├── verificaLogin.php
|
|
```

# Código SQL da Tabela tbl_usuarios, Ultilizei o MySql:
```sql
-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `senha`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(1, 'Emerson Silva', 'demo@demo.com', 'demo@demo.com', '2147483647', 'masculino', '0000-00-00', 'São Paulo', 'SP', 'Estrada do campo limpo, 143'),
(2, 'Daniela Silva', 'demo@demo.com', 'demo@demo.com', '2147483647', 'feminino', '1977-03-16', 'São Paulo', 'SP', 'Estrada do campo limpo, 143'),
(3, 'MARIA', 'MARIA@MARIA.COM', 'maria@maria.com', '2147483647', 'feminino', '1978-01-01', 'MINAS GERAIS', 'MG', 'Teste de end'),
(4, 'MARIA', 'asasasasasas', 'teste', '11976152221', 'feminino', '2019-01-01', 'a', 'a', 'a'),
(5, 'paulo', 'aminhasenha', 'paulo@paulo.com.br', '119944554455', 'masculino', '1977-03-12', 'SAO PAULo', 'SP', 'ajkashjkasjkahssaska'),
(6, 'MAURAO', 'mauraokasasas', 'mauraokkkk@maurao.com.br', '119761522221', 'masculino', '2021-02-15', 'MINAS GERAIS', 'MG', 'jkasklashjsajhasjhsajk');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```
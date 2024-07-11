CREATE DATABASE IF NOT EXISTS cadastro;     -- criação do banco de dados 'cadastro'

USE cadastro;       -- utilização do banco de dados 'cadastro'

CREATE TABLE IF NOT EXISTS `usuarios` (     -- criação da tabela 'usuarios'
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nasc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `data_nasc`) VALUES       -- exemplo de inserção de dados na tabela 'usuarios'
('Luis henrique', 'l.henrick@live.com', 'e44fea3bec53bcea3b7513ccef5857ac', '1991-05-08');

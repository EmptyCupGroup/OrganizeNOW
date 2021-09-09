CREATE DATABASE organizenow;

USE organizenow;

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int not null auto_increment primary key,
  `usuario` varchar(30) NOT NULL,
  `tarefa` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
);



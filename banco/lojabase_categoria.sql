
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) DEFAULT NULL,
  `genero_categodira` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_cat`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `produtos` (`id`)
);

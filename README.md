alimentos
=========

Aplicacion práctica del curso de Symfony2 de Aula Mentor

la tabla de la base de datos está mofificada para que acepte decimales en los numeros.
CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,2) NOT NULL,
  `proteina` decimal(10,2) NOT NULL,
  `hidratocarbono` decimal(10,2) NOT NULL,
  `fibra` decimal(10,2) NOT NULL,
  `grasatotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


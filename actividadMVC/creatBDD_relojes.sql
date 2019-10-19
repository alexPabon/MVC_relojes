CREATE DATABASE IF NOT EXISTS `relojes` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE relojes;

CREATE TABLE coleccion(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
marca VARCHAR(64) NOT NULL,
referencia VARCHAR(128) NOT NULL,
precio float(11) NOT NULL DEFAULT 0,
creado timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
actualizado timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
);

DROP TABLE coleccion;
SELECT * FROM coleccion;
INSERT INTO coleccion (marca,referencia) values('casio','hh88SELECT');

UPDATE coleccion
SET marca = 'CASIOOOO'
WHERE id=2;



create database closingtime; 
use closingtime;

-- HACER 5 vistas 
-- HACER crud con procedimiento almacenado para cada tabla
-- HACER procedimiento almacenado con conbinacion de tablas 


-- Estructura de la tabla `USUARIO`
use closingtime;

CREATE TABLE usuario (
  Id_usuario int PRIMARY KEY AUTO_INCREMENT,
  Nombre_usuario varchar(20) NOT NULL,
  Correo_usuario varchar(20) NOT NULL,
  Edad_usuario int(2) NOT NULL,
  Contraseña_usuario varchar(20) NOT NULL,
  Est_plan boolean,
  Foto_perfil longblob
);
use closingtime;
ALTER TABLE usuario ADD FOREIGN KEY (Est_plan) REFERENCES plan(Estado_plan);
SELECT * FROM usuario;
UPDATE usuario SET Est_plan = 1 WHERE  Id_usuario = 1;


-- Estructura de la tabla `COMPRA`
use closingtime;
CREATE TABLE compra (
  Id_compra int PRIMARY KEY AUTO_INCREMENT,
  Codigo_plan int(20) NOT NULL,
  Entidad_pago varchar(15) NOT NULL,
  Usuario_id int(20) NOT NULL
); 

ALTER TABLE compra ADD FOREIGN KEY (Usuario_id) REFERENCES usuario(Id_usuario);
SELECT * FROM compra;



-- Estructura de la tabla `PLAN`
use closingtime;
CREATE TABLE plan (
  Id_plan int PRIMARY KEY AUTO_INCREMENT,
  Nombre_plan varchar(20) NOT NULL,
  Costo_plan int(11) NOT NULL,
  Tiempo_limite datetime NOT NULL,
  Estado_plan boolean DEFAULT False
);
DROP TABLE plan;


-- Estructura de la tabla `CRONOMETRO`
use closingtime;
CREATE TABLE cronometro (
  Id_cronometro int PRIMARY KEY AUTO_INCREMENT,
  Cantidad_tiempo time NOT NULL,
  Tiempo_personalizado time 
);
SELECT * FROM cronometro;



-- Estructura de la tabla `DOCUMENTOS`
use closingtime;
CREATE TABLE Documentos (
  Codigo_documento int PRIMARY KEY AUTO_INCREMENT,
  Fecha_Hora_entrega datetime NOT NULL, 
  Tipo_documento varchar(20) NOT NULL,
  Archivo longblob NOT NULL
);

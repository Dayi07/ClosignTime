-- VISTAS -- 

-- USUARIOS MAYORES Y MENORES DE EDAD --
SELECT * FROM `closingtime`.`Mayores_edad`;
CREATE VIEW Mayores_edad AS
SELECT Id_usuario, Correo_usuario
FROM usuario
WHERE Edad_usuario >= 18;
 
SELECT * FROM `closingtime`.`Menores_edad`;
CREATE VIEW Menores_edad AS
SELECT Id_usuario, Correo_usuario
FROM usuario
WHERE Edad_usuario < 18;

-- USUARIOS CON PLAN ACTIVO E INACTIVO --
SELECT * FROM `closingtime`.`Usu_planAct`;
DROP VIEW Usu_planAct;
CREATE VIEW Usu_planAct AS
SELECT Id_usuario, Nombre_usuario, Correo_usuario
FROM usuario
WHERE Est_plan = 1;

SELECT * FROM `closingtime`.`Usu_planDes`;
CREATE VIEW Usu_planDes AS
SELECT Id_usuario, Nombre_usuario, Correo_usuario
FROM usuario
WHERE Est_plan = 0;

-- INFORMACION DE DOCUMENTOS --
CREATE VIEW Tipos_documentos SELECT Codigo_documento, Tipo_documento FROM Documentos;
SELECT * FROM 'closingtime'.'Tipo_documentos';


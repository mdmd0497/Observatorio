CREATE TABLE Administrador (
	idAdministrador int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(45) NOT NULL,
	apellido varchar(45) NOT NULL,
	correo varchar(45) NOT NULL,
	clave varchar(45) NOT NULL,
	foto varchar(45) DEFAULT NULL,
	telefono varchar(45) DEFAULT NULL,
	celular varchar(45) DEFAULT NULL,
	estado tinyint DEFAULT NULL,
	PRIMARY KEY (idAdministrador)
);

INSERT INTO Administrador(idAdministrador, nombre, apellido, correo, clave, telefono, celular, estado) VALUES 
	('1', 'Admin', 'Admin', 'admin@udistrital.edu.co', md5('123'), '123', '123', '1'); 

CREATE TABLE LogAdministrador (
	idLogAdministrador int(11) NOT NULL AUTO_INCREMENT,
	accion varchar(45) NOT NULL,
	informacion text NOT NULL,
	fecha date NOT NULL,
	hora time NOT NULL,
	ip varchar(45) NOT NULL,
	so varchar(45) NOT NULL,
	explorador varchar(45) NOT NULL,
	administrador_idAdministrador int(11) NOT NULL,
	PRIMARY KEY (idLogAdministrador)
);

CREATE TABLE LogUsuario_ud (
	idLogUsuario_ud int(11) NOT NULL AUTO_INCREMENT,
	accion varchar(45) NOT NULL,
	informacion text NOT NULL,
	fecha date NOT NULL,
	hora time NOT NULL,
	ip varchar(45) NOT NULL,
	so varchar(45) NOT NULL,
	explorador varchar(45) NOT NULL,
	usuario_ud_idUsuario_ud int(11) NOT NULL,
	PRIMARY KEY (idLogUsuario_ud)
);

CREATE TABLE Usuario_ud (
	idUsuario_ud int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(45) NOT NULL,
	apellido varchar(45) NOT NULL,
	correo varchar(45) NOT NULL,
	clave varchar(45) NOT NULL,
	foto varchar(45) DEFAULT NULL,
	state tinyint NOT NULL,
	PRIMARY KEY (idUsuario_ud)
);

CREATE TABLE LogGrupo_de_investigacion (
	idLogGrupo_de_investigacion int(11) NOT NULL AUTO_INCREMENT,
	accion varchar(45) NOT NULL,
	informacion text NOT NULL,
	fecha date NOT NULL,
	hora time NOT NULL,
	ip varchar(45) NOT NULL,
	so varchar(45) NOT NULL,
	explorador varchar(45) NOT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idLogGrupo_de_investigacion)
);

CREATE TABLE Grupo_de_investigacion (
	idGrupo_de_investigacion int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(45) NOT NULL,
	apellido varchar(45) NOT NULL,
	correo varchar(45) NOT NULL,
	clave varchar(45) NOT NULL,
	foto varchar(45) DEFAULT NULL,
	Clasificacion text DEFAULT NULL,
	Lider text DEFAULT NULL,
	Area text DEFAULT NULL,
	Pagina_web varchar(200) DEFAULT NULL,
	state tinyint NOT NULL,
	PRIMARY KEY (idGrupo_de_investigacion)
);

CREATE TABLE Pc (
	idPc int(11) NOT NULL AUTO_INCREMENT,
	indicador text DEFAULT NULL,
	abreviatura text DEFAULT NULL,
	valor_maximo int DEFAULT NULL,
	valor_indicador int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idPc)
);

CREATE TABLE Ppnc (
	idPpnc int(11) NOT NULL AUTO_INCREMENT,
	subtipo_de_producto text DEFAULT NULL,
	abreviatura text DEFAULT NULL,
	valor_maximo int DEFAULT NULL,
	valor_indicador int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idPpnc)
);

CREATE TABLE Ppaidi (
	idPpaidi int(11) NOT NULL AUTO_INCREMENT,
	subtipo_de_producto text DEFAULT NULL,
	abreviatura text DEFAULT NULL,
	valor_maximo int DEFAULT NULL,
	valor_indicador int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idPpaidi)
);

CREATE TABLE Ppfr (
	idPpfr int(11) NOT NULL AUTO_INCREMENT,
	subtipo_de_producto text DEFAULT NULL,
	abreviatura text DEFAULT NULL,
	valor_maximo int DEFAULT NULL,
	valor_indicador int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idPpfr)
);

CREATE TABLE Productos (
	idProductos int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idProductos)
);

CREATE TABLE Cultura_investigativa (
	idCultura_investigativa int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idCultura_investigativa)
);

CREATE TABLE Inversion (
	idInversion int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idInversion)
);

CREATE TABLE Empresas_centros_investigacion (
	idEmpresas_centros_investigacion int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idEmpresas_centros_investigacion)
);

CREATE TABLE Financiacion (
	idFinanciacion int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idFinanciacion)
);

CREATE TABLE Monitoreo_ai (
	idMonitoreo_ai int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idMonitoreo_ai)
);

CREATE TABLE Monitoreo_ei (
	idMonitoreo_ei int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idMonitoreo_ei)
);

CREATE TABLE Gestion_del_conocimiento (
	idGestion_del_conocimiento int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idGestion_del_conocimiento)
);

CREATE TABLE Vigilancia_tecnologica (
	idVigilancia_tecnologica int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idVigilancia_tecnologica)
);

CREATE TABLE Explotacion_base_tecnologica (
	idExplotacion_base_tecnologica int(11) NOT NULL AUTO_INCREMENT,
	variable text DEFAULT NULL,
	calificacion int DEFAULT NULL,
	grupo_de_investigacion_idGrupo_de_investigacion int(11) NOT NULL,
	PRIMARY KEY (idExplotacion_base_tecnologica)
);

ALTER TABLE LogAdministrador
 	ADD FOREIGN KEY (administrador_idAdministrador) REFERENCES Administrador (idAdministrador); 

ALTER TABLE LogUsuario_ud
 	ADD FOREIGN KEY (usuario_ud_idUsuario_ud) REFERENCES Usuario_ud (idUsuario_ud); 

ALTER TABLE LogGrupo_de_investigacion
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Pc
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Ppnc
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Ppaidi
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Ppfr
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Productos
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Cultura_investigativa
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Inversion
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Empresas_centros_investigacion
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Financiacion
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Monitoreo_ai
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Monitoreo_ei
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Gestion_del_conocimiento
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Vigilancia_tecnologica
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 

ALTER TABLE Explotacion_base_tecnologica
 	ADD FOREIGN KEY (grupo_de_investigacion_idGrupo_de_investigacion) REFERENCES Grupo_de_investigacion (idGrupo_de_investigacion); 


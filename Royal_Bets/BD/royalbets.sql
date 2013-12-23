CREATE TABLE Usuarios (

    Ci VARCHAR (50), 
    PRIMARY KEY (Ci),
    Nombre VARCHAR (50),
    Apellido VARCHAR (50),
    Fecha_de_nacimiento DATE,
    Telefono VARCHAR (50),
    Pais VARCHAR (50),
    Ciudad VARCHAR (50),
    Direccion VARCHAR (50),
    Sexo VARCHAR (50),
    Password VARCHAR (50),
    Correo VARCHAR (50),
    Permisos INT,
    Estado INT
);


CREATE TABLE Transacciones (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Ci VARCHAR (50), 
    Tipo_de_transaccion VARCHAR (50),
    Monto FLOAT,
    Fecha DATE,
    Hora TIME,
    Saldo FLOAT
);


CREATE TABLE Juegos (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Id_mesa INT,
    Equipo1 VARCHAR (50),
    Equipo2 VARCHAR (50),
    Apuesta1 VARCHAR (50),
    Apuesta2 VARCHAR (50),
    Parte1 VARCHAR (50),
    Parte2 VARCHAR (50),
    Resultado1 VARCHAR (50),
    Resultado2 VARCHAR (50),
    Fecha_inicio DATE,
    Fecha_de_final DATE,
    Hora_de_inicio TIME,
    Hora_de_final TIME,
    Estado INT
);



CREATE TABLE Apuestas (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Id_user VARCHAR (50), 
    Id_mesa INT,
    Id_juego INT,
    Equipo INT,
    Monto FLOAT,
    Fecha DATE,
    Hora TIME,
    Estado INT
);


CREATE TABLE Consumos (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Id_user VARCHAR (50), 
    Producto VARCHAR (50),
    Monto FLOAT

);

CREATE TABLE Mesas (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Mesa VARCHAR (50), 
    Descripcion VARCHAR (50),
    Deporte VARCHAR (50),
    Capacidad INT,
    Estado INT
);

CREATE TABLE Alertas (

    Id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id),
    Ci VARCHAR (50), 
    Mensaje VARCHAR (50),
    Leido BOOLEAN,
);





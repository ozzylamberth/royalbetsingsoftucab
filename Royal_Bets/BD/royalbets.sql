CREATE TABLE Usuarios (

    Ci VARCHAR (50), 
    PRIMARY KEY (Ci),
    Nombre VARCHAR (50),
    Apellido VARCHAR (50),
    Fecha_de_nacimiento VARCHAR (50),
    Telefono VARCHAR (50),
    Pais VARCHAR (50),
    Ciudad VARCHAR (50),
    Direccion VARCHAR (50),
    Sexo VARCHAR (50),
    Password VARCHAR (50),
    Correo VARCHAR (50)
);


CREATE TABLE Transacciones (

    Ci VARCHAR (50), 
    PRIMARY KEY (Ci),
    Deporte VARCHAR (50),
    Nombre VARCHAR (50),
    Descripcion VARCHAR (50),
    Capacidad VARCHAR (50)
);


CREATE TABLE Juegos (

    Id VARCHAR (50), 
    PRIMARY KEY (Id),
    Id_mesa VARCHAR (50),
    Equipo1 VARCHAR (50),
    Equipo2 VARCHAR (50),
    Apuesta1 VARCHAR (50),
    Apuesta2 VARCHAR (50),
    Parte1 VARCHAR (50),
    Parte2 VARCHAR (50),
    Resultado1 VARCHAR (50),
    Resultado2 VARCHAR (50),
    Fecha_inicio VARCHAR (50),
    Fecha_de_final VARCHAR (50),
    Hora_de_inicio VARCHAR (50),
    Hora_de_final VARCHAR (50)
);



CREATE TABLE Apuestas (

    Id_user VARCHAR (50), 
    PRIMARY KEY (Id_user),
    Id_mesa VARCHAR (50),
    Id_juego VARCHAR (50),
    Equipo VARCHAR (50),
    Monto VARCHAR (50),
    Fecha VARCHAR (50),
    Hora VARCHAR (50)

);


CREATE TABLE Consumos (

    Id_user VARCHAR (50), 
    PRIMARY KEY (Id_user),
    Producto VARCHAR (50),
    Monto VARCHAR (50)

);

CREATE TABLE Mesas (

    Mesa VARCHAR (50), 
    PRIMARY KEY (Mesa),
    Descripcion VARCHAR (50),
    Deporte VARCHAR (50),
    Capacidad INT

);





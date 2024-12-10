CREATE DATABASE GimnasioOnline;
USE GimnasioOnline;

CREATE TABLE Miembros (
    id_miembro INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    email VARCHAR(255) UNIQUE,
    telefono VARCHAR(20),
    fecha_nacimiento DATE,
    direccion VARCHAR(255)
);

CREATE TABLE Clases (
    id_clase INT PRIMARY KEY AUTO_INCREMENT,
    nombre_clase VARCHAR(100),
    descripcion TEXT,
    fecha_hora DATETIME,
    duracion INT,  -- Duración en minutos
    capacidad INT,
    id_instructor INT,
    FOREIGN KEY (id_instructor) REFERENCES Instructores(id_instructor)
);


CREATE TABLE Instructores (
    id_instructor INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    especialidad VARCHAR(100),
    telefono VARCHAR(20)
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    id_miembro INT,
    id_clase INT,
    fecha_reserva DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado_reserva VARCHAR(50),
    FOREIGN KEY (id_miembro) REFERENCES Miembros(id_miembro),
    FOREIGN KEY (id_clase) REFERENCES Clases(id_clase)
);

-- Crear la base de datos
-- Database: bd_sis427
-- DROP DATABASE IF EXISTS bd_sis427;
CREATE DATABASE bd_sis427
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Mexico.1252'
    LC_CTYPE = 'Spanish_Mexico.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

COMMENT ON DATABASE bd_sis427
    IS 'base de datos para trabajar con la materia de tecnologias emergentes dela USFX';


------- Crear la tabla persona --------
CREATE TABLE persona (
    id_persona SERIAL PRIMARY KEY,
    ci INT NOT NULL UNIQUE,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    sexo CHAR(1),
    celular VARCHAR(15),
    correo VARCHAR(100),
    carrera VARCHAR(50),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar un nuevo registro con fecha de registro automática
INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
VALUES (10101010, 'Juan', 'Perez', 'password123', 'M', '1234567890', 'juan@example.com', 'Ingeniería');

-- Insertar otro registro
INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
VALUES (20202020, 'María', 'Gómez', 'securepass', 'F', '9876543210', 'maria@example.com', 'Medicina');

-- Puedes omitir la columna 'fecha_registro' en la inserción para que se complete automáticamente
INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
VALUES (30303030, 'Carlos', 'Lopez', 'supersecret', 'M', '5555555555', 'carlos@example.com', 'Derecho');

--SELECT * FROM persona;

---- Crear la tabla usuario ----
CREATE TABLE usuario (
    id_usuario SERIAL PRIMARY KEY,
    ci INT,
    nivel INT,
    FOREIGN KEY (ci) REFERENCES persona(ci)
);

-- Insertar un nuevo usuario con relación a una persona existente (ci 10101010)
INSERT INTO usuario (ci, nivel)
VALUES (10101010, 0);

-- Insertar otro usuario con relación a una persona existente (ci 20202020)
INSERT INTO usuario (ci, nivel)
VALUES (20202020, 1);

-- Insertar un tercer usuario con relación a una persona existente (ci 30303030)
INSERT INTO usuario (ci, nivel)
VALUES (30303030, 0);

--SELECT * FROM usuario;
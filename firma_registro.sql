CREATE DATABASE IF NOT EXISTS firma_registro;
USE firma_registro;

-- Crear tabla para almacenar los registros
CREATE TABLE IF NOT EXISTS registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    celular VARCHAR(15),
    correo VARCHAR(100),
    carnet VARCHAR(20),
    medida VARCHAR(50)
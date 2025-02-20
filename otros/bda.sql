CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL    
);

INSERT INTO Usuario (usuario, contrasena) VALUES
('admin', 'admin'),
('seba', '123'),
('juan', '123');

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipoComprobante VARCHAR(50) NOT NULL,
    puntoVenta INT NOT NULL,
    numeroComprobante VARCHAR(50) NOT NULL,
    cuitCliente VARCHAR(50) NOT NULL,
    importe DECIMAL(10, 2) NOT NULL
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cuit VARCHAR(50) UNIQUE NOT NULL,
    condicionIva VARCHAR(50) NOT NULL,
    razonSocial VARCHAR(100) NOT NULL,
    alta DATE NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE archivosImportados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cabecera VARCHAR(255) UNIQUE,
	fechaImportacion DATETIME NOT NULL
);




CREATE DATABASE carwash;

USE carwash;

CREATE TABLE usuarios (
    `cod_usu` INT AUTO_INCREMENT NOT NULL,
    `usu` VARCHAR(100),
    `pas_usu` VARCHAR(100),
    `nom_usu` VARCHAR(100),
    `ape_usu` VARCHAR(100),
    `email_usu` VARCHAR(100),
    CONSTRAINT usuarios_PK PRIMARY KEY (cod_usu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios (usu, pas_usu, nom_usu, ape_usu, email_usu)
VALUES
('codeMaster', 'javax', 'Carlos', 'Ojeda', 'ojeda@gmail.com'),
('scriptWiz', 'jakarta', 'Julio', 'Yalico', 'yalico@gmail.com'),
('syntaxGuru', 'class', 'Luis', 'López', 'lopez@gmail.com'),
('juanPerez', 'javascript', 'Juan', 'Perez', 'juanperez@gmail.com'),
('mariaGomez', 'framework', 'Maria', 'Gomez', 'mariagomez@gmail.com'),
('carlosRuiz', 'module', 'Carlos', 'Ruiz', 'carlosruiz@gmail.com'),
('anaTorres', 'api', 'Ana', 'Torres', 'anatorres@gmail.com'),
('luisFernandez', 'compiler', 'Luis', 'Fernandez', 'luisfernandez@gmail.com'),
('sofiaMartinez', 'backend', 'Sofia', 'Martinez', 'sofiamartinez@gmail.com'),
('miguelSanchez', 'fullstack', 'Miguel', 'Sanchez', 'miguelsanchez@gmail.com'),
('carmenRamirez', 'syntax', 'Carmen', 'Ramirez', 'carmenramirez@gmail.com'),
('jorgeGutierrez', 'node', 'Jorge', 'Gutierrez', 'jorgegutierrez@gmail.com'),
('elenaOrtiz', 'library', 'Elena', 'Ortiz', 'elenaortiz@gmail.com');

CREATE TABLE productos (
    `cod_pro` INT AUTO_INCREMENT PRIMARY KEY,
    `nom_pro` VARCHAR(100),
    `des_pro` VARCHAR(255),
    `stock` INT
);

INSERT INTO productos (nom_pro, des_pro, stock) VALUES
('Shampoo para Autos', 'Especial para una limpieza profunda y brillo duradero.', 50),
('Cera Líquida', 'Protege y da brillo a la pintura del auto.', 30),
('Limpiador de Llantas', 'Elimina suciedad y da brillo a las llantas.', 40),
('Desinfectante Interior', 'Limpia y sanitiza el interior del vehículo.', 25),
('Limpiador de Vidrios', 'Limpia y da brillo a los vidrios sin dejar marcas.', 35),
('Desengrasante', 'Elimina aceite y grasa de partes del motor y otras superficies.', 20),
('Acondicionador de Cuero', 'Protege y mantiene el cuero de los asientos y otras superficies.', 15),
('Limpiador de Alfombras', 'Remueve manchas y suciedad de alfombras y tapetes.', 28),
('Pulidor de Metales', 'Da brillo a superficies metálicas del vehículo.', 22),
('Limpiador Multiusos', 'Ideal para limpiar diferentes superficies interiores.', 50),
('Protector de Tablero', 'Protege y da brillo al tablero del vehículo.', 18),
('Removedor de Insectos', 'Elimina restos de insectos de la carrocería del auto.', 12);

CREATE TABLE vehiculos (
    `cod_vehi` INT AUTO_INCREMENT PRIMARY KEY,
    `cod_usu` INT NOT NULL,
    `nom_pro` VARCHAR(100),
    `num_contacto` VARCHAR(9),
    `email_pro` VARCHAR(100),
    `mod_vehi` VARCHAR(50),
    `pla_vehi` VARCHAR(7),
    `col_vehi` VARCHAR(10),
    `fecha_vehi` DATE,
    `tipo_vehi` VARCHAR(50),
    `fecha_reg` DATE,
    FOREIGN KEY (cod_usu) REFERENCES usuarios(cod_usu)
);

INSERT INTO vehiculos (cod_usu, nom_pro, num_contacto, email_pro, mod_vehi, pla_vehi, col_vehi, fecha_vehi, tipo_vehi, fecha_reg) VALUES
(1, 'Carlos Ojeda', '945632189', 'ojeda@gmail.com', 'Toyota', 'AFB-467', '#33A1FF', '2021-05-01', 'sedan', '2024-06-15'),
(2, 'Julio Yalico', '912394876', 'yalico@gmail.com', 'Honda', 'AFB-468', '#A1FF33', '2020-05-01', 'suv', '2024-06-15'),
(3, 'Luis López', '978645312', 'lopez@gmail.com', 'Ford', 'AFB-469', '#FF5733', '2019-05-01', 'camion', '2024-06-15'),
(4, 'Juan Perez', '912345678', 'juanperez@gmail.com', 'Kia', 'AFB-457', '#FF5733', '2021-01-01', 'sedan', '2024-03-02'),
(5, 'Maria Gomez', '998765432', 'mariagomez@gmail.com', 'Hyundai', 'AFB-458', '#33FF57', '2020-01-01', 'suv', '2024-03-02'),
(6, 'Carlos Ruiz', '945612378', 'carlosruiz@gmail.com', 'Suzuki', 'AFB-459', '#5733FF', '2019-01-01', 'camion', '2024-03-02'),
(7, 'Ana Torres', '978945612', 'anatorres@gmail.com', 'Mitsubishi', 'AFB-460', '#FF33A1', '2018-01-01', 'motocicleta', '2024-03-02'),
(8, 'Luis Fernandez', '932165498', 'luisfernandez@gmail.com', 'Renault', 'AFB-461', '#33A1FF', '2017-01-01', 'van', '2024-03-02'),
(9, 'Sofia Martinez', '912378945', 'sofiamartinez@gmail.com', 'Chevrolet', 'AFB-462', '#A1FF33', '2021-02-01', 'sedan', '2024-04-05'),
(10, 'Miguel Sanchez', '998732165', 'miguelsanchez@gmail.com', 'Mazda', 'AFB-463', '#FF5733', '2020-02-01', 'suv', '2024-04-05');


SELECT * FROM usuarios;
SELECT * FROM productos;
SELECT * FROM vehiculos;

SELECT fecha_reg, COUNT(*) as contar FROM vehiculos GROUP BY fecha_reg HAVING contar > 1;

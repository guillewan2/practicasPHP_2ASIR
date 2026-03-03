/* =========================================================
   BASE DE DATOS DE PRUEBA - universidad_test
   Compatible con MySQL 8+
   ========================================================= */

DROP DATABASE IF EXISTS universidad_test;
CREATE DATABASE universidad_test 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_unicode_ci;

USE universidad_test;

-- =========================================================
-- TABLA: estudiantes
-- =========================================================

CREATE TABLE estudiantes (
    id_estudiante INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    fecha_nacimiento DATE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================
-- TABLA: profesores
-- =========================================================

CREATE TABLE profesores (
    id_profesor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    departamento VARCHAR(100) NOT NULL
);

-- =========================================================
-- TABLA: cursos
-- =========================================================

CREATE TABLE cursos (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT,
    creditos INT NOT NULL,
    id_profesor INT,
    CONSTRAINT chk_creditos CHECK (creditos > 0),
    CONSTRAINT fk_curso_profesor 
        FOREIGN KEY (id_profesor) 
        REFERENCES profesores(id_profesor)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

-- =========================================================
-- TABLA: matriculas (relación N:M)
-- =========================================================

CREATE TABLE matriculas (
    id_matricula INT AUTO_INCREMENT PRIMARY KEY,
    id_estudiante INT NOT NULL,
    id_curso INT NOT NULL,
    fecha_matricula DATE DEFAULT (CURRENT_DATE),
    nota DECIMAL(4,2),
    CONSTRAINT chk_nota CHECK (nota BETWEEN 0 AND 10),
    CONSTRAINT uq_matricula UNIQUE (id_estudiante, id_curso),
    CONSTRAINT fk_matricula_estudiante
        FOREIGN KEY (id_estudiante)
        REFERENCES estudiantes(id_estudiante)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_matricula_curso
        FOREIGN KEY (id_curso)
        REFERENCES cursos(id_curso)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

-- =========================================================
-- ÍNDICES
-- =========================================================

CREATE INDEX idx_estudiantes_email ON estudiantes(email);
CREATE INDEX idx_profesores_email ON profesores(email);
CREATE INDEX idx_matriculas_estudiante ON matriculas(id_estudiante);
CREATE INDEX idx_matriculas_curso ON matriculas(id_curso);

-- =========================================================
-- DATOS DE PRUEBA
-- =========================================================

INSERT INTO profesores (nombre, apellido, email, departamento) VALUES
('Ana', 'García', 'ana.garcia@uni.es', 'Informática'),
('Luis', 'Martínez', 'luis.martinez@uni.es', 'Redes'),
('María', 'López', 'maria.lopez@uni.es', 'Bases de Datos');

INSERT INTO cursos (nombre, descripcion, creditos, id_profesor) VALUES
('Bases de Datos', 'Modelo relacional y SQL avanzado', 6, 3),
('Administración de Sistemas', 'Linux y Windows Server', 8, 2),
('Programación en Java', 'POO y patrones de diseño', 6, 1);

INSERT INTO estudiantes (nombre, apellido, email, fecha_nacimiento) VALUES
('Carlos', 'Ruiz', 'carlos.ruiz@email.com', '2002-05-14'),
('Lucía', 'Fernández', 'lucia.fernandez@email.com', '2001-09-22'),
('Javier', 'Sánchez', 'javier.sanchez@email.com', '2003-01-30');

INSERT INTO matriculas (id_estudiante, id_curso, nota) VALUES
(1, 1, 8.50),
(1, 2, 7.20),
(2, 1, 9.00),
(2, 3, 6.80),
(3, 2, 7.90);

-- =========================================================
-- VISTA: estudiantes con cursos y notas
-- =========================================================

CREATE OR REPLACE VIEW vista_estudiantes_cursos AS
SELECT 
    e.id_estudiante,
    CONCAT(e.nombre, ' ', e.apellido) AS estudiante,
    c.nombre AS curso,
    p.nombre AS profesor,
    m.nota
FROM estudiantes e
JOIN matriculas m ON e.id_estudiante = m.id_estudiante
JOIN cursos c ON m.id_curso = c.id_curso
LEFT JOIN profesores p ON c.id_profesor = p.id_profesor;

-- =========================================================
-- TRIGGER: validar nota antes de insertar
-- =========================================================

DELIMITER $$

CREATE TRIGGER before_insert_matricula
BEFORE INSERT ON matriculas
FOR EACH ROW
BEGIN
    IF NEW.nota < 0 OR NEW.nota > 10 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'La nota debe estar entre 0 y 10';
    END IF;
END $$

DELIMITER ;

-- =========================================================
-- PROCEDIMIENTO ALMACENADO: media por estudiante
-- =========================================================

DELIMITER $$

CREATE PROCEDURE media_estudiante(IN estudiante_id INT)
BEGIN
    SELECT 
        e.nombre,
        e.apellido,
        AVG(m.nota) AS media
    FROM estudiantes e
    JOIN matriculas m ON e.id_estudiante = m.id_estudiante
    WHERE e.id_estudiante = estudiante_id
    GROUP BY e.id_estudiante;
END $$

DELIMITER ;

-- =========================================================
-- CONSULTA DE PRUEBA
-- =========================================================

-- SELECT * FROM vista_estudiantes_cursos;
-- CALL media_estudiante(1);

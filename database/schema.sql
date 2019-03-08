CREATE DATABASE if not exists preescolar;
USE preescolar;
SET NAMES utf8;

/*Tabla de los usuarios*/
CREATE TABLE usuarios
(
  id             int(255) auto_increment,
  nombre         varchar(100) not null,
  password       varchar(50)  not null,
  rol            int(10)      not null,
  fecha_creacion date,
  CONSTRAINT pk_usuarios PRIMARY KEY (id)
) ENGINE = InnoDb;

# Tabla tutores
CREATE TABLE tutores
(
  id          int(255) auto_increment not null,
  nombre      varchar(100)            not null,
  apellido    varchar(100)            not null,
  email       varchar(80),
  tel_casa    varchar(50),
  tel_celular varchar(50),
  tel_oficina varchar(50),
  domicilio   text,
  religion    varchar(80),
  CONSTRAINT pk_tutores PRIMARY KEY (id)
) ENGINE = InnoDb;

# ASESORES
CREATE TABLE asesores
(
  id            int(255) auto_increment not null,
  nombre        varchar(100)            not null,
  apellido      varchar(100)            not null,
  tel_celular   varchar(50),
  tel_casa      varchar(50),
  email         varchar(80),
  fecha_ingreso date,
  domicilio     text,
  religion      varchar(80),
  adicionales   text,
  CONSTRAINT pk_asesores PRIMARY KEY (id)
) ENGINE = InnoDb;

CREATE TABLE reseconomicos
(
  id          int(255) auto_increment not null,
  nombre      varchar(100)            not null,
  apellido    varchar(100)            not null,
  email       varchar(80),
  tel_casa    varchar(50),
  tel_celular varchar(50),
  tel_oficina varchar(50),
  CONSTRAINT pk_reseconomicos PRIMARY KEY (id)
) ENGINE = InnoDb;

CREATE TABLE grupos
(
  id        int(255) auto_increment not null,
  id_asesor int(255)                not null,
  nivel     varchar(100),
  grado     varchar(100),
  grupo     varchar(100),
  CONSTRAINT pk_grupos PRIMARY KEY (id)
) ENGINE = InnoDb;

CREATE TABLE alumnos
(
  id               int(255) auto_increment not null,
  nombre           varchar(100)            not null,
  apellido         varchar(100)            not null,
  fecha_nacimiento date                    not null,
  genero           varchar(50)             not null,
  edad             int(50)                 not null,
  religion         varchar(80),
  fecha_ingreso    date,
  colegiatura      float(100, 2),
  adicionales      TEXT,
  CONSTRAINT pk_alumnos PRIMARY KEY (id)
) ENGINE = InnoDb;

/* ----------------------
  Tablas pivotes
---------------------------*/
# tutores y alumnos
CREATE TABLE tutores_alumnos
(
  id        int(255) auto_increment not null,
  id_tutor  int(255)                not null,
  id_alumno int(255)                not null,
  CONSTRAINT pk_tutores_alumnos PRIMARY KEY (id),
  CONSTRAINT fk_tutores FOREIGN KEY (id_tutor) REFERENCES tutores (id),
  CONSTRAINT fk_alumnos FOREIGN KEY (id_alumno) REFERENCES alumnos (id)
) ENGINE = InnoDb;

# Responsables economicos y alumnos
CREATE TABLE reseconomicos_alumnos
(
  id              int(255) auto_increment not null,
  id_reseconomico int(255)                not null,
  id_alumno       int(255)                not null,
  CONSTRAINT pk_res_alumnos PRIMARY KEY (id),
  CONSTRAINT fk_economicos FOREIGN KEY (id_reseconomico) REFERENCES reseconomicos (id),
  CONSTRAINT fk_alum_res FOREIGN KEY (id_alumno) REFERENCES alumnos (id)
) ENGINE = InnoDb;

CREATE TABLE grupos_alumnos
(
  id        int(255) auto_increment not null,
  id_grupo  int(255)                not null,
  id_alumno int(255)                not null,
  CONSTRAINT pk_grupos_alumnos PRIMARY KEY (id),
  CONSTRAINT fk_grup_alum FOREIGN KEY (id_grupo) REFERENCES grupos (id),
  CONSTRAINT fk_alu_grup FOREIGN KEY (id_alumno) REFERENCES alumnos (id)
) ENGINE = InnoDb;

/*-------------------------
  INSERTS DE PRUEBA
  ---------------------------*/

# TUTORES
INSERT INTO tutores VALUES(NULL,'Juan David', 'Perez Robles', 'perre@gmail.com', '6348432', '961157823', '8734381', 'Presa tingambato 803 col electricistas las palmas', 'Catolico');

INSERT INTO tutores VALUES(NULL,'Nacho Juan', 'Noble Azul', 'asul@hotmail.com', '6458432', '97338293', '83747633', 'La salle tuxtla gtz', 'Ninguna');

INSERT INTO tutores VALUES(NULL,'Pablo', 'Escobar Roble', 'paess@hotmail.com', '28282322', '3937373', '929238382', 'New York City', 'Ninguna');

INSERT INTO tutores VALUES(NULL,'Pablo', 'Escobar Roble', 'paess@hotmail.com', '28282322', '3937373', '929238382', 'New York City', 'Ninguna');


# Sistema de Registro de Equipos

Actividad Integradora 3 - Programación de Sistemas Web

Estudiante: Richard Danilo Vaca Pallo  
Institución: Universidad ECOTEC

## Descripción

Sistema web desarrollado con PHP y MySQL que permite
registrar y consultar equipos informáticos.

El proyecto utiliza PDO para conectarse a la base de
datos y sentencias preparadas para registrar información
de manera segura.

## Tecnologías utilizadas

- PHP
- HTML5
- CSS3
- MySQL
- PDO
- XAMPP
- Git y GitHub

## Funcionalidades

- Registro de equipos informáticos.
- Validación de datos del formulario.
- Almacenamiento de registros en MySQL.
- Consulta de equipos registrados.
- Tabla HTML adaptable a diferentes pantallas.
- Protección contra SQL Injection mediante PDO.
- Protección de salidas HTML mediante htmlspecialchars().

## Base de datos

Nombre: db_sistema_web

Tabla principal: equipos

Campos:
- id
- nombre
- tipo
- marca
- modelo
- estado
- fecha_creacion

El script de creación se encuentra en database.sql.

## Instalación local

1. Instalar XAMPP.
2. Iniciar Apache y MySQL.
3. Copiar el proyecto a la carpeta htdocs.
4. Abrir phpMyAdmin.
5. Importar el archivo database.sql.
6. Revisar la configuración local en conexion.php.
7. Abrir el sistema desde el navegador.

Dirección:

http://localhost/AI3_DisenoWeb_RichardVaca/index.php

## Archivos principales

- conexion.php: conexión con MySQL mediante PDO.
- index.php: formulario de registro.
- registrar.php: validación e inserción segura.
- listar.php: consulta de equipos.
- styles.css: diseño de la aplicación.
- database.sql: estructura de la base de datos.
- investigacion.md: comparación entre PDO y MySQLi.

## Seguridad

Para prevenir inyección SQL se utilizan sentencias
preparadas con prepare() y execute().

Para mostrar los datos se utiliza htmlspecialchars(),
evitando interpretar el contenido ingresado como HTML.

## Repositorio

https://github.com/richardbsc/AI3_DisenoWeb_RichardVaca

## Autor

Richard Danilo Vaca Pallo  
Universidad ECOTEC  
2026

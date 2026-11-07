
# Investigación técnica: PDO y MySQLi

## Actividad Integradora 3

Estudiante: Richard Danilo Vaca Pallo
Asignatura: Programación de Sistemas Web
Institución: ECOTEC

## Comparación de PDO y MySQLi

PDO y MySQLi son dos alternativas que ofrece PHP
para conectarse a bases de datos.

MySQLi está diseñado para trabajar con MySQL
y MariaDB. Permite ejecutar consultas, utilizar
sentencias preparadas y manejar errores.

PDO permite trabajar con diferentes motores de
bases de datos mediante una interfaz común.

## Rendimiento

Ambas alternativas ofrecen un rendimiento adecuado
para aplicaciones web pequeñas y medianas.

La diferencia de rendimiento depende de las consultas,
la configuración y la cantidad de datos procesados.

## Seguridad

PDO y MySQLi permiten utilizar sentencias preparadas
para separar los datos enviados por el usuario
de las instrucciones SQL.

Esto ayuda a prevenir ataques de inyección SQL.

Además, al mostrar información en HTML es importante
utilizar htmlspecialchars() para evitar que se
interprete código ingresado por el usuario.

## Tecnología seleccionada

Para desarrollar el sistema de registro de equipos
seleccioné PDO.

Esta opción permite manejar errores con try-catch,
utilizar sentencias preparadas y mantener una
estructura de conexión organizada.

También facilita adaptar el sistema a otro motor
de base de datos si fuera necesario.

## Diseño de base de datos

Se creó la base de datos db_sistema_web
con una tabla principal llamada equipos.

La tabla contiene siete campos:

- id
- nombre
- tipo
- marca
- modelo
- estado
- fecha_creacion

El campo id identifica cada equipo mediante una
clave primaria autoincremental.

El campo fecha_creacion registra automáticamente
la fecha en la que se almacena el equipo.

La estructura permite mantener los registros
organizados y evitar duplicaciones innecesarias
de información dentro de cada equipo.

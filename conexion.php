
<?php
// Conexion a la base de datos con PDO

$servidor = "127.0.0.1";
$baseDatos = "db_sistema_web";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$baseDatos;charset=utf8mb4",
        $usuario,
        $contrasena
    );

    // Mostrar errores mediante excepciones
    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Consultas con sentencias preparadas reales
    $conexion->setAttribute(
        PDO::ATTR_EMULATE_PREPARES,
        false
    );

} catch (PDOException $error) {
    error_log("Error de conexion: " . $error->getMessage());

    http_response_code(500);
    exit("No se pudo conectar con la base de datos.");
}

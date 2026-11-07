
<?php
session_start();

require_once "conexion.php";

// Solo permitir solicitudes POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Recibir datos del formulario
$nombre = trim($_POST["nombre"] ?? "");
$tipo = trim($_POST["tipo"] ?? "");
$marca = trim($_POST["marca"] ?? "");
$modelo = trim($_POST["modelo"] ?? "");
$estado = trim($_POST["estado"] ?? "");

// Validar campos vacíos
if ($nombre === "" || $tipo === "" ||
    $marca === "" || $modelo === "" || $estado === "") {

    $_SESSION["error"] = "Todos los campos son obligatorios.";
    header("Location: index.php");
    exit;
}

// Validar longitudes
if (strlen($nombre) > 100 || strlen($marca) > 50 ||
    strlen($modelo) > 100) {

    $_SESSION["error"] = "Uno de los campos supera el límite.";
    header("Location: index.php");
    exit;
}

// Validar opciones permitidas
$tipos = ["Computadora", "Laptop", "Impresora", "Monitor", "Otro"];
$estados = ["Activo", "Mantenimiento", "Baja"];

if (!in_array($tipo, $tipos, true) ||
    !in_array($estado, $estados, true)) {

    $_SESSION["error"] = "Tipo o estado no válido.";
    header("Location: index.php");
    exit;
}

try {
    // Inserción segura utilizando PDO
    $sql = "INSERT INTO equipos
            (nombre, tipo, marca, modelo, estado)
            VALUES
            (:nombre, :tipo, :marca, :modelo, :estado)";

    $consulta = $conexion->prepare($sql);

    $consulta->execute([
        ":nombre" => $nombre,
        ":tipo" => $tipo,
        ":marca" => $marca,
        ":modelo" => $modelo,
        ":estado" => $estado
    ]);

    $_SESSION["mensaje"] = "Equipo registrado correctamente.";

} catch (PDOException $error) {
    error_log("Error al registrar equipo: " . $error->getMessage());
    $_SESSION["error"] = "No se pudo guardar el equipo.";
}

header("Location: index.php");
exit;


<?php
require_once "conexion.php";

// Consultar los equipos registrados
try {
    $sql = "SELECT id, nombre, tipo, marca, modelo,
                   estado, fecha_creacion
            FROM equipos
            ORDER BY id DESC";

    $consulta = $conexion->query($sql);
    $equipos = $consulta->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
    error_log("Error al consultar: " . $error->getMessage());
    $equipos = [];
    $mensajeError = "No se pudieron consultar los equipos.";
}

// Proteger los datos al mostrarlos
function limpiar($dato) {
    return htmlspecialchars(
        (string) $dato,
        ENT_QUOTES,
        "UTF-8"
    );
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos Registrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Sistema de Registro de Equipos</h1>
    <p>Consulta de equipos informáticos</p>
</header>

<main class="contenedor lista-contenedor">
    <section class="panel">

        <h2>Equipos registrados</h2>

        <a href="index.php" class="enlace">
            Registrar nuevo equipo
        </a>

        <?php if (isset($mensajeError)): ?>
            <p class="error">
                <?= limpiar($mensajeError) ?>
            </p>

        <?php elseif (count($equipos) === 0): ?>
            <p>No existen equipos registrados.</p>

        <?php else: ?>

            <div class="tabla-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Estado</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($equipos as $equipo): ?>
                            <tr>
                                <td><?= limpiar($equipo["id"]) ?></td>
                                <td><?= limpiar($equipo["nombre"]) ?></td>
                                <td><?= limpiar($equipo["tipo"]) ?></td>
                                <td><?= limpiar($equipo["marca"]) ?></td>
                                <td><?= limpiar($equipo["modelo"]) ?></td>
                                <td><?= limpiar($equipo["estado"]) ?></td>
                                <td><?= limpiar($equipo["fecha_creacion"]) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php endif; ?>

    </section>
</main>

<footer>
    <p>Actividad Integradora 3 - ECOTEC</p>
</footer>

</body>
</html>

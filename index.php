
<?php
session_start();

$mensaje = $_SESSION["mensaje"] ?? "";
$error = $_SESSION["error"] ?? "";

unset($_SESSION["mensaje"], $_SESSION["error"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Sistema de Registro de Equipos</h1>
    <p>Control básico de equipos informáticos</p>
</header>

<main class="contenedor">
    <section class="panel">
        <h2>Registrar nuevo equipo</h2>
        <a href="listar.php" class="enlace">
    Ver equipos registrados
</a>

        <?php if ($mensaje): ?>
            <p class="exito">
                <?= htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8") ?>
            </p>
        <?php endif; ?>

        <?php if ($error): ?>
            <p class="error">
                <?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?>
            </p>
        <?php endif; ?>

        <form action="registrar.php" method="POST">

            <label for="nombre">Nombre del equipo</label>
            <input type="text" id="nombre" name="nombre"
                   maxlength="100" required
                   placeholder="Ejemplo: PC Laboratorio 1">

            <label for="tipo">Tipo de equipo</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccione</option>
                <option value="Computadora">Computadora</option>
                <option value="Laptop">Laptop</option>
                <option value="Impresora">Impresora</option>
                <option value="Monitor">Monitor</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca"
                   maxlength="50" required
                   placeholder="Ejemplo: Dell">

            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo"
                   maxlength="100" required
                   placeholder="Ejemplo: OptiPlex 3080">

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="">Seleccione</option>
                <option value="Activo">Activo</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Baja">Baja</option>
            </select>

            <button type="submit">Guardar equipo</button>
        </form>
    </section>
</main>

<footer>
    <p>Actividad Integradora 3 - ECOTEC</p>
</footer>

</body>
</html>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'conexion.php';
$mensaje = "";

// LÓGICA CREATE (Insertar)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $insertar = "INSERT INTO refacciones (nombre, categoria, precio, stock) VALUES ('$nombre', '$categoria', '$precio', '$stock')";
    if (mysqli_query($conexion, $insertar)) {
        $mensaje = "<div class='alert alert-success'>¡Refacción agregada con éxito!</div>";
    } else {
        $mensaje = "<div class='alert alert-danger'>Error: " . mysqli_error($conexion) . "</div>";
    }
}

// LÓGICA DELETE (Eliminar)
if (isset($_GET['eliminar'])) {
    $id_borrar = $_GET['eliminar'];
    mysqli_query($conexion, "DELETE FROM refacciones WHERE id = $id_borrar");
    header("Location: admin.php"); // Recargar la página
    exit();
}

// LÓGICA READ (Consultar)
$consulta = mysqli_query($conexion, "SELECT * FROM refacciones ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo - Italika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Dashboard Admin - Italika</a>
        <a href="index.php" class="btn btn-outline-light">Cerrar Sesión</a>
    </div>
</nav>

<div class="container mt-4">
    <?= $mensaje ?>

    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-dark text-white"><h5>Agregar Nueva Refacción</h5></div>
        <div class="card-body">
            <form method="POST" class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la pieza" required>
                </div>
                <div class="col-md-3">
                    <select name="categoria" class="form-select" required>
                        <option value="">Categoría...</option>
                        <option value="Motor">Motor</option>
                        <option value="Eléctrico">Eléctrico</option>
                        <option value="Frenos">Frenos</option>
                        <option value="Mantenimiento">Mantenimiento</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="number" step="0.01" name="precio" class="form-control" placeholder="Precio ($)" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="stock" class="form-control" placeholder="Stock" required>
                </div>
                <div class="col-md-1">
                    <button type="submit" name="agregar" class="btn btn-success w-100">+</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white"><h5>Inventario Actual</h5></div>
        <div class="card-body p-0">
            <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-secondary sticky-top">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fila = mysqli_fetch_assoc($consulta)): ?>
                        <tr>
                            <td><?= $fila['id'] ?></td>
                            <td><?= $fila['nombre'] ?></td>
                            <td><?= $fila['categoria'] ?></td>
                            <td>$<?= $fila['precio'] ?></td>
                            <td><?= $fila['stock'] ?></td>
                            <td>
                                <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                                
                                <a href="admin.php?eliminar=<?= $fila['id'] ?>" 
                                   class="btn btn-sm btn-danger" 
                                   onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                   Borrar
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

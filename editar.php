<?php
include 'conexion.php';

// 1. Obtener los datos actuales de la refacción
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = mysqli_query($conexion, "SELECT * FROM refacciones WHERE id = $id");
    $fila = mysqli_fetch_assoc($resultado);
}

// 2. Actualizar los datos si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $actualizar = "UPDATE refacciones SET nombre='$nombre', categoria='$categoria', precio='$precio', stock='$stock' WHERE id=$id";
    mysqli_query($conexion, $actualizar);
    
    // Regresar al dashboard después de editar
    header("Location: admin.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Refacción - Italika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h5>Editar Refacción #<?= $fila['id'] ?></h5>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nombre de la pieza</label>
                                <input type="text" name="nombre" class="form-control" value="<?= $fila['nombre'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Categoría</label>
                                <input type="text" name="categoria" class="form-control" value="<?= $fila['categoria'] ?>" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Precio ($)</label>
                                    <input type="number" step="0.01" name="precio" class="form-control" value="<?= $fila['precio'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" value="<?= $fila['stock'] ?>" required>
                                </div>
                            </div>
                            <button type="submit" name="actualizar" class="btn btn-success w-100 mb-2">Guardar Cambios</button>
                            <a href="admin.php" class="btn btn-outline-danger w-100">Cancelar y Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

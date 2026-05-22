<?php
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $usuario_valido = "24160628@itoaxaca.edu.mx"; 
    $pass_valido = "24160628TSO";

    if ($_POST['usuario'] == $usuario_valido && $_POST['password'] == $pass_valido) {
        header("Location: admin.php"); // Nos mandará al CRUD
        exit();
    } else {
        $error = "Acceso Denegado. Datos incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Italika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow">
                <h3 class="text-center">Acceso Administrativo</h3>
                <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label>Correo Institucional:</label>
                        <input type="email" name="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Contraseña:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                </form>

                <div class="text-center mt-3"><a href="index.php">Volver al inicio</a></div>
            </div>
        </div>
    </div>
</body>
</html>

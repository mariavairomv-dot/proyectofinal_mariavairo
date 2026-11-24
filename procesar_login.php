<?php
session_start();
include "includes/conexion.php";

// 1. Si alguien abre este archivo sin llenar el formulario, lo regresamos
if (!isset($_POST["correo"])) {
    header("Location: login.php");
    exit();
}

// 2. Recibimos los datos (igual que en miSistema05.php)
$correo     = mysqli_real_escape_string($con, trim($_POST["correo"]));
$contrasena = mysqli_real_escape_string($con, $_POST["contrasena"]);

// 3. Buscamos al usuario por su correo
$sql = "SELECT * FROM usuarios WHERE correo = '$correo';";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);

// 4. Revisamos: ¿existe el correo? y ¿la contraseña coincide con la cifrada?
if ($row && password_verify($contrasena, $row["contrasena"])) {
    // Le ponemos la "pulsera" con sus datos
    $_SESSION["id_usuario"] = $row["id_usuario"];
    $_SESSION["nombre"]     = $row["nombre"];
    $_SESSION["rol"]        = $row["rol"];

    $mensaje = "<div class='alert alert-success'>¡Bienvenida, " . $row["nombre"] . "! Iniciaste sesión correctamente.</div>";
    $boton   = "<a href='catalogo.php' class='btn btn-dark'>Ir al catálogo</a>";
} else {
    $mensaje = "<div class='alert alert-danger'>Correo o contraseña incorrectos.</div>";
    $boton   = "<a href='login.php' class='btn btn-dark'>Intentar de nuevo</a>";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "includes/head.php"; ?>
    <title>Iniciar sesión | Good Form</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include "includes/navbar.php"; ?>

    <main class="container px-4 px-lg-5 my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="fw-bold mb-4">Iniciar sesión</h1>
                <?php echo $mensaje; ?>
                <?php echo $boton; ?>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
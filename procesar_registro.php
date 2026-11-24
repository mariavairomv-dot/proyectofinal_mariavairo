<?php
include "includes/conexion.php";

// 1. Si alguien abre este archivo sin llenar el formulario, lo regresamos
if (!isset($_POST["correo"])) {
    header("Location: registro.php");
    exit();
}

// 2. Recibimos los datos del formulario (igual que en miSistema02.php)
$nombre      = mysqli_real_escape_string($con, trim($_POST["nombre"]));
$correo      = mysqli_real_escape_string($con, trim($_POST["correo"]));
$contrasena  = mysqli_real_escape_string($con, $_POST["contrasena"]);
$fecha       = mysqli_real_escape_string($con, $_POST["fecha_nacimiento"]);
$tarjeta     = mysqli_real_escape_string($con, trim($_POST["num_tarjeta"]));
$direccion   = mysqli_real_escape_string($con, trim($_POST["direccion"]));

// 3. Ciframos la contraseña
$contraCifrada = password_hash($contrasena, PASSWORD_DEFAULT);

// 4. Revisamos si ya existe una cuenta con ese correo
$sql = "SELECT id_usuario FROM usuarios WHERE correo = '$correo';";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);

if ($row) {
    // Sí encontró una fila: el correo ya está registrado
    $mensaje = "<div class='alert alert-danger'>Ya existe una cuenta con ese correo.</div>";
    $boton   = "<a href='registro.php' class='btn btn-dark'>Volver al registro</a>";
} else {
    // No encontró nada: guardamos al usuario nuevo
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena, fecha_nacimiento, num_tarjeta, direccion)
            VALUES ('$nombre', '$correo', '$contraCifrada', '$fecha', '$tarjeta', '$direccion');";

    if (mysqli_query($con, $sql)) {
        $mensaje = "<div class='alert alert-success'>¡Tu cuenta se creó correctamente, $nombre!</div>";
        $boton   = "<a href='login.php' class='btn btn-dark'>Iniciar sesión</a>";
    } else {
        $mensaje = "<div class='alert alert-danger'>Error al guardar: " . mysqli_error($con) . "</div>";
        $boton   = "<a href='registro.php' class='btn btn-dark'>Volver al registro</a>";
    }
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "includes/head.php"; ?>
    <title>Crear cuenta | Good Form</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include "includes/navbar.php"; ?>

    <main class="container px-4 px-lg-5 my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="fw-bold mb-4">Crear cuenta</h1>
                <?php echo $mensaje; ?>
                <?php echo $boton; ?>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
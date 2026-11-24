<?php
session_start();

// 1. Si no ha iniciado sesión, lo mandamos al login
if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

include "includes/conexion.php";

// 2. Buscamos los datos del usuario que inició sesión
$id = $_SESSION["id_usuario"];
$sql = "SELECT * FROM usuarios WHERE id_usuario = $id;";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "includes/head.php"; ?>
    <title>Mi perfil | Good Form</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include "includes/navbar.php"; ?>

    <main class="container px-4 px-lg-5 my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="fw-bold">Mi perfil</h1>
                <p class="text-muted mb-4">Esta es la información de tu cuenta.</p>

                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <tr>
                                <th>Nombre</th>
                                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                            </tr>
                            <tr>
                                <th>Correo</th>
                                <td><?php echo htmlspecialchars($row["correo"]); ?></td>
                            </tr>
                            <tr>
                                <th>Fecha de nacimiento</th>
                                <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            </tr>
                            <tr>
                                <th>Tarjeta</th>
                                <td>**** **** **** <?php echo substr($row["num_tarjeta"], -4); ?></td>
                            </tr>
                            <tr>
                                <th>Dirección postal</th>
                                <td><?php echo htmlspecialchars($row["direccion"]); ?></td>
                            </tr>
                            <tr>
                                <th>Tipo de cuenta</th>
                                <td><?php echo $row["rol"]; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <a href="cerrar_sesion.php" class="btn btn-outline-dark mt-4">Cerrar sesión</a>

            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
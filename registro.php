<?php session_start(); ?>
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

                <h1 class="fw-bold">Crear cuenta</h1>
                <p class="text-muted mb-4">Únete a Good Form para comprar y ver tus pedidos.</p>

                <div class="card">
                    <div class="card-body">
                        <form action="procesar_registro.php" method="post">

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre completo:</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo:</label>
                                <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo" name="correo" required>
                            </div>

                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña" name="contrasena" required>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                            </div>

                            <div class="mb-3">
                                <label for="num_tarjeta" class="form-label">Número de tarjeta bancaria:</label>
                                <input type="text" class="form-control" id="num_tarjeta" placeholder="16 dígitos, sin espacios" name="num_tarjeta" maxlength="19" required>
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección postal:</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Calle, número, colonia, ciudad y C.P." name="direccion" required>
                            </div>

                            <button type="submit" class="btn btn-dark">Crear cuenta</button>
                            <a href="login.php" class="btn btn-link">¿Ya tienes cuenta? Inicia sesión</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
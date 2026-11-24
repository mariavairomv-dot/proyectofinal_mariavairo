<?php session_start(); ?>
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

                <h1 class="fw-bold">Iniciar sesión</h1>
                <p class="text-muted mb-4">Entra con tu correo y contraseña.</p>

                <div class="card">
                    <div class="card-body">
                        <form action="procesar_login.php" method="post">

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo:</label>
                                <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo" name="correo" required>
                            </div>

                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña" name="contrasena" required>
                            </div>

                            <button type="submit" class="btn btn-dark">Iniciar sesión</button>
                            <a href="registro.php" class="btn btn-link">¿No tienes cuenta? Crea una</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
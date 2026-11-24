<?php
// Nombre del archivo que se está viendo, por ejemplo "catalogo.php"
$pagina = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand fw-bold" href="index.php">
            <i class="bi bi-flower1"></i> Good Form
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina == 'index.php') { echo 'active'; } ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina == 'catalogo.php') { echo 'active'; } ?>" href="catalogo.php">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina == 'contacto.php') { echo 'active'; } ?>" href="contacto.php">Contacto</a>
                </li>

                <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "admin") { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pagina == 'admin.php') { echo 'active'; } ?>" href="admin.php">Administrador</a>
                    </li>
                <?php } ?>

                <li class="nav-item dropdown">
                    <?php if (isset($_SESSION["id_usuario"])) { ?>
                        <!-- Sí inició sesión -->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> Hola, <?php echo htmlspecialchars($_SESSION["nombre"]); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="perfil.php">Mi perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar sesión</a></li>
                        </ul>
                    <?php } else { ?>
                        <!-- No ha iniciado sesión -->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> Mi cuenta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Iniciar sesión</a></li>
                            <li><a class="dropdown-item" href="registro.php">Crear cuenta</a></li>
                        </ul>
                    <?php } ?>
                </li>
            </ul>

            <a href="carrito.php" class="btn btn-outline-dark">
                <i class="bi bi-bag me-1"></i> Carrito
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </a>
        </div>
    </div>
</nav>
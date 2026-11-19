<?php
// Guarda el nombre del archivo que se está viendo, por ejemplo "catalogo.php"
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
                    <a class="nav-link <?= $pagina == 'index.php' ? 'active' : '' ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pagina == 'catalogo.php' ? 'active' : '' ?>" href="catalogo.php">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pagina == 'contacto.php' ? 'active' : '' ?>" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pagina == 'admin.php' ? 'active' : '' ?>" href="admin.php">Administrador</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i> Mi cuenta
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="registro.php">Crear cuenta</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="perfil.php">Mi perfil</a></li>
                    </ul>
                </li>
            </ul>

            <a href="carrito.php" class="btn btn-outline-dark">
                <i class="bi bi-bag me-1"></i> Carrito
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </a>
        </div>
    </div>
</nav>
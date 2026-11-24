<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "includes/head.php"; ?>
    <title>Good Form — Wellness store</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include "includes/navbar.php"; ?>

    <!-- Portada (header del template) -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Muévete con buena forma</h1>
                <p class="lead fw-normal text-white-50 mb-4">Accesorios para Pilates, baile y movimiento.</p>
                <a href="catalogo.php" class="btn btn-light btn-lg">Ver catálogo</a>
            </div>
        </div>
    </header>

    <!-- Colecciones -->
    <main class="container px-4 px-lg-5 mt-5 flex-grow-1">
        <h2 class="fw-bold text-center mb-4">Colecciones</h2>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-grid-3x3 fs-1"></i>
                        <h3 class="h5 fw-bold mt-2">Mats</h3>
                        <p class="card-text">Para tu práctica de Pilates y yoga.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-heart fs-1"></i>
                        <h3 class="h5 fw-bold mt-2">Calcetines grip</h3>
                        <p class="card-text">Antideslizantes para reformer, barre y baile.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-bag-heart fs-1"></i>
                        <h3 class="h5 fw-bold mt-2">Bolsos y termos</h3>
                        <p class="card-text">Lleva todo tu equipo al estudio.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>
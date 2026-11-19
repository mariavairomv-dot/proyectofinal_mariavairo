<?php
// Conexión a la base de datos de Good Form
// "db" es el nombre del contenedor de MySQL en docker-compose
$con = mysqli_connect("db", "usuario", "M@riavairo8", "goodform");

if (mysqli_connect_errno()) {
    echo "Error al conectar con MySQL: " . mysqli_connect_error();
    exit();
}

// Para que los acentos y la ñ se guarden y se vean bien
mysqli_set_charset($con, "utf8mb4");
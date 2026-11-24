<?php
session_start();      // Buscamos la pulsera
session_destroy();    // La cortamos: se borra la sesión
header("Location: index.php");   // Lo mandamos a la página de inicio
exit();
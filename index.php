<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaz Cliente</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Bienvenid@ , <?php echo $_SESSION['nombre']; ?> (Cliente)</h1>
  <nav>
    <ul>
      <li><a href="catalogo.php">Ver Catálogo</a></li>
      <li><a href="favoritos.php">Ver Favoritos</a></li>
      <li><a href="logout.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  <div class="imagen-container">
    <img src="images/imagen02.jpg" alt="-" class="imagen-dueño">
  </div>
  <main>
    <!-- Contenido principal -->
  </main>
</body>
</html>
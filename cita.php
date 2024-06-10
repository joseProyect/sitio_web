<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clínica</title>
  <link rel="stylesheet" href="Citas.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CS</a>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="cita.php">Citas</a></li>
        <li><a href="contactos.php">Contactos</a></li>
      </ul>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <div class="separator"></div>

  <div class="container">
    <div class="appointment-form">
      <h2>Solicitar cita</h2>
      <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        
        <label for="fecha">Fecha de la cita:</label>
        <input type="date" id="fecha" name="fecha" required>
        
        <label for="mensaje">Mensaje adicional:</label>
        <textarea id="mensaje" name="mensaje" rows="4"></textarea>
        
        <button type="submit">Enviar solicitud</button>
      </form>
    </div>
  </div>
  
  <script>
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>
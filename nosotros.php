<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nosotros</title>
  <link rel="stylesheet" href="nosotros.css">
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
        <li><a href="logo.html">Citas</a></li>
        <li><a href="contactos.php">Contactos</a></li>
      </ul>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Tu vida no tiene solución pero tu sonrisa sí.</div>
    <div class="sub_title">Más de 21 años creando sonrisas, 
        siempre con un concepto moderno de atención dental integral.
        Somos una red privada que brinda servicios odontológicos generales 
        y especializados para toda la familia, con ambientes agradables y 
        cómodos para su espera, y tratamientos.</div>
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

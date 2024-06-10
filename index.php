<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <nav>
    <div class="menu">
    <div class="logo">
      <a href="#"><img src="images/logo.jpg" alt="Logo"></a>
    </div>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="logo.html">Citas</a></li>
        <li><a href="contactos.php">Medicos</a></li>
      </ul>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Tu vida no tiene solución pero tu sonrisa sí.</div>
    <div class="sub_title">Clinica Sonrisas</div>
    <div class="btns">
      <button><a href="nosotros.php">Infórmate más</a></button>
    </div>
  </div>

  <footer>
    <div class="footer-container">
      <div class="contact-info">
        <h3>Contacto</h3>
        <p><i class="fas fa-map-marker-alt"></i> Av. Javier Prado Este 1066, Urb. Corpac - 15036 Perú</p>
        <p><i class="fas fa-envelope"></i> webmaster@crp.com.pe</p>
        <p><i class="fas fa-phone"></i> (511) 224-2224 / (511) 224-2226</p>
      </div>
      <div class="useful-links">
        <h3>Enlaces útiles</h3>
        <ul>
          <li><a href="index.php">INICIO</a></li>
          <li><a href="nosotros.php">NOSOTROS</a></li>
          <li><a href="servicios.php">SERVICIOS</a></li>
          <li><a href="logo.html">CITAS </a></li>
          <li><a href="contactos.php">CONTACTOS</a></li>
        </ul>
      </div>
      <div class="newsletter">
        <h3>Boletín informativo</h3>
        <form>
          <input type="email" placeholder="Ingresa tu correo electrónico...">
          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
    <div class="social-media">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </footer>

  <script>
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>

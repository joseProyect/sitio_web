<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clinica</title>
  <link rel="stylesheet" href="servicio.css">
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

  <div class="content">
    <div class="card">
      <img src="PERIO.jpg" alt="Periodoncia">
      <span>SONRISAS</span>
      <h2>PERIODONCIA</h2>
      <p>La periodoncia es el área de la odontología que protege y fortalece los tejidos vitales que rodean tus prestigiosos dientes. Nuestros tratamientos periodontales modernos utilizan innovadoras técnicas y materiales para mantener tus dientes brillando por más tiempo y en su mejor estado.</p>
    </div>

    <div class="card">
      <img src="ENDO.jpg" alt="Endodoncia">
      <span>SONRISAS</span>
      <h2>ENDODONCIA</h2>
      <p>Desde caries profundas hasta traumatismos y restauraciones descuidadas, esta disciplina enfrenta desafíos comunes que pueden provocar daño irreversible en tus preciados dientes y causar dolores dentales severos.</p>
    </div>

    <div class="card">
      <img src="REALI.jpg" alt="Rehabilitación Oral">
      <span>SONRISAS</span>
      <h2>REABILITACION ORAL</h2>
      <p>La Rehabilitación Oral aborda diversos problemas dentales, como dientes dañados, pérdida de piezas dentales y maloclusiones, utilizando una combinación de procedimientos como implantes dentales, carillas, prótesis dentales y ortodoncia.</p>
    </div>

    <div class="card">
      <img src="OINTE.jpg" alt="Implantología">
      <span>SONRISAS</span>
      <h2>IMPLANTOLOGIA</h2>
      <p>Estos implantes son estructuras de titanio que se integran de forma segura con el hueso maxilar o mandibular, proporcionando una base sólida para restauraciones dentales como coronas, puentes o prótesis.</p>
    </div>

    <div class="card">
      <img src="4DON.jpg" alt="Odontopediatría">
      <span>SONRISAS</span>
      <h2>ODONTOPEDRIATRIA</h2>
      <p>La odontopediatría brinda atención preventiva y temprana, asegurando la salud bucal de los pequeños desde la aparición de sus primeros dientes, alrededor de los 6 meses de edad. Estas visitas permiten establecer hábitos saludables y detectar problemas dentales en etapas tempranas.</p>
    </div>
  </div>

  <footer>
    <!-- Contenido del pie de página -->
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

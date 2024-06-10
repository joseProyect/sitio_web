<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica</title>
  <link rel="stylesheet" href="contacto.css">
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

  <div class="card-container">
    <div class="card">
      <img src="ENDO.jpg" alt="Dr. Juan Pérez" class="profile-pic">
      <div class="status">Disponible</div>
      <div class="name">Dr. Juan Pérez</div>
      <div class="work-status">Endodoncista</div>
      <div class="title">Especialista en Tratamientos de Conductos</div>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-comment-dots"></i>
        <i class="fas fa-video"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
    <div class="card">
      <img src="PERIO.jpg" alt="Dra. María López" class="profile-pic">
      <div class="status">Disponible</div>
      <div class="name">Dra. María López</div>
      <div class="work-status">Ortodontista</div>
      <div class="title">Especialista en Ortodoncia y Brackets</div>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-comment-dots"></i>
        <i class="fas fa-video"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
    <div class="card">
      <img src="ODONTOLOGA 3.jpg" alt="Dr. Carlos Sánchez" class="profile-pic">
      <div class="status">Disponible</div>
      <div class="name">Dr. Carlos Sánchez</div>
      <div class="work-status">Periodoncista</div>
      <div class="title">Especialista en Encías y Periodoncia</div>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-comment-dots"></i>
        <i class="fas fa-video"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
    <div class="card">
      <img src="ODONTOLOGA 2.jpg" alt="Dra. Ana Gómez" class="profile-pic">
      <div class="status">Disponible</div>
      <div class="name">Dra. Ana Gómez</div>
      <div class="work-status">Prostodoncista</div>
      <div class="title">Especialista en Prótesis Dentales</div>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-comment-dots"></i>
        <i class="fas fa-video"></i>
        <a href="https://wa.me/51928035363"><i class="fab fa-whatsapp"></i></a>
      </div>
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

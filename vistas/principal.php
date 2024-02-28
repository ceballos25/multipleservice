<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Service</title>
    <link rel="stylesheet" href="../css/estilos_mul.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <header class="Tituloosm"> 

    <img class="logo_header" src="../img/logo_1.png" alt="Multiple Service">

    <h1 class="text-capitalize fs-2 text"> Hola, <?php echo $_SESSION['nombre_usuario']; ?></h1>

    <?php include 'menu.php' ?>

</header>
    

    <div class="container">
        <section id="bienvenida" style="text-align: center;">
            <h2>Bienvenido a Multiple Service</h2>
            <p>Proporcionamos una plataforma para conectar trabajadores informales con otras personas naturales que necesitan un empleado para desempeñar una labor. Descubre cómo podemos beneficiarte </p>
        </section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-100">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/Imagen1.jpg" class="d-block w-100" alt="Primera imagen">
                    <div class="carousel-caption d-none d-md-block">
                      <p>"Conectamos talento informal con oportunidades laborales, impulsando un impacto social positivo."</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../img/Imagen2.jpg" class="d-block w-100" alt="Segunda imagen">
                    <div class="carousel-caption d-none d-md-block">
                      <p>"Nuestra plataforma online ofrece flexibilidad para adaptarse a las demandas del mercado laboral."</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../img/Imagen3.jpg" class="d-block w-100" alt="Tercera imagen">
                    <div class="carousel-caption d-none d-md-block">
                      
                      <p>"Únete a nosotros en la construcción de un futuro laboral inclusivo y vibrante."</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev carrusel" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next carrusel" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <br>
        <br>
        
        <section id="bienvenida" class="row">
          <div class="col-md-6">
            <h2>Nuestros Servicios</h2>
            <div class="ajustes-bienvenida">
              <p>En nuestro espacio virtual, nos dedicamos a potenciar las oportunidades laborales en el sector informal. Conectamos trabajadores con empleo digno y ofrecemos acceso a talento calificado en diversos servicios, desde plomería hasta carpintería. Nuestra plataforma se destaca por su flexibilidad y conveniencia, permitiendo a los trabajadores adaptarse rápidamente a las demandas del mercado. Actuamos como un puente entre las habilidades de los trabajadores y las necesidades de empleadores y clientes, creando un ecosistema laboral dinámico y beneficioso para todos.</p>
          </div>
          
          </div>
          <div class="col-md-6 img-extra">
    <img src="../img/extra.jpg" alt="relleno" class="hover-scale">
</div>

      </section>

    </div>
   
   
    <footer>
      <div class="footer-links">
          <a href="#" target="_blank">Política de Privacidad</a>
          <a href="#" target="_blank">Términos de Servicio</a>
      </div>
      <p>&copy; 2023 Multiple Service. Todos los derechos reservados.</p>
    </footer>



    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
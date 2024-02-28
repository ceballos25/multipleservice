<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Service-admin</title>
    <link rel="stylesheet" href="../css/estilos_vigentes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <header class="Tituloosm"> 

    <img class="logo_header" src="../img/logo_1.png" alt="Multiple Service">
    <h1   style="font-family: 'Arial', sans-serif;color: #0062b3;text-align: center;text-transform: uppercase;margin: 20px auto;font-size: 40px; ">Ofertas de empleo</h1>
    
  <?php include 'menu.php' ?>

</header>
    

    <div>
        <label for="habilidades">Empleos Postulados</label>
        <select id="habilidades" name="habilidades">
            <option value="plomeria">Plomero</option>
            <option value="carpinteria">Carpintero</option>
            <option value="mecanica">Mecánico</option>
            <option value="contruccion">Contruccion</option>
            <option value="contruccion">Aseo</option>
            <option value="contruccion">Pintor</option>
        </select>
        
    </div>

    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="card-group">

            <div class="card empleos" style="margin: 10px; border-radius: 3%; background-color: lightblue;">
              <img src="../img/plomero.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Plomero</h5>
                <p class="card-text">Explora las oportunidades disponibles para plomeros con experiencia en instalaciones y reparaciones. Encuentra el trabajo que se ajuste a tus habilidades y expectativas.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary" style="margin: 10px;">Postular</a>
              </div>
            </div>

            <div class="card empleos" style="margin: 10px; border-radius: 3%; background-color: lightblue;">
              <img src="../img/martillo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Carpintero</h5>
                <p class="card-text">Si eres un hábil carpintero en busca de nuevos proyectos, encuentra oportunidades emocionantes y desafiantes aquí.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary" style="margin: 10px;">Postular</a>
              </div>
            </div>

            <div class="card empleos" style="margin: 10px; border-radius: 3%; background-color: lightblue;">
              <img src="../img/mecanico.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mecanico</h5>
                <p class="card-text">Para los amantes de la mecánica, descubre ofertas de empleo que se adapten a tu experiencia en diagnóstico y reparación de vehículos.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary" style="margin: 10px;">Postular</a>
              </div>
            </div>
        </div>
        <div class="card-group">
          <div class="card-group" style="margin: 1px;">
            <div class="card empleos" style="margin: 10px; border-radius: 3%; background-color: lightblue;">
              <img src="../img/trabajador.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Contruccion</h5>
                <p class="card-text">Encuentra oportunidades en el campo de la construcción. Desde diferentes aspectos de la construcción, descubre proyectos emocionantes y formas de contribuir.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary">Postular</a>
              </div>
            </div>
            <div class="card empleos"style="margin: 10px; border-radius: 3%; background-color: lightblue;">
                <img src="../img/pintor.png" alt="...">
                <div class="card-body">
                <h5 class="card-title">Pintor</h5>
                <p class="card-text">Si eres un pintor con habilidades artísticas excepcionales y estás en busca de oportunidades kpara expresar tu creatividad, para aquellos que tienen habilidades en pintura de casas y edificaciones, y desean encontrar oportunidades de trabajo en proyectos de mano de obra, ¡estás en el lugar adecuado!</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary">Postular</a>
              </div>
            </div>
            <div class="card empleos" style="margin: 10px; border-radius: 3%; background-color: lightblue;">
              <img src="../img/limpieza.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Aseo</h5>
                <p class="card-text">Si buscas oportunidades en el sector de limpieza, exploramos ofertas de empleo que valoran la proactividad y la atención al detalle.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
                <br>
                <a href="#" class="btn btn-primary">Postular</a>
              </div>
            </div>
          </div>
    </div>
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
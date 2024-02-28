<?php 

session_start();

    // Verificar si la variable de sesión existe
    if (isset($_SESSION['nombre_usuario'])) {

    } else {
        // Puedes redirigir al usuario a otra página utilizando header
        header("Location: ../index.php");
        exit(); // Asegúrate de salir después de redirigir para evitar ejecución adicional
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Service</title>
    <link rel="stylesheet" href="../css/estilos_mul.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <header class="Tituloosm"> 

    <img class="logo_header" src="../img/logo_1.png" alt="Multiple Service">

    <h1 class="text-capitalize fs-2 text"> Hola, <?php echo $_SESSION['nombre_usuario']; ?></h1>

    <?php include 'menu.php' ?>

    </header>

<section class="p-5 m-5 card rounded-4">
    <div class="border border-2">
        <h3 class="text-center pb-4 mt-4">Crear Vacante:</h3>
        <form action="../funciones/crear_vacante.php" method="post">
        <div class="container text-center">
          <div class="row">
            <div class="col-md col-sm-6">
            <div class="mb-3">
            <label class="form-label">Cargo Solicitado</label>
            <input type="text" class="form-control text-uppercase" name="cargo" placeholder="Eje: Desarrolador Junior" required>
          </div>
            </div>

            <div class="col-md col-sm-6">
            <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control text-uppercase" name="descripcion" placeholder="Eje: Desarrollar...." rows="1" required></textarea>
          </div>
            </div>

            <div class="col-md col-sm-6">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salario</label>
            <input type="text" class="form-control text-uppercase" name="salario" placeholder="$1.500.000 - $2.500.000" required>
          </div>
            </div>

            <div class="col-md col-sm-6">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lugar</label>
            <input type="text" class="form-control text-uppercase" name="lugar" placeholder="Eje: Medellin" required>
          </div>
            </div>

            <div class="col-md col-sm-6">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Horario</label>
            <input type="text" class="form-control text-uppercase" name="horario" placeholder="Eje: L-V 8-5" required>
          </div>
            </div>

          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-outline-success mb-2 me-3">Enviar</button>
    </div>
    </form>
    </div>
</section>




    <footer>
      <div class="footer-links">
          <a href="#" target="_blank">Política de Privacidad</a>
          <a href="#" target="_blank">Términos de Servicio</a>
      </div>
      <p>&copy; 2023 Multiple Service. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/administracion_empleos.js"></script>
</body>
</html>
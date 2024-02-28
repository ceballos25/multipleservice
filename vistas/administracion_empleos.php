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
        <h3 class="text-center pb-4 mt-4">Empleos Pendientes por: <span class="badge text-bg-success">Aprobación</span></h3>
        <table class="table table-hover">
            <thead>
                <th>id</th>
                <th>Cargo</th>
                <th>Descripción</th>
                <th>Salario</th>
                <th>Lugar</th>
                <th>Horario Laboral</th>
                <th>Creada Por:</th>
                <th>Fecha Creación:</th>
                <th>Acciones</th>
            </thead>

            <tbody>
                <!-- consulta para table empleos -->
                <?php
                    $usuario = 'root';
                    $contrasena = '';

                    $conexion = new PDO('mysql:host=localhost;dbname=multiple_services', $usuario, $contrasena);
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Consulta SQL para verificar las credenciales
                    $sql = "SELECT id, cargo, descripcion, salario, lugar, horario, creado_por, estado, fecha_creacion FROM empleos WHERE estado='PENDIENTE'";
                    $stmt = $conexion->query($sql);
                ?>

                <?php while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?= $fila['id'] ?></td>
                        <td><?= $fila['cargo'] ?></td>
                        <td><?= $fila['descripcion'] ?></td>
                        <td><?= $fila['salario'] ?></td>
                        <td><?= $fila['lugar'] ?></td>
                        <td><?= $fila['horario'] ?></td>
                        <td><?= $fila['creado_por'] ?></td>                        
                        <td><?= date("d/m/Y", strtotime($fila['fecha_creacion'])) ?></td>


                        <td>
                            <button style="padding-bottom:0!important" type="button" class="btn btn-outline-success m-0 p-1 pb-0 btnAprobar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Aprobar"><i class="bi bi-check2-square"></i></button>
                            <button style="padding-bottom:0!important" type="button" class="btn btn-outline-danger m-0 p-1 pb-0 btnRechazar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Rechazar"><i class="bi bi-x"></i></button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>


 <!-- Modal para Aprobar -->
<div class="modal fade" id="modalAprobar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está Seguro que desea <span class="badge text-bg-success">APROBAR</span>
        La vacante:    
        <input class="form-control mt-4" style="cursor: not-allowed;" name="nombreEmpleo" id="nombreEmpleo" type="text" disabled readonly>


      </div>
      <form action="../funciones/aprobarVacante.php" method="post">
        
        <input type="hidden" name="idEmpleo" id="idEmpleo">
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Sí, estoy seguro</button>
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Modal para Rechazar -->
 <div class="modal fade" id="modalRechazar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está Seguro que desea <span class="badge text-bg-danger">RECHAZAR</span>
        La vacante:    
        <input class="form-control mt-4" style="cursor: not-allowed;" name="nombreEmpleoRechazar" id="nombreEmpleoRechazar" type="text" disabled readonly>

      </div>
      <form action="../funciones/rechazarVacante.php" method="post">
        
        <input type="hidden" name="idEmpleoRechazar" id="idEmpleoRechazar">
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Sí, estoy seguro</button>
      </div>
      </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/administracion_empleos.js"></script>
</body>
</html>
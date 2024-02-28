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

    <div>
    <h3 class="text-center p-2 pb-4">Mi Cuenta</h3>
    <table class="table table-hover" id="tablaMiCuenta">
            <thead>
            <th>id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Género</th>
            <th>Fecha Nacimiento</th>
            <th>Fecha Registro</th>
            <th>Acciones</th>
        </thead>

        <tbody>

         <!-- consulta para table mi cuenta -->
        <?php
        
            $id_condicional = $_SESSION['id'];
            $usuario = 'root';
            $contrasena = '';

            $conexion = new PDO('mysql:host=localhost;dbname=multiple_services', $usuario, $contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Consulta SQL para verificar las credenciales
            $sql = "SELECT id, nombre, email, fecha_nacimiento, genero, fecha_registro  FROM users WHERE id='$id_condicional'";
            $stmt = $conexion->query($sql);
        ?>

        <?php while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                            <tr>
                                <td><?= $fila['id'] ?></td>
                                <td><?= $fila['nombre'] ?></td>
                                <td><?= $fila['email'] ?></td>
                                <td><?= $fila['genero'] ?></td>
                                <td><?= date("d/m/Y", strtotime($fila['fecha_nacimiento'])) ?></td>
                                <td><?= date("d/m/Y", strtotime($fila['fecha_registro'])) ?></td>                       
                                <td>
                                    <button id="btnEditarMiCuenta" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                                    <button id="btnEliminarMiCuenta" type="button" class="btn btn-outline-danger"><i class="bi bi-person-x-fill"></i></button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                </tbody> 


    </table>
    </div>

    <!-- Modal para Editar Mi cuenta -->
    <div class="modal fade" id="modaMiCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Mi Cuenta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../funciones/editarCuenta.php" method="POST">
            <input type="hidden" class="form-control" id="idUsuario" name="idUsuario">
          <div style="margin-top:-20px">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="email" class="form-control" id="correoUsuario" name="correoUsuario">
          </div>
          <div class="mb-3">
          <label for="recipient-name" class="col-form-label">Género:</label>
          <select class="form-select" id="generoUsuario" name="generoUsuario">
            <option selected></option>
            <option value="MASCULINO">MASCULINO</option>
            <option value="FEMENINO">FEMENINO</option>
            <option value="PREFIERO NO DECIRLO">PREFIERO NO DECIRLO</option>
            </select>
          </div>
            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fecha Nacimiento:</label>
            <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal para eliminar -->
<div class="modal fade" id="modalEliminarCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Darme de Baja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está Seguro que desea darse de baja? NO podrá ingresar de nuevo con esta cuenta
      </div>
      <form action="../funciones/elimiarCuenta.php" method="post">
        
        <input type="hidden" name="idUsuarioEliminar" id="idUsuarioEliminar">
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Sí, estoy seguro</button>
      </div>
      </form>
    </div>
  </div>
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
    <script src="../js/mi_cuenta.js"></script>
</body>
</html>
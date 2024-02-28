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
    <table class="table table-hover">
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
                                <td><?= date("d-m-Y", strtotime($fila['fecha_nacimiento'])) ?></td>
                                <td><?= date("d-m-Y", strtotime($fila['fecha_registro'])) ?></td>                       
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="editar"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="bi bi-person-x-fill"></i></button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                </tbody> 


    </table>
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
    <script src="../js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php

session_start();

    // Verificar si la variable de sesión existe
    if (isset($_SESSION['nombre_usuario'])) {
        $creado_por = $_SESSION['nombre_usuario'];

    } else {
        // Puedes redirigir al usuario a otra página utilizando header
        header("Location: ../index.php");
        exit(); // Asegúrate de salir después de redirigir para evitar ejecución adicional
    }


    $cargo = $_POST["cargo"];
    $descripcion = $_POST["descripcion"];
    $salario = $_POST["salario"];
    $lugar = $_POST["lugar"];
    $horario = $_POST["horario"];
    $estado = "PENDIENTE";


    //conexion a la base de datos
    $usuario = 'root';
    $contrasena = '';

  

     try {
      $conexion = new PDO('mysql:host=localhost;dbname=multiple_services', $usuario, $contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      // Consulta SQL para verificar las credenciales
      $sql = $conexion->query(
         "INSERT INTO empleos(id,
         cargo,
         descripcion, 
         salario,
         lugar,
         horario,
         creado_por,
         estado,
         fecha_creacion)
         VALUES (id,
                 '$cargo',
                 '$descripcion',
                 '$salario',
                 '$lugar',
                 '$horario',
                 '$creado_por',
                 '$estado',                 
                 current_timestamp())"
          
         );
 
  
      // Verificar si se encontraron resultados
      if ($sql) {
          // Usuario autenticado, redirigir a la página de inicio
          echo '<script>
          Swal.fire({
              title: "Vacante Creada",
              text: "Pronto le notificaremos el estado de la Vacante",
              icon: "success",
              confirmButtonText: "OK"
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = "../vistas/usuarios_creacion_vacante.php";
              }
          });
      </script>';
      } else {
          // Usuario no autenticado, mostrar mensaje de error o redirigir al formulario de login
          echo '<script>
          Swal.fire({
              title: "Ups..!",
              text: "Algo Salió Mal",
              icon: "error",
              confirmButtonText: "Volver a Intentar"
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = "../vistas/usuarios_creacion_vacante.php";
              }
          });
      </script>';
      }
  } catch (PDOException $e) {
      //echo "Error: " . $e->getMessage();

      echo "<script>
      Swal.fire({
          title: 'Algo Salió Mal',
          text: 'Falló la base de datos, contacte al desarrollador',
          icon: 'warning',
          confirmButtonText: 'Volver a Intentar'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = '../vistas/usuarios_creacion_vacante.php';
          }
      });
  </script>";
  }
?>
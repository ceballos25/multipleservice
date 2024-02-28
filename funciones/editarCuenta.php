<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mi Cuenta</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php


    $idUsuario = $_POST["idUsuario"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $correoUsuario = $_POST["correoUsuario"];
    $generoUsuario = $_POST["generoUsuario"];
    $fechaNacimiento = $_POST["fechaNacimiento"];

    //conexion a la base de datos
    $usuario = 'root';
    $contrasena = '';


     try {
      $conexion = new PDO('mysql:host=localhost;dbname=multiple_services', $usuario, $contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      // Consulta SQL para verificar las credenciales
      $sql = $conexion->query(
         "UPDATE users
         SET nombre='$nombreUsuario',
             email='$correoUsuario',
             genero='$generoUsuario',
             fecha_nacimiento='$fechaNacimiento'
             WHERE id='$idUsuario'"
         );
 
  
      // Verificar si se encontraron resultados
      if ($sql) {
          // Usuario autenticado, redirigir a la página de inicio
          echo '<script>
          Swal.fire({
              title: "OK",
              text: "Sus datos se Actualizaron Correctamente",
              icon: "success",
              confirmButtonText: "Volver"
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = "../vistas/mi_cuenta.php";
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
                window.location.href = "../vistas/mi_cuenta.php";
            }
          });
      </script>';
      }
  } catch (PDOException $e) {
      //echo "Error: " . $e->getMessage();

      echo "<script>
      Swal.fire({
          title: 'Algo Salió Mal',
          text: 'Hubo un error en la base de datos, contacte al desarrollador',
          icon: 'warning',
          confirmButtonText: 'Volver a Intentar'
      }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '../vistas/mi_cuenta.php';
        }
      });
  </script>";
  }
?>
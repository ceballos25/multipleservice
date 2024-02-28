<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisiar Sesión</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php

$usuario_login = $_POST["usuario"];
$password_usuario = $_POST["password"];

// Conexion a la base de datos
$usuario = 'root';
$contrasena = '';

try {
    $conexion = new PDO('mysql:host=localhost;dbname=multiple_services', $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM users WHERE email='$usuario_login' AND password='$password_usuario'";
    $stmt = $conexion->query($sql);


    //query de sesion
    $sql_sesion = "SELECT id, nombre, tipo_usuario FROM users WHERE email='$usuario_login'";
    $stmt_sesion = $conexion->query($sql_sesion);

    // Contar las filas resultantes
    $count = $stmt->rowCount();

    // Verificar si se encontraron resultados
    if ($count > 0) {
        // Usuario autenticado, redirigir a la página de inicio

        session_start();
        // Obtener el nombre de la fila
        $row = $stmt_sesion->fetch(PDO::FETCH_ASSOC);
        $nombre_usuario_mostrar = $row['nombre'];
        $tipo_usuario_mostrar = $row['tipo_usuario'];
        $id = $row['id'];

        // Asignar el nombre a la variable de sesión
        $_SESSION['nombre_usuario'] = $nombre_usuario_mostrar;
        $_SESSION['tipo_usuario_mostrar'] = $tipo_usuario_mostrar;
        $_SESSION['id'] = $id;



        header("Location: ../vistas/principal.php");
        
    } else {
        // Usuario no autenticado, mostrar mensaje de error o redirigir al formulario de login
        echo '<script>
        Swal.fire({
            title: "Ups..!",
            text: "Usuario y/o Contraseña Incorrecto",
            icon: "error",
            confirmButtonText: "Volver a Intentar"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../index.php";
            }
        });
    </script>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

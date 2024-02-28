
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>inicio</title>
    <link rel="stylesheet" href="css/style.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>

    <header class=""> 

        <img class="logo_header" src="img/logo_1.png" alt="Multiple Service">
        
    </header>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                   <button class="justify-content-center" id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="funciones/login.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="usuario" placeholder="Correo Electronico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <div class="d-flex justify-content-center">
                        <button type="submit">Entrar</button>
                    </div>
                </form>

                <!--formulario registro-->
                <form action="funciones/registrar.php" method="post" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="text" placeholder="Correo Electronico" name="email">
                    <input type="password" id="contrasena" name="password" placeholder="Contraseña" required>
                    <input type="password" id="confirmar_contrasena" name="confirmar_password" placeholder="Confirmar Contraseña" required>
                    <input type="date" id="fecha_nacimiento" name="Fecha_nacimiento" required>

                    <div class="form-group pt-3">
                        <div class="gender-options">
                            <select class="form-select" aria-label="Género" name="genero">
                                <option selected>Género</option>
                                <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMENINO">FEMENINO</option>
                                <option value="PREFIERO NO DECIRLO">PREFIERO NO DECIRLO</option>
                              </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center centrar">
                        <button>Registrarme</a></button>
                    </div>
                            
                </form>
            </div>
        </div>

    </main>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
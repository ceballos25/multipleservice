<!-- Vista para usuario estanda -->
<?php if ($_SESSION['tipo_usuario_mostrar'] == "ESTANDAR"): ?>
<nav class="navbar bg-body-tertiary fixed-top" style="    background-color: rgba(153, 185, 221, -0.3)!important">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: auto !important;">
          <div class="offcanvas-header justify-content-center">
            <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h3>
          </div>
          <div class="offcanvas-body d-flex">
            <ul class="navbar-nav pe-3">
              <li class="nav-item">
                <a class="nav-link active fs-5 text" aria-current="page" href="principal.php">Inicio <i class="bi bi-house-door"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/empleos_vigentes.php">Empleos <i class="bi bi-card-checklist"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/usuarios_creacion_vacante.php">Crear Vacante <i class="bi bi-building-add"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/mi_cuenta.php">Mi Cuenta <i class="bi bi-person-rolodex"></i></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text" href="../vistas/salir.php">Salir <i class="bi bi-box-arrow-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<?php endif; ?>

<!-- Vista para usuario administrador -->
<?php if ($_SESSION['tipo_usuario_mostrar'] == "ADMIN"): ?>
<nav class="navbar bg-body-tertiary fixed-top" style="    background-color: rgba(153, 185, 221, -0.3)!important">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: auto !important;">
          <div class="offcanvas-header justify-content-center">
            <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h3>
          </div>
          <div class="offcanvas-body d-flex">
            <ul class="navbar-nav pe-3">
              <li class="nav-item">
                <a class="nav-link active fs-5 text" aria-current="page" href="principal.php">Inicio <i class="bi bi-house-door"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/empleos_vigentes.php">Empleos <i class="bi bi-card-checklist"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/usuarios_creacion_vacante.php">Crear Vacante <i class="bi bi-building-add"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/mi_cuenta.php">Mi Cuenta <i class="bi bi-person-rolodex"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/administracion_empleos.php">Empleos <i class="bi bi-gear"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 text" href="../vistas/administracion_usuarios.php">Usuarios <i class="bi bi-gear"></i></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text" href="../vistas/salir.php">Salir <i class="bi bi-box-arrow-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<?php endif; ?>

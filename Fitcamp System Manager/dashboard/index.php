<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitcamp System Manager</title>

    <!-- Icono de Pestaña -->
    <link rel="icon" href="../images/Fitcamp_Logo.png">

    <!-- Estilos -->
    <link rel="stylesheet" href="../styles/styles_dashboard.css">

    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="cdnjs.cloudflare.com">
</head>

<body>

    <!-- BARRA LATERAL -->
    <nav class="sidebar">
        <div class="user-section">
            <div class="profile-img-container">
                <!-- Imagen de Perfil -->
                <img src="../images/Fitcamp_Logo.png" id="profile-pic" alt="Perfil">
                <label for="upload-photo" class="edit-photo">
                    <i class="fas fa-camera"></i>
                </label>
                <!-- Input oculto para cambiar foto -->
                <input type="file" id="upload-photo" accept="image/*" onchange="previewImage(event)"
                    style="display:none;">
            </div>
            <h3>Usuario</h3>
            <p>Cliente Activo 2026</p>
        </div>

        <div class="nav-container">
            <ul class="nav-links">
                <li>
                    <div class="nav-item active" onclick="showSection(event, 'notificaciones')"><i
                            class="fas fa-bell"></i> Notificaciones</div>
                </li>
                <li>
                    <div class="nav-item" onclick="showSection(event, 'rutinas')"><i class="fas fa-calendar-alt"></i>
                        Rutinas y Actividades</div>
                </li>
                <li>
                    <div class="nav-item" onclick="showSection(event, 'pago')"><i class="fas fa-credit-card"></i> Pago
                        de Mensualidad</div>
                </li>

                <!-- Menú Desplegable Herbalife -->

                <li class="has-submenu">
                    <div class="nav-item" onclick="toggleSubmenu(event, 'sub-productos')">
                        <i class="fas fa-shopping-basket"></i>
                        <span>Herbalife 🠻</span>
                        <!-- Esta es la flechita que reaccionará al clic -->
                        <i class="fas fa-chevron-down arrow-icon"></i>
                    </div>
                    <ul id="sub-productos" class="submenu">
                        <li><a href="#" onclick="showSection(event, 'solicitar-prod')">Solicitar Producto</a></li>
                        <li><a href="#" onclick="showSection(event, 'ver-solicitudes')">Ver solicitudes</a></li>
                    </ul>
                </li>


                <li>
                    <div class="nav-item" onclick="showSection(event, 'nutricion')"><i class="fas fa-apple-whole"></i>
                        Nutrición</div>
                </li>
                <li>
                    <div class="nav-item" onclick="showSection(event, 'progreso')"><i class="fas fa-chart-line"></i> Mi
                        Progreso</div>
                </li>
                <li>
                    <div class="nav-item" onclick="showSection(event, 'perfil')"><i class="fas fa-user-circle"></i> Mi
                        Perfil</div>
                </li>
            </ul>

            <div class="logout-section">
                <div class="nav-item logout-link"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</div>
            </div>
        </div>
    </nav>


    <div class="content">
        <!--<h1>Notificaciones</h1> -->
       <div class="card">
        <h3>🔔 Bienvenid@ al Fitcamp System Manager</h3>
       </div>
    </div>

    <!-- JS -->
    <script src="../scripts/script_dasboard.js"></script>
</body>

</html>

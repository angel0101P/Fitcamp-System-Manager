<?php

echo "bienvenido";


?>

<!DOCTYPE html>
<html>
<head>
    <title>Cerrar Sesión</title>
</head>
<body>
    <h1>¿Cerrar Sesión?</h1>
    
    <p>¿Estás seguro que quieres cerrar la sesión?</p>
    
    <form action="../cerrar_sesion.php" method="GET">
        <button type="submit">Sí, Cerrar Sesión</button>
        <a href="dashboard.php">No, Cancelar</a>
    </form>
    
    <p>Volver al <a href="dashboard.php">Dashboard</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Cerrar sesión Usuario</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    <h1>Cerrar sesión usuario</h1>

    <?php
        session_start();
        echo "<p>Cerrando sesión </p>";
            if(session_destroy()) {
                echo "<P>Sesión terminada satisfactoriamente</P>";
            }
    ?>

    <?php include 'plantilla/footer.php'; ?>
</body>
</html>

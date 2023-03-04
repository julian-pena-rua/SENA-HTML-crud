<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Inicio sesión</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    
    <main>
        <h1>Autenticación</h1>
        <form action="Perfil.php" method="post">
            <p>Su email: <input type="text" name="email" /></p>
            <p><input type="submit" class="boton"/></p>
        </form>
    

    </main>

    
    <?php include 'plantilla/footer.php'; ?>
    
</body>
</html>
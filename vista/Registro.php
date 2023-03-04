<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Manejo de Formularios</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    <main>
        <h1>Registro de Usuario</h1>
        <h2>Importante: </h2>
        <p>Ingresar datos reales y verídicos.</p>
        <form action="accionInsertar.php" method="post">
            <p>Su nombre: <input type="text" name="nombre" /></p>
            <p>Su apellido: <input type="text" name="apellido" /></p>
            <p>Su email: <input type="text" name="email" /></p>
            <p><input type="submit" class="boton" /></p>
        </form>
    </main>
    
    <?php include 'plantilla/footer.php'; ?>
    
</body>
</html>
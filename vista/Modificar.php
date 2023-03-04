<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Modificar Usuario</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    <main>
        <h1>Modificar Usuario</h1>
        <h2>Importante: </h2>
        <p>Ingresar datos reales y verídicos.</p>
        <form action="accionModificar.php" method="post">
            <p>Su nombre:   <input type="text" name="nombre"    value= "<?php echo $_SESSION['nombre']; ?>" />   </p>
            <p>Su apellido: <input type="text" name="apellido"  value=" <?php echo $_SESSION['apellido']; ?>"/>  </p>
            <p>Su email:    <input type="text" name="email"     value=" <?php echo $_SESSION['email']; ?>" />    </p>
            <p><input type="submit" /></p>
        </form>
    </main>
    
    <?php include 'plantilla/footer.php'; ?>
    
</body>
</html>
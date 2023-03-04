<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Eliminar Usuario</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    <h1>Eliminar usuario</h1>
    
    <?php 
    #PAQUETES
    require '../modelo/Usuario.php';

    session_start();
    
    #COMPORTAMIENTOS
    echo "<p>Eliminando usuario</p>";
    usuario_DeleteID($conexionPDO, $_SESSION['id']); 

    session_destroy();

    echo "<p>Proceso realizado exitosamente.</p>";
    
    ?>

    <p><a href="../index.php" class="boton"> Volver al inicio</a></p>
    <?php include 'plantilla/footer.php'; ?>
</body>
</html>

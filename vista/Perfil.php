<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Perfil Usuario</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>

    <a href="Modificar.php" class="boton">Modificar usuario</a>
    
    <br>
    <br>
    
    <?php
    #PAQUETES
    require '../modelo/Usuario.php';

    session_start();
    #COMPORTAMIENTOS

        if ($_POST) {
            echo '<pre>';
            //echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
            $result = usuario_SelectPDO_Email($conexionPDO, $_POST['email']);
            
            if ($result[0]['email'] == $_POST['email']){
                echo "Inicio Exitoso";

                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['nombre'] = $result[0]['nombre'];
                $_SESSION['apellido'] = $result[0]['apellido'];
                $_SESSION['fecha_creacion'] = $result[0]['fecha_creacion'];
                $_SESSION['email'] = $result[0]['email'];
                
            }
            //var_dump($result);           
        }
    ?>

    <main>
        <h1>Perfil usuario</h1>
        <P>Este es un texto generado para el usuario: <?php echo "{$_SESSION['nombre']}"?> </P>
        <P>El usuario fue creado el día: <?php echo "{$_SESSION['fecha_creacion']}"?> </P>
        <P>El id es: <?php echo "{$_SESSION['id']}"?> </P>

    </main>
    
    <a href="Eliminar.php" class="boton">Eliminar usuario</a></p>
    

    
    <?php include 'plantilla/footer.php'; ?>
</body>
</html>

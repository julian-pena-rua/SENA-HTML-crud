<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro modificado</title>
</head>
<body>
    <h1>MODIFICADO CON ÉXITO</h1>
    <?php session_start();?>
    
    Hola, su nuevo nombre es <?php echo htmlspecialchars($_POST['nombre']);  // htmlspeacialchars garantiza que se codifique cualquier caracter especial previniendo inyección html o js  ?>. 
    <br>
    Su nuevo apellido es <?php echo htmlspecialchars($_POST['apellido']);  ?> .
    <br>
    y su nuevo email es <?php echo htmlspecialchars($_POST['email']);  ?> .
    <br>
    Modificando
    <br>
    <?php 
        #PAQUETES
        require '../modelo/Usuario.php';
        
        usuario_updateAll($conexionPDO, $_POST['apellido'], $_POST['nombre'], $_POST['email'], $_SESSION['id'] );

        //usuario_InsertPDO_Nombre_Apellido_Email( $conexionPDO, $_POST['nombre'], $_POST['apellido'], $_POST['email'] );


    ?>
    <p><a href="Perfil.php" class="boton"> Volver al perfil</a></p>
    
</body>
</html>
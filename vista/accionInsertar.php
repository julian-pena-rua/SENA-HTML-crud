
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro creado</title>
</head>
<body>
    <h1>CREADO CON ÉXITO</h1>

    Hola <?php echo htmlspecialchars($_POST['nombre']);  // htmlspeacialchars garantiza que se codifique cualquier caracter especial previniendo inyección html o js  ?>. 
    <br>
    Su apellido es <?php echo htmlspecialchars($_POST['apellido']);  ?> .
    <br>
    Su email es <?php echo htmlspecialchars($_POST['email']);  ?> .
    <br>
    Ingresando
    <br>
    <?php 
        #PAQUETES
        require '../modelo/Usuario.php';

        usuario_InsertPDO_Nombre_Apellido_Email( $conexionPDO, $_POST['nombre'], $_POST['apellido'], $_POST['email'] );


    ?>
    <p><a href="Perfil.php" class="boton"> Ir al perfil</a></p>
</body>
</html>
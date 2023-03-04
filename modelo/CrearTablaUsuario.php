<?php
    # PAQUETES
    require '../controlador/conexionDB.php';

    # ATRIBUTOS
    $conexionPDO        = ConexionPHPDataObject($servername,$username,$password,$dbname);
    
    # COMPORTAMIENTOS
    
    function CrearTablaUsuario_MySQLiPDO($conexionPDO){
        try {
            $sql = "CREATE TABLE Usuario (
                            id INT(6) AUTO_INCREMENT PRIMARY KEY,
                            nombre VARCHAR(30) NOT NULL,
                            apellido VARCHAR(30) NOT NULL,
                            email VARCHAR(50),
                            fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            
            // utiliza exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Tabla Usuario creada satisfactoriamente.";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conexionPDO = null;
    }

    # PRUEBAS

    CrearTablaUsuario_MySQLiPDO($conexionPDO);

?>
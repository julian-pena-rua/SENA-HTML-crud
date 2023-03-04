<?php
    # PAQUETES
    require '../controlador/conexion.php';

    # ATRIBUTOS
    
    $conexionPDO        = ConexionPHPDataObject($servername,$username,$password,$dbname);

    # COMPORTAMIENTOS

    // INSERT    
    function usuario_InsertPDO($conexionPDO){   
        try {
            $sql = "INSERT INTO Usuario (nombre, apellido, email)
                    VALUES ('John', 'Doe', 'john@example.com')";
            // usa exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Nuevo registro creado satisfactoriamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conexionPDO = null;
    }
    function usuario_InsertPDO_Nombre_Apellido_Email($conexionPDO, $nombre, $apellido, $email){   
        try {
            $sql = "INSERT INTO Usuario (nombre, apellido, email)
                    VALUES ('{$nombre} ', '{$apellido}', '{$email}')";
            // usa exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Nuevo registro creado satisfactoriamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conexionPDO = null;
    }

    // SELECT
    function usuario_SelectPDO($conexionPDO){   
        try {
            // prepara la consulta
            $stmt = $conexionPDO->prepare("SELECT id, nombre, apellido FROM Usuario");
            // ejecuta la consulta
            $stmt->execute();
        
            // configura el arreglo resultante en asociativo
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetchAll()) {
                print_r($row). "<br>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conexionPDO = null;
        return $result;
    }
    function usuario_SelectPDO_Nombre($conexionPDO,$nombre){   
        try {
            // prepara la consulta
            $stmt = $conexionPDO->prepare("SELECT id, nombre, apellido FROM Usuario WHERE nombre = '{$nombre}'");
            // ejecuta la consulta
            $stmt->execute();
        
            // configura el arreglo resultante en asociativo
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetchAll()) {
                print_r($row). "<br>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conexionPDO = null;
        return $result;
    }
    function usuario_SelectPDO_Apellido($conexionPDO,$apellido){   
        try {
            // prepara la consulta
            $stmt = $conexionPDO->prepare("SELECT id, nombre, apellido FROM Usuario WHERE apellido = '{$apellido}'");
            // ejecuta la consulta
            $stmt->execute();
        
            // configura el arreglo resultante en asociativo
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetchAll()) {
                print_r($row). "<br>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conexionPDO = null;
        return $result;
    }
    function usuario_SelectPDO_Email($conexionPDO, $email){   
        try {
            // prepara la consulta
            $stmt = $conexionPDO->prepare("SELECT id, nombre, apellido, email, fecha_creacion FROM Usuario WHERE email = '{$email}' LIMIT 1");
            // ejecuta la consulta
            $stmt->execute();
        
            // configura el arreglo resultante en asociativo
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetchAll()) {
                return $row;
            }
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conexionPDO = null;
        //return $row;
    }
    // UPDATE
    function usuario_update($conexionPDO){
        try {
            $sql = "UPDATE Usuario SET apellido='Doe' WHERE id=2";
            // Prepare statement
            $stmt = $conexionPDO->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " registro ACTUALIZADO satisfactoriamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conexionPDO = null;
    }
    function usuario_updateAll($conexionPDO, $apellido, $nombre,$email, $id){
        try {
            $sql = "UPDATE Usuario SET apellido='{$apellido}', nombre = '{$nombre}', email = '{$email}' WHERE id = {$id}";
            // Prepare statement
            $stmt = $conexionPDO->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " registro ACTUALIZADO satisfactoriamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conexionPDO = null;
    }
    // DELETE
    function usuario_DeletePDO($conexionPDO){
        try{
            // sql to delete a record
            $sql = "DELETE FROM Usuario WHERE id=3";

            // utiliza exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Registro eliminado satisfactoriamente";        
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conexionPDO = null;
    }
    function usuario_DeleteID($conexionPDO, $id){
        try{
            // sql to delete a record
            $sql = "DELETE FROM Usuario WHERE id={$id}";

            // utiliza exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Registro eliminado satisfactoriamente";        
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conexionPDO = null;
    }


    # PRUEBAS
    //usuario_InsertPDO($conexionPDO);
    //usuario_SelectPDO($conexionPDO);

?>
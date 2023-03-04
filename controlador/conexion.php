<?php

# DATOS DE CONEXIÓN
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "prueba";

# PROCESO DE CONEXIÓN SEGÚN TIPO


function ConexionPHPDataObject($servername, $username, $password, $dbname) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configura el manejo de errores a excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Echo "<br>Conexión exitosa.<br>";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "<br>Conexión fallida: " . $e->getMessage();
    } 
}

function CerrarConexionPDO($conn){
    $conn = null;
    echo "<br>Conexion Cerrada";
}

# PRUEBAS

//$conexion = ConexionPHPDataObjectDB($servername,$username,$password, $dbname);
//CerrarConexionPDO($conexion);

?>
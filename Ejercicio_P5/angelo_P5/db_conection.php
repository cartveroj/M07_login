<?php
//realiza conexion con la BBDD 
$db_host = "localhost";
$db_usuario = "root";
$db_passwd = "";
$db_nombre = "user";

try {
    $mysqli = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);
} catch (Exception $e) {
    print "Error de conexión: " . $e->getMessage();
}

?>
 
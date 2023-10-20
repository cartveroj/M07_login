<?php

try{
    $coneccion = new mysqli("localhost", "veronica", "pirineus", "users");
    //echo "succed conection";
}catch(Exception $e){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
<?php

include ("dbConf.php") ;

// archivo que se encarga de hacer la coneccion toma las constantes del archivo dbConf.php
try{
    $coneccion = mysqli_connect(hostname,user,password, database);

}catch(Exception $e){

    echo "Fallo al conectar a MySQL";

}

?>
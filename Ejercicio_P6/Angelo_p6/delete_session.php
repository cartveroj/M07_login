<?php   
    session_start();

    //borra los datos de la sesion
    session_unset();
    //destruye toda la sesion 
    session_destroy();

    header("Location: views/login.html");
?>
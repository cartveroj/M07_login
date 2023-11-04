<?php
/* Archivo de php que elimina la session*/
session_start(); //reanudamos la session iniciada previamente
session_unset(); // elimina las variables de sesion pero mantiene la sesion activa
session_destroy(); // cierra y elimina completamente una sesión

header("Location: ../views/login.html");
?>
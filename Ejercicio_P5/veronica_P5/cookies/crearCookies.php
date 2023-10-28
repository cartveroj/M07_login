<?php
    //Archivo php que se encarga crear la cookie se define el nombre, valor y duracion
    $idioma = $_GET["idioma"]; // valor que recibe a traves del GET de la pagina index.php 
    setcookie("idioma_seleccionado",$idioma, time() +60);
    header('Location: verCookie.php');
?>
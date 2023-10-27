<?php
    $idioma = $_GET["idioma"];
    setcookie("idioma_seleccionado",$idioma, time() +60);
    header('Location: verCookie.php');
?>
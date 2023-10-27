<?php
session_start(); // almacenamos informacion
$_SESSION['idiomaSeleccionado'] = $_COOKIE["idioma_seleccionado"]; //asignamos 
 if(!$_COOKIE["idioma_seleccionado"]){
    header('Location: index.php');
}else if($_COOKIE["idioma_seleccionado"]=='es'){
    header('Location: ../views/loginEspañol.html');
}else if($_COOKIE["idioma_seleccionado"]=='en'){
    header('Location: ../views/login.html');
}else if($_COOKIE["idioma_seleccionado"]=='ca'){
    header('Location: ../views/loginCatala.html');
}
?>
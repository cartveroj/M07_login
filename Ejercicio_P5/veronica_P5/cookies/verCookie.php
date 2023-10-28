<?php
/*Archivo que se encarga de redireccionar segun el valor 
la variable reserva $_COOKIE a la pagina correspondiente según 
el idioma
*/
 if(!$_COOKIE["idioma_seleccionado"]){
    header('Location: index.php');
}else if($_COOKIE["idioma_seleccionado"]=='es'){
    header('Location: ../views/login_Es.html');
}else if($_COOKIE["idioma_seleccionado"]=='en'){
    header('Location: ../views/login_En.html');
}else if($_COOKIE["idioma_seleccionado"]=='ca'){
    header('Location: ../views/login_Ca.html');
}
?>
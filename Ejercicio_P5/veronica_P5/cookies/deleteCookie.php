<?php
//Archivo que se encarga de eliminar la cookie y redirige a la página index.php de Cookies
setcookie("idioma_seleccionado","", time() -1);
header("Location: index.php");
?>
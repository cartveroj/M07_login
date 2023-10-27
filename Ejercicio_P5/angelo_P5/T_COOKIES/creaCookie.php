<?php 
//cre la cookie 
echo "<h1>Creem Cookie</h1>";
setCookie('sel_idioma', $_GET['idioma'], time()+30);//establece tiempo de la cookie= 86400 el tiempo en segundos de un dias
header('Location: verCookie.php');//redireccion
?>
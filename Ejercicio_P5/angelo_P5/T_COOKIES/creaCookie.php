<?php 
echo "<h1>Creem Cookie</h1>";
setCookie('sel_idioma', $_GET['idioma'], time()+10);
header('Location: verCookie.php');
?>
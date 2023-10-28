<?php 
//eliminar cookie 
setCookie("sel_idioma", "", time()-1);
header('Location:index_Cookie.php');//redirecciona cuando se elimina 
?>
<?php 
    if(!$_COOKIE['sel_idioma']){
        header('Location:index_Cookie.php');
    }else if($_COOKIE['sel_idioma']=='es'){
        header('Location:../views/index.html');
    }else if ($_COOKIE['sel_idioma']=='en'){
        header('Location: ../views/index_Ingles.html');
    }else if ($_COOKIE['sel_idioma']=='cat'){
        header('Location: ../views/index_Catalan.html');
    }
?>
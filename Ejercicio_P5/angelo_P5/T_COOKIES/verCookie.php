
<?php 
if(isset($_COOKIE['sel_idioma'])) {
    $sel_idioma = $_COOKIE['sel_idioma'];
    if($sel_idioma == 'es') {
        header('Location: ../views/index.html');
    } else if($sel_idioma == 'en') {
        header('Location: ../views/index_Ingles.html');
    } else if($sel_idioma == 'cat') {
        header('Location: ../views/index_Catalan.html');
    }
} else {
    header('Location: index_Cookie.php');
}
?>

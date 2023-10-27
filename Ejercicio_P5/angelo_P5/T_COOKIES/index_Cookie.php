
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de idioma - Change Lenguage - Canvi d'idioma </title>
    <script src= "../views/index.html"></script>
    <script src= "../views/index_Catalan.html"></script>
    <script src= "../views/index_Ingles.html"></script>
   
</head>
<body>


    <table width="25%" border="0" aling="center">
        <tr>
            <td>Escoje el idioma</td><br>
            <td>Select Lenguage</td><br>
            <td>Escull idioma</td><br>
        </tr>
        <tr>
            <!--Muestra las imagenes a seleccionar para el idiomas -->
            <td aling="center"><a href="creaCookie.php?idioma=es">
            <img src="img/spanish_flag.png" width="90" heigth="60"></a><h1>Español Spanish Espanyol</h1></td>

            <td aling="center"><a href="creaCookie.php?idioma=en">
            <img src="img/english_flag.png" width="90" heigth="60"></a><h1>Ingles English Angles</h1></td>

            <td aling="center"><a href="creaCookie.php?idioma=cat">
            <img src="img/catalan_flag.png" width="90" heigth="60"></a><h1>Catalán Catala Catalan</h1></td>
        </tr>
    </table>
    <br>
    
    <!--Redirecciona alas paginas html segun correspnda del idioma-->
<?php 
    
    if($_COOKIE['sel_idioma']=='es'){
        header('Location: ../views/index.html');
    }else if ($_COOKIE['sel_idioma']=='en'){
        header('Location: ../views/index_Ingles.html');
    }else if ($_COOKIE['sel_idioma']=='cat'){
        header('Location: ../views/index_Catalan.html');
    }
?>
</body>
</html>
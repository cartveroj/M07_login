<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion de idioma con cookies</title>
</head>
<body>
   
    <?php
    /* Logica de php que segun el idioma selecciona redirige a la pagina correspondiente */
        if(isset($_COOKIE["idioma_seleccionado"])){
            if($_COOKIE["idioma_seleccionado"] == "es"){
                header("Location: ../views/login_Es.html");
            }else if($_COOKIE["idioma_seleccionado"] == "en"){
                header("Location: ../views/login_En.html");
            }else if($_COOKIE["idioma_seleccionado"] == "ca"){
                header("Location: ../views/login_Ca.html");
            }
        }
        
    ?>
    <div class="title" style="display: flex; justify-content: center; ">
        <h1>Selecciona un idioma</h1>
    </div>
    
    <table width="25" border="0" align="center">
        <tr>
            <td align="center">
                <a href="crearCookies.php?idioma=es"> <!-- enlace que redirige a la pagina crearCookies.php el parametro idioma con el valor 'es' -->
                    <img width="90" height="60" src="../img/español.png" alt="bandera español">
                    <h1>Español</h1>
                </a>
            </td>
            <td align="center">
                <a href="crearCookies.php?idioma=en">
                    <img width="90" height="60" src="../img/ingles.jpg" alt="bandera español">
                    <h1>English</h1>
                </a>
            </td>
            <td align="center">
                <a href="crearCookies.php?idioma=ca">
                    <img width="90" height="60" src="../img/catalan.jpg" alt="bandera catalana">
                    <h1>Catalan</h1>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>
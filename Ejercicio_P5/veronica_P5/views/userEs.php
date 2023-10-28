<?php
/* Archivo donde se muestra por pantalla los datos del user dependiendo del rol
si es student solo muestra sus datos principales y si es teacher muestra sus datos y el nombre y apellido
de los usuarios ingresados en la base de datos */

include('../iniciar_session/login.php');

session_start();// iniciamos sesion (Lo uso porque estoy trabajando con archivos y asi se logran comunicar con las variables)
$dataUser = $_SESSION['dataUser']; // recuperamos los datos y las almacenamos en las variables

$filaDataUsers = $_SESSION['filaDataUsers'];
    if($dataUser != null){

        $rolUser = $dataUser['rol'];

        if($rolUser == "student"){
            
            foreach($dataUser as $key => $value){
                if($value == "student"){
                    echo "Yo soy estudiante...<br>";
                    echo "Nombre: ".$dataUser['name']."<br>";
                    echo "Apellido: ".$dataUser['surname']."<br>";
                    echo "Correo electronico: ".$dataUser['email']."<br>";
                }
            }
        }else{
            
            echo "Hola ".$dataUser['name'].", tu eres profesor/a..¡¡<br>";
            echo "La lista de usuarios: <br>";
            foreach( $filaDataUsers as $userList){
                echo "Nombre y apellido: ".$userList['name']." ".$userList['surname']."<br>";
            }
            
        }
            
    }else{
        print_r("Contraseña o email inválido");
    }

        
?>

<!DOCTYPE html>
<html lan="en">
    <body>
        <a href="../cookies/deleteCookie.php">Eliminar cookie</a>
        <br>
        <a href="../cookies/index.php">Escoger un idioma</a>
    </body>
</html>
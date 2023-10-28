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
                    echo "Jo sóc estudiant..<br>";
                    echo "Nom: ".$dataUser['name']."<br>";
                    echo "Cognom: ".$dataUser['surname']."<br>";
                    echo "Correu electrònic: ".$dataUser['email']."<br>";
                }
            }
        }else{
            
            echo "Hola ".$dataUser['name'].", tu ets professor..¡¡<br>";
            echo "Llista d'usuaris: <br>";
            foreach( $filaDataUsers as $userList){
                echo "Nom y cognom: ".$userList['name']." ".$userList['surname']."<br>";
            }
            
        }
            
    }else{
        print_r("La teva contrasenya o correu electrònic és incorrecte");
    }

        
?>

<!DOCTYPE html>
<html lan="ca">
    <body>
        <a href="../cookies/deleteCookie.php">Eliminar les galetes</a>
        <br>
        <a href="../cookies/index.php">Escollir l' idioma</a>
    </body>
</html>
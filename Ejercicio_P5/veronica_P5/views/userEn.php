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
                    echo "I'm a ".$rolUser. "..<br>";
                    echo "Name: ".$dataUser['name']."<br>";
                    echo "Surname: ".$dataUser['surname']."<br>";
                    echo "Email: ".$dataUser['email']."<br>";
                }
            }
        }else{
            
            echo "Hello ".$dataUser['name'].", you're a ".$rolUser."..¡¡<br>";
            echo "The list of users: <br>";
            foreach( $filaDataUsers as $userList){
                echo "Name and surname: ".$userList['name']." ".$userList['surname']."<br>";
            }
            
        }
            
    }else{
        print_r("Your password or email is wrong");
    }

        
?>

<!DOCTYPE html>
<html lan="en">
    <body>
        <a href="../cookies/deleteCookie.php">Delete the cookies</a>
        <br>
        <a href="../cookies/index.php">Choose the language</a>
    </body>
</html>
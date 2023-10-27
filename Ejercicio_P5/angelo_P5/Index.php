<?php
/*
Es el que crea un usuario con los datos de registro y lo envia a la base de datos y al terminar devuelve a index.html.
*/
include('db_conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = isset($_POST['active']) ? 1 : 0; // Si el checkbox está marcado, asigna 1, de lo contrario, asigna 0.


        $inserts = "INSERT INTO users (id, rol, name, surname, password, email, active) 
                    VALUES ($id, '$rol', '$name', '$surname', '$password', '$email', $active);";//insercion de datos

        if (mysqli_query($mysqli, $inserts)== TRUE) {//condicionales para cuando se ingresen los datos
            //arreglar para que muestre por mensaje que esta correcta la insercion  y te rediriga a la pagina correspondiente   
            if(isset($_COOKIE['sel_idioma'])) {
                $sel_idioma = $_COOKIE['sel_idioma'];
                switch($sel_idioma) {
                    case 'es':
                        echo "Insercion correcta";
                        include('/views/index.html');
                       
                        break;
                    case 'en':
                        echo "Insert Afirmative";
                        include('/views/index_Ingles.html');
                        
                        break;
                    case 'cat':
                        echo "Insercio Correcte";
                        include('/views/index_Catalan.html');
                        break;
                }
                header('Location: T_COOKIES/index_Cookie.php');

            }
            
               
        } else {
            echo "Error en la inserción: " . $mysqli->error;
        }
        if(isset($_COOKIE['sel_idioma'])) {
            $sel_idioma = $_COOKIE['sel_idioma'];

            switch($sel_idioma) {
                case 'es':
                    header('Location: views/index.html');
                    break;
                case 'en':
                    header('Location: views/index_Ingles.html');
                    break;
                case 'cat':
                    header('Location: views/index_Catalan.html');
                    break;
                default:
                    header('Location: T_COOKIES/index_Cookie.php');
                    break;
            }
        }

    $mysqli->close();
}
?>
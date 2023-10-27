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
            include "index.html";
            include "index_Catalan.html";//agrgado hoy
            include "index_Ingles.html";//agrgado hoy
            echo "Insercion correcta";
               
        } else {
            echo "Error en la inserción: " . $mysqli->error;
        }
        // Si la consulta fue exitosa y quieres redirigir a otro documento HTML
        header("Location:/angelo/angelo_p4/views/login.html");
        
    }
    $mysqli->close();
?>


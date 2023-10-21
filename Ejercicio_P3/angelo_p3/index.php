<?php
$db_host = "localhost";//realizando conexion 
$db_usuario = "root";
$db_passwd = "";
$db_nombre = "user";

$mysqli = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado exitosamente";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = isset($_POST['active']) ? 1 : 0; // Si el checkbox está marcado, asigna 1, de lo contrario, asigna 0.


        $consulta = "INSERT INTO users (id, rol, name, surname, password, email, active) 
                    VALUES ($id, '$rol', '$name', '$surname', '$password', '$email', $active)";//insercion de datos

        if ($mysqli->query($consulta) === TRUE) {//condicionales para cuando se ingresen los datos
            printf("Se creó con éxito el registro en la tabla users.\n");
        } else {
            echo "Error en la inserción: " . $mysqli->error;
        }

    }
    $mysqli->close();
    ?>
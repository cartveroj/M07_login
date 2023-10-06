


<?php
$db_host = "localhost";
$db_usuario = "root";
$db_passwd = "";
$db_nombre = "user";

$mysqli = new mysqli($db_host, $db_usuario, $db_passwd, $db_nombre);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado exitosamente";
}

$consulta= "SELECT id, rol, name, surname, password, email, active FROM user";


$id= $_POST['id'];
$rol= $_POST['rol'];
$name= $_POST['name'];
$surname= $_POST['surname'];
$password= $_POST['password'];
$email= $_POST['email'];
$active = $_POST['active'];

echo $id. "<br>";
echo $rol. "<br>";
echo $name. "<br>";
echo $surname. "<br>";
echo $password. "<br>";
echo $email. "<br>";
echo $active. "<br>";

?>

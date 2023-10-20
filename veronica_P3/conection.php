<?php
$id = $_POST['id'];
$name = $_POST['name'];
$surName = $_POST['surName'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$active = $_POST['active'];

if($active == "true"){
    $activeValor = 1;
}else{
    $activeValor = 0;
}

//pruebas
// echo $id;
// echo $name;
// echo $surName;
// echo $email;
// echo $password;
// echo $rol;
// echo $active;

$consulta= "INSERT INTO user (`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) 
VALUES ('$id','$rol','$name','$surName','$password','$email','$activeValor')";

//Coneccion

$coneccion = new mysqli("localhost", "veronica", "pirineus", "users");
if ($coneccion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "conectado";
}

if ($coneccion->query($consulta) === TRUE) {
    echo "Registro insertado correctamente";
} else {
    echo "Error en la inserción: " . $coneccion->error;
}


?>


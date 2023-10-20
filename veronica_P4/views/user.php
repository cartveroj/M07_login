<?php
include("../conection.php");

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surName = $_POST['surName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $active = isset($_POST['active'])? $_POST['active'] : false;
    
    //pruebas para probar la comunicacion entre index-html y user-php
    // echo $id;
    // echo $name;
    // echo $surName;
    // echo $email;
    // echo $password;
    // echo $rol;
    // echo $active;

    //query
    $consulta= "INSERT INTO user (`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) 
    VALUES ('$id','$rol','$name','$surName','$password','$email','$active')";
   
    $coneccion->query($consulta);

    $coneccion->close();

    header('Location: login.html');
    exit;
}


?>
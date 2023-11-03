<?php
session_start();
include('db_conection.php');

//
if(isset($_POST['enviar'])){
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql_datos= "SELECT * FROM users WHERE (email='$email' AND password='$password')";//consulta credenciales
    $result1 = mysqli_query($mysqli, $sql_datos);

    $sql_usuari= "SELECT * FROM users";//consulta usuarios
    $result2= mysqli_query($mysqli, $sql_usuari);

    
    if ($result1->num_rows >0) {
        $datos= $result1->fetch_assoc();  // Obtén la fila como un array asociativo
        $_SESSION['name']= $datos['name'];// Almacena 'name' en la sesión
        $_SESSION['rol']= $datos['rol'];// Almacena 'rol' en la sesión
        $_SESSION['surname']= $datos['surname'];
        $_SESSION['email']= $datos['email'];

        if($result2->num_rows > 0){
            $user = $result2->fetch_assoc(); // Obtén la fila como un array asociativo
            $_SESSION['na'] = $user['name']; // Almacena 'name' en la sesión
            $_SESSION['sur'] = $user['surname']; // Almacena 'surname' en la sesión
        }
        
    }else{
        include "login.html";
        echo "login Incorrecto"."<br>";
        
    }   
}
?>

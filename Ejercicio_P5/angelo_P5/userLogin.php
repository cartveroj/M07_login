<?php
//realiza las consultas
include('db_conection.php');

//
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql_datos= "SELECT * FROM users WHERE (email='$email' AND password='$password')";//consulta credenciales
    $result1 = mysqli_query($mysqli, $sql_datos);

    $sql_usuari= "SELECT * FROM users";//consulta usuarios
    $result2= mysqli_query($mysqli, $sql_usuari);

    
    if ($result1->num_rows >0) {
        $datos = $result1->fetch_assoc(); 
        
        if($result2->num_rows >0){
            $users = $result2->fetch_assoc();
        }
    }else{
        include "login.html";
        echo "login Incorrecto"."<br>";
        
    }
    
    //;

//$mysqli->close();
?>

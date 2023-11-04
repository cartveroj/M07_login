<?php
session_start();//pasa parametros de incio de sesion
include('db_conection.php');

//
if(isset($_POST['enviar'])){//siempre y cuando se haya dado clic en el boton enviar que se encuentra en el login
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql_datos= "SELECT * FROM users WHERE (email='$email' AND password='$password')";//consulta credenciales
    $result1 = mysqli_query($mysqli, $sql_datos);//consulta de los datos de las credenciales en la bbdd

    $sql_usuari= "SELECT * FROM users";//consulta usuarios en general
    $result2= mysqli_query($mysqli, $sql_usuari);

    
    if ($result1->num_rows >0) {
        $datos= $result1->fetch_assoc();  // Obtén la fila como un array asociativo
        $_SESSION['name']= $datos['name'];// Almacena 'name' en la sesión
        $_SESSION['rol']= $datos['rol'];// Almacena 'rol' en la sesión
        $_SESSION['surname']= $datos['surname'];// Almacena 'surname' en la sesión
        $_SESSION['email']= $datos['email'];// Almacena 'email' en la sesión

        if($result2->num_rows > 0){
            $user = $result2->fetch_assoc(); // Obtén la fila como un array asociativo
            $_SESSION['na'] = $user['name']; // Almacena 'name' en la sesión na
            $_SESSION['sur'] = $user['surname']; // Almacena 'surname' en la sesión sur
        }
        
    }else{
        include "login.html";
        echo "login Incorrecto"."<br>";
        
    }   
}
?>

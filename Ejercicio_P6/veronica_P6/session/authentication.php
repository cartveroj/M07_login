<?php
    /* 
    Archivo donde se ejecuta las query de selecte que se encarga de verificar si existe el usuario
    y dependiendo del rol == teacher ejecuta la siguiente query. 
    Iniciamos session y almacenamos en diferentes variables de $_SESSION 
    el objeto de lista de users y datos especificos del user.
    */
    include("../conection.php");
    session_start(); // iniciamos session
    $dataUser;
    
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

       $validacion = " SELECT * FROM `user` WHERE `email`= '$email' && `password` = '$password'";

       $result = mysqli_query($coneccion, $validacion);

       if(mysqli_num_rows($result) > 0){
            $dataUser = mysqli_fetch_assoc($result);
            if($dataUser['rol']== "teacher"){
                $queryDataUsers = "SELECT `name`, `surname` FROM `user` ORDER by `id` DESC;"; 
                $resultDataUsers = mysqli_query($coneccion, $queryDataUsers);
                $filaDataUsers= array();
                while($row = mysqli_fetch_assoc($resultDataUsers)){
                    $filaDataUsers[] = $row;
                }
            }
        
            
            $_SESSION['name'] = $dataUser['name']; //almacenamos el nombre a session[name]
            $_SESSION['rol'] = $dataUser['rol']; //almacenamos el rol a session[rol]
            $_SESSION['surname'] = $dataUser['surname']; //almacenamos el apellido a session[surname]
            $_SESSION['email'] = $dataUser['email'];
            $_SESSION['data'] = $dataUser;
            echo $_SESSION['data'];
            $_SESSION['filaDataUsers'] = $filaDataUsers;
            header('Location: ../views/user.php'); // redirigimos a user.php

       }else{
        
        include('../views/login.html');
        echo 'Login incorrect';
       }

    }
?>
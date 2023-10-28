<?php
    /* 
    Archivo donde se ejecuta las query de selecte que se encarga de verificar si existe el usuario
    y dependiendo del rol == teacher ejecuta la siguiente query select
    */
    include("../conection.php");

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
        
            session_start(); // almacenamos informacion
            $_SESSION['dataUser'] = $dataUser; //asignamos 
            $_SESSION['filaDataUsers'] = $filaDataUsers;
            header('Location: ../views/user.php'); // redirigimos a user.php

       }else{
        
        include('../views/login.html');
        echo 'Login incorrect';
       }
       
      
    
       }
?>
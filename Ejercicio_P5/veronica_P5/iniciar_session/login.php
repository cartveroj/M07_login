<?php
    /* 
    Archivo donde se ejecuta las query de selecte que se encarga de verificar si existe el usuario
    y dependiendo del rol == teacher ejecuta la siguiente query select
    */
    include("../conection.php");

    $dataUser;
    
    if(isset($_POST['submit'])){
        $idioma_seleccionado = $_POST['idioma']; // recuperamos el valor del idioma predefinido en el formulario 
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

            
            // redirigimos segun el idioma a las diferentes páginas
            if($idioma_seleccionado =='es'){
                header('Location: ../views/userEs.php');
            } else if ($idioma_seleccionado=='en'){
                header('Location: ../views/userEn.php') ;
            } else if ($idioma_seleccionado=='ca'){
                header('Location: ../views/userCa.php');
            }
     
       }else{
            // redirigimos segun el idioma a las diferentes páginas
            if($idioma_seleccionado =='es'){
                include('../views/login_Es.html');
                echo 'Acceso incorrecto';
            }else if($idioma_seleccionado =='en'){
                include('../views/login_En.html');
                echo 'Login incorrect';
            }else if($idioma_seleccionado =='ca'){
                include('../views/login_Ca.html');
                echo 'Accés incorrecte';
            }
       }
       
    }
?>


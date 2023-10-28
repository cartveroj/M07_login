<?php

//Es una sentencia de PHP para que nos permite incluir y evaluar el contenido de otro archivo
include("../conection.php");


if(isset($_POST['submit'])){

    $idioma_seleccionado = $_POST['idioma']; // recuperamos el idioma del formulario

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surName = $_POST['surName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $active = isset($_POST['active'])? $_POST['active'] : false;
    

    //query para realizar el insert a la tabla user con los datos introducidos por el usuario
    $consulta= "INSERT INTO user (`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) 
    VALUES ('$id','$rol','$name','$surName','$password','$email','$active')";
   
    $result = mysqli_query($coneccion,$consulta);
    if($result===TRUE){
        $message="Su cuenta fue creada con exito";
    }else{
        print_r("No se dio de alta correctamente");
    }

    // redireccionamiento de pagina y mostramos unos valores segun el idioma 

    if($idioma_seleccionado =='es'){
        $title = "Hola ";
        $path = "../views/login_Es.html";
        $mensaje ="Tu cuenta fue creada correctamente";
    }else if($idioma_seleccionado =='en'){
        $title = "Welcome ";
        $path = "../views/login_En.html";
        $mensaje ="your account has been created";
    }else if($idioma_seleccionado =='ca'){
        $title = "Benvingut ";
        $path = "../views/login_Ca.html";
        $mensaje ="La teva compte s'ha creat correctament.";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Página HTML con PHP</title>
    </head>
    <body>
        <h1><?php echo $title. $name; ?></h1>
        <p><?php echo $mensaje?></p>
        <a href=<?php echo $path?> >Sing in</a>
    </body>
</html>
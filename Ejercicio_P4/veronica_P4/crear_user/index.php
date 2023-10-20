<?php

//Es una sentencia de PHP para que nos permite incluir y evaluar el contenido de otro archivo
include("../conection.php");


if(isset($_POST['submit'])){
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

    
}


?>

<!DOCTYPE html>
        <html>
        <head>
            <title>Página HTML con PHP</title>
        </head>
        <body>
            <h1>Welcome <?php echo $name; ?></h1>
            <p>your account has been created:</p>
            <a href="../views/login.html">Sing in</a>
        </body>
        </html>
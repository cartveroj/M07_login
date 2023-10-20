<?php
    include("../conection.php");
    include("../sessions/userlogin.php");

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

       $validacion = " SELECT * FROM `user` WHERE `email`= '$email' && `password` = '$password'";

       $result = $coneccion->query($validacion);
       $dataUser = mysqli_fetch_assoc($result);

       if($dataUser != null){
        gestionDataUser($dataUser);
        header('Location: ../sessions/userlogin.php');
       }else{
        print_r("Your password or gmail is incorrect");
       }
       
       }

?>
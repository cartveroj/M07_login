<?php
/* Archivo donde se muestra por pantalla los datos del user dependiendo del rol
si es student solo muestra sus datos principales y si es teacher muestra sus datos y el nombre y apellido
de los usuarios ingresados en la base de datos */

session_start();// reaunadamos la sesion previamente iniciada en authenticaction.php 
$filaDataUsers = $_SESSION['filaDataUsers'];//recuperamos los datos de session y las asginamos en las variables
$dataUser = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['rol'].' '.$_SESSION['name'] ?></h1>
    <p><strong>Session started</strong></p>
    <p>Name: <?php echo $_SESSION['name']?></p>
    <p>Surname: <?php echo $_SESSION['surname']?></p>
    
    <?php if ($_SESSION['rol'] == 'teacher'): ?>
        <p>List of users: </p>
        <?php foreach($filaDataUsers as $userList){?>
            <ul>
                <li><?php echo "Name and surname: ".$userList['name']." ".$userList['surname']."<br>"?></li>
            </ul>
        <?php }?>
    <?php endif; ?>
    <a href="../session/delete_session.php">Click to delete session</a><!--enlace que redirige a eliminar la session -->
</body>
</html>
<?php
//session_start();
include('../autentication.php');


// Verifica si el rol es "alumnat" o "professorat"
if ($_SESSION['rol'] == 'alumnat') { // Consulta para obtener nombre, apellido y email del alumno
    echo "Soy un Alumno"."<br>";
    echo "Nombre: " . $_SESSION['name']."<br>";
    echo "Apellido: " . $_SESSION['surname']."<br>";
    echo "Email: " . $_SESSION['email']."<br>";

} elseif ($_SESSION['rol'] == 'profesorat') {
    // Consulta para obtener nombre, apellido, correo y usuarios de los alumnos
    echo "Hola ". $_SESSION['name'] . " es un Profesor"."<br>";
    echo "La lista de usuarios de la base de datos son:"."<br>";
        foreach(mysqli_query($mysqli, $sql_usuari) as $user){
           echo "Nombre y Apellido:    " . $user['name'] ." ". $user['surname'] ."<br>";
        }
    
}// Cierra la conexión a la base de datos
mysqli_close($mysqli);
?>
<a href="../delete_session.php">cerrar session</a>
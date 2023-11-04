<?php
//session_start();
include('../autentication.php');


// Verifica si el rol es "alumnat" o "professorat"
if ($_SESSION['rol'] == 'alumnat') { //muestra los datos de los usuarios relacionados al rol de alumno
    echo "Sesion inciada"."<br>"."<br>";//muestra la sesion inciada
    echo "<u>Bienvenido/a estudiante  <b>".$_SESSION['name']."</b></u><br>";
    echo "Nombre: <b>" . $_SESSION['name']."</b><br>";
    echo "Apellido: <b>" . $_SESSION['surname']."</b><br>";
    echo "Email: <b>" . $_SESSION['email']."</b><br>";

} elseif ($_SESSION['rol'] == 'profesorat') {
    // muestra los datos de usuario que cumple con el rol de profesor
    echo "Sesion inciada"."<br>"."<br>";
    echo "<u>Bienvenido/a Profesor/a   <b>". $_SESSION['name']."</b></u><br>";
    echo "La lista de usuarios de la base de datos son:"."<br>";
    //muestar los datos de los usuarios registrados en tod ala base de datos
        foreach(mysqli_query($mysqli, $sql_usuari) as $user){
           echo "Nombre y Apellido:   <b> " . $user['name'] ." ". $user['surname'] ."</b> <br>";
        }
    
}// Cierra la conexión a la base de datos
mysqli_close($mysqli);
?>
<br>
<button ><a href="../delete_session.php">cerrar session</a></button><!-- boton que redirique al cierre de sesion>
<?php
include('../userLogin.php');
//muestra datos en ingles 
// Verifica si el rol es "alumnat" o "professorat"
if ($datos['rol'] == 'alumnat') { // Consulta para obtener nombre, apellido y email del alumno
    echo "I am a Student"."<br>";
    echo "Name: " . $datos['name']."<br>";
    echo "Surname: " . $datos['surname']."<br>";
    echo "Email: " . $datos['email']."<br>";

} elseif ($datos['rol'] == 'profesorat') {
    // Consulta para obtener nombre, apellido, correo y usuarios de los alumnos
    echo "Hi ". $datos['name'] . " is a Professor"."<br>";
    echo "  The list of database users are:"."<br>";
        foreach(mysqli_query($mysqli, $sql_usuari) as $user){
           echo "Name, Surname:    " . $user['name'] ." ". $user['surname'] ."<br>";
        }
    
}
// Cierra la conexión a la base de datos
mysqli_close($mysqli);
?>
<br>
<br>
<a href="../T_COOKIES/deleteCokie.php">Delete Cookie</a>
<br>
<a href="../T_COOKIES/index_Cookie.php">Return to language selection</a>
<?php
include('../userLogin.php');
//muestra datos en español
// Verifica si el rol es "alumnat" o "professorat"
if ($datos['rol'] == 'alumnat') { // Consulta para obtener nombre, apellido y email del alumno
    echo "Soy un Alumno"."<br>";
    echo "Nombre: " . $datos['name']."<br>";
    echo "Apellido: " . $datos['surname']."<br>";
    echo "Email: " . $datos['email']."<br>";
    

} elseif ($datos['rol'] == 'profesorat') {
    // Consulta para obtener nombre, apellido, correo y usuarios de los alumnos
    echo "Hola ". $datos['name'] . " es un Profesor"."<br>";
    echo "La lista de usuarios de la base de datos son:"."<br>";
        foreach(mysqli_query($mysqli, $sql_usuari) as $user){
           echo "Nombre y Apellido:    " . $user['name'] ." ". $user['surname'] ."<br>";//imprime cada uno de los datos en la BBDD
        }
        
}

// Cierra la conexión a la base de datos
mysqli_close($mysqli);
?>

<br>
<br>
<!--enlace a eleminar cookie-->
<a href="../T_COOKIES/deleteCokie.php">Eliminar Galleta</a>
<br>
<!--Redireccion a index_cookie que no hara nado si la cookie no a sido elimanada-->
<a href="../T_COOKIES/index_Cookie.php">Volver a seleccion de idioma</a>
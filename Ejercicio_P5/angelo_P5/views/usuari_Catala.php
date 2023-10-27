<?php
include('../userLogin.php');
//muestra datos en Catalan
// Verifica si el rol es "alumnat" o "professorat"
if ($datos['rol'] == 'alumnat') { // Consulta para obtener nombre, apellido y email del alumno
    echo "Soc un Alumne"."<br>";
    echo "Nom: " . $datos['name']."<br>";
    echo "Cognom: " . $datos['surname']."<br>";
    echo "Correu: " . $datos['email']."<br>";

} elseif ($datos['rol'] == 'profesorat') {
    // Consulta para obtener nombre, apellido, correo y usuarios de los alumnos
    echo "Hola ". $datos['name'] . " et's un Profesor"."<br>";
    echo "La Llista de usuaris de la base de dadas son:"."<br>";
        foreach(mysqli_query($mysqli, $sql_usuari) as $user){
           echo "Nom y Cognom:    " . $user['name'] ." ". $user['surname'] ."<br>";
        }
    
}


// Cierra la conexión a la base de datos
mysqli_close($mysqli);
?>
<br>
<br>
<a href="../T_COOKIES/deleteCokie.php">Eliminar Galleta</a>
<br>
<a href="../T_COOKIES/index_Cookie.php">Tornar a una selecció d'idioma</a>
</body>

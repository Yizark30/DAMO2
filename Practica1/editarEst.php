<?php
if($_SERVER["REQUEST_METHOD"]=="PUT"){
    require_once 'conexion.php';
    $id = $_GET["id"];
    $nombre = $_GET["Nombres"];
    $apellido = $_GET["Apellidos"];
    $cargo = $_GET["Carrera"];
    $salario = $_GET["Año"];
    $my_query = "UPDATE Estudiante SET Nombres= '$Nombres',Apellidos='$Apellidos, Carrera='$Carrera', Año='$Año' WHERE id = $id";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro actualizado satisfactoriamente...";
    }else{
echo "Error al actualizar registro...";
    }
}else{
    echo"Error desconocido";
}
?>
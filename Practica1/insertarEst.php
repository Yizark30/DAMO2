<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombre = $_POST["Nombres"];
    $apellido = $_POST["Apellidos"];
    $cargo = $_POST["Carrera"];
    $salario = $_POST["Año"];
    $my_query = "insert into Estudiante(Nombres, Apellidos, Carrera, Año) 
    values('".$Nombres."', '".$Apellidos."','".$Carrera."', '".$Año."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>
<?php
    include("../conexion.php");

    $nombre = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    

    $query = "SELECT * FROM usuarios WHERE usuario = '$nombre' AND contraseña = '$pass';";  
    $res = $conexion->query($query);

    if($res){ 
        if($res->num_rows > 0) {
            header("Location: ../menu.php");
        } else {
            header("Location: ../index.php");
        }
    }else {
        echo "Error en la consulta" . $conexion->error;
    }

?>
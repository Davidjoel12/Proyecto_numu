<?php
    include("../conexion.php");

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $kilo = $_POST['kilo'];
    $ultimo = $_POST['date'];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


    $query = "INSERT Into vehiculos(marca, modelo, placa, kilometraje, ultimo_mantenimiento, proximo_mantenimiento, imagen) 
                VALUES('$marca', '$modelo', '$placa', '$kilo', '$ultimo', DATE_ADD('$ultimo', INTERVAL 3 MONTH) , '$imagen')";
    $res = $conexion->query($query);

    if($res){
        header("Location: ../menu.php");
    } else {
        echo "Error al insertar los datos";
    }


?>
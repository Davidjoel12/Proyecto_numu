<?php
    include("../conexion.php");

    $id = $_POST["id"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $kilo = $_POST["kilo"];
    $ultimo = $_POST["date"];



    if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    } else {
        $imagen = NULL; 
    }


    if ($imagen !== NULL) {
        $query = "UPDATE vehiculos SET marca='$marca', modelo='$modelo', placa='$placa', kilometraje='$kilo', ultimo_mantenimiento='$ultimo', imagen='$imagen' WHERE id='$id'";
    } else {
        $query = "UPDATE vehiculos SET marca='$marca', modelo='$modelo', placa='$placa', kilometraje='$kilo', ultimo_mantenimiento='$ultimo' WHERE id='$id'";
    }

    $res = $conexion->query($query);

    if ($res) {
        echo "<div class='alert alert-success'>Auto actualizado con exito</div>"; 
        header("Location: ../editar.php?id=$id");
    } else {
        echo "<div class='alert alert-danger'>Error al actualizar los datos</div>";
    }
?>
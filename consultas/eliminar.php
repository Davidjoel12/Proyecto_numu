<?php
    include("conexion.php");

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM vehiculos WHERE id = $id";
        $res = $conexion->query($query);
        
        if($res) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
?>


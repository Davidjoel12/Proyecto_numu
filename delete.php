<?php
    include "../conexion.php";

    if(!empty($_GET["id"])) {
        $id = $_GET["id"];

        $query = "DELETE FROM vehiculos WHERE id ='$id'";
        $res = $conexion->query($query);

        if($res==1) {
            header("Location: ../menu.php");
        }else {
            echo "<div>Error al eliminar</div>";
        }
    }
?>
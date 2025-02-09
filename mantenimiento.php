<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de Autos</title>
    <link rel="stylesheet" href="estilos/agregar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <h3 class="px-3">Menú</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agregar.php">Añadir auto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="mantenimiento.php">Mantenimiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Salir</a>
                    </li>
                </ul>
            </div>
        </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1 class="my-4">Autos Próximos a Mantenimiento</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Último Mantenimiento</th>
                                <th>Próximo Mantenimiento</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("conexion.php");
                            $query = "SELECT * FROM vehiculos WHERE proximo_mantenimiento <= DATE_ADD(CURDATE(), INTERVAL 1 MONTH) ORDER BY proximo_mantenimiento";
                            $res = $conexion->query($query);
                            while ($row = $res->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['marca'] . "</td>";
                                echo "<td>" . $row['modelo'] . "</td>";
                                echo "<td>" . $row['placa'] . "</td>";
                                echo "<td>" . $row['ultimo_mantenimiento'] . "</td>";
                                echo "<td>" . $row['proximo_mantenimiento'] . "</td>";
                                echo "<td>" . $row['estado'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


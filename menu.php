<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Autos</title>
    <link rel="stylesheet" href="estilos/geolocalizacion.css">
    <link rel="stylesheet" href="estilos/menu.css">
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
                            <a class="nav-link active" href="menu.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar.php">Añadir auto</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="mantenimiento.php">Mantenimiento</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>

            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Autos Disponibles</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php
                        include("conexion.php");
                        $query = "SELECT * FROM vehiculos";
                        $res = $conexion->query($query);
                        while ($row = $res->fetch_assoc()) {
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen']); ?>" 
                                     class="card-img-top rounded" 
                                     style="height: 200px; object-fit: cover; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['modelo']; ?></h5>
                                    <p class="card-text"><?php echo $row['marca']; ?></p>
                                    <button class="btn btn-primary" onclick="location.href='editar.php?id=<?php echo $row['id']; ?>'">Editar</button>
                                    <button class="btn btn-danger" onclick="location.href='consultas/delete.php?id=<?php echo $row['id']; ?>'">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div><br/>
            </main>

            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="col-span-4 row-span-3" id="map"></div>  
            </div>
        </div>
    
    </div>
    
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8Fsw_ZdQdDGWv7ZRD5D5Wl6_mPRGVMkA&callback=initMap&v=weekly&solution_channel=GMP_CCS_geolocation_v2"
      defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="geo.js"></script>
</body>
</html>

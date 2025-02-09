<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="estilos/agregar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h3 class="px-3">Menú</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="agregar.php">
                                <span>Añadir auto</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mantenimiento.php">Mantenimiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span>Salir</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2 class="text-center my-4">Agregar Automóvil</h2>
                <form action="consultas/insert.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="marca">Marca</label>
                                <input type="text" id="marca" name="marca" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="modelo">Modelo</label>
                                <input type="text" id="modelo" name="modelo" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="placa">Placa</label>
                        <input type="text" id="placa" name="placa" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="kilometraje">Kilometraje</label>
                        <input type="text" id="kilometraje" name="kilo" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="ultimo">Último mantenimiento</label>
                        <input type="date" id="ultimo" name="date" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="imagen">Imagen</label><br/>
                        <input type="file" name="Imagen"/>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

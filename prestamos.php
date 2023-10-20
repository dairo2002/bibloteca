<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENLETRANDO</title>

    <link rel="shortcut icon" href="./img/logo.png" type="imagenesx-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container-fluid ">
        <header class="row">
            <div class="text-center">
                <img class="img-fluid mt-1" src="./img/logo.png" alt="">
                <h1>ENLETRANDO</h1>
            </div>
            <nav class="navbar navbar-expand-lg" style="background-color: #AD1414;">

                <!-- Menu  -->
                <div class="col-3">
                    <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarSupportedContent">
                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2  "> -->
                        <ul class="navbar-nav gap-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="img-fluid mx-3" src="./img/menu.png" alt="" style="width: 30px;">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="prestamos.php">Prestamos</a></li>
                                    <li><a class="dropdown-item" href="devoluciones.php">Devoluciones</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Género
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="menuGenero.php">Ficción</a></li>
                                    <li><a class="dropdown-item" href="menuGenero.php">Poesía</a></li>
                                    <li><a class="dropdown-item" href="menuGenero.php">Drama</a></li>
                                    <li><a class="dropdown-item" href="menuGenero.php">Fantasía</a></li>
                                    <li><a class="dropdown-item" href="menuGenero.php">Romance</a></li>
                                    <li><a class="dropdown-item" href="menuGenero.php">Aventura</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="#">Novedades</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Menu -->

                <!-- Buscador -->
                <div class="col-6">
                    <form class="d-flex justify-content-center " role="search">
                        <div class="d-flex" id="caja-buscador">
                            <input class="form-control me-1 " id="input-buscar" type="Search"
                                placeholder="¿Que quieres leer?" aria-label="search" style="width: 550px;">
                        </div>
                        <div class="rounded" id="caja-img"
                            style="background-color: white; width: 40px; cursor: pointer;">
                            <img class="img-fluid p-1 " id="img-click-buscador" src="./img/buscador.png" alt="">
                        </div>
                    </form>
                </div>
                <!-- End Buscador -->

                <!-- Botones Ingresar, Registrarse -->
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn" id="btn-Sesion" type="button">Registrarse</button>
                        <!-- Forma de ir a venta de iniciar sesión -->
                        <a href="iniciarSesion.php">
                            <button class="btn mx-2" id="btn-Sesion" type="submit">Ingresar</button>
                        </a>
                    </div>
                </div>
                <!-- End Botones -->

            </nav>
        </header>

        <div class="">
            <h2 class="text-center mt-5">Prestamos</h2>
            <div class="col-12" style="">
                <div class="d-flex">
                    <img src="./img/image-3.png" class="card-img img-fluid  " alt="..."
                        style="width: 200px; height: 300px;">
                    <div class="">
                        <h5 class="mx-2 fw-medium">El jardín de las mariposas</h5>
                        <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                            accusantium
                            consequuntur repellendus voluptates quisquam. Quas, in a itaque nostrum expedita
                            dolorem
                            assumenda repellendus, eveniet cum qui praesentium, natus consequuntur consequatur.
                        </p>
                    </div>
                </div>
                <hr style=" margin: 1; border: 1px solid black;">
            </div>

            <div class="col-12" style="">
                <div class="d-flex">
                    <img src="./img/image-3.png" class="card-img img-fluid  " alt="..."
                        style="width: 200px; height: 300px;">
                    <div class="">
                        <h5 class="mx-2 fw-medium">El jardín de las mariposas</h5>
                        <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                            accusantium
                            consequuntur repellendus voluptates quisquam. Quas, in a itaque nostrum expedita
                            dolorem
                            assumenda repellendus, eveniet cum qui praesentium, natus consequuntur consequatur.
                        </p>
                    </div>
                </div>
                <hr style=" margin: 1; border: 1px solid black;">
            </div>
            
            <div class="col-12" style="">
                <div class="d-flex">
                    <img src="./img/image-3.png" class="card-img img-fluid  " alt="..."
                        style="width: 200px; height: 300px;">
                    <div class="">
                        <h5 class="mx-2 fw-medium">El jardín de las mariposas</h5>
                        <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                            accusantium
                            consequuntur repellendus voluptates quisquam. Quas, in a itaque nostrum expedita
                            dolorem
                            assumenda repellendus, eveniet cum qui praesentium, natus consequuntur consequatur.
                        </p>
                    </div>
                </div>
                <hr style=" margin: 1; border: 1px solid black;">
            </div>


        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
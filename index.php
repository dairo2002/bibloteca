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
    <div class="container-fluid">
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
                                    <li><a class="dropdown-item" href="#">Prestamos</a></li>
                                    <li><a class="dropdown-item" href="#">Devoluciones</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Inicio</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Género
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ficción</a></li>
                                    <li><a class="dropdown-item" href="#">Poesía</a></li>
                                    <li><a class="dropdown-item" href="#">Drama</a></li>
                                    <li><a class="dropdown-item" href="#">Fantasía</a></li>
                                    <li><a class="dropdown-item" href="#">Romance</a></li>
                                    <li><a class="dropdown-item" href="#">Aventura</a></li>
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

        <!-- Carusel -->
        <div class="row">
            <div class="col-12 p-0">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/corusel-1.png" class="img-fluid d-block" alt="..."
                                style="width: 100%; height: 400px;">
                            <!-- <img src="./img/corusel-1.png" class="d-block w-100" alt="..."> -->
                        </div>
                        <div class="carousel-item">
                            <img src="./img/corusel-1.png" class="img-fluid d-block" alt="..."
                                style="width: 100%; height: 400px;">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/corusel-1.png" class="img-fluid d-block" alt="..."
                                style="width: 100%; height: 400px;">
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
        </div>
        <!-- End Carusel -->

        <div class="row my-4 mx-2">
            <div class="col-12 d-flex justify-content-center">
                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/img-libro.png" class="" alt="..." style="">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">Cien años de soledad</h5>
                        <a href="#" class="btn" id="btnCardPrestar"
                            style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/img-libro2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">El jardín de las mariposas</h5>
                        <a href="#" class="btn" style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/image-3.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">Card title</h5>
                        <a href="#" class="btn" style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/img-libro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">Card title</h5>
                        <a href="#" class="btn" style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/img-libro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">Card title</h5>
                        <a href="#" class="btn" style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 12rem;">
                    <img src="./img/img-libro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title pb-2">Card title</h5>
                        <a href="#" class="btn" style="background-color: #AD1414; color: white;">Prestar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="row">
            <div class="d-flex justify-content-evenly align-items-center"
                style="background-color: #AD1414; height: 95px; ">
                <div class="text-center mt-2">
                    <img src="./img/telefono.png" alt="" style="width: 30px;">
                    <p class="text-light fw-medium">300 1234 567</p>
                </div>

                <div class="text-center mt-2">
                    <img src="./img/facebook.png" alt="" style="width: 30px;">
                    <p class="text-light fw-medium">Enletrando</p>
                </div>

                <div class="text-center mt-2">
                    <img src="./img/instagram.png" alt="" style="width: 30px;">
                    <p class="text-light fw-medium">@Enletrando_co</p>
                </div>

                <div class="text-center mt-2">
                    <img src="./img/youtube.png" alt="" style="width: 30px;">
                    <p class="text-light fw-medium">Enletrando Colombia</p>
                </div>

                <div class="text-center mt-2">
                    <img src="./img/email.png" alt="" style="width: 30px;">
                    <p class="text-light fw-medium">enletrando.co@gmail.com</p>
                </div>

            </div>
            <div class="" style="background-color: #D9D9D9;">
                <h2 class="text-center m-2">Información</h2>
                <div class="d-flex justify-content-evenly m-4">
                    <a class="fw-medium" style="text-decoration: none; color: black;" href="">Politicas de cookies</a>
                    <a class="fw-medium" style="text-decoration: none; color: black;" href="">Politicas de seguridad</a>
                    <a class="fw-medium" style="text-decoration: none; color: black;" href="">Sobre nosotros</a>
                </div>
            </div>
        </div>
        <!-- End Footer -->



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="/js/bootstrap.js"></script> -->
</body>

</html>
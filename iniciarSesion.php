<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENLETRANDO</title>

    <link rel="shortcut icon" href="./img/logo.png"  type="imagenesx-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<div class="container-fluid ">
        <div class="d-flex justify-content-center align-items-center vh-100 ">
            <div class="bg-light p-4 rounded-5 text-secondary shadow" style="width: 25rem">
                <form action="insertarSesion.php" method="POST">
                    <div class="d-flex justify-content-center">
                        <img src="./img/logo.png" alt="login-icon" style="width: 90px; height: 90px;   " />
                    </div>
                    <h1 class="text-center fs-1 fw-bold" style="color: #AD1414;">Iniciar Sesión</h1>
                    <div class="input-group mt-4">
                        <div class="input-group-text" style="background-color: #AD1414;">
                            <img src="./img/usuario.png" alt="" style=" width: 1rem;">
                        </div>
                        <input class="form-control bg-light" type="text" name="usuario" placeholder="Usuario" />
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text" style="background-color: #AD1414;">
                            <img src="./img/contraseña.png" alt="password-icon" style="width: 1rem; " />
                        </div>
                        <input class="form-control bg-light" type="password" name="contraseña" placeholder="Contraseña" />
                    </div>
                        <div class="d-flex justify-content-around mt-1">
                            <div class="d-flex align-items-center gap-1">
                                <input class="form-check-input" type="checkbox" />
                                <span class="pt-1" style="font-size: 0.9rem">Recuerdame</span>
                            </div>
                            <div class=" pt-1 ">
                                <a href="#" class=" text-decoration-none fw-semibold fst-italic" style="font-size: 0.9rem; color: #AD1414;">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <input type="submit" class="btn text-white w-100 mt-4 fw-semibold shadow-sm text-center" style="background-color: #AD1414;" value="Registrarse">
                        <!-- <input type="button" class="btn text-white w-100 mt-4 fw-semibold shadow-sm text-center" style="background-color: #AD1414;" value="Registrarse"> -->
                    <!-- <button type="button" class="btn text-white w-100 mt-4 fw-semibold shadow-sm text-center"
                        style="background-color: #AD1414;">Registrarse</button> -->
                    <div class=" d-flex gap-1 justify-content-center mt-2">
                        <p>No tienes una cuenta?</p>
                        <a href="#" class="text-decoration-none fw-semibold" style="color: #AD1414;">Registrarse</a>
                    </div>
                    <div class="p-3">
                        <div class="border-bottom text-center" style="height: 0.9rem">
                            <span class="bg-white px-3">or</span>
                        </div>
                    </div>
                    <div class="btn d-flex gap-2 justify-content-center align-items-center border mt-3 shadow-sm">
                        <img class="text-center" src="./img/google.jpg" alt="google-icon"
                            style="width: 35px; height: 35px;" />
                        <a class="fw-semibold text-secondary text-decoration-none text-center" href="">Continuar con
                            Google</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
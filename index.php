<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('public\head.php');?>
    <title>Main Page: GymLifestyle</title>
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg bg-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="public\img\logoHeader.png" alt="logo" width="40" height="35" class="d-inline-block align-text-top">
                </a>
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" href="soporte.php" style="margin-right: 50px; color: white;">
                        <img src="public\img\infoIcon.png" alt="soporteIcon" width="24" height="24" class="d-inline-block align-text-top">
                        Soporte
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="position-relative">
        <img src="public\img\imgIndex.png" alt="Imagen Main Page" class="w-100" style="height: 420px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="text-shadow: 2px 2px black;">
            <h1 class="display-1" style="font-size: 100px; color: black;">GYM</h1>
            <h1 class="display-1" style="font-size: 100px; color: #d92534">LIFESTYLE</h1>
        </div>
    </div>

    <p class="bg-red-sec text-white p-2 text-center" style="font-size: 20px;">¡Empieza tu rutina de ejercicio con Gym Lifestyle!</p>
    <br><br>

    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="position-relative">
                <img src="public\img\imgFortalecimiento.png" alt="Imagen de Fortalecimiento" class="w-100" style="height: 300px; border-radius: 10px;">
                <button class="position-absolute top-50 start-50 translate-middle btn btn-danger">
                    <a class="nav-link" href="fortalecimientoPage.php">Fortalecimiento</a></button>
            </div>
            <div class="position-relative">
                <img src="public\img\imgFlexibilidad.png" alt="Imagen de Flexibilidad" class="w-100" style="height: 300px; border-radius: 10px;">
                <button class="position-absolute top-50 start-50 translate-middle btn btn-danger">
                    <a class="nav-link" href="flexibilidadPage.php">Flexibilidad</a></button>
            </div>
            <div class="position-relative">
                <img src="public\img\imgAerobico.png" alt="Imagen de Aeróbico" class="w-100" style="height: 300px; border-radius: 10px;">
                <button class="position-absolute top-50 start-50 translate-middle btn btn-danger">
                    <a class="nav-link" href="aerobicoPage.php">Aerobico</a></button>
            </div>
            <div class="position-relative">
                <img src="public\img\imgResistencia.png" alt="Imagen de Resistencia" class="w-100" style="height: 300px; border-radius: 10px;">
                <button class="position-absolute top-50 start-50 translate-middle btn btn-danger">
                    <a class="nav-link" href="resistenciaPage.php">Resistencia</a></button>
            </div>
        </div>
    </div>

    <br><br>

    <?php include('public\footer.php');?>
    
</body>
</html>
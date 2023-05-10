<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('public\head.php');?>
    <title>Flexibilidad: GymLifestyle</title>
</head>
<body>
    <?php include ('public\navbar.php');?>

    <div class="position-relative">
        <img src="public\img\wideFlexibilidad.png" alt="Imagen Fortalecimiento" class="w-100" style="height: 300px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="text-shadow: 2px 2px black;">
            <h1 class="display-1" style="font-size: 100px; color: white;">FLEXIBILIDAD</h1>
        </div>
    </div>

    <p class="bg-dark text-center text-white p-2">Ejercicios de Flexibilidad</p>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-8">
                <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbFlexibilidad.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina con Foam Roller</h5>
                        <p class="card-text">Esta rutina se lleva a cabo con material adicional, ya sea un foam roller, o bien, un tapete de yoga enrollado.</p>
                        <a href="001flexibilidad.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbFlexibilidad.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rollovers y Estiramientos</h5>
                        <p class="card-text">Con esta rutina mejorarás tu flexibilidad de una manera más sencilla, a través de ejecicios de estiramiento y rollovers.</p>
                        <a href="002flexibilidad.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbFlexibilidad.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sentadillas y Estiramientos</h5>
                        <p class="card-text">Esta rutina te ayudará a mejorar tu flexibilidad a través de una rutina de sentadillas y diferentes estiramientos.</p>
                        <a href="003flexibilidad.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php include('public\footer.php');?>
</body>
</html>
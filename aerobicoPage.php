<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('public\head.php');?>
    <title>Aeróbico: GymLifestyle</title>
</head>
<body>
    <?php include ('public\navbar.php');?>

    <div class="position-relative">
        <img src="public\img\wideAerobico.png" alt="Imagen Fortalecimiento" class="w-100" style="height: 300px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="text-shadow: 2px 2px black;">
            <h1 class="display-1" style="font-size: 100px; color: white;">AEROBICO</h1>
        </div>
    </div>

    <p class="bg-dark text-center text-white p-2">Ejercicios Aeróbicos</p>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-8">
                <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbAerobico.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina Principiantes</h5>
                        <p class="card-text">Esta rutina contiene dos ejercicios básicos para iniciar con el ejercicio aeróbico.</p>
                        <a href="001rutinaSencilla.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbAerobico.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina Intermedia</h5>
                        <p class="card-text">Esta rutina tiene una mayor demanda, ideal para aquellos que inician en el ejercicio aeróbico.</p>
                        <a href="002rutinaInter.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbAerobico.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina Avanzada</h5>
                        <p class="card-text">Esta rutina cuenta con un mayor esfuerzo físico, ideal para aquellos con condición aeróbica.</p>
                        <a href="003rutinaAvanz.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php include('public\footer.php');?>
</body>
</html>
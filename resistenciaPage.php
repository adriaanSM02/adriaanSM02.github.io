<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('public\head.php');?>
    <title>Resistencia: GymLifestyle</title>
</head>
<body>
    <?php include ('public\navbar.php');?>

    <div class="position-relative">
        <img src="public\img\wideResistencia.png" alt="Imagen Fortalecimiento" class="w-100" style="height: 300px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="text-shadow: 2px 2px black;">
            <h1 class="display-1" style="font-size: 100px; color: white;">RESISTENCIA</h1>
        </div>
    </div>

    <p class="bg-dark text-center text-white p-2">Ejercicios de Resistencia</p>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-8">
                <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbResistencia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina al Aire Libre</h5>
                        <p class="card-text">Los ejercicios planteados en esta rutina se pueden hacer al aire libre, lo cual mejora el enfoque.</p>
                        <a href="001resistencia.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbResistencia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina en Superseries</h5>
                        <p class="card-text">Esta rutina busca que los ejercicios realizados sean continuos, sin descanso.</p>
                        <a href="002resistencia.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
            <div class="card" style="width: 18rem;">
                    <img src="public\img\thumbResistencia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rutina en Circuito</h5>
                        <p class="card-text">Realiza ejercicios continuos y para hacerlo más complicado, agrega un poco de peso.</p>
                        <a href="003resistencia.php" class="btn btn-danger">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php include('public\footer.php');?>
</body>
</html>
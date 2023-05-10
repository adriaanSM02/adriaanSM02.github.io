<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('public\head.php')?>
    <title>Soporte: GymLifestyle</title>
</head>
<body>
    <?php include ('public\navbar.php');?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <br><br>
                <h1 class="text-center">SOPORTE</h1>
                <p class="text-center">
                    En <b>GymLifestyle</b> nos preocupamos porque tengas la mejor experiencia dentro del sitio.
                    Es por ello que te proporcionamos este medio para que te comuniques con nosotros en caso de que tengas algún inconveniente.
                </p>
                <p class="text-center">Además, en caso de necesitar contacto directo con un profesional, ¡puedes utilizar este medio!</p>
                <p class="text-center">Solo llena los campos a continuación:</p>
                <br><br>
                <form action="#" class="text-center mb-3">
                    <fieldset>
                        <legend style="font-weight: bold;">Datos Personales</legend>
                        <p><label class="form-label">Nombre: <input class="form-control" type="text" name="name" required/></label></p>
                        <p><label class="form-label">Número de teléfono: <input class="form-control" type="tel" name="phone" required/></label></p>
                        <p><label class="form-label">Dirección de correo electrónico: <input class="form-control" type="email" name="email"/></label></p>
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Mensaje:</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </fieldset>
                    <br>
                    <p><button class="btn btn-danger" type="submit">Enviar</button></p>
                </form>
            </div>
            <div class="col-lg-4" style="">
                <img src="public\img\imgSoporte.png" height="800px" width="528px">
            </div>
        </div>
    </div>
    <?php include ('public\footer.php');?>
</body>
</html>
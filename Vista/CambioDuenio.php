<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion Buscar Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/validacion.js" type="text/javascript"></script>
</head>
<body>
<?php
        include_once ('Estructura/header.php');
        include_once ('Estructura/footer.php');
        include_once ('../configuracion.php');

?>
    <h4 style="text-align:center">Realizar cambio de duenio</h4>
        <form class="needs-validation row g-6 m-3" method="get" action="Accion/AccionCambioDuenio.php" novalidate>
        <div class="col-md-4">
                <label for="Patente" class="form-label">Patente: </label>
                <input type="text" class="form-control" id="Patente" name="Patente" placeholder="Patente" pattern="[A-Z]{3}[ ]{1}\d{3}" maxlength="7" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar tres letras en mayuscula un espacio en blanco y tres numeros!
                </div>
                <input class="btn btn-primary mt-3" type="submit" value="Ingresar nuevo auto">

        </div>

        <div class="col-md-4">
                <label for="DniDuenio" class="form-label">Dni del Duenio: </label>
                <input type="text" class="form-control" id="DniDuenio" pattern="\d{8}" name="DniDuenio" maxlength="8" placeholder="DNI" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un DNI!
                </div>
            </div>

        </form>
        <a href="index.php"><button class="btn btn-primary ml-3" type="button">Volver al Menu Principal</button></a>



</body>
</html>
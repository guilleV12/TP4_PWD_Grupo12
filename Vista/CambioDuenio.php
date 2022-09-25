<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accion Buscar Auto</title>
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
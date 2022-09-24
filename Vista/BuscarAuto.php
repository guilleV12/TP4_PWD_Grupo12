<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>
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
    <h3 style="text-align:center"> Buscar Autos: </h3>
    <form class="needs-validation row g-6 m-3" method="get" action="Accion/AccionBuscarAuto.php" novalidate>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <label style="font-size:11px" for="form-control" class="form-label">Recuerde colocar un espacio en blanco despues de los primeros tres caracteres.</label>
            <input type="text" class="form-control" pattern="[A-Z]{3}[ ]{1}\d{3}" id="Patente" name="Patente" placeholder="Patente" maxlength="7" required>
                <div class="valid-feedback">
                Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar una patente valida!
                </div>
            <input style="width:100%" class="btn btn-primary mt-2" type="submit" value="Buscar"><br>
            <a href="index.php"><button class="btn btn-primary mt-3" style="width:100%" type="button">Volver al Menu Principal</button></a>
        </div>
        
    </form>
    
</body>
</html>
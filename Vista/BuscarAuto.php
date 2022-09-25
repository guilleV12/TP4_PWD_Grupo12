<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buscar Auto</title>
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
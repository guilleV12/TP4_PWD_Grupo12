<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buscar Autos Persona</title>
    <script src="js/validacion.js" type="text/javascript"></script>
   
</head>
<body>
<?php
        include_once ('Estructura/header.php');
        include_once ('Estructura/footer.php');
        include_once ('../configuracion.php');
     
     
    ?>
    <h3 style="text-align:center"> Buscar Persona: </h3>
    <form class="needs-validation row g-6 m-3" method="get" action="Accion/AccionBuscarAutosPersona.php" novalidate>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <label style="font-size:11px" for="form-control" class="form-label"></label>
            <input type="text" class="form-control" pattern="[0-9]{8}" id="NroDni" name="NroDni" placeholder="Ingrese un dni" maxlength="8" required>
                <div class="valid-feedback">
                Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar un dni valido!
                </div>
            <input style="width:100%" class="btn btn-primary mt-2" type="submit" value="Buscar"><br>
            <a href="index.php"><button class="btn btn-primary mt-3" style="width:100%" type="button">Volver al Menu Principal</button></a>
        <br><a href="ListaPersona.php"><button class="btn btn-primary mt-3" style="width:100%" type="button">Ir a ListaPersona.php</button></a>
   
        </div>
        
    </form>
    
</body>
</html>
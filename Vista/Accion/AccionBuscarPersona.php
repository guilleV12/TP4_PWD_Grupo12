<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accion Buscar Persona</title>
    <script src="../js/validacion.js" type="text/javascript"></script>
    
</head>
<body>
<?php
        include_once ('../Estructura/header.php');
        include_once ('../Estructura/footer.php');
        include_once ('../../configuracion.php');
        $datos= data_submited();
        $objPersona = new AbmPersona();
        $listaPersona=$objPersona->buscar($datos);
        $contListaP = count($listaPersona);
        if ($contListaP == 1){
        
?>

<form class="needs-validation row g-6 m-3" id="formulario" method="get" action="AccionActualizarDatosPersona.php" novalidate>
<div class="col-md-4">
            <label style="font-size:11px" for="form-control" class="form-label">DNI</label>
            <input type="text"  class="form-control" pattern="[0-9]{8}" id="NroDni" name="NroDni" value='<?php echo $listaPersona[0]->getNroDni() ?>' placeholder="Ingrese un dni" maxlength="8" readonly required>
                <div class="valid-feedback">
                Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar un dni valido!
                </div>
</div>
<div class="col-md-4">
                <label for="Nombre" class="form-label">Apellido: </label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value='<?php echo $listaPersona[0]->getApellido() ?>' pattern="([a-zA-Z]{1,20})" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un apellido!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Apellido" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" value='<?php echo $listaPersona[0]->getNombre() ?>' pattern="([a-zA-Z]{1,20})" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un nombre!
                </div>
            </div>
            <div class="col-md-4">
                <label for="fechaNac" class="form-label">Fecha de Nacimiento: </label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" value='<?php echo $listaPersona[0]->getFechaNac() ?>' placeholder="Fecha nacimiento" min="1922-01-01" max="2004-01-01" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ser mayor de 18!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Telefono" class="form-label">Telefono: </label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" value='<?php echo $listaPersona[0]->getTelefono() ?>' pattern="\d{3}[-]{1}\d{7}" maxlength="11" placeholder="Telefono" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar 3 digitos separados por "-" luego 7 digitos!
                </div>
                <input class="btn btn-primary mt-3" style="width:100%" type="submit" value="Modificar datos">
            </div>
            <div class="col-md-4">
                <label for="Domicilio" class="form-label">Domicilio: </label>
                <input type="text" class="form-control" id="Domicilio" value='<?php echo $listaPersona[0]->getDomicilio() ?>' name="Domicilio" placeholder="Domicilio" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un domicilio!
                </div>
            </div>
          

</form>
<?php
        }else{
?>
            <h5 class=" m-3"> No se encuentra esa persona en el registro. </h5>
    
<?php
        }
?>

        <a href="../index.php"><button class="btn btn-primary ml-4" type="button">Volver al Menu Principal</button></a>
        <a href="../ListaPersona.php"><button class="btn btn-primary " type="button">Ir a ListaPersona.php</button></a>
        <a href="../BuscarPersona.php"><button class="btn btn-primary " type="button">Ir a BuscarPersona.php</button></a>


</body>
</html>
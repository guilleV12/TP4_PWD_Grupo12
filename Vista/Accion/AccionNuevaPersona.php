<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accion Buscar Auto</title>
    <script src="js/validacion.js" type="text/javascript"></script>
</head>
<body>
<?php
        include_once ('../Estructura/header.php');
        include_once ('../Estructura/footer.php');
        include_once ('../../configuracion.php');
        $datos= data_submited();
        $objPersona = new AbmPersona();
        $listaPersonas = $objPersona->buscar($datos);

        if (count($listaPersonas) >0 ){
            $mensaje= "La persona ya esta registrada.";
        } else {
            if ($objPersona->alta($datos)){
                $mensaje = "Se ha ingresado la persona con exito.";
            }else{
                $mensaje = "No se ha podido ingresar la persona.";
            }
        }

?>

        <h6 class="m-4"><?php echo $mensaje ?></h6>
        <a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
        <a href="../NuevaPersona.php"><button class="btn btn-primary " type="button">Volver a NuevaPersona.php</button></a>
        <a href="../ListaPersona.php"><button class="btn btn-primary " type="button">Ir a ListaPersona.php</button></a>

</body>
</html>
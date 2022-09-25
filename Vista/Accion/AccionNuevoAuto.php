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
        $objAuto = new AbmAuto();
        $objPersona = new AbmPersona();
        $listaAutos = $objAuto->buscar($datos);
        $param[0] = ["NroDni"=>$datos['DniDuenio']];
        $listaPersonas = $objPersona->buscar($param[0]);
        /*echo count($listaAutos);
        echo $datos['DniDuenio'];
        echo count($listaPersonas);*/

        if (count($listaAutos) ==1 ){
            $mensaje= "El auto ya esta registrado.";
        } else {
            if (count($listaPersonas) > 0){
                if ($objAuto->alta($datos)){
                    $mensaje = "Se ha ingresado el auto con exito.";
                }else{
                    $mensaje = "No se pudo ingresar el auto.";
                }
            }else{
                $mensaje = "No se encontro a la persona .";
            }
        }

?>

        <h6 class="m-4"><?php echo $mensaje ?></h6>
        <a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
        <a href="../NuevoAuto.php"><button class="btn btn-primary " type="button">Ir a NuevoAuto.php</button></a>
        <a href="../NuevaPersona.php"><button class="btn btn-primary " type="button">Ir a NuevaPersona.php</button></a>
        <a href="../VerAutos.php"><button class="btn btn-primary " type="button">Ir a VerAutos.php</button></a>

</body>
</html>
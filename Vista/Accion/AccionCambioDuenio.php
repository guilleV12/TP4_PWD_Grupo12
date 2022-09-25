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

        if (count($listaAutos) == 1 ){
            if (count($listaPersonas) == 1 ){
                $datosModificacion[0] = ["Patente"=>$listaAutos[0]->getPatente(),"Marca"=>$listaAutos[0]->getMarca(),"Modelo"=>$listaAutos[0]->getModelo(),"DniDuenio"=>$listaPersonas[0]];
                if ($objAuto->modificacion($datosModificacion[0])){
                    $mensaje = "Se ha modificado el duenio con exito.";
                }else{
                    $mensaje = "No se pudo modificar el duenio.";
                }
            }else{
                $mensaje = "No existe la persona.";
            }
            
        }else{
            $mensaje = "No existe el auto.";
        }

?>

        <h6 class="m-4"><?php echo $mensaje ?></h6>
        <a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
        <a href="../VerAutos.php"><button class="btn btn-primary " type="button">Ir a VerAutos.php</button></a>

</body>
</html>
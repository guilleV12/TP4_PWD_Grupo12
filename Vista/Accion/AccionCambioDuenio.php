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
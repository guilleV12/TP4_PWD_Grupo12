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
        if (count($listaPersonas) == 1 ){
            if ($objPersona->modificacion($datos)){
                $mensaje = "Los datos de la persona fueron modificados";
            }else{
                $mensaje= "La persona no se modifico.";
            }
        
        }else{
            $mensaje = "La persona no se modifico";
        }

?>

        <h6 class="m-4"><?php echo $mensaje ?></h6>
        <a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
        <a href="../ListaPersona.php"><button class="btn btn-primary " type="button">Ir a ListaPersona.php</button></a>
        <a href="../BuscarPersona.php"><button class="btn btn-primary " type="button">Ir a BuscarPersona.php</button></a>

</body>
</html>
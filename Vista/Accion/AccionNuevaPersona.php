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
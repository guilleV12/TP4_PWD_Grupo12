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
        $listaAutos=$objAuto->buscar($datos);
    ?>

<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Patente</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">DNI</th>
          
        </tr>
    </thead>
    <tbody>
    <?php
    if(count($listaAutos)==1){
            echo '<tr>';
            echo '<td scope="row">'.$listaAutos[0]->getPatente().'</td>';
            echo '<td>'.$listaAutos[0]->getMarca().'</td>';
            echo '<td>'.$listaAutos[0]->getModelo().'</td>';
            echo '<td>'.$listaAutos[0]->getDniDuenio()->getApellido().'</td>';
            echo '<td>'.$listaAutos[0]->getDniDuenio()->getNombre().'</td>';
            echo '<td>'.$listaAutos[0]->getDniDuenio()->getNroDni().'</td>';
            echo '</tr>'; 
    }else{
        echo '<tr>';
        echo '<td colspan="6">No se encontro ningun auto con la patente '.$datos['Patente'].'.</td>';
        echo '</tr>';
        
    }
    ?>
    </tbody>
</table>

<a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
<a href="../BuscarAuto.php"><button class="btn btn-primary " type="button">Volver a Buscar Auto</button></a>

    
</body>
</html>
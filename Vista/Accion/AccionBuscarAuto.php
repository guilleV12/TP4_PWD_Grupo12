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
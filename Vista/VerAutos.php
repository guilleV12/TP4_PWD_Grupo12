<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver Autos</title>
    
</head>
<body>
    <?php
        include_once ('Estructura/header.php');
        include_once ('Estructura/footer.php');
        include_once ('../configuracion.php');
        $objAbmAuto = new AbmAuto();
        $listaAuto = $objAbmAuto->buscar(null);
     
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
    if(count($listaAuto)>0){
        foreach($listaAuto as $objAuto){
            echo '<tr>';
            echo '<td scope="row">'.$objAuto->getPatente().'</td>';
            echo '<td>'.$objAuto->getMarca().'</td>';
            echo '<td>'.$objAuto->getModelo().'</td>';
            echo '<td>'.$objAuto->getDniDuenio()->getApellido().'</td>';
            echo '<td>'.$objAuto->getDniDuenio()->getNombre().'</td>';
            echo '<td>'.$objAuto->getDniDuenio()->getNroDni().'</td>';
            echo '</tr>'; 
        }
    }else{
        echo '<h4>No se han cargado autos.</h4>';
        
    }
    ?>
    </tbody>
</table>

<a href="index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>

    
</body>
</html>
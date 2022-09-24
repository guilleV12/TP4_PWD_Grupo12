<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
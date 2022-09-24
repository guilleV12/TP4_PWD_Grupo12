<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include_once ('Estructura/header.php');
        include_once ('Estructura/footer.php');
        include_once ('../configuracion.php');
        $objAbmPers = new AbmPersona();
        $listaPers = $objAbmPers->buscar(null);
     
    ?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col" colspan="3" style="text-align: center">Personas registradas:</th>
        </tr>
        <tr>  
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">DNI</th>
          
        </tr>
    </thead>
    <tbody>
    <?php
    if(count($listaPers)>0){
        foreach($listaPers as $objPers){
            echo '<tr>';
            echo '<td>'.$objPers->getApellido().'</td>';
            echo '<td>'.$objPers->getNombre().'</td>';
            echo '<td>'.$objPers->getNroDni().'</td>';
            echo '</tr>'; 
        }
    }else{
        echo '<h4>No se han cargado personas.</h4>';
        
    }
    ?>
    </tbody>
</table>

<a href="index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
<a href="AutosPersona.php"><button class="btn btn-primary " type="button">Ir a AutosPersona.php</button></a>

    
</body>
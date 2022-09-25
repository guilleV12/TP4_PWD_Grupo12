<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista Personas</title>
   
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
<a href="NuevaPersona.php"><button class="btn btn-primary " type="button">Ir a NuevaPersona.php</button></a>

    
</body>
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
        $objPers = new AbmPersona();
        $objAutos = new AbmAuto();
        $autos = $objAutos->buscarDniDuenio($datos);
        $listaPersonas = $objPers->buscar($datos);
        
    ?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th style="text-align: center" colspan="6">Lista de autos registrados al dni buscado:<?php echo $datos['NroDni'];?></th>
        </tr>
        <tr>
            <th style="text-align: center" colspan="6"><?php echo $listaPersonas[0]->getNombre().' '.$listaPersonas[0]->getApellido()?></th>
        </tr>
        <tr>
          <th scope="col">Patente</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          
        </tr>
    </thead>
    <tbody>
    <?php
    if(count($listaPersonas)==1){
        if(count($autos)>0){
            foreach($autos as $objAuto){
                echo '<tr>';
                echo '<td>'.$objAuto->getPatente().'</td>';
                echo '<td>'.$objAuto->getMarca().'</td>';
                echo '<td>'.$objAuto->getModelo().'</td>';
                echo '</tr>'; 
            }
        }else{
            echo '<tr>';
            echo '<td colspan="6">No se encontro ningun auto registrado a este dni: '.$datos['NroDni'].'.</td>';
            echo '</tr>';
            
        }
    }else{
        echo '<tr>';
            echo '<td colspan="6">No se encontro ninguna persona con este dni: '.$datos['NroDni'].'.</td>';
            echo '</tr>';
    }
    ?>
    </tbody>
</table>

<a href="../index.php"><button class="btn btn-primary " type="button">Volver al Menu Principal</button></a>
<a href="../AutosPersona.php"><button class="btn btn-primary " type="button">Volver a AutosPersona.php</button></a>

    
</body>
</html>
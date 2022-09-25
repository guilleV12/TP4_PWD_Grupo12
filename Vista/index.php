<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Menu Principal TP4</title>
    <link href="Estructura/estructura.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include_once ('Estructura/header.php');
        include_once ('Estructura/footer.php');

    ?>
    <div class="row">
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Autos</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Lista de autos y sus duenos.</p>
                <a href="VerAutos.php" class="card-link">Ir a VerAutos.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Autos</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Buscar auto segun patente.</p>
                <a href="BuscarAuto.php" class="card-link">Ir a BuscarAuto.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Personas</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Lista de personas.</p>
                <a href="ListaPersona.php" class="card-link">Ir a ListaPersona.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Personas</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Buscar los autos que estan registrados a un DNI.</p>
                <a href="AutosPersona.php" class="card-link">Ir a AutosPersona.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Personas</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Ingresar una nueva persona.</p>
                <a href="NuevaPersona.php" class="card-link">Ir a NuevaPersona.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Autos</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Ingresar un nuevo auto.</p>
                <a href="NuevoAuto.php" class="card-link">Ir a NuevoAuto.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Autos</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Cambiar duenio de un auto.</p>
                <a href="CambioDuenio.php" class="card-link">Ir a CambioDuenio.php</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Personas</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Cambiar datos de una persona.</p>
                <a href="BuscarPersona.php" class="card-link">Ir a BuscarPersona.php</a>
            </div>
        </div>
    </div>
    
</body>
</html>
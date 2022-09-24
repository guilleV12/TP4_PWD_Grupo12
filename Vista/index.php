<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal TP4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/validacion.js" type="text/javascript"></script>
   
</head>
<body>
    <?php
         include_once ('Estructura/header.php');
         include_once ('Estructura/footer.php');
         include_once ('../configuracion.php');
    ?>
    <form class="needs-validation row g-6 m-3" method="get" action="Accion/AccionNuevaPersona.php" novalidate>
            <div class="col-md-4">
                <label for="NroDni" class="form-label">DNI: </label>
                <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="DNI" pattern="[0-9]{8}" maxlength="8" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un DNI!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Nombre" class="form-label">Apellido: </label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" pattern="([a-zA-Z]{1,20})" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un apellido!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Apellido" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" pattern="([a-zA-Z]{1,20})" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un nombre!
                </div>
            </div>
            <div class="col-md-4">
                <label for="fechaNac" class="form-label">Fecha de Nacimiento: </label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Fecha nacimiento" min="1922-01-01" max="2004-01-01" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ser mayor de 18!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Telefono" class="form-label">Telefono: </label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" pattern="\d{3}[-]{1}\d{7}" maxlength="11" placeholder="Telefono" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar 3 digitos separados por "-" luego 7 digitos!
                </div>
            </div>
            <div class="col-md-4">
                <label for="Domicilio" class="form-label">Domicilio: </label>
                <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Domicilio" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un domicilio!
                </div>
            </div>
            <div class="col-md-2">
                <input class="btn btn-primary mt-3" style="width:100%" type="submit" value="Ingresar nueva persona">
            </div>
            <div class="col-md-2">
                <a href="index.php"><button class="btn btn-primary mt-3" style="width:100%" type="button">Volver al Menu Principal</button></a>
            </div>

    </form>
    
</body>
</html>
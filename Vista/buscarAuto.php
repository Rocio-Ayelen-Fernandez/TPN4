<?php

/**
 * Ejercicio 4 – Crear una pagina "buscarAuto.php" que contenga un
 * formulario en donde se solicite el numero de patente de un auto,
 * estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” 
 * en donde usando la clase de control correspondiente, se soliciten
 *  los datos completos del auto que se corresponda con la patente 
 * ingresada y mostrar los datos en una tabla. También deberán mostrar
 * los carteles que crean convenientes en caso de que no se encuentre
 * ningún auto con la patente ingresada. Utilizar css y validaciones
 * javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases
 * del ORM.
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="assets/css/validate.css">
</head>

<body class="conteiner-fluid bg-secondary-subtle">
    <div class="conteiner-m conteiner-fluid bg-secondary-subtle">
        <div class="conteiner mx-5">
            <div class="conteiner mx-5 p-5 text-center">
                <div class="bg-light-subtle border border-2 border-secondary rounded shadow mx-5 p-5">
                <h3>Buscar Auto</h3>

                <form id="form" action="accion/accionBuscarAuto.php" method=POST>
                    <div class="mb-3">
                    <label for="Patente">Ingrese la patente</label><br>
                    <input type="text" name="Patente" id="Patente" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                </div>

            </div>
            
        </div>
    </div>
    
    
</body>
<script>
    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "El formato es inválido.");

    $("#form").validate({
        rules: {
            Patente: {
                required: true,
                minlength: 7,
                maxlength: 7,
                regex: /^[A-Z]{3} \d{3}$/
            }
        },
        messages: {
            Patente: {
                required: "Por favor ingrese la patente",
                minlength: "La patente debe tener exactamente 7 caracteres",
                maxlength: "La patente debe tener exactamente 7 caracteres",
                regex: "La patente debe tener el formato 'ABC 123'"
            }
        },
        
    });

</script>

</html>
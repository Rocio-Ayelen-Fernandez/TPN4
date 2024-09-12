<?php

/**
 *  Ejercicio 6 – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página
 * “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. 
 * Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body class="conteiner-fluid bg-secondary-subtle">
    <div class="conteiner-m conteiner-fluid bg-secondary-subtle">
        <div class="conteiner mx-5">
            <div class="conteiner mx-5 p-5 text-center">
                <div class="bg-light-subtle border border-2 border-secondary rounded shadow mx-5 p-5">
                <h3>Buscar Auto</h3>

                <form action="accion/accionCambioDuenio.php" method=POST>
                    <div class="mb-3">
                    <label for="Patente">Ingrese la patente del auto</label>
                    <input type="text" name="Patente" id="Patente">
                    </div>
                    <div class="mb-3">
                    <label for="NroDni">Ingrese el DNI del nuevo dueño</label>
                    <input type="text" name="NroDni" id="NroDni">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                </div>

            </div>
            
        </div>
    </div>
</body>
</html>
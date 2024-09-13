<?php

/**Ejercicio 4 – Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
 los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
 un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
 pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
 Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    
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
                <h3> Nueva Persona</h3>
                <form id="form" action="accion/accionNuevaPersona.php" method=POST class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="NroDni" class="form-label">Ingrese el DNI</label>
                    <input type="text" class="form-control" name="NroDni" id="NroDni" required>
                    
                </div>
                <div class="mb-3">
                    <label for="Apellido" class="form-label">Ingrese el Apellido</label>
                    <input type="text" class="form-control" name="Apellido" id="Apellido" required>
                    
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Ingrese el Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" required>
                    
                </div>
                <div class="mb-3">
                    <label for="fechaNac" class="form-label">Ingrese la Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNac" id="fechaNac" required>
                    
                </div>
                <div class="mb-3">
                    <label for="Telefono" class="form-label">Ingrese el Telefono</label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono" required pattern="\d{10}">
                    
                </div>
                <div class="mb-3">
                    <label for="Domicilio" class="form-label">Ingrese el Domicilio</label>
                    <input type="text" class="form-control" name="Domicilio" id="Domicilio" required>
                    
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
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
            NroDni:{
                required: true,
                regex: /^\d{1,10}$/
            },
            Apellido: {
                required: true,
                minlength: 2,
                maxlength: 50,
                regex: /^[a-zA-Z\s]*$/
            },
            Nombre: {
                required: true,
                minlength: 2,
                maxlength: 50,
                regex: /^[a-zA-Z\s]*$/
            },
            fechaNac: {
                required: true,
                date: true
            },
            Telefono: {
                required: true,
                minlength: 6,
                maxlength: 20,
                regex: /^[\d-]{6,20}$/
            },
            Domicilio: {
                required: true,
                minlength: 2,
                maxlength: 200
            }

        },
        messages: {
            NroDni: {
                required: "Por favor ingrese el DNI",
                regex: "El DNI debe tener entre 1 y 10 dígitos numéricos"
            },
            Apellido: {
                required: "Por favor ingrese el Apellido",
                minlength: "El Apellido debe tener al menos 2 caracteres",
                maxlength: "El Apellido debe tener menos de 50 caracteres",
                regex: "El Apellido debe contener solo letras y espacios"
            },
            Nombre: {
                required: "Por favor ingrese el Nombre",
                minlength: "El Nombre debe tener al menos 2 caracteres",
                maxlength: "El Nombre debe tener menos de 50 caracteres",
                regex: "El Nombre debe contener solo letras y espacios"
            },
            fechaNac: {
                required: "Por favor ingrese la fecha de nacimiento",
                date: "La fecha de nacimiento debe ser una fecha válida"
            },
            Telefono: {
                required: "Por favor ingrese el Teléfono",
                minlength: "El Teléfono debe tener al menos 6 caracteres",
                maxlength: "El Teléfono debe tener menos de 20 caracteres",
                regex: "El Teléfono debe contener solo números"
            },
            Domicilio: {
                required: "Por favor ingrese el Domicilio",
                minlength: "El Domicilio debe tener al menos 2 caracteres",
                maxlength: "El Domicilio debe tener menos de 200 caracteres"
            }

        }
    });

</script>


</html>

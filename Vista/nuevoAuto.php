<?php

/**
* Ejercicio 5 – Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
 * todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
 * “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
 * antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
 * link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y alidaciones 
 * javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto</title>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body class="conteiner-fluid bg-secondary-subtle">
    <div class="conteiner-m conteiner-fluid bg-secondary-subtle">
        <div class="conteiner mx-5">
            <div class="conteiner mx-5 p-5 text-center">
                <div class="bg-light-subtle border border-2 border-secondary rounded shadow mx-5 p-5">
                
                <h3>Nuevo Auto</h3>
                <form action="accion/accionNuevoAuto.php" method=POST class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="DniDuenio" class="form-label">Ingrese el DNI del dueño</label>
                    <input type="text" class="form-control" name="DniDuenio" id="DniDuenio" required>
                    <div class="invalid-feedback">
                        <P>El DNI debe tener 8 dígitos numéricos.</P>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Patente" class="form-label">Ingrese la patente del auto</label>
                    <input type="text" class="form-control" name="Patente" id="Patente" required>
                    <div class="invalid-feedback">
                        <p>La patente no puede estar vacía.</p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Marca" class="form-label">Ingrese la marca del auto</label>
                    <input type="text" class="form-control" name="Marca" id="Marca" required>
                    <div class="invalid-feedback">
                        <p>La marca no puede estar vacía.</p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Modelo" class="form-label">Ingrese el modelo del auto</label>
                    <input type="text" class="form-control" name="Modelo" id="Modelo" required>
                    <div class="invalid-feedback">
                        <p>El modelo no puede estar vacío.</p>
                    </div>
                </div>                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
                </div>

            </div>
            
        </div>
    </div>
    
</body>

<!-- <script>
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                const campoDni = form.querySelector('#NroDni');
                const campoApellido = form.querySelector('#Apellido');
                const campoNombre = form.querySelector('#Nombre');
                const campoTelefono = form.querySelector('#Telefono');
                const valorDni = campoDni.value;
                const dniValido = /^\d{8}$/;

                if (!dniValido.test(valorDni)) {
                    campoDni.setCustomValidity('El DNI debe tener 8 dígitos numéricos.');
                    campoDni.classList.add('is-invalid');
                } else {
                    campoDni.setCustomValidity('');
                    campoDni.classList.remove('is-invalid');
                }

                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script> -->
</html>
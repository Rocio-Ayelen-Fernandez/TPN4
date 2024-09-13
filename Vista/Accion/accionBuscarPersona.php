<?php

include_once "../../configuracion.php";
include_once "../../Control/AbmPersona.php";

$datos = data_submitted();
$objAbmPersona= new AbmPersona();
$objPersona = $objAbmPersona->buscar($datos);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion Buscar Persona</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="../assets/css/validate.css">
</head>
<body class="conteiner-fluid bg-secondary-subtle"> 
    <div class="row justify-content-center m-auto">
        <div class="conteiner m-5 w-75 ">
            <div class="conteiner mx-5 p-5 text-center  ">
                <div class="bg-light-subtle border border-2 border-secondary rounded shadow mx-5 p-3 ">

                <h3>Accion Buscar Persona</h3>
                
                <?php
                
                
                if(count($objPersona)>0){
                    //persona encontrada
                    
                    echo "<p class='text-success' >Persona encontrada</p>";

                    echo "<form id='form' action='ActualizarDatosPersona.php' method=post>";
                    echo "<div class='mb-3'><label for='NroDni'>NroDni</label><input type='text' class='form-control' name='NroDni' id='NroDni' value='".$objPersona[0]->getNroDni()."' readonly></div>";
                    echo "<div class='mb-3'><label for='Apellido'>Apellido</label><input type='text' class='form-control' name='Apellido' id='Apellido' value='".$objPersona[0]->getApellido()."'></div>";
                    echo "<div class='mb-3'><label for='Nombre'>Nombre</label><input type='text' class='form-control' name='Nombre' id='Nombre' value='".$objPersona[0]->getNombre()."'></div>";
                    echo "<div class='mb-3'><label for='fechaNac'>Fecha de Nacimiento</label><input type='date' class='form-control' name='fechaNac' id='fechaNac' value='".$objPersona[0]->getFechaNac()."'></div>";
                    echo "<div class='mb-3'><label for='Telefono'>Telefono</label><input type='text' class='form-control' name='Telefono' id='Telefono' value='".$objPersona[0]->getTelefono()."'></div>";
                    echo "<div class='mb-3'><label for='Domicilio'>Domicilio</label><input type='text' class='form-control' name='Domicilio' id='Domicilio' value='".$objPersona[0]->getDomicilio()."'></div>";
                    echo "<button type='submit' class='btn btn-primary'>Actualizar</button><a class='btn btn-primary' href='../BuscarPersona.php'>Volver</a>";
                    echo "</form>";


                }else{
                    echo "<p class='text-warning'>No se encontro la persona en la lista</p><p> ". $objAuto[0]->getMensajeOperacion() ."</p><a class='btn btn-primary' href='../BuscarPersona.php'>Volver</a>";

                }
                ?>
    

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
                maxlength: 200,
                regex: /^[a-zA-Z0-9\s]*$/
            }

        },
        messages: {
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
                maxlength: "El Domicilio debe tener menos de 200 caracteres",
                regex: "El Domicilio debe contener solo letras y espacios"
            }
        },
        
    });

</script>
</html>
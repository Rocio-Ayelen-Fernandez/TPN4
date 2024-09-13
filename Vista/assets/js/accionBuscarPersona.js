$(document).ready(function(){
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
});